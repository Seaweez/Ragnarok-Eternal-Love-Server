<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class ReqServerPriceRecordTradeCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
    
    /**  @var int - \RO\Cmd\RecordUserTradeParam */
    public $param = \RO\Cmd\RecordUserTradeParam::REQ_SERVER_PRICE_RECORDTRADE;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var \RO\Cmd\ItemData */
    public $itemData = null;
    
    /**  @var int */
    public $price = null;
    
    /**  @var boolean */
    public $issell = false;
    
    /**  @var int - \RO\Cmd\StateType */
    public $statetype = null;
    
    /**  @var int */
    public $count = 0;
    
    /**  @var int */
    public $buyer_count = 0;
    
    /**  @var int */
    public $end_time = 0;
    
    /**  @var int - \RO\Cmd\ETradeType */
    public $trade_type = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ReqServerPriceRecordTradeCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\RecordUserTradeParam';
      $f->default   = \RO\Cmd\RecordUserTradeParam::REQ_SERVER_PRICE_RECORDTRADE;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE itemData = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "itemData";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemData';
      $descriptor->addField($f);

      // OPTIONAL UINT32 price = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "price";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL issell = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "issell";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL ENUM statetype = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "statetype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\StateType';
      $descriptor->addField($f);

      // OPTIONAL UINT32 count = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 buyer_count = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "buyer_count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 end_time = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "end_time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM trade_type = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "trade_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETradeType';
      $f->default   = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
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
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
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
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
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
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\RecordUserTradeParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\RecordUserTradeParam $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <itemData> has a value
     *
     * @return boolean
     */
    public function hasItemData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <itemData> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearItemData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <itemData> value
     *
     * @return \RO\Cmd\ItemData
     */
    public function getItemData(){
      return $this->_get(4);
    }
    
    /**
     * Set <itemData> value
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setItemData(\RO\Cmd\ItemData $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <price> has a value
     *
     * @return boolean
     */
    public function hasPrice(){
      return $this->_has(5);
    }
    
    /**
     * Clear <price> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearPrice(){
      return $this->_clear(5);
    }
    
    /**
     * Get <price> value
     *
     * @return int
     */
    public function getPrice(){
      return $this->_get(5);
    }
    
    /**
     * Set <price> value
     *
     * @param int $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setPrice( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <issell> has a value
     *
     * @return boolean
     */
    public function hasIssell(){
      return $this->_has(6);
    }
    
    /**
     * Clear <issell> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearIssell(){
      return $this->_clear(6);
    }
    
    /**
     * Get <issell> value
     *
     * @return boolean
     */
    public function getIssell(){
      return $this->_get(6);
    }
    
    /**
     * Set <issell> value
     *
     * @param boolean $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setIssell( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <statetype> has a value
     *
     * @return boolean
     */
    public function hasStatetype(){
      return $this->_has(7);
    }
    
    /**
     * Clear <statetype> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearStatetype(){
      return $this->_clear(7);
    }
    
    /**
     * Get <statetype> value
     *
     * @return int - \RO\Cmd\StateType
     */
    public function getStatetype(){
      return $this->_get(7);
    }
    
    /**
     * Set <statetype> value
     *
     * @param int - \RO\Cmd\StateType $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setStatetype( $value){
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
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
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
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setCount( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <buyer_count> has a value
     *
     * @return boolean
     */
    public function hasBuyerCount(){
      return $this->_has(9);
    }
    
    /**
     * Clear <buyer_count> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearBuyerCount(){
      return $this->_clear(9);
    }
    
    /**
     * Get <buyer_count> value
     *
     * @return int
     */
    public function getBuyerCount(){
      return $this->_get(9);
    }
    
    /**
     * Set <buyer_count> value
     *
     * @param int $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setBuyerCount( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <end_time> has a value
     *
     * @return boolean
     */
    public function hasEndTime(){
      return $this->_has(10);
    }
    
    /**
     * Clear <end_time> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearEndTime(){
      return $this->_clear(10);
    }
    
    /**
     * Get <end_time> value
     *
     * @return int
     */
    public function getEndTime(){
      return $this->_get(10);
    }
    
    /**
     * Set <end_time> value
     *
     * @param int $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setEndTime( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <trade_type> has a value
     *
     * @return boolean
     */
    public function hasTradeType(){
      return $this->_has(11);
    }
    
    /**
     * Clear <trade_type> value
     *
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function clearTradeType(){
      return $this->_clear(11);
    }
    
    /**
     * Get <trade_type> value
     *
     * @return int - \RO\Cmd\ETradeType
     */
    public function getTradeType(){
      return $this->_get(11);
    }
    
    /**
     * Set <trade_type> value
     *
     * @param int - \RO\Cmd\ETradeType $value
     * @return \RO\Cmd\ReqServerPriceRecordTradeCmd
     */
    public function setTradeType( $value){
      return $this->_set(11, $value);
    }
  }
}

