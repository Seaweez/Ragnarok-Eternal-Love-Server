<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class QueryStageUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_QUERY_STAGE;
    
    /**  @var int */
    public $stageid = 0;
    
    /**  @var \RO\Cmd\StageInfo[]  */
    public $info = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryStageUserCmd');

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
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_QUERY_STAGE;
      $descriptor->addField($f);

      // OPTIONAL UINT32 stageid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "stageid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE info = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\StageInfo';
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
     * @return \RO\Cmd\QueryStageUserCmd
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
     * @return \RO\Cmd\QueryStageUserCmd
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
     * @return \RO\Cmd\QueryStageUserCmd
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
     * @return \RO\Cmd\QueryStageUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <stageid> has a value
     *
     * @return boolean
     */
    public function hasStageid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <stageid> value
     *
     * @return \RO\Cmd\QueryStageUserCmd
     */
    public function clearStageid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <stageid> value
     *
     * @return int
     */
    public function getStageid(){
      return $this->_get(3);
    }
    
    /**
     * Set <stageid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryStageUserCmd
     */
    public function setStageid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <info> has a value
     *
     * @return boolean
     */
    public function hasInfo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <info> value
     *
     * @return \RO\Cmd\QueryStageUserCmd
     */
    public function clearInfo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <info> value
     *
     * @param int $idx
     * @return \RO\Cmd\StageInfo
     */
    public function getInfo($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <info> value
     *
     * @param \RO\Cmd\StageInfo $value
     * @return \RO\Cmd\QueryStageUserCmd
     */
    public function setInfo(\RO\Cmd\StageInfo $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <info>
     *
     * @return \RO\Cmd\StageInfo[]
     */
    public function getInfoList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <info>
     *
     * @param \RO\Cmd\StageInfo $value
     * @return \RO\Cmd\QueryStageUserCmd
     */
    public function addInfo(\RO\Cmd\StageInfo $value){
     return $this->_add(4, $value);
    }
  }
}
