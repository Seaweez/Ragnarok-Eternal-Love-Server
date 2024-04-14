<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class QuerySealTimer extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SessionParam */
    public $param = \RO\Cmd\SessionParam::CMDPARAM_SEALTIMER;
    
    /**  @var int */
    public $userid = 0;
    
    /**  @var int */
    public $teamid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QuerySealTimer');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SessionParam';
      $f->default   = \RO\Cmd\SessionParam::CMDPARAM_SEALTIMER;
      $descriptor->addField($f);

      // REQUIRED UINT64 userid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "userid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->default   = 0;
      $descriptor->addField($f);

      // REQUIRED UINT64 teamid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "teamid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
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
     * @return \RO\Cmd\QuerySealTimer
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
     * @return \RO\Cmd\QuerySealTimer
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
     * @return \RO\Cmd\QuerySealTimer
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SessionParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SessionParam $value
     * @return \RO\Cmd\QuerySealTimer
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <userid> has a value
     *
     * @return boolean
     */
    public function hasUserid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <userid> value
     *
     * @return \RO\Cmd\QuerySealTimer
     */
    public function clearUserid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <userid> value
     *
     * @return int
     */
    public function getUserid(){
      return $this->_get(3);
    }
    
    /**
     * Set <userid> value
     *
     * @param int $value
     * @return \RO\Cmd\QuerySealTimer
     */
    public function setUserid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <teamid> has a value
     *
     * @return boolean
     */
    public function hasTeamid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <teamid> value
     *
     * @return \RO\Cmd\QuerySealTimer
     */
    public function clearTeamid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <teamid> value
     *
     * @return int
     */
    public function getTeamid(){
      return $this->_get(4);
    }
    
    /**
     * Set <teamid> value
     *
     * @param int $value
     * @return \RO\Cmd\QuerySealTimer
     */
    public function setTeamid( $value){
      return $this->_set(4, $value);
    }
  }
}

