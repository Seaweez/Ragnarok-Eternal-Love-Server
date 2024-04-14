<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ChatCmd.proto

namespace RO\Cmd {

  class OffMsgUserAddItem extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EUserAddItemType */
    public $type = \RO\Cmd\EUserAddItemType::EUSERADDITEMTYPE_MIN;
    
    /**  @var \RO\Cmd\ItemInfo[]  */
    public $items = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.OffMsgUserAddItem');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EUserAddItemType';
      $f->default   = \RO\Cmd\EUserAddItemType::EUSERADDITEMTYPE_MIN;
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ItemInfo';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(1);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\OffMsgUserAddItem
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EUserAddItemType
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EUserAddItemType $value
     * @return \RO\Cmd\OffMsgUserAddItem
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <items> has a value
     *
     * @return boolean
     */
    public function hasItems(){
      return $this->_has(2);
    }
    
    /**
     * Clear <items> value
     *
     * @return \RO\Cmd\OffMsgUserAddItem
     */
    public function clearItems(){
      return $this->_clear(2);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\ItemInfo
     */
    public function getItems($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\ItemInfo $value
     * @return \RO\Cmd\OffMsgUserAddItem
     */
    public function setItems(\RO\Cmd\ItemInfo $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\ItemInfo[]
     */
    public function getItemsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\ItemInfo $value
     * @return \RO\Cmd\OffMsgUserAddItem
     */
    public function addItems(\RO\Cmd\ItemInfo $value){
     return $this->_add(2, $value);
    }
  }
}
