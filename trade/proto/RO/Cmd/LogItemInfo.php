<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class LogItemInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = null;
    
    /**  @var int - \RO\Cmd\ETakeStatus */
    public $status = null;
    
    /**  @var int - \RO\Cmd\EOperType */
    public $logtype = null;
    
    /**  @var int */
    public $itemid = null;
    
    /**  @var int */
    public $refine_lv = null;
    
    /**  @var boolean */
    public $damage = null;
    
    /**  @var int */
    public $tradetime = null;
    
    /**  @var int */
    public $count = null;
    
    /**  @var int */
    public $price = null;
    
    /**  @var int */
    public $tax = null;
    
    /**  @var int */
    public $getmoney = null;
    
    /**  @var int */
    public $costmoney = null;
    
    /**  @var int */
    public $failcount = null;
    
    /**  @var int */
    public $retmoney = null;
    
    /**  @var int */
    public $totalcount = null;
    
    /**  @var int */
    public $endtime = null;
    
    /**  @var \RO\Cmd\NameInfo */
    public $name_info = null;
    
    /**  @var boolean */
    public $is_many_people = null;
    
    /**  @var \RO\Cmd\NameInfoList */
    public $name_list = null;
    
    /**  @var \RO\Cmd\ItemData */
    public $itemdata = null;
    
    /**  @var int */
    public $receiverid = null;
    
    /**  @var string */
    public $receivername = null;
    
    /**  @var int */
    public $receiverzoneid = null;
    
    /**  @var int */
    public $quota = null;
    
    /**  @var int */
    public $background = null;
    
    /**  @var int */
    public $expiretime = null;
    
    /**  @var int */
    public $ret_cost = null;
    
    /**  @var boolean */
    public $cangive = null;
    
    /**  @var int - \RO\Cmd\ETradeType */
    public $trade_type = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
    
    /**  @var boolean */
    public $is_public = null;
    
    /**  @var int */
    public $quota_cost = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.LogItemInfo');

      // OPTIONAL UINT64 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM status = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETakeStatus';
      $descriptor->addField($f);

      // OPTIONAL ENUM logtype = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "logtype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EOperType';
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 refine_lv = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "refine_lv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL damage = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "damage";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 tradetime = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "tradetime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 count = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 price = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "price";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 tax = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "tax";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 getmoney = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "getmoney";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 costmoney = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "costmoney";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 failcount = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "failcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 retmoney = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "retmoney";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 totalcount = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "totalcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 endtime = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "endtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE name_info = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "name_info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\NameInfo';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_many_people = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "is_many_people";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE name_list = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "name_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\NameInfoList';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE itemdata = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "itemdata";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemData';
      $descriptor->addField($f);

      // OPTIONAL UINT64 receiverid = 21
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 21;
      $f->name      = "receiverid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING receivername = 22
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 22;
      $f->name      = "receivername";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 receiverzoneid = 23
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 23;
      $f->name      = "receiverzoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 quota = 24
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 24;
      $f->name      = "quota";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 background = 25
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 25;
      $f->name      = "background";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 expiretime = 26
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 26;
      $f->name      = "expiretime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ret_cost = 27
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 27;
      $f->name      = "ret_cost";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL cangive = 28
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 28;
      $f->name      = "cangive";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM trade_type = 29
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 29;
      $f->name      = "trade_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETradeType';
      $f->default   = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
      $descriptor->addField($f);

      // OPTIONAL BOOL is_public = 30
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 30;
      $f->name      = "is_public";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 quota_cost = 31
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 31;
      $f->name      = "quota_cost";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(2);
    }
    
    /**
     * Clear <status> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearStatus(){
      return $this->_clear(2);
    }
    
    /**
     * Get <status> value
     *
     * @return int - \RO\Cmd\ETakeStatus
     */
    public function getStatus(){
      return $this->_get(2);
    }
    
    /**
     * Set <status> value
     *
     * @param int - \RO\Cmd\ETakeStatus $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setStatus( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <logtype> has a value
     *
     * @return boolean
     */
    public function hasLogtype(){
      return $this->_has(3);
    }
    
    /**
     * Clear <logtype> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearLogtype(){
      return $this->_clear(3);
    }
    
    /**
     * Get <logtype> value
     *
     * @return int - \RO\Cmd\EOperType
     */
    public function getLogtype(){
      return $this->_get(3);
    }
    
    /**
     * Set <logtype> value
     *
     * @param int - \RO\Cmd\EOperType $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setLogtype( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearItemid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(4);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setItemid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <refine_lv> has a value
     *
     * @return boolean
     */
    public function hasRefineLv(){
      return $this->_has(5);
    }
    
    /**
     * Clear <refine_lv> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearRefineLv(){
      return $this->_clear(5);
    }
    
    /**
     * Get <refine_lv> value
     *
     * @return int
     */
    public function getRefineLv(){
      return $this->_get(5);
    }
    
    /**
     * Set <refine_lv> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setRefineLv( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <damage> has a value
     *
     * @return boolean
     */
    public function hasDamage(){
      return $this->_has(6);
    }
    
    /**
     * Clear <damage> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearDamage(){
      return $this->_clear(6);
    }
    
    /**
     * Get <damage> value
     *
     * @return boolean
     */
    public function getDamage(){
      return $this->_get(6);
    }
    
    /**
     * Set <damage> value
     *
     * @param boolean $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setDamage( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <tradetime> has a value
     *
     * @return boolean
     */
    public function hasTradetime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <tradetime> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearTradetime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <tradetime> value
     *
     * @return int
     */
    public function getTradetime(){
      return $this->_get(7);
    }
    
    /**
     * Set <tradetime> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setTradetime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <count> has a value
     *
     * @return boolean
     */
    public function hasCount(){
      return $this->_has(8);
    }
    
    /**
     * Clear <count> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearCount(){
      return $this->_clear(8);
    }
    
    /**
     * Get <count> value
     *
     * @return int
     */
    public function getCount(){
      return $this->_get(8);
    }
    
    /**
     * Set <count> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setCount( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <price> has a value
     *
     * @return boolean
     */
    public function hasPrice(){
      return $this->_has(20);
    }
    
    /**
     * Clear <price> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearPrice(){
      return $this->_clear(20);
    }
    
    /**
     * Get <price> value
     *
     * @return int
     */
    public function getPrice(){
      return $this->_get(20);
    }
    
    /**
     * Set <price> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setPrice( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <tax> has a value
     *
     * @return boolean
     */
    public function hasTax(){
      return $this->_has(9);
    }
    
    /**
     * Clear <tax> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearTax(){
      return $this->_clear(9);
    }
    
    /**
     * Get <tax> value
     *
     * @return int
     */
    public function getTax(){
      return $this->_get(9);
    }
    
    /**
     * Set <tax> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setTax( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <getmoney> has a value
     *
     * @return boolean
     */
    public function hasGetmoney(){
      return $this->_has(10);
    }
    
    /**
     * Clear <getmoney> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearGetmoney(){
      return $this->_clear(10);
    }
    
    /**
     * Get <getmoney> value
     *
     * @return int
     */
    public function getGetmoney(){
      return $this->_get(10);
    }
    
    /**
     * Set <getmoney> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setGetmoney( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <costmoney> has a value
     *
     * @return boolean
     */
    public function hasCostmoney(){
      return $this->_has(11);
    }
    
    /**
     * Clear <costmoney> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearCostmoney(){
      return $this->_clear(11);
    }
    
    /**
     * Get <costmoney> value
     *
     * @return int
     */
    public function getCostmoney(){
      return $this->_get(11);
    }
    
    /**
     * Set <costmoney> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setCostmoney( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <failcount> has a value
     *
     * @return boolean
     */
    public function hasFailcount(){
      return $this->_has(12);
    }
    
    /**
     * Clear <failcount> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearFailcount(){
      return $this->_clear(12);
    }
    
    /**
     * Get <failcount> value
     *
     * @return int
     */
    public function getFailcount(){
      return $this->_get(12);
    }
    
    /**
     * Set <failcount> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setFailcount( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <retmoney> has a value
     *
     * @return boolean
     */
    public function hasRetmoney(){
      return $this->_has(13);
    }
    
    /**
     * Clear <retmoney> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearRetmoney(){
      return $this->_clear(13);
    }
    
    /**
     * Get <retmoney> value
     *
     * @return int
     */
    public function getRetmoney(){
      return $this->_get(13);
    }
    
    /**
     * Set <retmoney> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setRetmoney( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <totalcount> has a value
     *
     * @return boolean
     */
    public function hasTotalcount(){
      return $this->_has(14);
    }
    
    /**
     * Clear <totalcount> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearTotalcount(){
      return $this->_clear(14);
    }
    
    /**
     * Get <totalcount> value
     *
     * @return int
     */
    public function getTotalcount(){
      return $this->_get(14);
    }
    
    /**
     * Set <totalcount> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setTotalcount( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <endtime> has a value
     *
     * @return boolean
     */
    public function hasEndtime(){
      return $this->_has(15);
    }
    
    /**
     * Clear <endtime> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearEndtime(){
      return $this->_clear(15);
    }
    
    /**
     * Get <endtime> value
     *
     * @return int
     */
    public function getEndtime(){
      return $this->_get(15);
    }
    
    /**
     * Set <endtime> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setEndtime( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <name_info> has a value
     *
     * @return boolean
     */
    public function hasNameInfo(){
      return $this->_has(16);
    }
    
    /**
     * Clear <name_info> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearNameInfo(){
      return $this->_clear(16);
    }
    
    /**
     * Get <name_info> value
     *
     * @return \RO\Cmd\NameInfo
     */
    public function getNameInfo(){
      return $this->_get(16);
    }
    
    /**
     * Set <name_info> value
     *
     * @param \RO\Cmd\NameInfo $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setNameInfo(\RO\Cmd\NameInfo $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <is_many_people> has a value
     *
     * @return boolean
     */
    public function hasIsManyPeople(){
      return $this->_has(17);
    }
    
    /**
     * Clear <is_many_people> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearIsManyPeople(){
      return $this->_clear(17);
    }
    
    /**
     * Get <is_many_people> value
     *
     * @return boolean
     */
    public function getIsManyPeople(){
      return $this->_get(17);
    }
    
    /**
     * Set <is_many_people> value
     *
     * @param boolean $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setIsManyPeople( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <name_list> has a value
     *
     * @return boolean
     */
    public function hasNameList(){
      return $this->_has(18);
    }
    
    /**
     * Clear <name_list> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearNameList(){
      return $this->_clear(18);
    }
    
    /**
     * Get <name_list> value
     *
     * @return \RO\Cmd\NameInfoList
     */
    public function getNameList(){
      return $this->_get(18);
    }
    
    /**
     * Set <name_list> value
     *
     * @param \RO\Cmd\NameInfoList $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setNameList(\RO\Cmd\NameInfoList $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <itemdata> has a value
     *
     * @return boolean
     */
    public function hasItemdata(){
      return $this->_has(19);
    }
    
    /**
     * Clear <itemdata> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearItemdata(){
      return $this->_clear(19);
    }
    
    /**
     * Get <itemdata> value
     *
     * @return \RO\Cmd\ItemData
     */
    public function getItemdata(){
      return $this->_get(19);
    }
    
    /**
     * Set <itemdata> value
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setItemdata(\RO\Cmd\ItemData $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <receiverid> has a value
     *
     * @return boolean
     */
    public function hasReceiverid(){
      return $this->_has(21);
    }
    
    /**
     * Clear <receiverid> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearReceiverid(){
      return $this->_clear(21);
    }
    
    /**
     * Get <receiverid> value
     *
     * @return int
     */
    public function getReceiverid(){
      return $this->_get(21);
    }
    
    /**
     * Set <receiverid> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setReceiverid( $value){
      return $this->_set(21, $value);
    }
    
    /**
     * Check if <receivername> has a value
     *
     * @return boolean
     */
    public function hasReceivername(){
      return $this->_has(22);
    }
    
    /**
     * Clear <receivername> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearReceivername(){
      return $this->_clear(22);
    }
    
    /**
     * Get <receivername> value
     *
     * @return string
     */
    public function getReceivername(){
      return $this->_get(22);
    }
    
    /**
     * Set <receivername> value
     *
     * @param string $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setReceivername( $value){
      return $this->_set(22, $value);
    }
    
    /**
     * Check if <receiverzoneid> has a value
     *
     * @return boolean
     */
    public function hasReceiverzoneid(){
      return $this->_has(23);
    }
    
    /**
     * Clear <receiverzoneid> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearReceiverzoneid(){
      return $this->_clear(23);
    }
    
    /**
     * Get <receiverzoneid> value
     *
     * @return int
     */
    public function getReceiverzoneid(){
      return $this->_get(23);
    }
    
    /**
     * Set <receiverzoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setReceiverzoneid( $value){
      return $this->_set(23, $value);
    }
    
    /**
     * Check if <quota> has a value
     *
     * @return boolean
     */
    public function hasQuota(){
      return $this->_has(24);
    }
    
    /**
     * Clear <quota> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearQuota(){
      return $this->_clear(24);
    }
    
    /**
     * Get <quota> value
     *
     * @return int
     */
    public function getQuota(){
      return $this->_get(24);
    }
    
    /**
     * Set <quota> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setQuota( $value){
      return $this->_set(24, $value);
    }
    
    /**
     * Check if <background> has a value
     *
     * @return boolean
     */
    public function hasBackground(){
      return $this->_has(25);
    }
    
    /**
     * Clear <background> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearBackground(){
      return $this->_clear(25);
    }
    
    /**
     * Get <background> value
     *
     * @return int
     */
    public function getBackground(){
      return $this->_get(25);
    }
    
    /**
     * Set <background> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setBackground( $value){
      return $this->_set(25, $value);
    }
    
    /**
     * Check if <expiretime> has a value
     *
     * @return boolean
     */
    public function hasExpiretime(){
      return $this->_has(26);
    }
    
    /**
     * Clear <expiretime> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearExpiretime(){
      return $this->_clear(26);
    }
    
    /**
     * Get <expiretime> value
     *
     * @return int
     */
    public function getExpiretime(){
      return $this->_get(26);
    }
    
    /**
     * Set <expiretime> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setExpiretime( $value){
      return $this->_set(26, $value);
    }
    
    /**
     * Check if <ret_cost> has a value
     *
     * @return boolean
     */
    public function hasRetCost(){
      return $this->_has(27);
    }
    
    /**
     * Clear <ret_cost> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearRetCost(){
      return $this->_clear(27);
    }
    
    /**
     * Get <ret_cost> value
     *
     * @return int
     */
    public function getRetCost(){
      return $this->_get(27);
    }
    
    /**
     * Set <ret_cost> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setRetCost( $value){
      return $this->_set(27, $value);
    }
    
    /**
     * Check if <cangive> has a value
     *
     * @return boolean
     */
    public function hasCangive(){
      return $this->_has(28);
    }
    
    /**
     * Clear <cangive> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearCangive(){
      return $this->_clear(28);
    }
    
    /**
     * Get <cangive> value
     *
     * @return boolean
     */
    public function getCangive(){
      return $this->_get(28);
    }
    
    /**
     * Set <cangive> value
     *
     * @param boolean $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setCangive( $value){
      return $this->_set(28, $value);
    }
    
    /**
     * Check if <trade_type> has a value
     *
     * @return boolean
     */
    public function hasTradeType(){
      return $this->_has(29);
    }
    
    /**
     * Clear <trade_type> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearTradeType(){
      return $this->_clear(29);
    }
    
    /**
     * Get <trade_type> value
     *
     * @return int - \RO\Cmd\ETradeType
     */
    public function getTradeType(){
      return $this->_get(29);
    }
    
    /**
     * Set <trade_type> value
     *
     * @param int - \RO\Cmd\ETradeType $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setTradeType( $value){
      return $this->_set(29, $value);
    }
    
    /**
     * Check if <is_public> has a value
     *
     * @return boolean
     */
    public function hasIsPublic(){
      return $this->_has(30);
    }
    
    /**
     * Clear <is_public> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearIsPublic(){
      return $this->_clear(30);
    }
    
    /**
     * Get <is_public> value
     *
     * @return boolean
     */
    public function getIsPublic(){
      return $this->_get(30);
    }
    
    /**
     * Set <is_public> value
     *
     * @param boolean $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setIsPublic( $value){
      return $this->_set(30, $value);
    }
    
    /**
     * Check if <quota_cost> has a value
     *
     * @return boolean
     */
    public function hasQuotaCost(){
      return $this->_has(31);
    }
    
    /**
     * Clear <quota_cost> value
     *
     * @return \RO\Cmd\LogItemInfo
     */
    public function clearQuotaCost(){
      return $this->_clear(31);
    }
    
    /**
     * Get <quota_cost> value
     *
     * @return int
     */
    public function getQuotaCost(){
      return $this->_get(31);
    }
    
    /**
     * Set <quota_cost> value
     *
     * @param int $value
     * @return \RO\Cmd\LogItemInfo
     */
    public function setQuotaCost( $value){
      return $this->_set(31, $value);
    }
  }
}
