<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class QueryTreasureGuildSCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildSParam */
    public $param = \RO\Cmd\GuildSParam::GUILDSPARAM_TREASURE_QUERY;
    
    /**  @var int */
    public $guildid = 0;
    
    /**  @var int */
    public $sceneid = 0;
    
    /**  @var boolean */
    public $result = false;
    
    /**  @var \RO\Cmd\GuildTreasure[]  */
    public $treasures = array();
    
    /**  @var int */
    public $bcoin_count = 0;
    
    /**  @var int */
    public $asset_count = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryTreasureGuildSCmd');

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
      $f->default   = \RO\Cmd\GuildSParam::GUILDSPARAM_TREASURE_QUERY;
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

      // REPEATED MESSAGE treasures = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "treasures";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildTreasure';
      $descriptor->addField($f);

      // OPTIONAL UINT32 bcoin_count = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "bcoin_count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 asset_count = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "asset_count";
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
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
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function setResult( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <treasures> has a value
     *
     * @return boolean
     */
    public function hasTreasures(){
      return $this->_has(6);
    }
    
    /**
     * Clear <treasures> value
     *
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function clearTreasures(){
      return $this->_clear(6);
    }
    
    /**
     * Get <treasures> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildTreasure
     */
    public function getTreasures($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <treasures> value
     *
     * @param \RO\Cmd\GuildTreasure $value
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function setTreasures(\RO\Cmd\GuildTreasure $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <treasures>
     *
     * @return \RO\Cmd\GuildTreasure[]
     */
    public function getTreasuresList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <treasures>
     *
     * @param \RO\Cmd\GuildTreasure $value
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function addTreasures(\RO\Cmd\GuildTreasure $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <bcoin_count> has a value
     *
     * @return boolean
     */
    public function hasBcoinCount(){
      return $this->_has(7);
    }
    
    /**
     * Clear <bcoin_count> value
     *
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function clearBcoinCount(){
      return $this->_clear(7);
    }
    
    /**
     * Get <bcoin_count> value
     *
     * @return int
     */
    public function getBcoinCount(){
      return $this->_get(7);
    }
    
    /**
     * Set <bcoin_count> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function setBcoinCount( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <asset_count> has a value
     *
     * @return boolean
     */
    public function hasAssetCount(){
      return $this->_has(8);
    }
    
    /**
     * Clear <asset_count> value
     *
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function clearAssetCount(){
      return $this->_clear(8);
    }
    
    /**
     * Get <asset_count> value
     *
     * @return int
     */
    public function getAssetCount(){
      return $this->_get(8);
    }
    
    /**
     * Set <asset_count> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryTreasureGuildSCmd
     */
    public function setAssetCount( $value){
      return $this->_set(8, $value);
    }
  }
}

