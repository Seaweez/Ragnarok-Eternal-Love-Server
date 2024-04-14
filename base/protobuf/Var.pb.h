// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: Var.proto

#ifndef PROTOBUF_Var_2eproto__INCLUDED
#define PROTOBUF_Var_2eproto__INCLUDED

#include <string>

#include <google/protobuf/stubs/common.h>

#if GOOGLE_PROTOBUF_VERSION < 2006000
#error This file was generated by a newer version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please update
#error your headers.
#endif
#if 2006001 < GOOGLE_PROTOBUF_MIN_PROTOC_VERSION
#error This file was generated by an older version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please
#error regenerate this file with a newer version of protoc.
#endif

#include <google/protobuf/generated_message_util.h>
#include <google/protobuf/message.h>
#include <google/protobuf/repeated_field.h>
#include <google/protobuf/extension_set.h>
#include <google/protobuf/generated_enum_reflection.h>
#include <google/protobuf/unknown_field_set.h>
// @@protoc_insertion_point(includes)

namespace Cmd {

// Internal implementation detail -- do not call these.
void  protobuf_AddDesc_Var_2eproto();
void protobuf_AssignDesc_Var_2eproto();
void protobuf_ShutdownFile_Var_2eproto();

class Var;
class StatVar;
class AccVar;

enum EVarType {
  EVARTYPE_MIN = 0,
  EVARTYPE_QUEST_WANTED = 1,
  EVARTYPE_QUEST_WANTED_RESET = 2,
  EVARTYPE_SHOP = 3,
  EVARTYPE_TOWER = 4,
  EVARTYPE_SEAL = 5,
  EVARTYPE_QUEST_REWARD = 6,
  EVARTYPE_ANTI_ADDICT_DAILY = 7,
  EVARTYPE_LABORATORY = 8,
  EVARTYPE_GUILD_EXCHANGECHAIR = 9,
  EVARTYPE_GUILD_CONTRIBUTION = 10,
  EVARTYPE_USEITEM_DAY = 11,
  EVARTYPE_SINGLE_DOG = 12,
  EVARTYPE_QUEST_DAILY_1 = 13,
  EVARTYPE_QUEST_DAILY_3 = 14,
  EVARTYPE_QUEST_DAILY_7 = 15,
  EVARTYPE_QUEST_DAILY_MAP = 16,
  EVARTYPE_GUILD_ASSET = 17,
  EVARTYPE_CAMERA_SUMMON_DAILY = 18,
  EVARTYPE_ACTIVITY_QUEST = 19,
  EVARTYPE_GUILD_DONATE = 20,
  EVARTYPE_OPERATE_REWARD = 21,
  EVARTYPE_FIRST_EXCHANGEZONE = 22,
  EVARTYPE_FRIENDSHIP_FRIEND = 23,
  EVARTYPE_FRIENDSHIP_GUILD = 24,
  EVARTYPE_TOWER_MONSTER = 25,
  EVARTYPE_USEITEM_WEEK = 26,
  EVARTYPE_USER_CREDIT = 27,
  EVARTYPE_DAY_ONLINE_FIRST = 28,
  EVARTYPE_ACTIVITY_REWARD = 29,
  EVARTYPE_ACTIVITY_VALENTINE = 30,
  EVARTYPE_CHAT = 31,
  EVARTYPE_AUGURY_REWARD = 32,
  EVARTYPE_SELL_WARNING_LAST = 33,
  EVARTYPE_SELL_WARNING_CUR = 34,
  EVARTYPE_GUILD_RAID = 35,
  EVARTYPE_GUILD_RAID_BAN = 36,
  EVARTYPE_LABORATORY_EXTASKREWARD = 37,
  EVARTYPE_GUILD_QUEST = 38,
  EVARTYPE_CHILD_QUEST = 39,
  EVARTYPE_GUILD_MAXASSET = 40,
  EVARTYPE_LABORATORY_POINT = 41,
  EVARTYPE_GETITEM_DAY = 42,
  EVARTYPE_GETITEM_WEEK = 43,
  EVARTYPE_NEWAUGURY_REWARD = 44,
  EVARTYPE_NEWAUGURY_EXTRACOUNT = 45,
  EVARTYPE_AUGURY_CELEBRATION_DAY = 46,
  EVARTYPE_CELEBRATION_ONE = 47,
  EVARTYPE_CELEBRATION_TWO = 48,
  EVARTYPE_CELEBRATION_THREE = 49,
  EVARTYPE_PVPCOIN_DAY = 50,
  EVARTYPE_PVPCOIN_WEEK = 51,
  EVARTYPE_ACHIEVE_CHAT_WORLD = 52,
  EVARTYPE_ACHIEVE_CHAT_GUILD = 53,
  EVARTYPE_QUEST_DAILY_RESET = 54,
  EVARTYPE_SCENERY_UPLOAD = 55,
  EVARTYPE_GUILD_QUEST_EXTRAREWARD = 56,
  EVARTYPE_GUILD_DONATE_EXTRAREWARD = 57,
  EVARTYPE_ACHIEVE_CAT = 58,
  EVARTYPE_LOVEAUGURY_EXTRARCOUNT = 59,
  EVARTYPE_USERPET_TOUCH = 60,
  EVARTYPE_USERPET_FEED = 61,
  EVARTYPE_USERPET_GIFT = 62,
  EVARTYPE_PETADVENTURE_RESET = 63,
  EVARTYPE_SHOP_RANDOM = 64,
  EVARTYPE_ACC_QUEST = 65,
  EVARTYPE_PETADVENTURE_LIST = 66,
  EVARTYPE_LOTTERY_CNT_EQUIP = 67,
  EVARTYPE_LOTTERY_CNT_CARD = 68,
  EVARTYPE_ACCDAILY_QUEST = 69,
  EVARTYPE_TUTOR_TASK_DAY = 70,
  EVARTYPE_TUTOR_TASK_WEEK = 71,
  EVARTYPE_SHOP_RANDOM_BY_LV = 72,
  EVARTYPE_INACTIVE_USER_SEND_COUNT = 73,
  EVARTYPE_INACTIVE_USER_LAST_SEND_DAY = 74,
  EVARTYPE_QUEST_WANTED_WEEK = 75,
  EVARTYPE_TUTOR_TASK_REWARD = 76,
  EVARTYPE_DOUBLE_LAB = 77,
  EVARTYPE_GUILD_PHOTO_LOAD = 78,
  EVARTYPE_ACC_CHOICE_QUEST = 79,
  EVARTYPE_GUILD_BUILDING_SUBMIT_DAY = 85,
  EVARTYPE_DAILY_MAPRAND = 86,
  EVARTYPE_DEPOSIT_END_NTF = 87,
  EVARTYPE_ACTIVITY_EVENT_REWARD = 88,
  EVARTYPE_LABORATORY_COUNT = 89,
  EVARTYPE_GUILD_DONATE_DAY = 90,
  EVARTYPE_GUILD_CHALLENGE_WEEK = 91,
  EVARTYPE_CHRISTMAS_CAKE = 92,
  EVARTYPE_SHOP_WEEK = 93,
  EVARTYPE_TOWER_RESETTIME = 95,
  EVARTYPE_QUEST_SIGN = 96,
  EVARTYPE_ARTIFACT_DISTRIBUTE_DAY = 97,
  EVARTYPE_FIRST_SHARE = 98,
  EVARTYPE_EXTRARWD_WANTEDQUEST = 99,
  EVARTYPE_EXTRARWD_DAILYMONSTER = 100,
  EVARTYPE_EXTRARWD_SEAL = 101,
  EVARTYPE_EXTRARWD_LABORATORY = 102,
  EVARTYPE_EXTRARWD_ENDLESS = 103,
  EVARTYPE_EXTRARWD_GUILD_QUEST = 104,
  EVARTYPE_EXTRARWD_GUILD_DONATE = 105,
  EVARTYPE_DOUBLERWD_WANTEDQUEST = 106,
  EVARTYPE_DOUBLERWD_DAILYMONSTER = 107,
  EVARTYPE_DOUBLERWD_SEAL = 108,
  EVARTYPE_DOUBLERWD_LABORATORY = 109,
  EVARTYPE_DOUBLERWD_ENDLESS = 110,
  EVARTYPE_SHOP_MONTH = 111,
  EVARTYPE_GUILD_TREASURE_COUNT = 112,
  EVARTYPE_BCOIN_TREASURE_COUNT = 113,
  EVARTYPE_DAY_LOTTERY_BUY_GIVE_CNT = 114,
  EVARTYPE_DAY_LOTTERY_CNT_HEAD = 115,
  EVARTYPE_DAY_LOTTERY_CNT_EQUIP = 116,
  EVARTYPE_DAY_LOTTERY_CNT_CARD = 117,
  EVARTYPE_DAY_LOTTERY_CNT_MAGIC = 118,
  EVARTYPE_QUEST_WEDDINGDAILY = 120,
  EVARTYPE_RECOMMEND_DAY = 123,
  EVARTYPE_RECOMMEND_WEEK = 124,
  EVARTYPE_PVECARD_DIFFICULTY_1 = 132,
  EVARTYPE_PVECARD_DIFFICULTY_2 = 133,
  EVARTYPE_PVECARD_DIFFICULTY_3 = 134,
  EVARTYPE_MVPREWARDNUM = 135,
  EVARTYPE_MINIREWARDNUM = 136,
  EVARTYPE_ALTMAN_REWARD = 137,
  EVARTYPE_ALTMAN_KILL = 138,
  EVARTYPE_EXTRARWD_PVECARD = 139,
  EVARTYPE_DOUBLERWD_PVECARD = 140,
  EVARTYPE_GUILD_MEMBER_WEEKBCOIN = 142,
  EVARTYPE_EXCHANGECARD_DRAWMAX = 143,
  EVARTYPE_DAY_GET_ZENY_COUNT = 144,
  EVARTYPE_DEAD_COIN = 145,
  EVARTYPE_DEAD_QUEST = 146,
  EVARTYPE_TUTOR_EXTRABATTLETIME = 148,
  EVARTYPE_DEADBOSS_COUNT_MVP = 149,
  EVARTYPE_DEADBOSS_COUNT_PVECARD = 150,
  EVARTYPE_DEADBOSS_COUNT_TOWER = 151,
  EVARTYPE_DEADBOSS_COUNT_GUILD = 152,
  EVARTYPE_TEAMPWS_COUNT = 153,
  EVARTYPE_DEADBOSS_COUNT_PVECARD2 = 158,
  EVARTYPE_DEADBOSS_COUNT_PVECARD3 = 159,
  EVARTYPE_DEADBOSS_COUNT_PVECARD4 = 160,
  EVARTYPE_MAX = 161
};
bool EVarType_IsValid(int value);
const EVarType EVarType_MIN = EVARTYPE_MIN;
const EVarType EVarType_MAX = EVARTYPE_MAX;
const int EVarType_ARRAYSIZE = EVarType_MAX + 1;

const ::google::protobuf::EnumDescriptor* EVarType_descriptor();
inline const ::std::string& EVarType_Name(EVarType value) {
  return ::google::protobuf::internal::NameOfEnum(
    EVarType_descriptor(), value);
}
inline bool EVarType_Parse(
    const ::std::string& name, EVarType* value) {
  return ::google::protobuf::internal::ParseNamedEnum<EVarType>(
    EVarType_descriptor(), name, value);
}
enum EVarTimeType {
  EVARTIMETYPE_MIN = 0,
  EVARTIMETYPE_DAY = 1,
  EVARTIMETYPE_WEEK = 2,
  EVARTIMETYPE_MONTH = 3,
  EVARTIMETYPE_ALWAYS = 4,
  EVARTIMETYPE_MAX = 5
};
bool EVarTimeType_IsValid(int value);
const EVarTimeType EVarTimeType_MIN = EVARTIMETYPE_MIN;
const EVarTimeType EVarTimeType_MAX = EVARTIMETYPE_MAX;
const int EVarTimeType_ARRAYSIZE = EVarTimeType_MAX + 1;

const ::google::protobuf::EnumDescriptor* EVarTimeType_descriptor();
inline const ::std::string& EVarTimeType_Name(EVarTimeType value) {
  return ::google::protobuf::internal::NameOfEnum(
    EVarTimeType_descriptor(), value);
}
inline bool EVarTimeType_Parse(
    const ::std::string& name, EVarTimeType* value) {
  return ::google::protobuf::internal::ParseNamedEnum<EVarTimeType>(
    EVarTimeType_descriptor(), name, value);
}
enum EAccVarType {
  EACCVARTYPE_MIN = 0,
  EACCVARTYPE_LOTTERY_CNT_EQUIP = 1,
  EACCVARTYPE_LOTTERY_CNT_CARD = 2,
  EVARTYPE_SHOP_RANDOM_BY_ACCLV = 3,
  EACCVARTYPE_DAILY_QUEST = 4,
  EACCVARTYPE_INACTIVE_USER_SEND_COUNT = 5,
  EACCVARTYPE_INACTIVE_USER_LAST_SEND_DAY = 6,
  EACCVARTYPE_QUEST_WANTED_WEEK = 7,
  EACCVARTYPE_DOUBLE_LAB = 8,
  EACCVARTYPE_ACTIVITY_EVENT_REWARD = 9,
  EACCVARTYPE_POLLY_FIRST = 10,
  EACCVARTYPE_POLLY_DAY_SCORE = 11,
  EACCVARTYPE_SHOP_RANDOM_ACC = 13,
  EACCVARTYPE_SHOP_GOT = 14,
  EACCVARTYPE_QUEST_DAILY_RESET = 15,
  EACCVARTYPE_JOY = 16,
  EACCVARTYPE_QUEST_DAILY_1 = 17,
  EACCVARTYPE_QUEST_DAILY_3 = 18,
  EACCVARTYPE_QUEST_DAILY_7 = 19,
  EACCVARTYPE_EXTRARWD_WANTEDQUEST = 20,
  EACCVARTYPE_EXTRARWD_DAILYMONSTER = 21,
  EACCVARTYPE_EXTRARWD_SEAL = 22,
  EACCVARTYPE_EXTRARWD_LABORATORY = 23,
  EACCVARTYPE_EXTRARWD_ENDLESS = 24,
  EACCVARTYPE_EXTRARWD_GUILD_QUEST = 25,
  EACCVARTYPE_EXTRARWD_GUILD_DONATE = 26,
  EACCVARTYPE_DOUBLERWD_WANTEDQUEST = 27,
  EACCVARTYPE_DOUBLERWD_DAILYMONSTER = 28,
  EACCVARTYPE_DOUBLERWD_SEAL = 29,
  EACCVARTYPE_DOUBLERWD_LABORATORY = 30,
  EACCVARTYPE_DOUBLERWD_ENDLESS = 31,
  EACCVARTYPE_SHOP_GOT_WEEK = 32,
  EACCVARTYPE_SHOP_GOT_MONTH = 33,
  EACCVARTYPE_PETWORK_EXCHANGE = 34,
  EACCVARTYPE_PETWORK_REWARD = 35,
  EACCVARTYPE_OPERATE_REWARD = 36,
  EACCVARTYPE_FAVORABILITY = 37,
  EACCVARTYPE_FAVORABILITY_STATUS = 38,
  EACCVARTYPE_EXTRARWD_PVECARD = 39,
  EACCVARTYPE_DOUBLERWD_PVECARD = 40,
  EACCVARTYPE_STAY_FAVORABILITY = 41,
  EACCVARTYPE_MAX = 42
};
bool EAccVarType_IsValid(int value);
const EAccVarType EAccVarType_MIN = EACCVARTYPE_MIN;
const EAccVarType EAccVarType_MAX = EACCVARTYPE_MAX;
const int EAccVarType_ARRAYSIZE = EAccVarType_MAX + 1;

const ::google::protobuf::EnumDescriptor* EAccVarType_descriptor();
inline const ::std::string& EAccVarType_Name(EAccVarType value) {
  return ::google::protobuf::internal::NameOfEnum(
    EAccVarType_descriptor(), value);
}
inline bool EAccVarType_Parse(
    const ::std::string& name, EAccVarType* value) {
  return ::google::protobuf::internal::ParseNamedEnum<EAccVarType>(
    EAccVarType_descriptor(), name, value);
}
// ===================================================================

class Var : public ::google::protobuf::Message {
 public:
  Var();
  virtual ~Var();

