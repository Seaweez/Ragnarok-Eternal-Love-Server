<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser.proto

namespace RO\Cmd {

  class FunNpcData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $npcid = null;
    
    /**  @var int */
    public $tempid = null;
    
    /**  @var \RO\Cmd\ScenePos */
    public $pos = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FunNpcData');

      // REQUIRED UINT32 npcid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "npcid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED UINT64 tempid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "tempid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED MESSAGE pos = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <npcid> has a value
     *
     * @return boolean
     */
    public function hasNpcid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <npcid> value
     *
     * @return \RO\Cmd\FunNpcData
     */
    public function clearNpcid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <npcid> value
     *
     * @return int
     */
    public function getNpcid(){
      return $this->_get(1);
    }
    
    /**
     * Set <npcid> value
     *
     * @param int $value
     * @return \RO\Cmd\FunNpcData
     */
    public function setNpcid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tempid> has a value
     *
     * @return boolean
     */
    public function hasTempid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <tempid> value
     *
     * @return \RO\Cmd\FunNpcData
     */
    public function clearTempid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <tempid> value
     *
     * @return int
     */
    public function getTempid(){
      return $this->_get(2);
    }
    
    /**
     * Set <tempid> value
     *
     * @param int $value
     * @return \RO\Cmd\FunNpcData
     */
    public function setTempid( $value){
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
     * @return \RO\Cmd\FunNpcData
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
     * @return \RO\Cmd\FunNpcData
     */
    public function setPos(\RO\Cmd\ScenePos $value){
      return $this->_set(3, $value);
    }
  }
}

