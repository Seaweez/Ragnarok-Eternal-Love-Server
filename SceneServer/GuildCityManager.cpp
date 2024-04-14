#include "GuildCityManager.h"
#include "SceneServer.h"
#include "GuildRaidConfig.h"
#include "SceneNpc.h"
#include "SceneUser.h"
#include "MiscConfig.h"
#include "FuBen.h"
#include "MailManager.h"
#include "GuildSCmd.pb.h"
#include "SceneManager.h"
#include "BaseConfig.h"
#include "GMCommandRuler.h"
#include "SysmsgConfig.h"
#include "SceneUserManager.h"

/* Guild City */
GuildCity::GuildCity(DWORD cityid) : m_dwCityID(cityid)
{
  const GuildCityInfo *pInfo = GuildCityManager::getMe().getCityInfo(cityid);
  if (pInfo)
  {
    m_qwDefenseGuildID = pInfo->id();
    m_strDefenseName = pInfo->name();
  }
}

GuildCity::~GuildCity()
{
}

void GuildCity::timer(DWORD curSec)
{
  switch (m_eState)
  {
  case EGUILDFIRE_PEACE:
    break;
  case EGUILDFIRE_FIRE:
  {
    // Restart the instance (spawn monsters, etc.)
    if (m_bReFire)
    {
      // notify client to restart fire
      XLOG << "[Guild War], Starting a new round of battle, City ID:" << m_dwCityID << "Defense Guild:" << m_qwDefenseGuildID << XEND;
      GuildFireRestartFubenCmd cmd;
      PROTOBUF(cmd, send, len);
      sendCmdToCity(send, len);
      sendMsgToCity(2202);

      startFuben();
      m_bReFire = false;
    }

    if (m_qwDefenseGuildID != 0)
    {
      // Critical battle period judgment
      if (m_bInDangerTime)
      {
        if (curSec >= m_dwEndDangerTime)
        {
          // Special victory achieved if the Glam Metal has not been damaged for a period of time
          sendResult(EGUILDFIRERESULT_DEFSPEC);
          sendMsgToCity(2204);
          XLOG << "[Guild War], Glam Metal has not been damaged for a period of time, achieving special victory, City ID:" << m_dwCityID << "Current defending guild ID:" << m_qwDefenseGuildID << XEND;
          endFire(EUIGLDFIRE_WAITEND); // Special victory, close the guild war, wait for the time to end
          m_bInDangerTime = false;
          m_eClientShowState = EGCITYSTATE_PERFECT;
          updateStateToSession();
          break;
        }
      }
      else
      {
        const SGuildFireCFG &firecfg = MiscConfig::getMe().getGuildFireCFG();
        if (curSec >= m_dwLastBeAttackT + firecfg.dwDangerTime)
        {
          if (curSec + firecfg.dwDangerSuccessTime < GuildCityManager::getMe().getFireStopTime()) // More than the perfect defense time required from the end of the battle
          {
            // Enter the critical battle period, if not attacked for another 5 minutes, this round of battle will end
            m_bInDangerTime = true;
            m_dwEndDangerTime = curSec + firecfg.dwDangerSuccessTime;
            sendDangerStatus(true);
            XLOG << "[Guild War], Entering the critical battle period, City ID:" << m_dwCityID << "Defending guild:" << m_qwDefenseGuildID << XEND;
          }
        }
      }
    }
  }
  break;
  case EGUILDFIRE_CALM:
  {
    if (m_dwEndCalmTime == 0)
    {
      XLOG << "[公会战], 据点:" << m_dwCityID << "进入冷静期" << XEND;
      m_dwEndCalmTime = curSec + 30;
    }

    // Wait for the settlement to be completed
    if (m_dwWaitResultTime)
    {
      if (curSec < m_dwWaitResultTime)
        break;
      m_dwWaitResultTime = 0;
      // send result
    }

    if (curSec >= m_dwEndCalmTime)
    {
      m_dwEndCalmTime = 0;
      m_eState = m_eNextState;
      sendCalmStatus(false);
      switch (m_eNextState)
      {
      case EGUILDFIRE_PEACE:
      {
        // After the calm period ends and the guild war time ends
        reward();
        clearAllUser();
        resetFuben();
        XLOG << "[Guild War], City ID:" << m_dwCityID << "Guild War ended, final defending guild:" << m_qwDefenseGuildID << XEND;
      }
      break;
      case EGUILDFIRE_FIRE:
      {
        // Calm period ends, guild war is not over yet
        sendMsgToCity(2203);
        clearAttUser();
        resetFuben();
        m_bReFire = true;
        XLOG << "[Guild War], City ID:" << m_dwCityID << "Calm period ends, preparing to start the next round of battle, current defending guild:" << m_qwDefenseGuildID << XEND;
      }
      break;
      case EUIGLDFIRE_WAITEND:
      {
        // After the calm period ends, the current battle ends after a special victory, waiting for the guild war time to end or the defending guild voluntarily gives up the city
        clearAttUser();
        resetFuben();
        XLOG << "[Guild War], City ID:" << m_dwCityID << "Calm period ends, special victory achieved, entering waiting state, current defending guild:" << m_qwDefenseGuildID << XEND;
      }
      break;
      default:
        break;
      }
    }
  }
  break;
  case EUIGLDFIRE_WAITEND:
  {
  }
  break;
  default:
    break;
  }
}

void GuildCity::init(bool fire)
{
  if (fire)
  {
    m_dwMetalNpcHpPer = 100;
    m_dwLastBeAttackT = now();
    m_eState = EGUILDFIRE_FIRE;
  }

  XLOG << "[Guild War], Creating city, City ID:" << m_dwCityID << "Battle state:" << fire << XEND;
}

