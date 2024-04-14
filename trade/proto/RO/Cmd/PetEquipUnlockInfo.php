<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class PetEquipUnlockInfo extends \DrSlump\Protobuf\Message {

    /**  @var int[]  */
    public $items = array();
    
    /**  @var \RO\Cmd\SpecPetEquip[]  */
    public $bodyitems = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PetEquipUnlockInfo');

      // REPEATED UINT32 items = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED MESSAGE bodyitems = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "bodyitems";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SpecPetEquip';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <items> has a value
     *
     * @return boolean
     */
    public function hasItems(){
      return $this->_has(1);
    }
    
    /**
     * Clear <items> value
     *
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function clearItems(){
      return $this->_clear(1);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return int
     */
    public function getItems($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param int $value
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function setItems( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return int[]
     */
    public function getItemsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param int $value
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function addItems( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <bodyitems> has a value
     *
     * @return boolean
     */
    public function hasBodyitems(){
      return $this->_has(2);
    }
    
    /**
     * Clear <bodyitems> value
     *
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function clearBodyitems(){
      return $this->_clear(2);
    }
    
    /**
     * Get <bodyitems> value
     *
     * @param int $idx
     * @return \RO\Cmd\SpecPetEquip
     */
    public function getBodyitems($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <bodyitems> value
     *
     * @param \RO\Cmd\SpecPetEquip $value
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function setBodyitems(\RO\Cmd\SpecPetEquip $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <bodyitems>
     *
     * @return \RO\Cmd\SpecPetEquip[]
     */
    public function getBodyitemsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <bodyitems>
     *
     * @param \RO\Cmd\SpecPetEquip $value
     * @return \RO\Cmd\PetEquipUnlockInfo
     */
    public function addBodyitems(\RO\Cmd\SpecPetEquip $value){
     return $this->_add(2, $value);
    }
  }
}

