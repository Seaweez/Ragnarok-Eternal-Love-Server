<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class QueryPhotoListGuildSCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildSParam */
    public $param = \RO\Cmd\GuildSParam::GUILDSPARAM_QUERY_PHOTOLIST;
    
    /**  @var int */
    public $guildid = 0;
    
    /**  @var int */
    public $sceneid = 0;
    
    /**  @var boolean */
    public $result = false;
    
    /**  @var \RO\Cmd\PhotoFrame[]  */
    public $frames = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryPhotoListGuildSCmd');

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
      $f->default   = \RO\Cmd\GuildSParam::GUILDSPARAM_QUERY_PHOTOLIST;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guildid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guildid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sceneid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sceneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL result = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // REPEATED MESSAGE frames = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "frames";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\PhotoFrame';
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
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
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
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
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
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
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
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
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
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
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
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function setGuildid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sceneid> has a value
     *
     * @return boolean
     */
    public function hasSceneid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sceneid> value
     *
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function clearSceneid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sceneid> value
     *
     * @return int
     */
    public function getSceneid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sceneid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function setSceneid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(5);
    }
    
    /**
     * Clear <result> value
     *
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function clearResult(){
      return $this->_clear(5);
    }
    
    /**
     * Get <result> value
     *
     * @return boolean
     */
    public function getResult(){
      return $this->_get(5);
    }
    
    /**
     * Set <result> value
     *
     * @param boolean $value
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function setResult( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <frames> has a value
     *
     * @return boolean
     */
    public function hasFrames(){
      return $this->_has(6);
    }
    
    /**
     * Clear <frames> value
     *
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function clearFrames(){
      return $this->_clear(6);
    }
    
    /**
     * Get <frames> value
     *
     * @param int $idx
     * @return \RO\Cmd\PhotoFrame
     */
    public function getFrames($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <frames> value
     *
     * @param \RO\Cmd\PhotoFrame $value
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function setFrames(\RO\Cmd\PhotoFrame $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <frames>
     *
     * @return \RO\Cmd\PhotoFrame[]
     */
    public function getFramesList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <frames>
     *
     * @param \RO\Cmd\PhotoFrame $value
     * @return \RO\Cmd\QueryPhotoListGuildSCmd
     */
    public function addFrames(\RO\Cmd\PhotoFrame $value){
     return $this->_add(6, $value);
    }
  }
}