void GuildCity::onFireOpen()
{
  // clearAllUser();
  resetFuben();
  m_eState = EGUILDFIRE_FIRE;
  m_mapUser2Guild.clear();
  sendMsgToCity(2207);

  for (auto &s : m_setScenes)
  {
    xSceneEntrySet userset;
    s->getAllEntryList(SCENE_ENTRY_USER, userset);
    for (auto &s : userset)
    {
      SceneUser *user = dynamic_cast<SceneUser *>(s);
      if (!user)
        continue;
      userEnter(user);
    }
  }
  m_eClientShowState = (m_qwDefenseGuildID ? EGCITYSTATE_NORMALFIRE : EGCITYSTATE_NOOWNER);
}

void GuildCity::onFireClose()
{
  sendResult(EGUILDFIRERESULT_DEF);
  endFire(EGUILDFIRE_PEACE);
  m_eNextState = EGUILDFIRE_PEACE;
  sendMsgToCity(2205, MsgParams(30));

  m_eClientShowState = (m_qwDefenseGuildID ? EGCITYSTATE_OCCUPY : EGCITYSTATE_NOOWNER);
}

void GuildCity::onNpcDie(SceneNpc *npc, xSceneEntryDynamic *killer)
{
  if (m_eState != EGUILDFIRE_FIRE)
    return;
  if (npc == nullptr)
    return;
  if (npc->id == m_qwGlamMetalGuid)
  {
    SceneUser *user = dynamic_cast<SceneUser *>(killer);
    if (user == nullptr)
      XERR << "[Guild War-Exception], City ID:" << m_dwCityID << "Cannot find the killer of Glam Metal" << XEND;
        else
        {
      QWORD guildid = user->getGuild().id();
      MsgParams param;
      if (guildid == 0)
      {
        param.addString(SysmsgConfig::getMe().getSysmsgCFG(SYSMSG_NONE));
        GuildCityManager::getMe().updateCityInfoToGuild(m_dwCityID, 0);
        m_qwDefenseGuildID = 0;
        m_strDefenseName.clear();
        XLOG << "[Guild War], City ID:" << m_dwCityID << "Glam Metal killed by non-guild member:" << user->name << user->id << ", turned into a monster city" << XEND;
      }
      else if (user->isNoDamMetalNpc())
      {
        param.addString(SysmsgConfig::getMe().getSysmsgCFG(SYSMSG_NONE));
        GuildCityManager::getMe().updateCityInfoToGuild(m_dwCityID, 0);
        m_qwDefenseGuildID = 0;
        XERR << "[Guild War], City Occupation Exception:" << m_dwCityID << "Glam Metal killed by non-guild member from another server:" << user->name << user->id << ", turned into a monster city, Guild:" << guildid << XEND;
      }
      else
      {
        // check if it can be occupied
        param.addString(user->getGuild().name());
        GuildCityManager::getMe().updateCityInfoToGuild(m_dwCityID, guildid);
        m_dwWaitResultTime = now() + 5;
        XLOG << "[Guild War], City ID:" << m_dwCityID << "Glam Metal killed by player" << user->name << user->id << "Guild:" << guildid << ", waiting to check if it can be occupied" << XEND;
      }

      // Glam Metal defeated prompt
      param.addString(user->name);
      param.addNumber(30); // 30s calm period
      sendMsgToCity(2201, param);

      // Monster city prompt, after 2201
      if (guildid == 0)
      {
        MsgParams p2;
        p2.addString(user->name);
        p2.addNumber(30);
        sendMsgToCity(2210, p2);
      }

      user->getUserGvg().onKillMetal();
      sendResult(EGUILDFIRERESULT_ATTACK);
        }

        // End the battle and enter the calm period
    endFire(EGUILDFIRE_FIRE);
  }
  /*
  else
  {
    SceneUser* user = dynamic_cast<SceneUser*> (killer);
    if (user != nullptr)
      user->getUserGvg().onKillMonster();
  }
  */
}

void GuildCity::onNpcBeAttack(SceneNpc *npc, bool bheal /*=false*/)
{
  if (npc && npc->id == m_qwGlamMetalGuid)
  {
    if (!bheal)
    {
      m_dwLastBeAttackT = now();
      if (m_bInDangerTime)
      {
        m_bInDangerTime = false;
        sendDangerStatus(false);
        XLOG << "[Guild War], City ID:" << m_dwCityID << "Glam Metal attacked, removing danger status, Glam Metal:" << m_qwGlamMetalGuid << "Defense guild:" << m_qwDefenseGuildID << XEND;
      }
    }

    DWORD hpper = npc->getAttr(EATTRTYPE_HP) * 100 / npc->getAttr(EATTRTYPE_MAXHP);
    if (m_dwMetalNpcHpPer != hpper)
    {
      m_dwMetalNpcHpPer = hpper;
      // send hpper
      GuildFireMetalHpFubenCmd cmd;
      cmd.set_hpper(hpper);
      PROTOBUF(cmd, send, len);
      sendCmdToCity(send, len);
    }
  }
}

void GuildCity::endFire(EGuildFireState eNextState)
{
  XLOG << "[Guild War], City ID:" << m_dwCityID << "End of a battle, entering state after calm period:" << eNextState << XEND;

  m_eState = EGUILDFIRE_CALM;
  m_eNextState = eNextState;

  sendCalmStatus(true);
  for (auto &s : m_setScenes)
  {
    s->getFuben().clearRaid();
  }
}

