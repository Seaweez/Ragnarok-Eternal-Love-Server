<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SocialCmd.proto

namespace RO\Cmd {

  class TeamCreateSocialCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SOCIAL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SocialParam */
    public $param = \RO\Cmd\SocialParam::SOCIALPARAM_TEAM_CREATE;
    
    /**  @var \RO\Cmd\UserInfo */
    public $user = null;
    
    /**  @var \RO\Cmd\CreateTeam */
    public $team = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TeamCreateSocialCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SOCIAL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SocialParam';
      $f->default   = \RO\Cmd\SocialParam::SOCIALPARAM_TEAM_CREATE;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "user";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\UserInfo';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE team = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "team";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\CreateTeam';
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
     * @return \RO\Cmd\TeamCreateSocialCmd
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
     * @return \RO\Cmd\TeamCreateSocialCmd
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
     * @return \RO\Cmd\TeamCreateSocialCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SocialParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SocialParam $value
     * @return \RO\Cmd\TeamCreateSocialCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <user> has a value
     *
     * @return boolean
     */
    public function hasUser(){
      return $this->_has(3);
    }
    
    /**
     * Clear <user> value
     *
     * @return \RO\Cmd\TeamCreateSocialCmd
     */
    public function clearUser(){
      return $this->_clear(3);
    }
    
    /**
     * Get <user> value
     *
     * @return \RO\Cmd\UserInfo
     */
    public function getUser(){
      return $this->_get(3);
    }
    
    /**
     * Set <user> value
     *
     * @param \RO\Cmd\UserInfo $value
     * @return \RO\Cmd\TeamCreateSocialCmd
     */
    public function setUser(\RO\Cmd\UserInfo $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <team> has a value
     *
     * @return boolean
     */
    public function hasTeam(){
      return $this->_has(4);
    }
    
    /**
     * Clear <team> value
     *
     * @return \RO\Cmd\TeamCreateSocialCmd
     */
    public function clearTeam(){
      return $this->_clear(4);
    }
    
    /**
     * Get <team> value
     *
     * @return \RO\Cmd\CreateTeam
     */
    public function getTeam(){
      return $this->_get(4);
    }
    
    /**
     * Set <team> value
     *
     * @param \RO\Cmd\CreateTeam $value
     * @return \RO\Cmd\TeamCreateSocialCmd
     */
    public function setTeam(\RO\Cmd\CreateTeam $value){
      return $this->_set(4, $value);
    }
  }
}
