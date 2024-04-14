<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: WeddingCCmd.proto

namespace RO\Cmd {

  class WeddingOneDayInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $configid = null;
    
    /**  @var boolean */
    public $ban = false;
    
    /**  @var int */
    public $starttime = null;
    
    /**  @var int */
    public $endtime = null;
    
    /**  @var int */
    public $price = null;
    
    /**  @var int */
    public $id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.WeddingOneDayInfo');

      // OPTIONAL UINT32 configid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "configid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL ban = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "ban";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT32 starttime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "starttime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 endtime = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "endtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 price = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "price";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <configid> has a value
     *
     * @return boolean
     */
    public function hasConfigid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <configid> value
     *
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function clearConfigid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <configid> value
     *
     * @return int
     */
    public function getConfigid(){
      return $this->_get(1);
    }
    
    /**
     * Set <configid> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function setConfigid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <ban> has a value
     *
     * @return boolean
     */
    public function hasBan(){
      return $this->_has(2);
    }
    
    /**
     * Clear <ban> value
     *
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function clearBan(){
      return $this->_clear(2);
    }
    
    /**
     * Get <ban> value
     *
     * @return boolean
     */
    public function getBan(){
      return $this->_get(2);
    }
    
    /**
     * Set <ban> value
     *
     * @param boolean $value
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function setBan( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <starttime> has a value
     *
     * @return boolean
     */
    public function hasStarttime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <starttime> value
     *
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function clearStarttime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <starttime> value
     *
     * @return int
     */
    public function getStarttime(){
      return $this->_get(3);
    }
    
    /**
     * Set <starttime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function setStarttime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <endtime> has a value
     *
     * @return boolean
     */
    public function hasEndtime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <endtime> value
     *
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function clearEndtime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <endtime> value
     *
     * @return int
     */
    public function getEndtime(){
      return $this->_get(4);
    }
    
    /**
     * Set <endtime> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function setEndtime( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <price> has a value
     *
     * @return boolean
     */
    public function hasPrice(){
      return $this->_has(5);
    }
    
    /**
     * Clear <price> value
     *
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function clearPrice(){
      return $this->_clear(5);
    }
    
    /**
     * Get <price> value
     *
     * @return int
     */
    public function getPrice(){
      return $this->_get(5);
    }
    
    /**
     * Set <price> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function setPrice( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function clearId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(6);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\WeddingOneDayInfo
     */
    public function setId( $value){
      return $this->_set(6, $value);
    }
  }
}
