<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class SkillDamage extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $skillid = null;
    
    /**  @var int */
    public $damage = null;
    
    /**  @var int */
    public $type = null;
    
    /**  @var int */
    public $targetid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SkillDamage');

      // OPTIONAL UINT32 skillid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "skillid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 damage = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "damage";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 targetid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "targetid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <skillid> has a value
     *
     * @return boolean
     */
    public function hasSkillid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <skillid> value
     *
     * @return \RO\Cmd\SkillDamage
     */
    public function clearSkillid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <skillid> value
     *
     * @return int
     */
    public function getSkillid(){
      return $this->_get(1);
    }
    
    /**
     * Set <skillid> value
     *
     * @param int $value
     * @return \RO\Cmd\SkillDamage
     */
    public function setSkillid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <damage> has a value
     *
     * @return boolean
     */
    public function hasDamage(){
      return $this->_has(2);
    }
    
    /**
     * Clear <damage> value
     *
     * @return \RO\Cmd\SkillDamage
     */
    public function clearDamage(){
      return $this->_clear(2);
    }
    
    /**
     * Get <damage> value
     *
     * @return int
     */
    public function getDamage(){
      return $this->_get(2);
    }
    
    /**
     * Set <damage> value
     *
     * @param int $value
     * @return \RO\Cmd\SkillDamage
     */
    public function setDamage( $value){
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
     * @return \RO\Cmd\SkillDamage
     */
    public function clearType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type> value
     *
     * @return int
     */
    public function getType(){
      return $this->_get(3);
    }
    
    /**
     * Set <type> value
     *
     * @param int $value
     * @return \RO\Cmd\SkillDamage
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <targetid> has a value
     *
     * @return boolean
     */
    public function hasTargetid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <targetid> value
     *
     * @return \RO\Cmd\SkillDamage
     */
    public function clearTargetid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <targetid> value
     *
     * @return int
     */
    public function getTargetid(){
      return $this->_get(4);
    }
    
    /**
     * Set <targetid> value
     *
     * @param int $value
     * @return \RO\Cmd\SkillDamage
     */
    public function setTargetid( $value){
      return $this->_set(4, $value);
    }
  }
}