void GuildCity::handleResult(EGuildCityResult result, QWORD guildid)
{
  switch (result)
  {
  case EGUILDCITYRESULT_OCCUPY:
  {
    DWORD cur = now();
    if (cur > m_dwWaitResultTime || m_eState != EGUILDFIRE_CALM)
    {
      XERR << "[Guild City], Result timeout, City ID:" << m_dwCityID << "Guild ID:" << guildid << XEND;
      return;
    }
    XLOG << "[Guild City-Occupied], City ID:" << m_dwCityID << "Guild ID:" << guildid << "Previous defending guild:" << m_qwDefenseGuildID << XEND;

    m_qwDefenseGuildID = guildid;
    m_dwWaitResultTime = cur;

    const GuildCityInfo *pInfo = GuildCityManager::getMe().getCityInfo(m_dwCityID);
    if (pInfo)
    {
      m_strDefenseName = pInfo->name();
    }
    GuildFireNewDefFubenCmd cmd;
    cmd.set_guildid(m_qwDefenseGuildID);
    cmd.set_guildname(m_strDefenseName);
    PROTOBUF(cmd, send, len);
    sendCmdToCity(send, len);
  }
  break;
  case EGUILDCITYRESULT_NOOWNER:
  case EGUILDCITYRESULT_GIVEUP:
  {
    XLOG << "[Guild City], Turned into a monster city, City ID:" << m_dwCityID << "Current defending guild:" << m_qwDefenseGuildID << "Current state:" << m_eState << "Result:" << result << XEND;
    switch (m_eState)
    {
    case EGUILDFIRE_PEACE:
      break;
    case EGUILDFIRE_FIRE:
      // End the current battle and enter the calm period
      endFire(EGUILDFIRE_FIRE);
      // Prompt message
      // .. todo
      break;
    case EGUILDFIRE_CALM:
      break;
    case EUIGLDFIRE_WAITEND:
      // Restart the battle
      clearAllUser();
      resetFuben();
      m_eState = EGUILDFIRE_FIRE;

      m_eClientShowState = EGCITYSTATE_NORMALFIRE;
      updateStateToSession();
      break;
    default:
      break;
    }
    m_qwDefenseGuildID = 0;
    m_strDefenseName.clear();
  }
  break;
  default:
    break;
  }
}

void GuildCity::sendResult(EGuildFireResult result)
{
  GuildFireStopFubenCmd cmd;
  cmd.set_result(result);
  PROTOBUF(cmd, send, len);
  sendCmdToCity(send, len);
}

void GuildCity::sendDangerStatus(bool danger)
{
  GuildFireDangerFubenCmd cmd;
  cmd.set_danger(danger);
  if (danger)
    cmd.set_danger_time(m_dwEndDangerTime);

  PROTOBUF(cmd, send, len);
  sendCmdToCity(send, len);
}

void GuildCity::sendCalmStatus(bool calm)
{
  GuildFireCalmFubenCmd cmd;
  cmd.set_calm(calm);
  PROTOBUF(cmd, send, len);
  sendCmdToCity(send, len);
}

void GuildCity::clearAllUser()
{
  const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(m_dwCityID);
  if (pCFG == nullptr)
  {
    XERR << "[Guild City], Cannot find city configuration, City ID:" << m_dwCityID << XEND;
    return;
  }
  DWORD citymapid = pCFG->dwMapID;

  for (auto &m : m_mapUser2Guild)
  {
    m_setNeedKickUsers.insert(m.first);
  }
  for (auto &s : m_setScenes)
  {
    xSceneEntrySet userset;
    s->getAllEntryList(SCENE_ENTRY_USER, userset);
    for (auto &s : userset)
    {
      SceneUser *user = dynamic_cast<SceneUser *>(s);
      if (!user)
        continue;
      if (m_qwDefenseGuildID == 0 || user->getGuild().id() != m_qwDefenseGuildID)
      {
        user->gomap(citymapid, GoMapType::KickUser);
      }
      else
      {
        const SGuildMiscCFG &rCFG = MiscConfig::getMe().getGuildCFG();
        user->getUserZone().gomap(user->getGuild().zoneid(), rCFG.dwTerritory, GoMapType::KickUser);
      }
      m_setNeedKickUsers.erase(user->id);
    }
  }
  XLOG << "[Guild War], City ID:" << m_dwCityID << "Kicking out all players" << XEND;
}

void GuildCity::clearAttUser()
{
  const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(m_dwCityID);
  if (pCFG == nullptr)
  {
    XERR << "[Guild City], Cannot find city configuration, City ID:" << m_dwCityID << XEND;
    return;
  }
  for (auto &m : m_mapUser2Guild)
  {
    if (m.second != m_qwDefenseGuildID)
      m_setNeedKickUsers.insert(m.first);
  }
  DWORD citymapid = pCFG->dwMapID;
  for (auto &s : m_setScenes)
  {
    xSceneEntrySet userset;
    s->getAllEntryList(SCENE_ENTRY_USER, userset);
    for (auto &s : userset)
    {
      SceneUser *user = dynamic_cast<SceneUser *>(s);
      if (!user)
        continue;
      if (m_qwDefenseGuildID == 0 || user->getGuild().id() != m_qwDefenseGuildID)
      {
        user->gomap(citymapid, GoMapType::KickUser);
      }
      m_setNeedKickUsers.erase(user->id);
    }
  }
  XLOG << "[Guild War], City ID:" << m_dwCityID << "Kicking out attacking players" << XEND;
}

bool GuildCity::checkKickUser(SceneUser *user)
{
  if (m_setNeedKickUsers.empty())
    return false;
  if (user == nullptr)
    return false;
  QWORD userid = user->id;
  if (m_setNeedKickUsers.find(userid) == m_setNeedKickUsers.end())
    return false;

  m_setNeedKickUsers.erase(userid);

  if (m_qwDefenseGuildID && m_qwDefenseGuildID == user->getGuild().id())
    return false;
  return true;
}

