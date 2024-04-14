<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: WeddingCCmd.proto

namespace RO\Cmd {

  class ClientWeddingManual extends \DrSlump\Protobuf\Message {

    /**  @var int[]  */
    public $packageids = array();
    
    /**  @var int */
    public $ringid = 0;
    
    /**  @var int */
    public $photoindex = 0;
    
    /**  @var int */
    public $phototime = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ClientWeddingManual');

      // REPEATED UINT32 packageids = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "packageids";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ringid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "ringid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 photoindex = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "photoindex";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 phototime = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "phototime";
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
     * Check if <packageids> has a value
     *
     * @return boolean
     */
    public function hasPackageids(){
      return $this->_has(1);
    }
    
    /**
     * Clear <packageids> value
     *
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function clearPackageids(){
      return $this->_clear(1);
    }
    
    /**
     * Get <packageids> value
     *
     * @param int $idx
     * @return int
     */
    public function getPackageids($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <packageids> value
     *
     * @param int $value
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function setPackageids( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <packageids>
     *
     * @return int[]
     */
    public function getPackageidsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <packageids>
     *
     * @param int $value
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function addPackageids( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <ringid> has a value
     *
     * @return boolean
     */
    public function hasRingid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <ringid> value
     *
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function clearRingid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <ringid> value
     *
     * @return int
     */
    public function getRingid(){
      return $this->_get(2);
    }
    
    /**
     * Set <ringid> value
     *
     * @param int $value
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function setRingid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <photoindex> has a value
     *
     * @return boolean
     */
    public function hasPhotoindex(){
      return $this->_has(3);
    }
    
    /**
     * Clear <photoindex> value
     *
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function clearPhotoindex(){
      return $this->_clear(3);
    }
    
    /**
     * Get <photoindex> value
     *
     * @return int
     */
    public function getPhotoindex(){
      return $this->_get(3);
    }
    
    /**
     * Set <photoindex> value
     *
     * @param int $value
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function setPhotoindex( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <phototime> has a value
     *
     * @return boolean
     */
    public function hasPhototime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <phototime> value
     *
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function clearPhototime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <phototime> value
     *
     * @return int
     */
    public function getPhototime(){
      return $this->_get(4);
    }
    
    /**
     * Set <phototime> value
     *
     * @param int $value
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function setPhototime( $value){
      return $this->_set(4, $value);
    }
  }
}
