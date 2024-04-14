<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: AstrolabeCmd.proto

namespace RO\Cmd {

  class AstrolabeQueryResetCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_ASTROLABE_PROTOCMD;
    
    /**  @var int - \RO\Cmd\AstrolabeParam */
    public $param = \RO\Cmd\AstrolabeParam::ASTROLABEPARAM_QUERY_RESET;
    
    /**  @var int - \RO\Cmd\EAstrolabeType */
    public $type = null;
    
    /**  @var \RO\Cmd\AstrolabeCostData[]  */
    public $items = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.AstrolabeQueryResetCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_ASTROLABE_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\AstrolabeParam';
      $f->default   = \RO\Cmd\AstrolabeParam::ASTROLABEPARAM_QUERY_RESET;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EAstrolabeType';
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\AstrolabeCostData';
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
     * @return \RO\Cmd\AstrolabeQueryResetCmd
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
     * @return \RO\Cmd\AstrolabeQueryResetCmd
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
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\AstrolabeParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\AstrolabeParam $value
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function clearType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EAstrolabeType
     */
    public function getType(){
      return $this->_get(3);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EAstrolabeType $value
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <items> has a value
     *
     * @return boolean
     */
    public function hasItems(){
      return $this->_has(4);
    }
    
    /**
     * Clear <items> value
     *
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function clearItems(){
      return $this->_clear(4);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\AstrolabeCostData
     */
    public function getItems($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\AstrolabeCostData $value
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function setItems(\RO\Cmd\AstrolabeCostData $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\AstrolabeCostData[]
     */
    public function getItemsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\AstrolabeCostData $value
     * @return \RO\Cmd\AstrolabeQueryResetCmd
     */
    public function addItems(\RO\Cmd\AstrolabeCostData $value){
     return $this->_add(4, $value);
    }
  }
}