void GuildCity::sendMsgToCity(DWORD msgid, const MsgParams &params)
{
  for (auto &s : m_setScenes)
  {
    xSceneEntrySet userset;
    s->getAllEntryList(SCENE_ENTRY_USER, userset);
    for (auto &s : userset)
    {
      SceneUser *user = dynamic_cast<SceneUser *>(s);
      if (!user)
        continue;
      MsgManager::sendMsg(user->id, msgid, params);
    }
  }
}

void GuildCity::resetFuben()
{
  XLOG << "[Guild War], City ID:" << m_dwCityID << "Resetting the instance" << XEND;
  for (auto &s : m_setScenes)
  {
    s->getFuben().clearRaid();
    s->getFuben().add(s->getRaidID());
  }
  m_qwGlamMetalGuid = 0;
  m_dwMetalNpcHpPer = 100;
  m_dwLastBeAttackT = now();
  m_dwEndCalmTime = 0;
  m_bInDangerTime = false;
  m_dwEndDangerTime = 0;
  m_eNextState = EGUILDFIRE_MIN;
}

void GuildCity::startFuben()
{
  for (auto &s : m_setScenes)
  {
    s->getFuben().restart();
  }
}

void GuildCity::userLeave(SceneUser *user)
{
  if (user == nullptr)
    return;
  if (m_qwDefenseGuildID && user->getGuild().id() == m_qwDefenseGuildID)
    m_dwDefUserNum = (m_dwDefUserNum != 0 ? m_dwDefUserNum - 1 : 0);
  else
    m_dwAttUserNum = (m_dwAttUserNum != 0 ? m_dwAttUserNum - 1 : 0);

  updateShowState();
}

void GuildCity::userEnter(SceneUser *user)
{
  if (user == nullptr)
    return;
  // send guild fire info
  GuildFireInfoFubenCmd cmd;
  if (m_eState == EGUILDFIRE_FIRE || m_eState == EGUILDFIRE_CALM || m_eState == EUIGLDFIRE_WAITEND)
  {
    cmd.set_fire(true);
    cmd.set_def_guildid(m_qwDefenseGuildID);
    cmd.set_def_guildname(m_strDefenseName);
    cmd.set_endfire_time(GuildCityManager::getMe().getFireStopTime());
    cmd.set_metal_hpper(m_dwMetalNpcHpPer);
    if (m_bInDangerTime)
    {
      cmd.set_danger(true);
      cmd.set_danger_time(m_dwEndDangerTime);
    }
    if (m_eState == EGUILDFIRE_CALM)
    {
      cmd.set_calmdown(true);
      cmd.set_calm_time(m_dwEndCalmTime);
    }

    if (m_eState == EUIGLDFIRE_WAITEND)
      cmd.set_def_perfect(true);

    // Add participation reward BUFF, distribute rewards after the guild war ends
    /*const SGuildFireCFG& firecfg = MiscConfig::getMe().getGuildFireCFG();
    user->m_oBuff.add(firecfg.dwPartInBuffID);
    */
    user->getEvent().onEnterGVG();
  }
  else
  {
    cmd.set_fire(false);
  }
  PROTOBUF(cmd, send, len);
  user->sendCmdToMe(send, len);

  m_mapUser2Guild[user->id] = user->getGuild().id();

  if (m_eState != EGUILDFIRE_PEACE)
    user->getUserGvg().syncDataToMe();

  user->getUserGvg().onEnterGvg();

  if (m_qwDefenseGuildID && user->getGuild().id() == m_qwDefenseGuildID)
    m_dwDefUserNum++;
  else
    m_dwAttUserNum++;

  updateShowState();
}

void GuildCity::sendCmdToCity(const void *cmd, DWORD len)
{
  for (auto &s : m_setScenes)
  {
    xSceneEntrySet userset;
    s->getAllEntryList(SCENE_ENTRY_USER, userset);
    for (auto &s : userset)
    {
      SceneUser *user = dynamic_cast<SceneUser *>(s);
      if (!user)
        continue;
      user->sendCmdToMe(cmd, len);
    }
  }
}

