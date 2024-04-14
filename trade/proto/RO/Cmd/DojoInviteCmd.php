<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: Dojo.proto

namespace RO\Cmd {

  class DojoInviteCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::DOJO_PROTOCMD;
    
    /**  @var int - \RO\Cmd\DojoParam */
    public $param = \RO\Cmd\DojoParam::EDOJOPARAM_INVITE;
    
    /**  @var int */
    public $dojoid = null;
    
    /**  @var int */
    public $sponsorid = null;
    
    /**  @var string */
    public $sponsorname = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DojoInviteCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::DOJO_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\DojoParam';
      $f->default   = \RO\Cmd\DojoParam::EDOJOPARAM_INVITE;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dojoid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "dojoid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 sponsorid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sponsorid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING sponsorname = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sponsorname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\DojoInviteCmd
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
     * @return \RO\Cmd\DojoInviteCmd
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
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\DojoParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\DojoParam $value
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <dojoid> has a value
     *
     * @return boolean
     */
    public function hasDojoid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <dojoid> value
     *
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function clearDojoid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <dojoid> value
     *
     * @return int
     */
    public function getDojoid(){
      return $this->_get(3);
    }
    
    /**
     * Set <dojoid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function setDojoid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sponsorid> has a value
     *
     * @return boolean
     */
    public function hasSponsorid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sponsorid> value
     *
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function clearSponsorid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sponsorid> value
     *
     * @return int
     */
    public function getSponsorid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sponsorid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function setSponsorid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <sponsorname> has a value
     *
     * @return boolean
     */
    public function hasSponsorname(){
      return $this->_has(5);
    }
    
    /**
     * Clear <sponsorname> value
     *
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function clearSponsorname(){
      return $this->_clear(5);
    }
    
    /**
     * Get <sponsorname> value
     *
     * @return string
     */
    public function getSponsorname(){
      return $this->_get(5);
    }
    
    /**
     * Set <sponsorname> value
     *
     * @param string $value
     * @return \RO\Cmd\DojoInviteCmd
     */
    public function setSponsorname( $value){
      return $this->_set(5, $value);
    }
  }
}