  Var(const Var& from);

  inline Var& operator=(const Var& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const Var& default_instance();

  void Swap(Var* other);

  // implements Message ----------------------------------------------

  Var* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const Var& from);
  void MergeFrom(const Var& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.EVarType type = 1 [default = EVARTYPE_MIN];
  inline bool has_type() const;
  inline void clear_type();
  static const int kTypeFieldNumber = 1;
  inline ::Cmd::EVarType type() const;
  inline void set_type(::Cmd::EVarType value);

  // optional uint32 value = 2 [default = 0];
  inline bool has_value() const;
  inline void clear_value();
  static const int kValueFieldNumber = 2;
  inline ::google::protobuf::uint32 value() const;
  inline void set_value(::google::protobuf::uint32 value);

  // optional uint32 time = 3 [default = 0];
  inline bool has_time() const;
  inline void clear_time();
  static const int kTimeFieldNumber = 3;
  inline ::google::protobuf::uint32 time() const;
  inline void set_time(::google::protobuf::uint32 value);

  // @@protoc_insertion_point(class_scope:Cmd.Var)
 private:
  inline void set_has_type();
  inline void clear_has_type();
  inline void set_has_value();
  inline void clear_has_value();
  inline void set_has_time();
  inline void clear_has_time();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int type_;
  ::google::protobuf::uint32 value_;
  ::google::protobuf::uint32 time_;
  friend void  protobuf_AddDesc_Var_2eproto();
  friend void protobuf_AssignDesc_Var_2eproto();
  friend void protobuf_ShutdownFile_Var_2eproto();

  void InitAsDefaultInstance();
  static Var* default_instance_;
};
// -------------------------------------------------------------------

class StatVar : public ::google::protobuf::Message {
 public:
  StatVar();
  virtual ~StatVar();

