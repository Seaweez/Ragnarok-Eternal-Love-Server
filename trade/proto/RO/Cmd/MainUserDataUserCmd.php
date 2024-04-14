<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser.proto

namespace RO\Cmd {

  class MainUserDataUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PROTOCMD;
    
    /**  @var int - \RO\Cmd\CmdParam */
    public $param = \RO\Cmd\CmdParam::MAIN_USER_DATA_USER_CMD;
    
    /**  @var \RO\Cmd\MainUserData */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.MainUserDataUserCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\CmdParam';
      $f->default   = \RO\Cmd\CmdParam::MAIN_USER_DATA_USER_CMD;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE data = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\MainUserData';
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
     * @return \RO\Cmd\MainUserDataUserCmd
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
     * @return \RO\Cmd\MainUserDataUserCmd
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
     * @return \RO\Cmd\MainUserDataUserCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\CmdParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\CmdParam $value
     * @return \RO\Cmd\MainUserDataUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(3);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\MainUserDataUserCmd
     */
    public function clearData(){
      return $this->_clear(3);
    }
    
    /**
     * Get <data> value
     *
     * @return \RO\Cmd\MainUserData
     */
    public function getData(){
      return $this->_get(3);
    }
    
    /**
     * Set <data> value
     *
     * @param \RO\Cmd\MainUserData $value
     * @return \RO\Cmd\MainUserDataUserCmd
     */
    public function setData(\RO\Cmd\MainUserData $value){
      return $this->_set(3, $value);
    }
  }
}

