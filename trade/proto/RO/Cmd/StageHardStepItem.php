<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: FuBenCmd.proto

namespace RO\Cmd {

  class StageHardStepItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $stepid = null;
    
    /**  @var int */
    public $finish = null;
    
    /**  @var int */
    public $challengeTime = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.StageHardStepItem');

      // OPTIONAL UINT32 stepid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "stepid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 finish = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "finish";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 challengeTime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "challengeTime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <stepid> has a value
     *
     * @return boolean
     */
    public function hasStepid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <stepid> value
     *
     * @return \RO\Cmd\StageHardStepItem
     */
    public function clearStepid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <stepid> value
     *
     * @return int
     */
    public function getStepid(){
      return $this->_get(1);
    }
    
    /**
     * Set <stepid> value
     *
     * @param int $value
     * @return \RO\Cmd\StageHardStepItem
     */
    public function setStepid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <finish> has a value
     *
     * @return boolean
     */
    public function hasFinish(){
      return $this->_has(2);
    }
    
    /**
     * Clear <finish> value
     *
     * @return \RO\Cmd\StageHardStepItem
     */
    public function clearFinish(){
      return $this->_clear(2);
    }
    
    /**
     * Get <finish> value
     *
     * @return int
     */
    public function getFinish(){
      return $this->_get(2);
    }
    
    /**
     * Set <finish> value
     *
     * @param int $value
     * @return \RO\Cmd\StageHardStepItem
     */
    public function setFinish( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <challengeTime> has a value
     *
     * @return boolean
     */
    public function hasChallengeTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <challengeTime> value
     *
     * @return \RO\Cmd\StageHardStepItem
     */
    public function clearChallengeTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <challengeTime> value
     *
     * @return int
     */
    public function getChallengeTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <challengeTime> value
     *
     * @param int $value
     * @return \RO\Cmd\StageHardStepItem
     */
    public function setChallengeTime( $value){
      return $this->_set(3, $value);
    }
  }
}