void GuildCity::reward()
{
  // give rewawd
  if (m_qwDefenseGuildID == 0)
  {
    XLOG << "[Guild War-Reward], Wild monster base, do not distribute occupation rewards, City:" << m_dwCityID << XEND;
  }
  else
  {
    /*const SGuildFireCFG& firecfg = MiscConfig::getMe().getGuildFireCFG();
    for (auto &m : m_mapUser2Guild)
    {
      if (m.second == m_qwDefenseGuildID)
      {
      MailManager::getMe().sendMail(m.first, firecfg.dwSpecMailID);
      XLOG << "[Guild War-Reward], Sending occupation rewards, Player:" << m.first << "Guild:" << m_qwDefenseGuildID << XEND;
      }
    }
    */

    const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(m_dwCityID);
    if (pCFG == nullptr)
      return;

    // send guild member reward
    GVGRewardGuildSCmd cmd;
    cmd.set_guildid(m_qwDefenseGuildID);
    PROTOBUF(cmd, send, len);
    thisServer->sendCmdToSession(send, len);

    TSetDWORD extrarwds;
    RewardConfig::getMe().getExtraByType(EEXTRAREWARD_GVG, 1, 0, extrarwds);
    if (extrarwds.empty() == false)
    {
      TVecItemInfo vecItems;
      for (auto &s : extrarwds)
        RewardConfig::getMe().roll(s, RewardEntry(), vecItems, ESOURCE_GVG);

      if (!vecItems.empty())
      {
        const SGuildFireCFG &rCFG = MiscConfig::getMe().getGuildFireCFG();

        GuildBrocastMailGuildSCmd mailcmd;
        mailcmd.set_mailid(rCFG.dwExtraMailID);
        mailcmd.set_guildid(m_qwDefenseGuildID);

        GuildBrocastMsgGuildSCmd msgcmd;
        msgcmd.set_msgid(rCFG.dwExtraMsgID);
        msgcmd.set_guildid(m_qwDefenseGuildID);

        MsgParam *p = msgcmd.add_params();
        if (!p)
          return;
        p->set_param(pCFG->strName);

        p = msgcmd.add_params();
        if (!p)
          return;

        for (auto &v : vecItems)
        {
          mailcmd.add_items()->CopyFrom(v);

          const SItemCFG *pCFG = ItemConfig::getMe().getItemCFG(v.id());
          if (pCFG)
          {
            p->add_subparams("[");
            p->add_subparams(pCFG->strNameZh);

            std::stringstream stream;
            stream.str("");
            stream << " ] * [ " << v.count() << " ] ";
            p->add_subparams(stream.str());
          }
        }

        PROTOBUF(mailcmd, mailsend, maillen);
        PROTOBUF(msgcmd, msgsend, msglen);
        thisServer->sendCmdToSession(mailsend, maillen);
        thisServer->sendCmdToSession(msgsend, msglen);
      }
    }

    if (pCFG != nullptr)
    {
      xLuaData rewarddata;
      rewarddata.setData("cmd", "gvg");
      rewarddata.setData("action", "treasure_add");
      rewarddata.setData("guildid", m_qwDefenseGuildID);
      DWORD times = 1;
      const GuildCityInfo *pInfo = GuildCityManager::getMe().getCityInfo(m_dwCityID);
      if (pInfo)
      {
        if (pInfo->oldguild() == m_qwDefenseGuildID)
          times = pInfo->times() + 1;
      }
      rewarddata.setData("times", times);
      rewarddata.setData("id", m_dwCityID);
      GMCommandRuler::getMe().guild(nullptr, rewarddata);
      XLOG << "[Guild War-Reward] Guild " << m_qwDefenseGuildID << " occupies City " << m_dwCityID << " for " << times << " times, sending rewards to guild server for processing" << XEND;

      for (auto &s : m_mapUser2Guild)
      {
        if (s.second != m_qwDefenseGuildID)
          continue;
        SceneUser *user = SceneUserManager::getMe().getUserByID(s.first);
        if (user)
          user->getServant().onGrowthFinishEvent(ETRIGGER_GVG_DEFENSE);
      }
    }
  }
  m_mapUser2Guild.clear();

  GuildCityManager::getMe().updateCityInfoToGuild(m_dwCityID, m_qwDefenseGuildID, EGUILDCITYSTATUS_FINISH);
}

void GuildCity::onGuildNameChange(const string &newname)
{
  XLOG << "[公会-城池], 防守方公会名改变, 城池:" << m_dwCityID << "更换前名字:" << m_strDefenseName << "新名字:" << newname << XEND;

  m_strDefenseName = newname;
  GvgDefNameChangeFubenCmd cmd;
  cmd.set_newname(m_strDefenseName);
  PROTOBUF(cmd, send, len);
  sendCmdToCity(send, len);
}

void GuildCity::updateStateToSession()
{
  UpdateCityStateGuildSCmd cmd;
  CityShowInfo *pInfo = cmd.add_infos();
  if (pInfo == nullptr)
    return;
  pInfo->set_cityid(m_dwCityID);
  pInfo->set_state(m_eClientShowState);
  PROTOBUF(cmd, send, len);
  thisServer->sendCmdToSession(send, len);
}

void GuildCity::updateShowState()
{
  if (GuildCityManager::getMe().isInFire() == false)
    return;
  if (m_eState == EUIGLDFIRE_WAITEND || m_eNextState == EUIGLDFIRE_WAITEND)
    return;
  EGCityState state = m_eClientShowState;
  do
  {
    const SGuildFireCFG &firecfg = MiscConfig::getMe().getGuildFireCFG();
    DWORD allnum = m_dwAttUserNum + m_dwDefUserNum;
    if (allnum < firecfg.dwMinShowNum)
    {
      state = EGCITYSTATE_NORMALFIRE;
      break;
    }
    // If the attacking side has more players
    if (m_dwAttUserNum >= m_dwDefUserNum)
    {
      DWORD delta = m_dwAttUserNum - m_dwDefUserNum;
      if (delta <= allnum * firecfg.fCriPer)
      {
        state = EGCITYSTATE_CRIFIRE;
        break;
      }
      if (delta <= allnum * firecfg.fNormalPer)
      {
        state = EGCITYSTATE_ATTFIRE;
        break;
      }
      // Difference is greater than 30%
      state = EGCITYSTATE_NORMALFIRE;
      break;
    
      state = EGCITYSTATE_NORMALFIRE;
      break;
    }
    // Defending side has more players
    else
    {
      DWORD delta = m_dwDefUserNum - m_dwAttUserNum;
      if (delta <= allnum * firecfg.fCriPer)
      {
        state = EGCITYSTATE_CRIFIRE;
        break;
      }
      if (delta <= allnum * firecfg.fNormalPer)
      {
        state = EGCITYSTATE_DEFFIRE;
        break;
      }
      // Difference is greater than 30%
      state = EGCITYSTATE_NORMALFIRE;
      break;
    }
  } while (0);

  if (m_eClientShowState != state)
  {
    m_eClientShowState = state;
    updateStateToSession();
  }
}

// Prompt before the start of the Guild War final battle
void GuildCity::onSuperGvgTimeNear()
{
  const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(m_dwCityID);
  if (pCFG == nullptr || pCFG->bSuper == false)
    return;

  sendMsgToCity(25501);
}

