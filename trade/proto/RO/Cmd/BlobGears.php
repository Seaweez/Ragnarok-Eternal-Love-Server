<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobGears extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $version = null;
    
    /**  @var \RO\Cmd\BlobGearItem[]  */
    public $list = array();
    
    /**  @var \RO\Cmd\BlobGearItem[]  */
    public $exitlist = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobGears');

      // OPTIONAL UINT32 version = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BlobGearItem';
      $descriptor->addField($f);

      // REPEATED MESSAGE exitlist = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "exitlist";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BlobGearItem';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(1);
    }
    
    /**
     * Clear <version> value
     *
     * @return \RO\Cmd\BlobGears
     */
    public function clearVersion(){
      return $this->_clear(1);
    }
    
    /**
     * Get <version> value
     *
     * @return int
     */
    public function getVersion(){
      return $this->_get(1);
    }
    
    /**
     * Set <version> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobGears
     */
    public function setVersion( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <list> has a value
     *
     * @return boolean
     */
    public function hasList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <list> value
     *
     * @return \RO\Cmd\BlobGears
     */
    public function clearList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <list> value
     *
     * @param int $idx
     * @return \RO\Cmd\BlobGearItem
     */
    public function getList($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <list> value
     *
     * @param \RO\Cmd\BlobGearItem $value
     * @return \RO\Cmd\BlobGears
     */
    public function setList(\RO\Cmd\BlobGearItem $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <list>
     *
     * @return \RO\Cmd\BlobGearItem[]
     */
    public function getListList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <list>
     *
     * @param \RO\Cmd\BlobGearItem $value
     * @return \RO\Cmd\BlobGears
     */
    public function addList(\RO\Cmd\BlobGearItem $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <exitlist> has a value
     *
     * @return boolean
     */
    public function hasExitlist(){
      return $this->_has(3);
    }
    
    /**
     * Clear <exitlist> value
     *
     * @return \RO\Cmd\BlobGears
     */
    public function clearExitlist(){
      return $this->_clear(3);
    }
    
    /**
     * Get <exitlist> value
     *
     * @param int $idx
     * @return \RO\Cmd\BlobGearItem
     */
    public function getExitlist($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <exitlist> value
     *
     * @param \RO\Cmd\BlobGearItem $value
     * @return \RO\Cmd\BlobGears
     */
    public function setExitlist(\RO\Cmd\BlobGearItem $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <exitlist>
     *
     * @return \RO\Cmd\BlobGearItem[]
     */
    public function getExitlistList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <exitlist>
     *
     * @param \RO\Cmd\BlobGearItem $value
     * @return \RO\Cmd\BlobGears
     */
    public function addExitlist(\RO\Cmd\BlobGearItem $value){
     return $this->_add(3, $value);
    }
  }
}

