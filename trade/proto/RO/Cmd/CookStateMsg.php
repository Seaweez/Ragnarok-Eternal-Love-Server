<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneFood.proto

namespace RO\Cmd {

  class CookStateMsg extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\ECookState */
    public $state = null;
    
    /**  @var int - \RO\Cmd\ECookType */
    public $cooktype = null;
    
    /**  @var int */
    public $progress = null;
    
    /**  @var boolean */
    public $success = null;
    
    /**  @var int[]  */
    public $foodid = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.CookStateMsg');

      // OPTIONAL ENUM state = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "state";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ECookState';
      $descriptor->addField($f);

      // OPTIONAL ENUM cooktype = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "cooktype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ECookType';
      $descriptor->addField($f);

      // OPTIONAL UINT32 progress = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "progress";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL success = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "success";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED UINT32 foodid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "foodid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <state> has a value
     *
     * @return boolean
     */
    public function hasState(){
      return $this->_has(1);
    }
    
    /**
     * Clear <state> value
     *
     * @return \RO\Cmd\CookStateMsg
     */
    public function clearState(){
      return $this->_clear(1);
    }
    
    /**
     * Get <state> value
     *
     * @return int - \RO\Cmd\ECookState
     */
    public function getState(){
      return $this->_get(1);
    }
    
    /**
     * Set <state> value
     *
     * @param int - \RO\Cmd\ECookState $value
     * @return \RO\Cmd\CookStateMsg
     */
    public function setState( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <cooktype> has a value
     *
     * @return boolean
     */
    public function hasCooktype(){
      return $this->_has(2);
    }
    
    /**
     * Clear <cooktype> value
     *
     * @return \RO\Cmd\CookStateMsg
     */
    public function clearCooktype(){
      return $this->_clear(2);
    }
    
    /**
     * Get <cooktype> value
     *
     * @return int - \RO\Cmd\ECookType
     */
    public function getCooktype(){
      return $this->_get(2);
    }
    
    /**
     * Set <cooktype> value
     *
     * @param int - \RO\Cmd\ECookType $value
     * @return \RO\Cmd\CookStateMsg
     */
    public function setCooktype( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <progress> has a value
     *
     * @return boolean
     */
    public function hasProgress(){
      return $this->_has(3);
    }
    
    /**
     * Clear <progress> value
     *
     * @return \RO\Cmd\CookStateMsg
     */
    public function clearProgress(){
      return $this->_clear(3);
    }
    
    /**
     * Get <progress> value
     *
     * @return int
     */
    public function getProgress(){
      return $this->_get(3);
    }
    
    /**
     * Set <progress> value
     *
     * @param int $value
     * @return \RO\Cmd\CookStateMsg
     */
    public function setProgress( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <success> has a value
     *
     * @return boolean
     */
    public function hasSuccess(){
      return $this->_has(4);
    }
    
    /**
     * Clear <success> value
     *
     * @return \RO\Cmd\CookStateMsg
     */
    public function clearSuccess(){
      return $this->_clear(4);
    }
    
    /**
     * Get <success> value
     *
     * @return boolean
     */
    public function getSuccess(){
      return $this->_get(4);
    }
    
    /**
     * Set <success> value
     *
     * @param boolean $value
     * @return \RO\Cmd\CookStateMsg
     */
    public function setSuccess( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <foodid> has a value
     *
     * @return boolean
     */
    public function hasFoodid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <foodid> value
     *
     * @return \RO\Cmd\CookStateMsg
     */
    public function clearFoodid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <foodid> value
     *
     * @param int $idx
     * @return int
     */
    public function getFoodid($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <foodid> value
     *
     * @param int $value
     * @return \RO\Cmd\CookStateMsg
     */
    public function setFoodid( $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <foodid>
     *
     * @return int[]
     */
    public function getFoodidList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <foodid>
     *
     * @param int $value
     * @return \RO\Cmd\CookStateMsg
     */
    public function addFoodid( $value){
     return $this->_add(5, $value);
    }
  }
}