// Guild War final battle time has arrived
void GuildCity::onSuperGvgTimeCome()
{
  const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(m_dwCityID);
  if (pCFG == nullptr || pCFG->bSuper == false)
    return;

  // Perfect victory
  if (m_eState == EUIGLDFIRE_WAITEND && m_qwDefenseGuildID)
  {
    // ->guild, set/get data -> match
    JoinSuperGvgGuildSCmd cmd;
    cmd.set_guildid(m_qwDefenseGuildID);
    cmd.set_supergvgtime(GuildCityManager::getMe().getSuperGvgStartTime());
    PROTOBUF(cmd, send, len);
    thisServer->sendCmdToSession(send, len);
  }
}

/***************************************************
***************************************************
****************************************************/
GuildCityManager::GuildCityManager()
{
}

GuildCityManager::~GuildCityManager()
{
  for (auto &m : m_mapGuildCity)
    SAFE_DELETE(m.second);

  m_mapGuildCity.clear();
}

void GuildCityManager::timer(DWORD curSec)
{
  FUN_TIMECHECK_30();

  // Formal server blocking, 10.23
  if (MiscConfig::getMe().isSystemForbid(ESYSTEM_FORBID_GVG) == true)
    return;

  if (m_bFire)
  {
    if (curSec > m_dwEndFireTime)
    {
      m_bFire = false;
      XLOG << "[公会战结束], 到达结束时间:" << m_dwEndFireTime << XEND;
      onFireClose();

      m_dwStartFireTime = 0;
      m_dwSuperGvgBeginTime = 0;
      m_bSuFire = false;
    }

    if (!m_bSuFire && m_dwSuperGvgBeginTime)
    {
      // Notify players that supergvg is about to start
      if (m_dwSuperGvgNoticeTime && curSec >= m_dwSuperGvgNoticeTime)
      {
        m_dwSuperGvgNoticeTime = 0;
        for (auto &it : m_mapGuildCity)
          it.second->onSuperGvgTimeNear();
      }
      if (curSec >= m_dwSuperGvgBeginTime)
      {
        // m_dwSuperGvgBeginTime = 0;
        m_bSuFire = true;
        m_dwTestSuperGvgBeginTime = 0; // Officially started, clear the test time
        // Check for perfect defense and sign up for supergvg
        for (auto &it : m_mapGuildCity)
          it.second->onSuperGvgTimeCome();
      }
    }
  }
  else
  {
    if (m_dwStartFireTime == 0)
    {
      const SGuildFireCFG &firecfg = MiscConfig::getMe().getGuildFireCFG();
      DWORD starttime = firecfg.getNextStartTime(curSec);
      if (starttime)
      {
        m_dwStartFireTime = starttime;
        m_dwEndFireTime = m_dwStartFireTime + firecfg.dwLastTime;

        // Set the supergvg start time
        if (firecfg.hasSuperGvg(m_dwStartFireTime))
        {
          m_dwSuperGvgBeginTime = m_dwStartFireTime + firecfg.stSuperGvgCFG.dwSuperGvgBeginTime;
          m_dwSuperGvgNoticeTime = m_dwSuperGvgBeginTime - firecfg.stSuperGvgCFG.dwNoticeTime;
        }
        else
        {
          m_dwSuperGvgBeginTime = 0;
          m_dwSuperGvgNoticeTime = 0;
        }

        XLOG << "[Guild War Open], Set start time:" << m_dwStartFireTime << "Set end time:" << m_dwEndFireTime << XEND;
      }
    }

    if (curSec >= m_dwStartFireTime && curSec < m_dwEndFireTime)
    {
      m_bFire = true;
      XLOG << "[Guild War Open], Reached start time:" << m_dwStartFireTime << "End time:" << m_dwEndFireTime << XEND;
      onFireOpen();

      // 开战提示
      const SGuildFireCFG &firecfg = MiscConfig::getMe().getGuildFireCFG();
      for (auto &s : firecfg.setMsgMap)
      {
        if (SceneManager::getMe().getSceneByID(s))
          MsgManager::sendMapMsg(s, 2207);
      }
    }

    // 开战前60s提示
    if (curSec + 60 == m_dwStartFireTime)
    {
      for (auto &it : m_mapGuildCity)
        it.second->sendMsgToCity(2206, MsgParams(60));

      const SGuildFireCFG &firecfg = MiscConfig::getMe().getGuildFireCFG();
      for (auto &s : firecfg.setMsgMap)
      {
        if (SceneManager::getMe().getSceneByID(s))
          MsgManager::sendMapMsg(s, 2206, MsgParams(60));
      }
    }
  }

  for (auto &it : m_mapGuildCity)
  {
    it.second->timer(curSec);
  }
}

GuildCity *GuildCityManager::getCityByID(DWORD cityid)
{
  auto it = m_mapGuildCity.find(cityid);
  if (it == m_mapGuildCity.end())
    return nullptr;
  return it->second;
}

GuildCity *GuildCityManager::createCity(DWORD cityid)
{
  GuildCity *pCity = getCityByID(cityid);
  if (pCity)
    return pCity;

  pCity = NEW GuildCity(cityid);
  if (pCity == nullptr)
    return nullptr;

  pCity->init(m_bFire);
  m_mapGuildCity[cityid] = pCity;
  return pCity;
}

void GuildCityManager::collectCityInfo(DWORD dwMapID, vector<GuildCityInfo> &vecResult)
{
  TSetDWORD setIDs;
  GuildRaidConfig::getMe().collectCityID(dwMapID, setIDs);

  const SceneBase *pBase = SceneManager::getMe().getDataByID(dwMapID);
  if (pBase)
  {
    const TMapFlagCFG &flags = pBase->getFlagInfo();
    for (auto &f : flags)
      setIDs.insert(f.first);
  }
  for (auto &s : setIDs)
  {
    auto m = m_mapCityInfo.find(s);
    if (m != m_mapCityInfo.end())
      vecResult.push_back(m->second);
  }
}

