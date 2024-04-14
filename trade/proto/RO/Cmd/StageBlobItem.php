<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class StageBlobItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $stageID = null;
    
    /**  @var \RO\Cmd\StageStepNormalBlob[]  */
    public $normalist = array();
    
    /**  @var \RO\Cmd\StageStepHardBlob[]  */
    public $hardlist = array();
    
    /**  @var int[]  */
    public $gets = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.StageBlobItem');

      // OPTIONAL UINT32 stageID = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "stageID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE normalist = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "normalist";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\StageStepNormalBlob';
      $descriptor->addField($f);

      // REPEATED MESSAGE hardlist = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "hardlist";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\StageStepHardBlob';
      $descriptor->addField($f);

      // REPEATED UINT32 gets = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "gets";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <stageID> has a value
     *
     * @return boolean
     */
    public function hasStageID(){
      return $this->_has(1);
    }
    
    /**
     * Clear <stageID> value
     *
     * @return \RO\Cmd\StageBlobItem
     */
    public function clearStageID(){
      return $this->_clear(1);
    }
    
    /**
     * Get <stageID> value
     *
     * @return int
     */
    public function getStageID(){
      return $this->_get(1);
    }
    
    /**
     * Set <stageID> value
     *
     * @param int $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function setStageID( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <normalist> has a value
     *
     * @return boolean
     */
    public function hasNormalist(){
      return $this->_has(2);
    }
    
    /**
     * Clear <normalist> value
     *
     * @return \RO\Cmd\StageBlobItem
     */
    public function clearNormalist(){
      return $this->_clear(2);
    }
    
    /**
     * Get <normalist> value
     *
     * @param int $idx
     * @return \RO\Cmd\StageStepNormalBlob
     */
    public function getNormalist($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <normalist> value
     *
     * @param \RO\Cmd\StageStepNormalBlob $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function setNormalist(\RO\Cmd\StageStepNormalBlob $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <normalist>
     *
     * @return \RO\Cmd\StageStepNormalBlob[]
     */
    public function getNormalistList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <normalist>
     *
     * @param \RO\Cmd\StageStepNormalBlob $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function addNormalist(\RO\Cmd\StageStepNormalBlob $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <hardlist> has a value
     *
     * @return boolean
     */
    public function hasHardlist(){
      return $this->_has(3);
    }
    
    /**
     * Clear <hardlist> value
     *
     * @return \RO\Cmd\StageBlobItem
     */
    public function clearHardlist(){
      return $this->_clear(3);
    }
    
    /**
     * Get <hardlist> value
     *
     * @param int $idx
     * @return \RO\Cmd\StageStepHardBlob
     */
    public function getHardlist($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <hardlist> value
     *
     * @param \RO\Cmd\StageStepHardBlob $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function setHardlist(\RO\Cmd\StageStepHardBlob $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <hardlist>
     *
     * @return \RO\Cmd\StageStepHardBlob[]
     */
    public function getHardlistList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <hardlist>
     *
     * @param \RO\Cmd\StageStepHardBlob $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function addHardlist(\RO\Cmd\StageStepHardBlob $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <gets> has a value
     *
     * @return boolean
     */
    public function hasGets(){
      return $this->_has(4);
    }
    
    /**
     * Clear <gets> value
     *
     * @return \RO\Cmd\StageBlobItem
     */
    public function clearGets(){
      return $this->_clear(4);
    }
    
    /**
     * Get <gets> value
     *
     * @param int $idx
     * @return int
     */
    public function getGets($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <gets> value
     *
     * @param int $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function setGets( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <gets>
     *
     * @return int[]
     */
    public function getGetsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <gets>
     *
     * @param int $value
     * @return \RO\Cmd\StageBlobItem
     */
    public function addGets( $value){
     return $this->_add(4, $value);
    }
  }
}

