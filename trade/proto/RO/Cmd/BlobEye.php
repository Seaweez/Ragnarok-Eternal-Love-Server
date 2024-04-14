<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobEye extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $curid = 0;
    
    /**  @var int[]  */
    public $unlockids = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobEye');

      // OPTIONAL UINT32 curid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "curid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED UINT32 unlockids = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "unlockids";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <curid> has a value
     *
     * @return boolean
     */
    public function hasCurid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <curid> value
     *
     * @return \RO\Cmd\BlobEye
     */
    public function clearCurid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <curid> value
     *
     * @return int
     */
    public function getCurid(){
      return $this->_get(1);
    }
    
    /**
     * Set <curid> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobEye
     */
    public function setCurid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unlockids> has a value
     *
     * @return boolean
     */
    public function hasUnlockids(){
      return $this->_has(2);
    }
    
    /**
     * Clear <unlockids> value
     *
     * @return \RO\Cmd\BlobEye
     */
    public function clearUnlockids(){
      return $this->_clear(2);
    }
    
    /**
     * Get <unlockids> value
     *
     * @param int $idx
     * @return int
     */
    public function getUnlockids($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <unlockids> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobEye
     */
    public function setUnlockids( $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <unlockids>
     *
     * @return int[]
     */
    public function getUnlockidsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <unlockids>
     *
     * @param int $value
     * @return \RO\Cmd\BlobEye
     */
    public function addUnlockids( $value){
     return $this->_add(2, $value);
    }
  }
}