  StatVar(const StatVar& from);

  inline StatVar& operator=(const StatVar& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const StatVar& default_instance();

  void Swap(StatVar* other);

  // implements Message ----------------------------------------------

  StatVar* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const StatVar& from);
  void MergeFrom(const StatVar& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional string key = 1;
  inline bool has_key() const;
  inline void clear_key();
  static const int kKeyFieldNumber = 1;
  inline const ::std::string& key() const;
  inline void set_key(const ::std::string& value);
  inline void set_key(const char* value);
  inline void set_key(const char* value, size_t size);
  inline ::std::string* mutable_key();
  inline ::std::string* release_key();
  inline void set_allocated_key(::std::string* key);

  // optional uint32 value = 2 [default = 0];
  inline bool has_value() const;
  inline void clear_value();
  static const int kValueFieldNumber = 2;
  inline ::google::protobuf::uint32 value() const;
  inline void set_value(::google::protobuf::uint32 value);

  // optional uint32 time = 3 [default = 0];
  inline bool has_time() const;
  inline void clear_time();
  static const int kTimeFieldNumber = 3;
  inline ::google::protobuf::uint32 time() const;
  inline void set_time(::google::protobuf::uint32 value);

  // @@protoc_insertion_point(class_scope:Cmd.StatVar)
 private:
  inline void set_has_key();
  inline void clear_has_key();
  inline void set_has_value();
  inline void clear_has_value();
  inline void set_has_time();
  inline void clear_has_time();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  ::std::string* key_;
  ::google::protobuf::uint32 value_;
  ::google::protobuf::uint32 time_;
  friend void  protobuf_AddDesc_Var_2eproto();
  friend void protobuf_AssignDesc_Var_2eproto();
  friend void protobuf_ShutdownFile_Var_2eproto();

  void InitAsDefaultInstance();
  static StatVar* default_instance_;
};
// -------------------------------------------------------------------

class AccVar : public ::google::protobuf::Message {
 public:
  AccVar();
  virtual ~AccVar();

