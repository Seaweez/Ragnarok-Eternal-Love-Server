<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: PhotoCmd.proto

namespace RO\Cmd {

  class FrameShow extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $frameid = 0;
    
    /**  @var \RO\Cmd\GuildPhoto */
    public $photo = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FrameShow');

      // OPTIONAL UINT32 frameid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "frameid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE photo = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "photo";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildPhoto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <frameid> has a value
     *
     * @return boolean
     */
    public function hasFrameid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <frameid> value
     *
     * @return \RO\Cmd\FrameShow
     */
    public function clearFrameid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <frameid> value
     *
     * @return int
     */
    public function getFrameid(){
      return $this->_get(1);
    }
    
    /**
     * Set <frameid> value
     *
     * @param int $value
     * @return \RO\Cmd\FrameShow
     */
    public function setFrameid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <photo> has a value
     *
     * @return boolean
     */
    public function hasPhoto(){
      return $this->_has(2);
    }
    
    /**
     * Clear <photo> value
     *
     * @return \RO\Cmd\FrameShow
     */
    public function clearPhoto(){
      return $this->_clear(2);
    }
    
    /**
     * Get <photo> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function getPhoto(){
      return $this->_get(2);
    }
    
    /**
     * Set <photo> value
     *
     * @param \RO\Cmd\GuildPhoto $value
     * @return \RO\Cmd\FrameShow
     */
    public function setPhoto(\RO\Cmd\GuildPhoto $value){
      return $this->_set(2, $value);
    }
  }
}

