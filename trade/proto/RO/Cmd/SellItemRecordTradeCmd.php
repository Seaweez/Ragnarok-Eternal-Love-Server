<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class SellItemRecordTradeCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
    
    /**  @var int - \RO\Cmd\RecordUserTradeParam */
    public $param = \RO\Cmd\RecordUserTradeParam::SELL_ITEM_RECORDTRADE;
    
    /**  @var \RO\Cmd\TradeItemBaseInfo */
    public $item_info = null;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var int - \RO\Cmd\ETRADE_RET_CODE */
    public $ret = null;
    
    /**  @var int - \RO\Cmd\ETradeType */
    public $type = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SellItemRecordTradeCmd');

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
      $f->default   = \RO\Cmd\RecordUserTradeParam::SELL_ITEM_RECORDTRADE;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_info = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "item_info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\TradeItemBaseInfo';
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM ret = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "ret";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETRADE_RET_CODE';
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "type";
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
     * @return \RO\Cmd\SellItemRecordTradeCmd
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
     * @return \RO\Cmd\SellItemRecordTradeCmd
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
     * @return \RO\Cmd\SellItemRecordTradeCmd
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
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <item_info> has a value
     *
     * @return boolean
     */
    public function hasItemInfo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <item_info> value
     *
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function clearItemInfo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <item_info> value
     *
     * @return \RO\Cmd\TradeItemBaseInfo
     */
    public function getItemInfo(){
      return $this->_get(3);
    }
    
    /**
     * Set <item_info> value
     *
     * @param \RO\Cmd\TradeItemBaseInfo $value
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function setItemInfo(\RO\Cmd\TradeItemBaseInfo $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function clearCharid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(4);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function setCharid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <ret> has a value
     *
     * @return boolean
     */
    public function hasRet(){
      return $this->_has(5);
    }
    
    /**
     * Clear <ret> value
     *
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function clearRet(){
      return $this->_clear(5);
    }
    
    /**
     * Get <ret> value
     *
     * @return int - \RO\Cmd\ETRADE_RET_CODE
     */
    public function getRet(){
      return $this->_get(5);
    }
    
    /**
     * Set <ret> value
     *
     * @param int - \RO\Cmd\ETRADE_RET_CODE $value
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function setRet( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(6);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function clearType(){
      return $this->_clear(6);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\ETradeType
     */
    public function getType(){
      return $this->_get(6);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\ETradeType $value
     * @return \RO\Cmd\SellItemRecordTradeCmd
     */
    public function setType( $value){
      return $this->_set(6, $value);
    }
  }
}