  AccVar(const AccVar& from);

  inline AccVar& operator=(const AccVar& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const AccVar& default_instance();

  void Swap(AccVar* other);

  // implements Message ----------------------------------------------

  AccVar* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const AccVar& from);
  void MergeFrom(const AccVar& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.EAccVarType type = 1 [default = EACCVARTYPE_MIN];
  inline bool has_type() const;
  inline void clear_type();
  static const int kTypeFieldNumber = 1;
  inline ::Cmd::EAccVarType type() const;
  inline void set_type(::Cmd::EAccVarType value);

  // optional uint32 value = 2 [default = 0];
  inline bool has_value() const;
  inline void clear_value();
  static const int kValueFieldNumber = 2;
  inline ::google::protobuf::uint32 value() const;
  inline void set_value(::google::protobuf::uint32 value);

  // optional uint32 time = 3 [default = 0];
  inline bool has_time() const;
  inline void clear_time();
  static const int kTimeFieldNumber = 3;
  inline ::google::protobuf::uint32 time() const;
  inline void set_time(::google::protobuf::uint32 value);

  // @@protoc_insertion_point(class_scope:Cmd.AccVar)
 private:
  inline void set_has_type();
  inline void clear_has_type();
  inline void set_has_value();
  inline void clear_has_value();
  inline void set_has_time();
  inline void clear_has_time();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int type_;
  ::google::protobuf::uint32 value_;
  ::google::protobuf::uint32 time_;
  friend void  protobuf_AddDesc_Var_2eproto();
  friend void protobuf_AssignDesc_Var_2eproto();
  friend void protobuf_ShutdownFile_Var_2eproto();

  void InitAsDefaultInstance();
  static AccVar* default_instance_;
};
// ===================================================================


// ===================================================================

// Var

// optional .Cmd.EVarType type = 1 [default = EVARTYPE_MIN];
inline bool Var::has_type() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void Var::set_has_type() {
  _has_bits_[0] |= 0x00000001u;
}
inline void Var::clear_has_type() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void Var::clear_type() {
  type_ = 0;
  clear_has_type();
}
inline ::Cmd::EVarType Var::type() const {
  // @@protoc_insertion_point(field_get:Cmd.Var.type)
  return static_cast< ::Cmd::EVarType >(type_);
}
inline void Var::set_type(::Cmd::EVarType value) {
  assert(::Cmd::EVarType_IsValid(value));
  set_has_type();
  type_ = value;
  // @@protoc_insertion_point(field_set:Cmd.Var.type)
}

// optional uint32 value = 2 [default = 0];
inline bool Var::has_value() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void Var::set_has_value() {
  _has_bits_[0] |= 0x00000002u;
}
inline void Var::clear_has_value() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void Var::clear_value() {
  value_ = 0u;
  clear_has_value();
}
inline ::google::protobuf::uint32 Var::value() const {
  // @@protoc_insertion_point(field_get:Cmd.Var.value)
  return value_;
}
inline void Var::set_value(::google::protobuf::uint32 value) {
  set_has_value();
  value_ = value;
  // @@protoc_insertion_point(field_set:Cmd.Var.value)
}

// optional uint32 time = 3 [default = 0];
inline bool Var::has_time() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void Var::set_has_time() {
  _has_bits_[0] |= 0x00000004u;
}
inline void Var::clear_has_time() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void Var::clear_time() {
  time_ = 0u;
  clear_has_time();
}
inline ::google::protobuf::uint32 Var::time() const {
  // @@protoc_insertion_point(field_get:Cmd.Var.time)
  return time_;
}
inline void Var::set_time(::google::protobuf::uint32 value) {
  set_has_time();
  time_ = value;
  // @@protoc_insertion_point(field_set:Cmd.Var.time)
}

// -------------------------------------------------------------------

// StatVar

// optional string key = 1;
inline bool StatVar::has_key() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void StatVar::set_has_key() {
  _has_bits_[0] |= 0x00000001u;
}
inline void StatVar::clear_has_key() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void StatVar::clear_key() {
  if (key_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    key_->clear();
  }
  clear_has_key();
}
inline const ::std::string& StatVar::key() const {
  // @@protoc_insertion_point(field_get:Cmd.StatVar.key)
  return *key_;
}
inline void StatVar::set_key(const ::std::string& value) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    key_ = new ::std::string;
  }
  key_->assign(value);
  // @@protoc_insertion_point(field_set:Cmd.StatVar.key)
}
inline void StatVar::set_key(const char* value) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    key_ = new ::std::string;
  }
  key_->assign(value);
  // @@protoc_insertion_point(field_set_char:Cmd.StatVar.key)
}
inline void StatVar::set_key(const char* value, size_t size) {
  set_has_key();
  if (key_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    key_ = new ::std::string;
  }
  key_->assign(reinterpret_cast<const char*>(value), size);
  // @@protoc_insertion_point(field_set_pointer:Cmd.StatVar.key)
}
inline ::std::string* StatVar::mutable_key() {
  set_has_key();
  if (key_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    key_ = new ::std::string;
  }
  // @@protoc_insertion_point(field_mutable:Cmd.StatVar.key)
  return key_;
}
inline ::std::string* StatVar::release_key() {
  clear_has_key();
  if (key_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    return NULL;
  } else {
    ::std::string* temp = key_;
    key_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
    return temp;
  }
}
inline void StatVar::set_allocated_key(::std::string* key) {
  if (key_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    delete key_;
  }
  if (key) {
    set_has_key();
    key_ = key;
  } else {
    clear_has_key();
    key_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
  }
  // @@protoc_insertion_point(field_set_allocated:Cmd.StatVar.key)
}

