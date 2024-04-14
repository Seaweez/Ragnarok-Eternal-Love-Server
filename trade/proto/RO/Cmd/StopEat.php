<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneFood.proto

namespace RO\Cmd {

  class StopEat extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_FOOD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\FoodParam */
    public $param = \RO\Cmd\FoodParam::FOODPARAM_STOP_EAT;
    
    /**  @var int */
    public $npcguid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.StopEat');

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
      $f->default   = \RO\Cmd\FoodParam::FOODPARAM_STOP_EAT;
      $descriptor->addField($f);

      // OPTIONAL UINT64 npcguid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "npcguid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
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
     * @return \RO\Cmd\StopEat
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
     * @return \RO\Cmd\StopEat
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
     * @return \RO\Cmd\StopEat
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
     * @return \RO\Cmd\StopEat
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
     * @return \RO\Cmd\StopEat
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
     * @return \RO\Cmd\StopEat
     */
    public function setNpcguid( $value){
      return $this->_set(3, $value);
    }
  }
}

