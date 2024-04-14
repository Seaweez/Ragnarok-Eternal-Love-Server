<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class ProduceDone extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ItemParam */
    public $param = \RO\Cmd\ItemParam::ITEMPARAM_PRODUCEDONE;
    
    /**  @var int - \RO\Cmd\EProduceType */
    public $type = \RO\Cmd\EProduceType::EPRODUCETYPE_MIN;
    
    /**  @var int */
    public $npcid = 0;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $delay = 0;
    
    /**  @var int */
    public $itemid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ProduceDone');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemParam';
      $f->default   = \RO\Cmd\ItemParam::ITEMPARAM_PRODUCEDONE;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EProduceType';
      $f->default   = \RO\Cmd\EProduceType::EPRODUCETYPE_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT64 npcid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "npcid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 delay = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "delay";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
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
     * @return \RO\Cmd\ProduceDone
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
     * @return \RO\Cmd\ProduceDone
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
     * @return \RO\Cmd\ProduceDone
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ItemParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ItemParam $value
     * @return \RO\Cmd\ProduceDone
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
     * @return \RO\Cmd\ProduceDone
     */
    public function clearType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EProduceType
     */
    public function getType(){
      return $this->_get(3);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EProduceType $value
     * @return \RO\Cmd\ProduceDone
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <npcid> has a value
     *
     * @return boolean
     */
    public function hasNpcid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <npcid> value
     *
     * @return \RO\Cmd\ProduceDone
     */
    public function clearNpcid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <npcid> value
     *
     * @return int
     */
    public function getNpcid(){
      return $this->_get(4);
    }
    
    /**
     * Set <npcid> value
     *
     * @param int $value
     * @return \RO\Cmd\ProduceDone
     */
    public function setNpcid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\ProduceDone
     */
    public function clearCharid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(5);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\ProduceDone
     */
    public function setCharid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delay> has a value
     *
     * @return boolean
     */
    public function hasDelay(){
      return $this->_has(6);
    }
    
    /**
     * Clear <delay> value
     *
     * @return \RO\Cmd\ProduceDone
     */
    public function clearDelay(){
      return $this->_clear(6);
    }
    
    /**
     * Get <delay> value
     *
     * @return int
     */
    public function getDelay(){
      return $this->_get(6);
    }
    
    /**
     * Set <delay> value
     *
     * @param int $value
     * @return \RO\Cmd\ProduceDone
     */
    public function setDelay( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\ProduceDone
     */
    public function clearItemid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(7);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\ProduceDone
     */
    public function setItemid( $value){
      return $this->_set(7, $value);
    }
  }
}
