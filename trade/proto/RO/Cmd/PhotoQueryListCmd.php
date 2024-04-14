<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: PhotoCmd.proto

namespace RO\Cmd {

  class PhotoQueryListCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PHOTO_PROTOCMD;
    
    /**  @var int - \RO\Cmd\PhotoParam */
    public $param = \RO\Cmd\PhotoParam::PHOTOPARAM_QUERY_PHOTO_LIST;
    
    /**  @var \RO\Cmd\PhotoItem[]  */
    public $photos = array();
    
    /**  @var int */
    public $size = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PhotoQueryListCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_PHOTO_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\PhotoParam';
      $f->default   = \RO\Cmd\PhotoParam::PHOTOPARAM_QUERY_PHOTO_LIST;
      $descriptor->addField($f);

      // REPEATED MESSAGE photos = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "photos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\PhotoItem';
      $descriptor->addField($f);

      // OPTIONAL UINT32 size = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "size";
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
     * @return \RO\Cmd\PhotoQueryListCmd
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
     * @return \RO\Cmd\PhotoQueryListCmd
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
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\PhotoParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\PhotoParam $value
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <photos> has a value
     *
     * @return boolean
     */
    public function hasPhotos(){
      return $this->_has(3);
    }
    
    /**
     * Clear <photos> value
     *
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function clearPhotos(){
      return $this->_clear(3);
    }
    
    /**
     * Get <photos> value
     *
     * @param int $idx
     * @return \RO\Cmd\PhotoItem
     */
    public function getPhotos($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <photos> value
     *
     * @param \RO\Cmd\PhotoItem $value
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function setPhotos(\RO\Cmd\PhotoItem $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <photos>
     *
     * @return \RO\Cmd\PhotoItem[]
     */
    public function getPhotosList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <photos>
     *
     * @param \RO\Cmd\PhotoItem $value
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function addPhotos(\RO\Cmd\PhotoItem $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <size> has a value
     *
     * @return boolean
     */
    public function hasSize(){
      return $this->_has(4);
    }
    
    /**
     * Clear <size> value
     *
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function clearSize(){
      return $this->_clear(4);
    }
    
    /**
     * Get <size> value
     *
     * @return int
     */
    public function getSize(){
      return $this->_get(4);
    }
    
    /**
     * Set <size> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoQueryListCmd
     */
    public function setSize( $value){
      return $this->_set(4, $value);
    }
  }
}

