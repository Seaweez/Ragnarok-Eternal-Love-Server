<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class ChatLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::CHAT_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var int */
    public $hid = null;
    
    /**  @var string */
    public $from_account = null;
    
    /**  @var string */
    public $from_name = null;
    
    /**  @var int */
    public $from_pid = null;
    
    /**  @var string */
    public $to_account = null;
    
    /**  @var string */
    public $to_name = null;
    
    /**  @var int */
    public $to_pid = null;
    
    /**  @var int */
    public $type = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $ispay = null;
    
    /**  @var string */
    public $content = null;
    
    /**  @var int */
    public $vip = null;
    
    /**  @var int */
    public $level = null;
    
    /**  @var int */
    public $eid = null;
    
    /**  @var int - \RO\Cmd\EChatType */
    public $chattype = null;
    
    /**  @var int */
    public $voicelen = null;
    
    /**  @var string */
    public $logid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChatLogCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::LOG_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\LogParam';
      $f->default   = \RO\Cmd\LogParam::CHAT_LOG_CMD;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "cid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 hid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "hid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING from_account = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "from_account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING from_name = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "from_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 from_pid = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "from_pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING to_account = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "to_account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING to_name = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "to_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 to_pid = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "to_pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 type = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ispay = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "ispay";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING content = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "content";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 vip = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "vip";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 level = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "level";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 eid = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "eid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM chattype = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "chattype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatType';
      $descriptor->addField($f);

      // OPTIONAL UINT32 voicelen = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "voicelen";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 21
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 21;
      $f->name      = "logid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <cmd> has a value
     *
     * @return boolean
     */
    public function hasCmd(){
      return $this->_has(1);
    }
    
    /**
     * Clear <cmd> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearCmd(){
      return $this->_clear(1);
    }
    
    /**
     * Get <cmd> value
     *
     * @return int - \RO\Cmd\Command
     */
    public function getCmd(){
      return $this->_get(1);
    }
    
    /**
     * Set <cmd> value
     *
     * @param int - \RO\Cmd\Command $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setCmd( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <param> has a value
     *
     * @return boolean
     */
    public function hasParam(){
      return $this->_has(2);
    }
    
    /**
     * Clear <param> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\LogParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\LogParam $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <cid> has a value
     *
     * @return boolean
     */
    public function hasCid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <cid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearCid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <cid> value
     *
     * @return int
     */
    public function getCid(){
      return $this->_get(3);
    }
    
    /**
     * Set <cid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setCid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sid> has a value
     *
     * @return boolean
     */
    public function hasSid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearSid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sid> value
     *
     * @return int
     */
    public function getSid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setSid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <hid> has a value
     *
     * @return boolean
     */
    public function hasHid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <hid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearHid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <hid> value
     *
     * @return int
     */
    public function getHid(){
      return $this->_get(5);
    }
    
    /**
     * Set <hid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setHid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <from_account> has a value
     *
     * @return boolean
     */
    public function hasFromAccount(){
      return $this->_has(6);
    }
    
    /**
     * Clear <from_account> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearFromAccount(){
      return $this->_clear(6);
    }
    
    /**
     * Get <from_account> value
     *
     * @return string
     */
    public function getFromAccount(){
      return $this->_get(6);
    }
    
    /**
     * Set <from_account> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setFromAccount( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <from_name> has a value
     *
     * @return boolean
     */
    public function hasFromName(){
      return $this->_has(7);
    }
    
    /**
     * Clear <from_name> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearFromName(){
      return $this->_clear(7);
    }
    
    /**
     * Get <from_name> value
     *
     * @return string
     */
    public function getFromName(){
      return $this->_get(7);
    }
    
    /**
     * Set <from_name> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setFromName( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <from_pid> has a value
     *
     * @return boolean
     */
    public function hasFromPid(){
      return $this->_has(8);
    }
    
    /**
     * Clear <from_pid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearFromPid(){
      return $this->_clear(8);
    }
    
    /**
     * Get <from_pid> value
     *
     * @return int
     */
    public function getFromPid(){
      return $this->_get(8);
    }
    
    /**
     * Set <from_pid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setFromPid( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <to_account> has a value
     *
     * @return boolean
     */
    public function hasToAccount(){
      return $this->_has(9);
    }
    
    /**
     * Clear <to_account> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearToAccount(){
      return $this->_clear(9);
    }
    
    /**
     * Get <to_account> value
     *
     * @return string
     */
    public function getToAccount(){
      return $this->_get(9);
    }
    
    /**
     * Set <to_account> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setToAccount( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <to_name> has a value
     *
     * @return boolean
     */
    public function hasToName(){
      return $this->_has(10);
    }
    
    /**
     * Clear <to_name> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearToName(){
      return $this->_clear(10);
    }
    
    /**
     * Get <to_name> value
     *
     * @return string
     */
    public function getToName(){
      return $this->_get(10);
    }
    
    /**
     * Set <to_name> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setToName( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <to_pid> has a value
     *
     * @return boolean
     */
    public function hasToPid(){
      return $this->_has(11);
    }
    
    /**
     * Clear <to_pid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearToPid(){
      return $this->_clear(11);
    }
    
    /**
     * Get <to_pid> value
     *
     * @return int
     */
    public function getToPid(){
      return $this->_get(11);
    }
    
    /**
     * Set <to_pid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setToPid( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(12);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearType(){
      return $this->_clear(12);
    }
    
    /**
     * Get <type> value
     *
     * @return int
     */
    public function getType(){
      return $this->_get(12);
    }
    
    /**
     * Set <type> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setType( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(13);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearTime(){
      return $this->_clear(13);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(13);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setTime( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <ispay> has a value
     *
     * @return boolean
     */
    public function hasIspay(){
      return $this->_has(14);
    }
    
    /**
     * Clear <ispay> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearIspay(){
      return $this->_clear(14);
    }
    
    /**
     * Get <ispay> value
     *
     * @return int
     */
    public function getIspay(){
      return $this->_get(14);
    }
    
    /**
     * Set <ispay> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setIspay( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <content> has a value
     *
     * @return boolean
     */
    public function hasContent(){
      return $this->_has(15);
    }
    
    /**
     * Clear <content> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearContent(){
      return $this->_clear(15);
    }
    
    /**
     * Get <content> value
     *
     * @return string
     */
    public function getContent(){
      return $this->_get(15);
    }
    
    /**
     * Set <content> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setContent( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <vip> has a value
     *
     * @return boolean
     */
    public function hasVip(){
      return $this->_has(16);
    }
    
    /**
     * Clear <vip> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearVip(){
      return $this->_clear(16);
    }
    
    /**
     * Get <vip> value
     *
     * @return int
     */
    public function getVip(){
      return $this->_get(16);
    }
    
    /**
     * Set <vip> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setVip( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <level> has a value
     *
     * @return boolean
     */
    public function hasLevel(){
      return $this->_has(17);
    }
    
    /**
     * Clear <level> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearLevel(){
      return $this->_clear(17);
    }
    
    /**
     * Get <level> value
     *
     * @return int
     */
    public function getLevel(){
      return $this->_get(17);
    }
    
    /**
     * Set <level> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setLevel( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <eid> has a value
     *
     * @return boolean
     */
    public function hasEid(){
      return $this->_has(18);
    }
    
    /**
     * Clear <eid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearEid(){
      return $this->_clear(18);
    }
    
    /**
     * Get <eid> value
     *
     * @return int
     */
    public function getEid(){
      return $this->_get(18);
    }
    
    /**
     * Set <eid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setEid( $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <chattype> has a value
     *
     * @return boolean
     */
    public function hasChattype(){
      return $this->_has(19);
    }
    
    /**
     * Clear <chattype> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearChattype(){
      return $this->_clear(19);
    }
    
    /**
     * Get <chattype> value
     *
     * @return int - \RO\Cmd\EChatType
     */
    public function getChattype(){
      return $this->_get(19);
    }
    
    /**
     * Set <chattype> value
     *
     * @param int - \RO\Cmd\EChatType $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setChattype( $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <voicelen> has a value
     *
     * @return boolean
     */
    public function hasVoicelen(){
      return $this->_has(20);
    }
    
    /**
     * Clear <voicelen> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearVoicelen(){
      return $this->_clear(20);
    }
    
    /**
     * Get <voicelen> value
     *
     * @return int
     */
    public function getVoicelen(){
      return $this->_get(20);
    }
    
    /**
     * Set <voicelen> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setVoicelen( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <logid> has a value
     *
     * @return boolean
     */
    public function hasLogid(){
      return $this->_has(21);
    }
    
    /**
     * Clear <logid> value
     *
     * @return \RO\Cmd\ChatLogCmd
     */
    public function clearLogid(){
      return $this->_clear(21);
    }
    
    /**
     * Get <logid> value
     *
     * @return string
     */
    public function getLogid(){
      return $this->_get(21);
    }
    
    /**
     * Set <logid> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatLogCmd
     */
    public function setLogid( $value){
      return $this->_set(21, $value);
    }
  }
}

