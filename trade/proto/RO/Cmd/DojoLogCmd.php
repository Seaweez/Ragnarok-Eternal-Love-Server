<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class DojoLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::DOJO_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var int */
    public $hid = null;
    
    /**  @var string */
    public $account = null;
    
    /**  @var int */
    public $pid = null;
    
    /**  @var int */
    public $ispay = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $eid = null;
    
    /**  @var int */
    public $etype = null;
    
    /**  @var int */
    public $dojoid = null;
    
    /**  @var int */
    public $mapid = null;
    
    /**  @var int */
    public $passtype = null;
    
    /**  @var int */
    public $level = null;
    
    /**  @var int[]  */
    public $mark = array();
    
    /**  @var string */
    public $logid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DojoLogCmd');

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
      $f->default   = \RO\Cmd\LogParam::DOJO_LOG_CMD;
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

      // OPTIONAL STRING account = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 pid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ispay = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "ispay";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 eid = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "eid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 etype = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dojoid = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "dojoid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mapid = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "mapid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 passtype = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "passtype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 level = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "level";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED UINT32 mark = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "mark";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
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
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setHid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <account> has a value
     *
     * @return boolean
     */
    public function hasAccount(){
      return $this->_has(6);
    }
    
    /**
     * Clear <account> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearAccount(){
      return $this->_clear(6);
    }
    
    /**
     * Get <account> value
     *
     * @return string
     */
    public function getAccount(){
      return $this->_get(6);
    }
    
    /**
     * Set <account> value
     *
     * @param string $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setAccount( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <pid> has a value
     *
     * @return boolean
     */
    public function hasPid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <pid> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearPid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <pid> value
     *
     * @return int
     */
    public function getPid(){
      return $this->_get(7);
    }
    
    /**
     * Set <pid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setPid( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <ispay> has a value
     *
     * @return boolean
     */
    public function hasIspay(){
      return $this->_has(8);
    }
    
    /**
     * Clear <ispay> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearIspay(){
      return $this->_clear(8);
    }
    
    /**
     * Get <ispay> value
     *
     * @return int
     */
    public function getIspay(){
      return $this->_get(8);
    }
    
    /**
     * Set <ispay> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setIspay( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(9);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearTime(){
      return $this->_clear(9);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(9);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setTime( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <eid> has a value
     *
     * @return boolean
     */
    public function hasEid(){
      return $this->_has(10);
    }
    
    /**
     * Clear <eid> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearEid(){
      return $this->_clear(10);
    }
    
    /**
     * Get <eid> value
     *
     * @return int
     */
    public function getEid(){
      return $this->_get(10);
    }
    
    /**
     * Set <eid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setEid( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(11);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearEtype(){
      return $this->_clear(11);
    }
    
    /**
     * Get <etype> value
     *
     * @return int
     */
    public function getEtype(){
      return $this->_get(11);
    }
    
    /**
     * Set <etype> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setEtype( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <dojoid> has a value
     *
     * @return boolean
     */
    public function hasDojoid(){
      return $this->_has(12);
    }
    
    /**
     * Clear <dojoid> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearDojoid(){
      return $this->_clear(12);
    }
    
    /**
     * Get <dojoid> value
     *
     * @return int
     */
    public function getDojoid(){
      return $this->_get(12);
    }
    
    /**
     * Set <dojoid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setDojoid( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <mapid> has a value
     *
     * @return boolean
     */
    public function hasMapid(){
      return $this->_has(13);
    }
    
    /**
     * Clear <mapid> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearMapid(){
      return $this->_clear(13);
    }
    
    /**
     * Get <mapid> value
     *
     * @return int
     */
    public function getMapid(){
      return $this->_get(13);
    }
    
    /**
     * Set <mapid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setMapid( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <passtype> has a value
     *
     * @return boolean
     */
    public function hasPasstype(){
      return $this->_has(14);
    }
    
    /**
     * Clear <passtype> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearPasstype(){
      return $this->_clear(14);
    }
    
    /**
     * Get <passtype> value
     *
     * @return int
     */
    public function getPasstype(){
      return $this->_get(14);
    }
    
    /**
     * Set <passtype> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setPasstype( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <level> has a value
     *
     * @return boolean
     */
    public function hasLevel(){
      return $this->_has(15);
    }
    
    /**
     * Clear <level> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearLevel(){
      return $this->_clear(15);
    }
    
    /**
     * Get <level> value
     *
     * @return int
     */
    public function getLevel(){
      return $this->_get(15);
    }
    
    /**
     * Set <level> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setLevel( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <mark> has a value
     *
     * @return boolean
     */
    public function hasMark(){
      return $this->_has(16);
    }
    
    /**
     * Clear <mark> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearMark(){
      return $this->_clear(16);
    }
    
    /**
     * Get <mark> value
     *
     * @param int $idx
     * @return int
     */
    public function getMark($idx = NULL){
      return $this->_get(16, $idx);
    }
    
    /**
     * Set <mark> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setMark( $value, $idx = NULL){
      return $this->_set(16, $value, $idx);
    }
    
    /**
     * Get all elements of <mark>
     *
     * @return int[]
     */
    public function getMarkList(){
     return $this->_get(16);
    }
    
    /**
     * Add a new element to <mark>
     *
     * @param int $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function addMark( $value){
     return $this->_add(16, $value);
    }
    
    /**
     * Check if <logid> has a value
     *
     * @return boolean
     */
    public function hasLogid(){
      return $this->_has(17);
    }
    
    /**
     * Clear <logid> value
     *
     * @return \RO\Cmd\DojoLogCmd
     */
    public function clearLogid(){
      return $this->_clear(17);
    }
    
    /**
     * Get <logid> value
     *
     * @return string
     */
    public function getLogid(){
      return $this->_get(17);
    }
    
    /**
     * Set <logid> value
     *
     * @param string $value
     * @return \RO\Cmd\DojoLogCmd
     */
    public function setLogid( $value){
      return $this->_set(17, $value);
    }
  }
}