// optional uint32 value = 2 [default = 0];
inline bool StatVar::has_value() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void StatVar::set_has_value() {
  _has_bits_[0] |= 0x00000002u;
}
inline void StatVar::clear_has_value() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void StatVar::clear_value() {
  value_ = 0u;
  clear_has_value();
}
inline ::google::protobuf::uint32 StatVar::value() const {
  // @@protoc_insertion_point(field_get:Cmd.StatVar.value)
  return value_;
}
inline void StatVar::set_value(::google::protobuf::uint32 value) {
  set_has_value();
  value_ = value;
  // @@protoc_insertion_point(field_set:Cmd.StatVar.value)
}

// optional uint32 time = 3 [default = 0];
inline bool StatVar::has_time() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void StatVar::set_has_time() {
  _has_bits_[0] |= 0x00000004u;
}
inline void StatVar::clear_has_time() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void StatVar::clear_time() {
  time_ = 0u;
  clear_has_time();
}
inline ::google::protobuf::uint32 StatVar::time() const {
  // @@protoc_insertion_point(field_get:Cmd.StatVar.time)
  return time_;
}
inline void StatVar::set_time(::google::protobuf::uint32 value) {
  set_has_time();
  time_ = value;
  // @@protoc_insertion_point(field_set:Cmd.StatVar.time)
}

