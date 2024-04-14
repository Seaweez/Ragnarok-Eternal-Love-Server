<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class ProfessionSaveRecordCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::RECORD_DATA_PROTOCMD;
    
    /**  @var int - \RO\Cmd\RecordParam */
    public $param = \RO\Cmd\RecordParam::RECORDPARAM_PROFESSION_SAVE;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $branch = 0;
    
    /**  @var string */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ProfessionSaveRecordCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::RECORD_DATA_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\RecordParam';
      $f->default   = \RO\Cmd\RecordParam::RECORDPARAM_PROFESSION_SAVE;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 branch = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "branch";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BYTES data = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
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
     * @return \RO\Cmd\ProfessionSaveRecordCmd
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
     * @return \RO\Cmd\ProfessionSaveRecordCmd
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
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\RecordParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\RecordParam $value
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <branch> has a value
     *
     * @return boolean
     */
    public function hasBranch(){
      return $this->_has(4);
    }
    
    /**
     * Clear <branch> value
     *
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function clearBranch(){
      return $this->_clear(4);
    }
    
    /**
     * Get <branch> value
     *
     * @return int
     */
    public function getBranch(){
      return $this->_get(4);
    }
    
    /**
     * Set <branch> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function setBranch( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(5);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function clearData(){
      return $this->_clear(5);
    }
    
    /**
     * Get <data> value
     *
     * @return string
     */
    public function getData(){
      return $this->_get(5);
    }
    
    /**
     * Set <data> value
     *
     * @param string $value
     * @return \RO\Cmd\ProfessionSaveRecordCmd
     */
    public function setData( $value){
      return $this->_set(5, $value);
    }
  }
}
