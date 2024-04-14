<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneMap.proto

namespace RO\Cmd {

  class MapTrap extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = null;
    
    /**  @var int */
    public $skillID = null;
    
    /**  @var \RO\Cmd\ScenePos */
    public $pos = null;
    
    /**  @var int */
    public $dir = null;
    
    /**  @var int */
    public $masterid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.MapTrap');

      // OPTIONAL UINT64 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 skillID = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "skillID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pos = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      // OPTIONAL UINT32 dir = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "dir";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 masterid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "masterid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\MapTrap
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\MapTrap
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <skillID> has a value
     *
     * @return boolean
     */
    public function hasSkillID(){
      return $this->_has(2);
    }
    
    /**
     * Clear <skillID> value
     *
     * @return \RO\Cmd\MapTrap
     */
    public function clearSkillID(){
      return $this->_clear(2);
    }
    
    /**
     * Get <skillID> value
     *
     * @return int
     */
    public function getSkillID(){
      return $this->_get(2);
    }
    
    /**
     * Set <skillID> value
     *
     * @param int $value
     * @return \RO\Cmd\MapTrap
     */
    public function setSkillID( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(3);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\MapTrap
     */
    public function clearPos(){
      return $this->_clear(3);
    }
    
    /**
     * Get <pos> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getPos(){
      return $this->_get(3);
    }
    
    /**
     * Set <pos> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\MapTrap
     */
    public function setPos(\RO\Cmd\ScenePos $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <dir> has a value
     *
     * @return boolean
     */
    public function hasDir(){
      return $this->_has(4);
    }
    
    /**
     * Clear <dir> value
     *
     * @return \RO\Cmd\MapTrap
     */
    public function clearDir(){
      return $this->_clear(4);
    }
    
    /**
     * Get <dir> value
     *
     * @return int
     */
    public function getDir(){
      return $this->_get(4);
    }
    
    /**
     * Set <dir> value
     *
     * @param int $value
     * @return \RO\Cmd\MapTrap
     */
    public function setDir( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <masterid> has a value
     *
     * @return boolean
     */
    public function hasMasterid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <masterid> value
     *
     * @return \RO\Cmd\MapTrap
     */
    public function clearMasterid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <masterid> value
     *
     * @return int
     */
    public function getMasterid(){
      return $this->_get(5);
    }
    
    /**
     * Set <masterid> value
     *
     * @param int $value
     * @return \RO\Cmd\MapTrap
     */
    public function setMasterid( $value){
      return $this->_set(5, $value);
    }
  }
}