// -------------------------------------------------------------------

// AccVar

// optional .Cmd.EAccVarType type = 1 [default = EACCVARTYPE_MIN];
inline bool AccVar::has_type() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void AccVar::set_has_type() {
  _has_bits_[0] |= 0x00000001u;
}
inline void AccVar::clear_has_type() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void AccVar::clear_type() {
  type_ = 0;
  clear_has_type();
}
inline ::Cmd::EAccVarType AccVar::type() const {
  // @@protoc_insertion_point(field_get:Cmd.AccVar.type)
  return static_cast< ::Cmd::EAccVarType >(type_);
}
inline void AccVar::set_type(::Cmd::EAccVarType value) {
  assert(::Cmd::EAccVarType_IsValid(value));
  set_has_type();
  type_ = value;
  // @@protoc_insertion_point(field_set:Cmd.AccVar.type)
}

// optional uint32 value = 2 [default = 0];
inline bool AccVar::has_value() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void AccVar::set_has_value() {
  _has_bits_[0] |= 0x00000002u;
}
inline void AccVar::clear_has_value() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void AccVar::clear_value() {
  value_ = 0u;
  clear_has_value();
}
inline ::google::protobuf::uint32 AccVar::value() const {
  // @@protoc_insertion_point(field_get:Cmd.AccVar.value)
  return value_;
}
inline void AccVar::set_value(::google::protobuf::uint32 value) {
  set_has_value();
  value_ = value;
  // @@protoc_insertion_point(field_set:Cmd.AccVar.value)
}