void GuildCityManager::updateCityInfoFromGuild(const GuildCityActionGuildSCmd &cmd)
{
  if (cmd.action() != EGUILDCITYACTION_TO_SCENE_UPDATE)
  {
    XLOG << "[公会城池-同步] zoneid :" << thisServer->getZoneID() << "收到更新" << cmd.ShortDebugString() << "失败,action不对应" << XEND;
    return;
  }
  for (int i = 0; i < cmd.infos_size(); ++i)
  {
    const GuildCityInfo &rInfo = cmd.infos(i);
    m_mapCityInfo[rInfo.flag()].CopyFrom(rInfo);

    if (cmd.result() != EGUILDCITYRESULT_LOAD)
    {
      syncCityInfo(rInfo.flag());
      updateCityInfoResult(rInfo.flag(), rInfo.id(), cmd.result());
    }
  }

  XLOG << "[公会城池-同步] zoneid :" << thisServer->getZoneID() << "收到更新" << cmd.ShortDebugString() << XEND;
}

void GuildCityManager::updateCityInfoFromGuild(const CityDataUpdateGuildSCmd &cmd)
{
  auto m = m_mapCityInfo.find(cmd.cityid());
  if (m == m_mapCityInfo.end())
    return;

  bool bSync = cmd.updates_size() != 0;
  if (cmd.membercount() && m->second.membercount() != cmd.membercount())
  {
    m->second.set_membercount(cmd.membercount());
    bSync = true;
  }
  if (cmd.leadername().empty() == false)
    m->second.set_leadername(cmd.leadername());

  for (int i = 0; i < cmd.updates_size(); ++i)
  {
    const GuildDataUpdate &rUpdate = cmd.updates(i);
    switch (rUpdate.type())
    {
    case EGUILDDATA_NAME:
    {
      m->second.set_name(rUpdate.data());
      GuildCity *pCity = getCityByID(cmd.cityid());
      if (pCity != nullptr)
        pCity->onGuildNameChange(m->second.name());
    }
    break;
    case EGUILDDATA_LEVEL:
      m->second.set_lv(rUpdate.value());
      break;
    case EGUILDDATA_PORTRAIT:
      m->second.set_portrait(rUpdate.data());
      break;
    default:
      XERR << "[公会城池-数据更新] zoneid :" << thisServer->getZoneID() << "更新 flag :" << cmd.cityid() << "数据" << rUpdate.type() << "未处理" << XEND;
      break;
    }
    XDBG << "[公会城池-数据更新] zoneid :" << thisServer->getZoneID() << "更新 flag :" << cmd.cityid() << "数据" << rUpdate.ShortDebugString() << XEND;
  }

  if (bSync)
    syncCityInfo(cmd.cityid());
}

void GuildCityManager::updateCityInfoToGuild(DWORD dwFlagID, QWORD qwGuildID, EGuildCityStatus eStatus /*=EGUILDCITYSTATUS_OCCUPY*/)
{
  const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(dwFlagID);
  if (pCFG == nullptr)
  {
    XERR << "[公会城池-更新] zoneid :" << thisServer->getZoneID() << "更新 flag :" << dwFlagID << "guildid :" << qwGuildID << "失败, 该城池未在 Table_Guild_StrongHold.txt 表中找到" << XEND;
    updateCityInfoResult(dwFlagID, qwGuildID, EGUILDCITYRESULT_MIN);
    return;
  }

  GuildCityActionGuildSCmd cmd;
  cmd.set_action(EGUILDCITYACTION_TO_RECORD_SAVE);
  cmd.set_status(eStatus);
  // cmd.set_scenename(thisServer->getServerName());
  cmd.set_zoneid(thisServer->getZoneID());

  GuildCityInfo *pInfo = cmd.add_infos();
  if (qwGuildID == 0)
  {
    auto m = m_mapCityInfo.find(dwFlagID);
    if (m != m_mapCityInfo.end())
      qwGuildID = m->second.id();
  }
  pInfo->set_id(qwGuildID);
  pInfo->set_flag(dwFlagID);

  PROTOBUF(cmd, send, len);
  thisServer->sendCmdToSession(send, len);
  XLOG << "[公会城池-更新] zoneid :" << thisServer->getZoneID() << "更新 flag :" << dwFlagID << "guildid :" << qwGuildID << "成功,发送至SessionServer处理" << XEND;
}

void GuildCityManager::updateCityInfoResult(DWORD dwFlagID, QWORD qwGuildID, EGuildCityResult eResult)
{
  // to do ..
  XLOG << "[公会城池], 收到更新消息, 城池:" << dwFlagID << "公会:" << qwGuildID << "result" << eResult << XEND;

  auto it = m_mapGuildCity.find(dwFlagID);
  if (it == m_mapGuildCity.end())
  {
    XLOG << "[公会城池], 城池未开放, 城池ID:" << dwFlagID << XEND;
    return;
  }

  it->second->handleResult(eResult, qwGuildID);
}

const GuildCityInfo *GuildCityManager::getCityInfo(DWORD cityid)
{
  auto it = m_mapCityInfo.find(cityid);
  if (it == m_mapCityInfo.end())
    return nullptr;
  return &(it->second);
}

const GuildCityInfo *GuildCityManager::getCityInfoByGuild(QWORD guildid)
{
  if (guildid == 0)
    return nullptr;
  for (auto &m : m_mapCityInfo)
  {
    if (m.second.id() == guildid)
      return &(m.second);
  }
  return nullptr;
}

