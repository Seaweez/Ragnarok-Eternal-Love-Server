<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneChatRoom.proto

namespace RO\Cmd {

  class ChatRoomDataSync extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_CHATROOM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\EChatRoomParam */
    public $param = \RO\Cmd\EChatRoomParam::ECHATROOMPARAM_ROOMDATASYNC;
    
    /**  @var int - \RO\Cmd\EChatRoomSync */
    public $esync = \RO\Cmd\EChatRoomSync::ECHATROOMSYNC_UPDATE;
    
    /**  @var \RO\Cmd\ChatRoomSummary */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChatRoomDataSync');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_CHATROOM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatRoomParam';
      $f->default   = \RO\Cmd\EChatRoomParam::ECHATROOMPARAM_ROOMDATASYNC;
      $descriptor->addField($f);

      // OPTIONAL ENUM esync = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "esync";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatRoomSync';
      $f->default   = \RO\Cmd\EChatRoomSync::ECHATROOMSYNC_UPDATE;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE data = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ChatRoomSummary';
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
     * @return \RO\Cmd\ChatRoomDataSync
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
     * @return \RO\Cmd\ChatRoomDataSync
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
     * @return \RO\Cmd\ChatRoomDataSync
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\EChatRoomParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\EChatRoomParam $value
     * @return \RO\Cmd\ChatRoomDataSync
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <esync> has a value
     *
     * @return boolean
     */
    public function hasEsync(){
      return $this->_has(3);
    }
    
    /**
     * Clear <esync> value
     *
     * @return \RO\Cmd\ChatRoomDataSync
     */
    public function clearEsync(){
      return $this->_clear(3);
    }
    
    /**
     * Get <esync> value
     *
     * @return int - \RO\Cmd\EChatRoomSync
     */
    public function getEsync(){
      return $this->_get(3);
    }
    
    /**
     * Set <esync> value
     *
     * @param int - \RO\Cmd\EChatRoomSync $value
     * @return \RO\Cmd\ChatRoomDataSync
     */
    public function setEsync( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\ChatRoomDataSync
     */
    public function clearData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <data> value
     *
     * @return \RO\Cmd\ChatRoomSummary
     */
    public function getData(){
      return $this->_get(4);
    }
    
    /**
     * Set <data> value
     *
     * @param \RO\Cmd\ChatRoomSummary $value
     * @return \RO\Cmd\ChatRoomDataSync
     */
    public function setData(\RO\Cmd\ChatRoomSummary $value){
      return $this->_set(4, $value);
    }
  }
}

