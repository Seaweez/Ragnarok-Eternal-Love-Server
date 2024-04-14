<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class TodayFinanceItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $item_id = null;
    
    /**  @var int */
    public $ratio = null;
    
    /**  @var int */
    public $time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TodayFinanceItem');

      // OPTIONAL UINT32 item_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "item_id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ratio = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "ratio";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <item_id> has a value
     *
     * @return boolean
     */
    public function hasItemId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <item_id> value
     *
     * @return \RO\Cmd\TodayFinanceItem
     */
    public function clearItemId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <item_id> value
     *
     * @return int
     */
    public function getItemId(){
      return $this->_get(1);
    }
    
    /**
     * Set <item_id> value
     *
     * @param int $value
     * @return \RO\Cmd\TodayFinanceItem
     */
    public function setItemId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <ratio> has a value
     *
     * @return boolean
     */
    public function hasRatio(){
      return $this->_has(2);
    }
    
    /**
     * Clear <ratio> value
     *
     * @return \RO\Cmd\TodayFinanceItem
     */
    public function clearRatio(){
      return $this->_clear(2);
    }
    
    /**
     * Get <ratio> value
     *
     * @return int
     */
    public function getRatio(){
      return $this->_get(2);
    }
    
    /**
     * Set <ratio> value
     *
     * @param int $value
     * @return \RO\Cmd\TodayFinanceItem
     */
    public function setRatio( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\TodayFinanceItem
     */
    public function clearTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\TodayFinanceItem
     */
    public function setTime( $value){
      return $this->_set(3, $value);
    }
  }
}

