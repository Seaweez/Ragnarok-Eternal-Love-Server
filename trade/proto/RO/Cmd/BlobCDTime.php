<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobCDTime extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $version = null;
    
    /**  @var \RO\Cmd\CDTimeItem[]  */
    public $list = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobCDTime');

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
      $f->reference = '\RO\Cmd\CDTimeItem';
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
     * @return \RO\Cmd\BlobCDTime
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
     * @return \RO\Cmd\BlobCDTime
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
     * @return \RO\Cmd\BlobCDTime
     */
    public function clearList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <list> value
     *
     * @param int $idx
     * @return \RO\Cmd\CDTimeItem
     */
    public function getList($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <list> value
     *
     * @param \RO\Cmd\CDTimeItem $value
     * @return \RO\Cmd\BlobCDTime
     */
    public function setList(\RO\Cmd\CDTimeItem $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <list>
     *
     * @return \RO\Cmd\CDTimeItem[]
     */
    public function getListList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <list>
     *
     * @param \RO\Cmd\CDTimeItem $value
     * @return \RO\Cmd\BlobCDTime
     */
    public function addList(\RO\Cmd\CDTimeItem $value){
     return $this->_add(2, $value);
    }
  }
}
