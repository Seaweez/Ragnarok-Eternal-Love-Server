<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class GrowthItemInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $dwid = 0;
    
    /**  @var int */
    public $finishtimes = 0;
    
    /**  @var int - \RO\Cmd\EGrowthStatus */
    public $status = \RO\Cmd\EGrowthStatus::EGROWTH_STATUS_MIN;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GrowthItemInfo');

      // OPTIONAL UINT32 dwid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "dwid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 finishtimes = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "finishtimes";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM status = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EGrowthStatus';
      $f->default   = \RO\Cmd\EGrowthStatus::EGROWTH_STATUS_MIN;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <dwid> has a value
     *
     * @return boolean
     */
    public function hasDwid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <dwid> value
     *
     * @return \RO\Cmd\GrowthItemInfo
     */
    public function clearDwid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <dwid> value
     *
     * @return int
     */
    public function getDwid(){
      return $this->_get(1);
    }
    
    /**
     * Set <dwid> value
     *
     * @param int $value
     * @return \RO\Cmd\GrowthItemInfo
     */
    public function setDwid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <finishtimes> has a value
     *
     * @return boolean
     */
    public function hasFinishtimes(){
      return $this->_has(2);
    }
    
    /**
     * Clear <finishtimes> value
     *
     * @return \RO\Cmd\GrowthItemInfo
     */
    public function clearFinishtimes(){
      return $this->_clear(2);
    }
    
    /**
     * Get <finishtimes> value
     *
     * @return int
     */
    public function getFinishtimes(){
      return $this->_get(2);
    }
    
    /**
     * Set <finishtimes> value
     *
     * @param int $value
     * @return \RO\Cmd\GrowthItemInfo
     */
    public function setFinishtimes( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(3);
    }
    
    /**
     * Clear <status> value
     *
     * @return \RO\Cmd\GrowthItemInfo
     */
    public function clearStatus(){
      return $this->_clear(3);
    }
    
    /**
     * Get <status> value
     *
     * @return int - \RO\Cmd\EGrowthStatus
     */
    public function getStatus(){
      return $this->_get(3);
    }
    
    /**
     * Set <status> value
     *
     * @param int - \RO\Cmd\EGrowthStatus $value
     * @return \RO\Cmd\GrowthItemInfo
     */
    public function setStatus( $value){
      return $this->_set(3, $value);
    }
  }
}

