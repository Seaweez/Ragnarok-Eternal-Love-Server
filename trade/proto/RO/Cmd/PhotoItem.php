<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: PhotoCmd.proto

namespace RO\Cmd {

  class PhotoItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $index = 0;
    
    /**  @var int */
    public $mapid = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var int */
    public $anglez = 0;
    
    /**  @var boolean */
    public $isupload = false;
    
    /**  @var int */
    public $charid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PhotoItem');

      // OPTIONAL UINT32 index = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "index";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mapid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "mapid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 anglez = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "anglez";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL isupload = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "isupload";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <index> has a value
     *
     * @return boolean
     */
    public function hasIndex(){
      return $this->_has(1);
    }
    
    /**
     * Clear <index> value
     *
     * @return \RO\Cmd\PhotoItem
     */
    public function clearIndex(){
      return $this->_clear(1);
    }
    
    /**
     * Get <index> value
     *
     * @return int
     */
    public function getIndex(){
      return $this->_get(1);
    }
    
    /**
     * Set <index> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoItem
     */
    public function setIndex( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <mapid> has a value
     *
     * @return boolean
     */
    public function hasMapid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <mapid> value
     *
     * @return \RO\Cmd\PhotoItem
     */
    public function clearMapid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <mapid> value
     *
     * @return int
     */
    public function getMapid(){
      return $this->_get(2);
    }
    
    /**
     * Set <mapid> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoItem
     */
    public function setMapid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\PhotoItem
     */
    public function clearTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoItem
     */
    public function setTime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <anglez> has a value
     *
     * @return boolean
     */
    public function hasAnglez(){
      return $this->_has(4);
    }
    
    /**
     * Clear <anglez> value
     *
     * @return \RO\Cmd\PhotoItem
     */
    public function clearAnglez(){
      return $this->_clear(4);
    }
    
    /**
     * Get <anglez> value
     *
     * @return int
     */
    public function getAnglez(){
      return $this->_get(4);
    }
    
    /**
     * Set <anglez> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoItem
     */
    public function setAnglez( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <isupload> has a value
     *
     * @return boolean
     */
    public function hasIsupload(){
      return $this->_has(5);
    }
    
    /**
     * Clear <isupload> value
     *
     * @return \RO\Cmd\PhotoItem
     */
    public function clearIsupload(){
      return $this->_clear(5);
    }
    
    /**
     * Get <isupload> value
     *
     * @return boolean
     */
    public function getIsupload(){
      return $this->_get(5);
    }
    
    /**
     * Set <isupload> value
     *
     * @param boolean $value
     * @return \RO\Cmd\PhotoItem
     */
    public function setIsupload( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\PhotoItem
     */
    public function clearCharid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(6);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoItem
     */
    public function setCharid( $value){
      return $this->_set(6, $value);
    }
  }
}
