<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class MenuList extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_MENU;
    
    /**  @var int[]  */
    public $list = array();
    
    /**  @var int[]  */
    public $dellist = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.MenuList');

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
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_MENU;
      $descriptor->addField($f);

      // REPEATED UINT32 list = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "list";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED UINT32 dellist = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "dellist";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
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
     * @return \RO\Cmd\MenuList
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
     * @return \RO\Cmd\MenuList
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
     * @return \RO\Cmd\MenuList
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
     * @return \RO\Cmd\MenuList
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <list> has a value
     *
     * @return boolean
     */
    public function hasList(){
      return $this->_has(3);
    }
    
    /**
     * Clear <list> value
     *
     * @return \RO\Cmd\MenuList
     */
    public function clearList(){
      return $this->_clear(3);
    }
    
    /**
     * Get <list> value
     *
     * @param int $idx
     * @return int
     */
    public function getList($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <list> value
     *
     * @param int $value
     * @return \RO\Cmd\MenuList
     */
    public function setList( $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <list>
     *
     * @return int[]
     */
    public function getListList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <list>
     *
     * @param int $value
     * @return \RO\Cmd\MenuList
     */
    public function addList( $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <dellist> has a value
     *
     * @return boolean
     */
    public function hasDellist(){
      return $this->_has(4);
    }
    
    /**
     * Clear <dellist> value
     *
     * @return \RO\Cmd\MenuList
     */
    public function clearDellist(){
      return $this->_clear(4);
    }
    
    /**
     * Get <dellist> value
     *
     * @param int $idx
     * @return int
     */
    public function getDellist($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <dellist> value
     *
     * @param int $value
     * @return \RO\Cmd\MenuList
     */
    public function setDellist( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <dellist>
     *
     * @return int[]
     */
    public function getDellistList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <dellist>
     *
     * @param int $value
     * @return \RO\Cmd\MenuList
     */
    public function addDellist( $value){
     return $this->_add(4, $value);
    }
  }
}

