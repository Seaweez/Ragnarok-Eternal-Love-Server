<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneFood.proto

namespace RO\Cmd {

  class QueryFoodNpcInfo extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_FOOD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\FoodParam */
    public $param = \RO\Cmd\FoodParam::FOODPARAM_QUERY_FOOD_NPC_INFO;
    
    /**  @var int */
    public $npcguid = null;
    
    /**  @var int */
    public $eating_people = null;
    
    /**  @var int */
    public $itemid = null;
    
    /**  @var int */
    public $ownerid = null;
    
    /**  @var int */
    public $itemnum = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryFoodNpcInfo');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_FOOD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\FoodParam';
      $f->default   = \RO\Cmd\FoodParam::FOODPARAM_QUERY_FOOD_NPC_INFO;
      $descriptor->addField($f);

      // OPTIONAL UINT64 npcguid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "npcguid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 eating_people = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "eating_people";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 ownerid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "ownerid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemnum = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "itemnum";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
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
     * @return \RO\Cmd\QueryFoodNpcInfo
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
     * @return \RO\Cmd\QueryFoodNpcInfo
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
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\FoodParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\FoodParam $value
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <npcguid> has a value
     *
     * @return boolean
     */
    public function hasNpcguid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <npcguid> value
     *
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function clearNpcguid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <npcguid> value
     *
     * @return int
     */
    public function getNpcguid(){
      return $this->_get(3);
    }
    
    /**
     * Set <npcguid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function setNpcguid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <eating_people> has a value
     *
     * @return boolean
     */
    public function hasEatingPeople(){
      return $this->_has(4);
    }
    
    /**
     * Clear <eating_people> value
     *
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function clearEatingPeople(){
      return $this->_clear(4);
    }
    
    /**
     * Get <eating_people> value
     *
     * @return int
     */
    public function getEatingPeople(){
      return $this->_get(4);
    }
    
    /**
     * Set <eating_people> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function setEatingPeople( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function clearItemid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(5);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function setItemid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <ownerid> has a value
     *
     * @return boolean
     */
    public function hasOwnerid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <ownerid> value
     *
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function clearOwnerid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <ownerid> value
     *
     * @return int
     */
    public function getOwnerid(){
      return $this->_get(6);
    }
    
    /**
     * Set <ownerid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function setOwnerid( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <itemnum> has a value
     *
     * @return boolean
     */
    public function hasItemnum(){
      return $this->_has(7);
    }
    
    /**
     * Clear <itemnum> value
     *
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function clearItemnum(){
      return $this->_clear(7);
    }
    
    /**
     * Get <itemnum> value
     *
     * @return int
     */
    public function getItemnum(){
      return $this->_get(7);
    }
    
    /**
     * Set <itemnum> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryFoodNpcInfo
     */
    public function setItemnum( $value){
      return $this->_set(7, $value);
    }
  }
}