// optional uint32 time = 3 [default = 0];
inline bool AccVar::has_time() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void AccVar::set_has_time() {
  _has_bits_[0] |= 0x00000004u;
}
inline void AccVar::clear_has_time() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void AccVar::clear_time() {
  time_ = 0u;
  clear_has_time();
}
inline ::google::protobuf::uint32 AccVar::time() const {
  // @@protoc_insertion_point(field_get:Cmd.AccVar.time)
  return time_;
}
inline void AccVar::set_time(::google::protobuf::uint32 value) {
  set_has_time();
  time_ = value;
  // @@protoc_insertion_point(field_set:Cmd.AccVar.time)
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace Cmd

#ifndef SWIG
namespace google {
namespace protobuf {

template <> struct is_proto_enum< ::Cmd::EVarType> : ::google::protobuf::internal::true_type {};
template <>
inline const EnumDescriptor* GetEnumDescriptor< ::Cmd::EVarType>() {
  return ::Cmd::EVarType_descriptor();
}
template <> struct is_proto_enum< ::Cmd::EVarTimeType> : ::google::protobuf::internal::true_type {};
template <>
inline const EnumDescriptor* GetEnumDescriptor< ::Cmd::EVarTimeType>() {
  return ::Cmd::EVarTimeType_descriptor();
}
template <> struct is_proto_enum< ::Cmd::EAccVarType> : ::google::protobuf::internal::true_type {};
template <>
inline const EnumDescriptor* GetEnumDescriptor< ::Cmd::EAccVarType>() {
  return ::Cmd::EAccVarType_descriptor();
}

}  // namespace google
}  // namespace protobuf
#endif  // SWIG

// @@protoc_insertion_point(global_scope)

#endif  // PROTOBUF_Var_2eproto__INCLUDED