const GuildCityInfo *GuildCityManager::getRealCityInfoByGuild(QWORD guildid)
{
  if (guildid == 0)
    return nullptr;
  for (auto &m : m_mapCityInfo)
  {
    QWORD qwDestID = isInFire() == true ? m.second.oldguild() : m.second.id();
    if (qwDestID == guildid)
      return &(m.second);
  }
  return nullptr;
}

void GuildCityManager::openFireAtonce(bool super, DWORD supertime)
{
  if (m_bFire)
    return;
  DWORD cur = now();
  m_dwStartFireTime = cur;
  m_dwEndFireTime = m_dwStartFireTime + MiscConfig::getMe().getGuildFireCFG().dwLastTime;
  if (super)
  {
    DWORD time = supertime ? supertime : 25;

    m_dwSuperGvgBeginTime = m_dwStartFireTime + time * 60;
    m_dwSuperGvgNoticeTime = m_dwSuperGvgBeginTime - 5 * 60;
  }

  XLOG << "[公会战-开启], 外部设置开启成功" << XEND;
}

void GuildCityManager::stopFireAtonce()
{
  if (!m_bFire)
    return;
  DWORD cur = now();
  m_dwEndFireTime = cur;
  XLOG << "[公会战-关闭], 外部设置关闭成功" << XEND;
}

void GuildCityManager::syncCityInfo(DWORD dwFlagID)
{
  const SGuildCityCFG *pCFG = GuildRaidConfig::getMe().getGuildCityCFG(dwFlagID);
  if (pCFG == nullptr)
  {
    XERR << "[公会城池-数据更新] zoneid :" << thisServer->getZoneID() << "更新 flag :" << dwFlagID << "失败, 该城池未在 Table_Guild_StrongHold.txt 表中找到" << XEND;
    return;
  }

  TSetDWORD notifymaps;
  notifymaps.insert(pCFG->dwMapID);
  const TSetDWORD &maps = SceneManager::getMe().getMapByFlag(dwFlagID);
  notifymaps.insert(maps.begin(), maps.end());

  for (auto &s : notifymaps)
  {
    Scene *pScene = SceneManager::getMe().getSceneByID(s);
    if (pScene != nullptr)
    {
      xSceneEntrySet set;
      pScene->getAllEntryList(SCENE_ENTRY_USER, set);
      for (auto &s : set)
      {
        SceneUser *pUser = dynamic_cast<SceneUser *>(s);
        if (pUser != nullptr)
          pUser->sendGuildCity();
      }
      XLOG << "[公会城池-数据更新] zoneid :" << thisServer->getZoneID() << "更新 flag :" << dwFlagID << "信息成功" << XEND;
    }
  }
}

bool GuildCityManager::isCityInFire(DWORD cityid)
{
  if (!m_bFire)
    return false;
  GuildCity *pCity = getCityByID(cityid);
  if (pCity)
  {
    if (pCity->getState() == EUIGLDFIRE_WAITEND || pCity->getState() == EGUILDFIRE_CALM)
      return false;
  }

  return true;
}

void GuildCityManager::onFireOpen()
{
  for (auto &it : m_mapGuildCity)
    it.second->onFireOpen();

  GvgOpenToServerGuildSCmd cmd;
  cmd.set_fire(true);
  PROTOBUF(cmd, send, len);
  thisServer->sendCmdToSession(send, len);
}

void GuildCityManager::onFireClose()
{
  GvgResultGuildSCmd scmd;
  for (auto &m : m_mapGuildCity)
  {
    GvgResultInfo *pInfo = scmd.add_infos();
    if (!pInfo)
      continue;
    auto p = m.second;
    pInfo->set_cityid(m.first);
    pInfo->set_guildid(p->getDefenseGuildID());
    if (p->getDefenseGuildID())
    {
      auto it = m_mapCityInfo.find(m.first);
      if (it != m_mapCityInfo.end())
      {
        pInfo->set_guildname(it->second.name());
        pInfo->set_leadername(it->second.leadername());
        pInfo->set_perfect(p->getState() == EUIGLDFIRE_WAITEND);
        DWORD times = (it->second.oldguild() == it->first ? it->second.times() + 1 : 0);
        pInfo->set_times(times);
      }
    }
  }
  // send to dataserver
  if (scmd.infos_size())
  {
    PROTOBUF(scmd, send, len);
    thisServer->sendCmdToSession(send, len);
  }

  for (auto &it : m_mapGuildCity)
    it.second->onFireClose();

  GvgOpenToServerGuildSCmd cmd;
  cmd.set_fire(false);
  PROTOBUF(cmd, send, len);
  thisServer->sendCmdToSession(send, len);
}

void GuildCityManager::userOnLogin(SceneUser *user)
{
  if (!m_bFire)
    return;
  if (user == nullptr)
    return;

  GvgOpenFireGuildCmd cmd;
  cmd.set_fire(true);
  PROTOBUF(cmd, send, len);
  user->sendCmdToMe(send, len);
}

bool GuildCityManager::setTestSuperGvgBeginTime(DWORD time)
{
  if (std::abs((int)m_dwSuperGvgBeginTime - (int)time) <= 30 * 60)
  {
    XERR << "[公会战决战-设置开启时间], 不可设置测试时间在正式开战时间附近, 正式时间:" << m_dwSuperGvgBeginTime << "测试时间:" << time;
    return false;
  }
  m_dwTestSuperGvgBeginTime = time;
  XLOG << "[公会战决战-设置开始时间], 测试时间设置成功, 时间:" << m_dwTestSuperGvgBeginTime << XEND;
  return true;
}
