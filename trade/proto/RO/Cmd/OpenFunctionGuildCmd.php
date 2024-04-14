<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class OpenFunctionGuildCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildParam */
    public $param = \RO\Cmd\GuildParam::GUILDPARAM_OPEN_FUNCTION;
    
    /**  @var int - \RO\Cmd\EGuildFunction */
    public $func = \RO\Cmd\EGuildFunction::EGUILDFUNCTION_MIN;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.OpenFunctionGuildCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_USER_GUILD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildParam';
      $f->default   = \RO\Cmd\GuildParam::GUILDPARAM_OPEN_FUNCTION;
      $descriptor->addField($f);

      // OPTIONAL ENUM func = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "func";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EGuildFunction';
      $f->default   = \RO\Cmd\EGuildFunction::EGUILDFUNCTION_MIN;
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
     * @return \RO\Cmd\OpenFunctionGuildCmd
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
     * @return \RO\Cmd\OpenFunctionGuildCmd
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
     * @return \RO\Cmd\OpenFunctionGuildCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\GuildParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\GuildParam $value
     * @return \RO\Cmd\OpenFunctionGuildCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <func> has a value
     *
     * @return boolean
     */
    public function hasFunc(){
      return $this->_has(3);
    }
    
    /**
     * Clear <func> value
     *
     * @return \RO\Cmd\OpenFunctionGuildCmd
     */
    public function clearFunc(){
      return $this->_clear(3);
    }
    
    /**
     * Get <func> value
     *
     * @return int - \RO\Cmd\EGuildFunction
     */
    public function getFunc(){
      return $this->_get(3);
    }
    
    /**
     * Set <func> value
     *
     * @param int - \RO\Cmd\EGuildFunction $value
     * @return \RO\Cmd\OpenFunctionGuildCmd
     */
    public function setFunc( $value){
      return $this->_set(3, $value);
    }
  }
}
