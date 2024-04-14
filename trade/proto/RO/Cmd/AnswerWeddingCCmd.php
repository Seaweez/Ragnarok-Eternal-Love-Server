<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: WeddingCCmd.proto

namespace RO\Cmd {

  class AnswerWeddingCCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::WEDDINGC_PROTOCMD;
    
    /**  @var int - \RO\Cmd\WeddingCParam */
    public $param = \RO\Cmd\WeddingCParam::WEDDINGCPARAM_ANSWER;
    
    /**  @var int */
    public $questionid = 0;
    
    /**  @var int */
    public $answer = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.AnswerWeddingCCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::WEDDINGC_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\WeddingCParam';
      $f->default   = \RO\Cmd\WeddingCParam::WEDDINGCPARAM_ANSWER;
      $descriptor->addField($f);

      // OPTIONAL UINT32 questionid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "questionid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 answer = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "answer";
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
     * @return \RO\Cmd\AnswerWeddingCCmd
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
     * @return \RO\Cmd\AnswerWeddingCCmd
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
     * @return \RO\Cmd\AnswerWeddingCCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\WeddingCParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\WeddingCParam $value
     * @return \RO\Cmd\AnswerWeddingCCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <questionid> has a value
     *
     * @return boolean
     */
    public function hasQuestionid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <questionid> value
     *
     * @return \RO\Cmd\AnswerWeddingCCmd
     */
    public function clearQuestionid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <questionid> value
     *
     * @return int
     */
    public function getQuestionid(){
      return $this->_get(3);
    }
    
    /**
     * Set <questionid> value
     *
     * @param int $value
     * @return \RO\Cmd\AnswerWeddingCCmd
     */
    public function setQuestionid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <answer> has a value
     *
     * @return boolean
     */
    public function hasAnswer(){
      return $this->_has(4);
    }
    
    /**
     * Clear <answer> value
     *
     * @return \RO\Cmd\AnswerWeddingCCmd
     */
    public function clearAnswer(){
      return $this->_clear(4);
    }
    
    /**
     * Get <answer> value
     *
     * @return int
     */
    public function getAnswer(){
      return $this->_get(4);
    }
    
    /**
     * Set <answer> value
     *
     * @param int $value
     * @return \RO\Cmd\AnswerWeddingCCmd
     */
    public function setAnswer( $value){
      return $this->_set(4, $value);
    }
  }
}

