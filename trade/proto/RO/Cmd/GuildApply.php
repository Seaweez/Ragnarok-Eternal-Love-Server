<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class GuildApply extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $zoneid = 0;
    
    /**  @var int */
    public $baselevel = 0;
    
    /**  @var int */
    public $portrait = 0;
    
    /**  @var int */
    public $frame = 0;
    
    /**  @var int */
    public $entertime = 0;
    
    /**  @var int */
    public $hair = 0;
    
    /**  @var int */
    public $haircolor = 0;
    
    /**  @var int */
    public $body = 0;
    
    /**  @var int */
    public $head = 0;
    
    /**  @var int */
    public $face = 0;
    
    /**  @var int */
    public $mouth = 0;
    
    /**  @var int */
    public $eye = 0;
    
    /**  @var int - \RO\Cmd\EGender */
    public $gender = \RO\Cmd\EGender::EGENDER_MIN;
    
    /**  @var int - \RO\Cmd\EProfession */
    public $profession = \RO\Cmd\EProfession::EPROFESSION_MIN;
    
    /**  @var string */
    public $name = null;
    
    /**  @var int */
    public $accid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildApply');

      // OPTIONAL UINT64 charid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 zoneid = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "zoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 baselevel = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "baselevel";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 portrait = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "portrait";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 frame = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "frame";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 entertime = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "entertime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 hair = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "hair";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 haircolor = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "haircolor";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 body = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "body";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 head = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "head";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 face = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "face";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mouth = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "mouth";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 eye = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "eye";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM gender = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "gender";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EGender';
      $f->default   = \RO\Cmd\EGender::EGENDER_MIN;
      $descriptor->addField($f);

      // OPTIONAL ENUM profession = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "profession";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EProfession';
      $f->default   = \RO\Cmd\EProfession::EPROFESSION_MIN;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 accid = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "accid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearCharid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(1);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setCharid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <zoneid> has a value
     *
     * @return boolean
     */
    public function hasZoneid(){
      return $this->_has(12);
    }
    
    /**
     * Clear <zoneid> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearZoneid(){
      return $this->_clear(12);
    }
    
    /**
     * Get <zoneid> value
     *
     * @return int
     */
    public function getZoneid(){
      return $this->_get(12);
    }
    
    /**
     * Set <zoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setZoneid( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <baselevel> has a value
     *
     * @return boolean
     */
    public function hasBaselevel(){
      return $this->_has(2);
    }
    
    /**
     * Clear <baselevel> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearBaselevel(){
      return $this->_clear(2);
    }
    
    /**
     * Get <baselevel> value
     *
     * @return int
     */
    public function getBaselevel(){
      return $this->_get(2);
    }
    
    /**
     * Set <baselevel> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setBaselevel( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <portrait> has a value
     *
     * @return boolean
     */
    public function hasPortrait(){
      return $this->_has(3);
    }
    
    /**
     * Clear <portrait> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearPortrait(){
      return $this->_clear(3);
    }
    
    /**
     * Get <portrait> value
     *
     * @return int
     */
    public function getPortrait(){
      return $this->_get(3);
    }
    
    /**
     * Set <portrait> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setPortrait( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <frame> has a value
     *
     * @return boolean
     */
    public function hasFrame(){
      return $this->_has(4);
    }
    
    /**
     * Clear <frame> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearFrame(){
      return $this->_clear(4);
    }
    
    /**
     * Get <frame> value
     *
     * @return int
     */
    public function getFrame(){
      return $this->_get(4);
    }
    
    /**
     * Set <frame> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setFrame( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <entertime> has a value
     *
     * @return boolean
     */
    public function hasEntertime(){
      return $this->_has(5);
    }
    
    /**
     * Clear <entertime> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearEntertime(){
      return $this->_clear(5);
    }
    
    /**
     * Get <entertime> value
     *
     * @return int
     */
    public function getEntertime(){
      return $this->_get(5);
    }
    
    /**
     * Set <entertime> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setEntertime( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <hair> has a value
     *
     * @return boolean
     */
    public function hasHair(){
      return $this->_has(9);
    }
    
    /**
     * Clear <hair> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearHair(){
      return $this->_clear(9);
    }
    
    /**
     * Get <hair> value
     *
     * @return int
     */
    public function getHair(){
      return $this->_get(9);
    }
    
    /**
     * Set <hair> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setHair( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <haircolor> has a value
     *
     * @return boolean
     */
    public function hasHaircolor(){
      return $this->_has(10);
    }
    
    /**
     * Clear <haircolor> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearHaircolor(){
      return $this->_clear(10);
    }
    
    /**
     * Get <haircolor> value
     *
     * @return int
     */
    public function getHaircolor(){
      return $this->_get(10);
    }
    
    /**
     * Set <haircolor> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setHaircolor( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <body> has a value
     *
     * @return boolean
     */
    public function hasBody(){
      return $this->_has(11);
    }
    
    /**
     * Clear <body> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearBody(){
      return $this->_clear(11);
    }
    
    /**
     * Get <body> value
     *
     * @return int
     */
    public function getBody(){
      return $this->_get(11);
    }
    
    /**
     * Set <body> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setBody( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <head> has a value
     *
     * @return boolean
     */
    public function hasHead(){
      return $this->_has(14);
    }
    
    /**
     * Clear <head> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearHead(){
      return $this->_clear(14);
    }
    
    /**
     * Get <head> value
     *
     * @return int
     */
    public function getHead(){
      return $this->_get(14);
    }
    
    /**
     * Set <head> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setHead( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <face> has a value
     *
     * @return boolean
     */
    public function hasFace(){
      return $this->_has(15);
    }
    
    /**
     * Clear <face> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearFace(){
      return $this->_clear(15);
    }
    
    /**
     * Get <face> value
     *
     * @return int
     */
    public function getFace(){
      return $this->_get(15);
    }
    
    /**
     * Set <face> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setFace( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <mouth> has a value
     *
     * @return boolean
     */
    public function hasMouth(){
      return $this->_has(16);
    }
    
    /**
     * Clear <mouth> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearMouth(){
      return $this->_clear(16);
    }
    
    /**
     * Get <mouth> value
     *
     * @return int
     */
    public function getMouth(){
      return $this->_get(16);
    }
    
    /**
     * Set <mouth> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setMouth( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <eye> has a value
     *
     * @return boolean
     */
    public function hasEye(){
      return $this->_has(17);
    }
    
    /**
     * Clear <eye> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearEye(){
      return $this->_clear(17);
    }
    
    /**
     * Get <eye> value
     *
     * @return int
     */
    public function getEye(){
      return $this->_get(17);
    }
    
    /**
     * Set <eye> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setEye( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <gender> has a value
     *
     * @return boolean
     */
    public function hasGender(){
      return $this->_has(6);
    }
    
    /**
     * Clear <gender> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearGender(){
      return $this->_clear(6);
    }
    
    /**
     * Get <gender> value
     *
     * @return int - \RO\Cmd\EGender
     */
    public function getGender(){
      return $this->_get(6);
    }
    
    /**
     * Set <gender> value
     *
     * @param int - \RO\Cmd\EGender $value
     * @return \RO\Cmd\GuildApply
     */
    public function setGender( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <profession> has a value
     *
     * @return boolean
     */
    public function hasProfession(){
      return $this->_has(7);
    }
    
    /**
     * Clear <profession> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearProfession(){
      return $this->_clear(7);
    }
    
    /**
     * Get <profession> value
     *
     * @return int - \RO\Cmd\EProfession
     */
    public function getProfession(){
      return $this->_get(7);
    }
    
    /**
     * Set <profession> value
     *
     * @param int - \RO\Cmd\EProfession $value
     * @return \RO\Cmd\GuildApply
     */
    public function setProfession( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(8);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearName(){
      return $this->_clear(8);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(8);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\GuildApply
     */
    public function setName( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <accid> has a value
     *
     * @return boolean
     */
    public function hasAccid(){
      return $this->_has(13);
    }
    
    /**
     * Clear <accid> value
     *
     * @return \RO\Cmd\GuildApply
     */
    public function clearAccid(){
      return $this->_clear(13);
    }
    
    /**
     * Get <accid> value
     *
     * @return int
     */
    public function getAccid(){
      return $this->_get(13);
    }
    
    /**
     * Set <accid> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildApply
     */
    public function setAccid( $value){
      return $this->_set(13, $value);
    }
  }
}

