<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class UserDataSync extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::CMDPARAM_USER_DATA_SYNC;
    
    /**  @var int */
    public $id = 0;
    
    /**  @var float */
    public $x = 0;
    
    /**  @var float */
    public $y = 0;
    
    /**  @var float */
    public $z = 0;
    
    /**  @var \RO\Cmd\UserData[]  */
    public $datas = array();
    
    /**  @var \RO\Cmd\UserAttr[]  */
    public $attrs = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.UserDataSync');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SessionParam';
      $f->default   = \RO\Cmd\SessionParam::CMDPARAM_USER_DATA_SYNC;
      $descriptor->addField($f);

      // OPTIONAL UINT64 id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL FLOAT x = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "x";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL FLOAT y = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "y";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL FLOAT z = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "z";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserData';
      $descriptor->addField($f);

      // REPEATED MESSAGE attrs = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "attrs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserAttr';
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
     * @return \RO\Cmd\UserDataSync
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
     * @return \RO\Cmd\UserDataSync
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
     * @return \RO\Cmd\UserDataSync
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SessionParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SessionParam $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\UserDataSync
     */
    public function clearId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(3);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setId( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <x> has a value
     *
     * @return boolean
     */
    public function hasX(){
      return $this->_has(4);
    }
    
    /**
     * Clear <x> value
     *
     * @return \RO\Cmd\UserDataSync
     */
    public function clearX(){
      return $this->_clear(4);
    }
    
    /**
     * Get <x> value
     *
     * @return float
     */
    public function getX(){
      return $this->_get(4);
    }
    
    /**
     * Set <x> value
     *
     * @param float $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setX( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <y> has a value
     *
     * @return boolean
     */
    public function hasY(){
      return $this->_has(5);
    }
    
    /**
     * Clear <y> value
     *
     * @return \RO\Cmd\UserDataSync
     */
    public function clearY(){
      return $this->_clear(5);
    }
    
    /**
     * Get <y> value
     *
     * @return float
     */
    public function getY(){
      return $this->_get(5);
    }
    
    /**
     * Set <y> value
     *
     * @param float $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setY( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <z> has a value
     *
     * @return boolean
     */
    public function hasZ(){
      return $this->_has(6);
    }
    
    /**
     * Clear <z> value
     *
     * @return \RO\Cmd\UserDataSync
     */
    public function clearZ(){
      return $this->_clear(6);
    }
    
    /**
     * Get <z> value
     *
     * @return float
     */
    public function getZ(){
      return $this->_get(6);
    }
    
    /**
     * Set <z> value
     *
     * @param float $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setZ( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(7);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\UserDataSync
     */
    public function clearDatas(){
      return $this->_clear(7);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserData
     */
    public function getDatas($idx = NULL){
      return $this->_get(7, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\UserData $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setDatas(\RO\Cmd\UserData $value, $idx = NULL){
      return $this->_set(7, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\UserData[]
     */
    public function getDatasList(){
     return $this->_get(7);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\UserData $value
     * @return \RO\Cmd\UserDataSync
     */
    public function addDatas(\RO\Cmd\UserData $value){
     return $this->_add(7, $value);
    }
    
    /**
     * Check if <attrs> has a value
     *
     * @return boolean
     */
    public function hasAttrs(){
      return $this->_has(8);
    }
    
    /**
     * Clear <attrs> value
     *
     * @return \RO\Cmd\UserDataSync
     */
    public function clearAttrs(){
      return $this->_clear(8);
    }
    
    /**
     * Get <attrs> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserAttr
     */
    public function getAttrs($idx = NULL){
      return $this->_get(8, $idx);
    }
    
    /**
     * Set <attrs> value
     *
     * @param \RO\Cmd\UserAttr $value
     * @return \RO\Cmd\UserDataSync
     */
    public function setAttrs(\RO\Cmd\UserAttr $value, $idx = NULL){
      return $this->_set(8, $value, $idx);
    }
    
    /**
     * Get all elements of <attrs>
     *
     * @return \RO\Cmd\UserAttr[]
     */
    public function getAttrsList(){
     return $this->_get(8);
    }
    
    /**
     * Add a new element to <attrs>
     *
     * @param \RO\Cmd\UserAttr $value
     * @return \RO\Cmd\UserDataSync
     */
    public function addAttrs(\RO\Cmd\UserAttr $value){
     return $this->_add(8, $value);
    }
  }
}

