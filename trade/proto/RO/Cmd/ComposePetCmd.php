<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class ComposePetCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
    
    /**  @var int - \RO\Cmd\PetParam */
    public $param = \RO\Cmd\PetParam::PETPARAM_COMPOSE;
    
    /**  @var int */
    public $id = null;
    
    /**  @var string[]  */
    public $eggguids = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ComposePetCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\PetParam';
      $f->default   = \RO\Cmd\PetParam::PETPARAM_COMPOSE;
      $descriptor->addField($f);

      // REQUIRED UINT32 id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REPEATED STRING eggguids = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "eggguids";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
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
     * @return \RO\Cmd\ComposePetCmd
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
     * @return \RO\Cmd\ComposePetCmd
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
     * @return \RO\Cmd\ComposePetCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\PetParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\PetParam $value
     * @return \RO\Cmd\ComposePetCmd
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
     * @return \RO\Cmd\ComposePetCmd
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
     * @return \RO\Cmd\ComposePetCmd
     */
    public function setId( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <eggguids> has a value
     *
     * @return boolean
     */
    public function hasEggguids(){
      return $this->_has(4);
    }
    
    /**
     * Clear <eggguids> value
     *
     * @return \RO\Cmd\ComposePetCmd
     */
    public function clearEggguids(){
      return $this->_clear(4);
    }
    
    /**
     * Get <eggguids> value
     *
     * @param int $idx
     * @return string
     */
    public function getEggguids($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <eggguids> value
     *
     * @param string $value
     * @return \RO\Cmd\ComposePetCmd
     */
    public function setEggguids( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <eggguids>
     *
     * @return string[]
     */
    public function getEggguidsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <eggguids>
     *
     * @param string $value
     * @return \RO\Cmd\ComposePetCmd
     */
    public function addEggguids( $value){
     return $this->_add(4, $value);
    }
  }
}

