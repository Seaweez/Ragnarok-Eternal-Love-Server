<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class ShakeScreen extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_SHAKESCREEN;
    
    /**  @var int */
    public $maxamplitude = 3;
    
    /**  @var int */
    public $msec = 0;
    
    /**  @var int */
    public $shaketype = 1;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ShakeScreen');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_SHAKESCREEN;
      $descriptor->addField($f);

      // OPTIONAL UINT32 maxamplitude = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "maxamplitude";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 3;
      $descriptor->addField($f);

      // OPTIONAL UINT32 msec = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "msec";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 shaketype = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "shaketype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
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
     * @return \RO\Cmd\ShakeScreen
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
     * @return \RO\Cmd\ShakeScreen
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
     * @return \RO\Cmd\ShakeScreen
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\ShakeScreen
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <maxamplitude> has a value
     *
     * @return boolean
     */
    public function hasMaxamplitude(){
      return $this->_has(3);
    }
    
    /**
     * Clear <maxamplitude> value
     *
     * @return \RO\Cmd\ShakeScreen
     */
    public function clearMaxamplitude(){
      return $this->_clear(3);
    }
    
    /**
     * Get <maxamplitude> value
     *
     * @return int
     */
    public function getMaxamplitude(){
      return $this->_get(3);
    }
    
    /**
     * Set <maxamplitude> value
     *
     * @param int $value
     * @return \RO\Cmd\ShakeScreen
     */
    public function setMaxamplitude( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <msec> has a value
     *
     * @return boolean
     */
    public function hasMsec(){
      return $this->_has(4);
    }
    
    /**
     * Clear <msec> value
     *
     * @return \RO\Cmd\ShakeScreen
     */
    public function clearMsec(){
      return $this->_clear(4);
    }
    
    /**
     * Get <msec> value
     *
     * @return int
     */
    public function getMsec(){
      return $this->_get(4);
    }
    
    /**
     * Set <msec> value
     *
     * @param int $value
     * @return \RO\Cmd\ShakeScreen
     */
    public function setMsec( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <shaketype> has a value
     *
     * @return boolean
     */
    public function hasShaketype(){
      return $this->_has(5);
    }
    
    /**
     * Clear <shaketype> value
     *
     * @return \RO\Cmd\ShakeScreen
     */
    public function clearShaketype(){
      return $this->_clear(5);
    }
    
    /**
     * Get <shaketype> value
     *
     * @return int
     */
    public function getShaketype(){
      return $this->_get(5);
    }
    
    /**
     * Set <shaketype> value
     *
     * @param int $value
     * @return \RO\Cmd\ShakeScreen
     */
    public function setShaketype( $value){
      return $this->_set(5, $value);
    }
  }
}
