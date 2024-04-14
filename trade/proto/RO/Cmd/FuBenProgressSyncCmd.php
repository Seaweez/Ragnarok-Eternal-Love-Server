<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: FuBenCmd.proto

namespace RO\Cmd {

  class FuBenProgressSyncCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::FUBEN_PROTOCMD;
    
    /**  @var int - \RO\Cmd\FuBenParam */
    public $param = \RO\Cmd\FuBenParam::FUBEN_GOAL_SYNC;
    
    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $progress = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FuBenProgressSyncCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::FUBEN_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\FuBenParam';
      $f->default   = \RO\Cmd\FuBenParam::FUBEN_GOAL_SYNC;
      $descriptor->addField($f);

      // OPTIONAL UINT32 id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 progress = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "progress";
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
     * @return \RO\Cmd\FuBenProgressSyncCmd
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
     * @return \RO\Cmd\FuBenProgressSyncCmd
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
     * @return \RO\Cmd\FuBenProgressSyncCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\FuBenParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\FuBenParam $value
     * @return \RO\Cmd\FuBenProgressSyncCmd
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
     * @return \RO\Cmd\FuBenProgressSyncCmd
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
     * @return \RO\Cmd\FuBenProgressSyncCmd
     */
    public function setId( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <progress> has a value
     *
     * @return boolean
     */
    public function hasProgress(){
      return $this->_has(4);
    }
    
    /**
     * Clear <progress> value
     *
     * @return \RO\Cmd\FuBenProgressSyncCmd
     */
    public function clearProgress(){
      return $this->_clear(4);
    }
    
    /**
     * Get <progress> value
     *
     * @return int
     */
    public function getProgress(){
      return $this->_get(4);
    }
    
    /**
     * Set <progress> value
     *
     * @param int $value
     * @return \RO\Cmd\FuBenProgressSyncCmd
     */
    public function setProgress( $value){
      return $this->_set(4, $value);
    }
  }
}

