<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class GvgUserPartInGuildSCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildSParam */
    public $param = \RO\Cmd\GuildSParam::GUILDSPARAM_GVG_USER_PARTIN;
    
    /**  @var int */
    public $guildid = null;
    
    /**  @var int */
    public $charid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GvgUserPartInGuildSCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::GUILD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildSParam';
      $f->default   = \RO\Cmd\GuildSParam::GUILDSPARAM_GVG_USER_PARTIN;
      $descriptor->addField($f);

      // REQUIRED UINT64 guildid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guildid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED UINT64 charid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
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
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
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
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
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
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\GuildSParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\GuildSParam $value
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <guildid> has a value
     *
     * @return boolean
     */
    public function hasGuildid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <guildid> value
     *
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
     */
    public function clearGuildid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guildid> value
     *
     * @return int
     */
    public function getGuildid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guildid> value
     *
     * @param int $value
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
     */
    public function setGuildid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
     */
    public function clearCharid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(4);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\GvgUserPartInGuildSCmd
     */
    public function setCharid( $value){
      return $this->_set(4, $value);
    }
  }
}
