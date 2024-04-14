<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BufferStateBlob extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $endtime = 0;
    
    /**  @var int */
    public $lv = 0;
    
    /**  @var int */
    public $fromid = 0;
    
    /**  @var int */
    public $hponadd = 0;
    
    /**  @var int */
    public $addtime = 0;
    
    /**  @var int */
    public $count = 0;
    
    /**  @var int */
    public $commmondata = 0;
    
    /**  @var boolean */
    public $actflag = null;
    
    /**  @var int */
    public $layers = 0;
    
    /**  @var int */
    public $totaldamage = 0;
    
    /**  @var int */
    public $attackcount = 0;
    
    /**  @var int */
    public $beatkcount = 0;
    
    /**  @var \RO\Cmd\UserAttrSvr[]  */
    public $attrs = array();
    
    /**  @var int[]  */
    public $vecdata = array();
    
    /**  @var string */
    public $fromname = null;
    
    /**  @var int */
    public $sparetime = 0;
    
    /**  @var int[]  */
    public $setendtime = array();
    
    /**  @var int */
    public $timetick = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BufferStateBlob');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 endtime = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "endtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 lv = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "lv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 fromid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "fromid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 hponadd = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "hponadd";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 addtime = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "addtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 count = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 commmondata = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "commmondata";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL actflag = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "actflag";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 layers = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "layers";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 totaldamage = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "totaldamage";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 attackcount = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "attackcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 beatkcount = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "beatkcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE attrs = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "attrs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserAttrSvr';
      $descriptor->addField($f);

      // REPEATED UINT32 vecdata = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "vecdata";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL STRING fromname = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "fromname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 sparetime = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "sparetime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED UINT64 setendtime = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "setendtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT64 timetick = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "timetick";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <endtime> has a value
     *
     * @return boolean
     */
    public function hasEndtime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <endtime> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearEndtime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <endtime> value
     *
     * @return int
     */
    public function getEndtime(){
      return $this->_get(2);
    }
    
    /**
     * Set <endtime> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setEndtime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <lv> has a value
     *
     * @return boolean
     */
    public function hasLv(){
      return $this->_has(3);
    }
    
    /**
     * Clear <lv> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearLv(){
      return $this->_clear(3);
    }
    
    /**
     * Get <lv> value
     *
     * @return int
     */
    public function getLv(){
      return $this->_get(3);
    }
    
    /**
     * Set <lv> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setLv( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <fromid> has a value
     *
     * @return boolean
     */
    public function hasFromid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <fromid> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearFromid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <fromid> value
     *
     * @return int
     */
    public function getFromid(){
      return $this->_get(4);
    }
    
    /**
     * Set <fromid> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setFromid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <hponadd> has a value
     *
     * @return boolean
     */
    public function hasHponadd(){
      return $this->_has(5);
    }
    
    /**
     * Clear <hponadd> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearHponadd(){
      return $this->_clear(5);
    }
    
    /**
     * Get <hponadd> value
     *
     * @return int
     */
    public function getHponadd(){
      return $this->_get(5);
    }
    
    /**
     * Set <hponadd> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setHponadd( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <addtime> has a value
     *
     * @return boolean
     */
    public function hasAddtime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <addtime> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearAddtime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <addtime> value
     *
     * @return int
     */
    public function getAddtime(){
      return $this->_get(6);
    }
    
    /**
     * Set <addtime> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setAddtime( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <count> has a value
     *
     * @return boolean
     */
    public function hasCount(){
      return $this->_has(7);
    }
    
    /**
     * Clear <count> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearCount(){
      return $this->_clear(7);
    }
    
    /**
     * Get <count> value
     *
     * @return int
     */
    public function getCount(){
      return $this->_get(7);
    }
    
    /**
     * Set <count> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setCount( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <commmondata> has a value
     *
     * @return boolean
     */
    public function hasCommmondata(){
      return $this->_has(8);
    }
    
    /**
     * Clear <commmondata> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearCommmondata(){
      return $this->_clear(8);
    }
    
    /**
     * Get <commmondata> value
     *
     * @return int
     */
    public function getCommmondata(){
      return $this->_get(8);
    }
    
    /**
     * Set <commmondata> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setCommmondata( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <actflag> has a value
     *
     * @return boolean
     */
    public function hasActflag(){
      return $this->_has(9);
    }
    
    /**
     * Clear <actflag> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearActflag(){
      return $this->_clear(9);
    }
    
    /**
     * Get <actflag> value
     *
     * @return boolean
     */
    public function getActflag(){
      return $this->_get(9);
    }
    
    /**
     * Set <actflag> value
     *
     * @param boolean $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setActflag( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <layers> has a value
     *
     * @return boolean
     */
    public function hasLayers(){
      return $this->_has(10);
    }
    
    /**
     * Clear <layers> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearLayers(){
      return $this->_clear(10);
    }
    
    /**
     * Get <layers> value
     *
     * @return int
     */
    public function getLayers(){
      return $this->_get(10);
    }
    
    /**
     * Set <layers> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setLayers( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <totaldamage> has a value
     *
     * @return boolean
     */
    public function hasTotaldamage(){
      return $this->_has(11);
    }
    
    /**
     * Clear <totaldamage> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearTotaldamage(){
      return $this->_clear(11);
    }
    
    /**
     * Get <totaldamage> value
     *
     * @return int
     */
    public function getTotaldamage(){
      return $this->_get(11);
    }
    
    /**
     * Set <totaldamage> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setTotaldamage( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <attackcount> has a value
     *
     * @return boolean
     */
    public function hasAttackcount(){
      return $this->_has(12);
    }
    
    /**
     * Clear <attackcount> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearAttackcount(){
      return $this->_clear(12);
    }
    
    /**
     * Get <attackcount> value
     *
     * @return int
     */
    public function getAttackcount(){
      return $this->_get(12);
    }
    
    /**
     * Set <attackcount> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setAttackcount( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <beatkcount> has a value
     *
     * @return boolean
     */
    public function hasBeatkcount(){
      return $this->_has(13);
    }
    
    /**
     * Clear <beatkcount> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearBeatkcount(){
      return $this->_clear(13);
    }
    
    /**
     * Get <beatkcount> value
     *
     * @return int
     */
    public function getBeatkcount(){
      return $this->_get(13);
    }
    
    /**
     * Set <beatkcount> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setBeatkcount( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <attrs> has a value
     *
     * @return boolean
     */
    public function hasAttrs(){
      return $this->_has(14);
    }
    
    /**
     * Clear <attrs> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearAttrs(){
      return $this->_clear(14);
    }
    
    /**
     * Get <attrs> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserAttrSvr
     */
    public function getAttrs($idx = NULL){
      return $this->_get(14, $idx);
    }
    
    /**
     * Set <attrs> value
     *
     * @param \RO\Cmd\UserAttrSvr $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setAttrs(\RO\Cmd\UserAttrSvr $value, $idx = NULL){
      return $this->_set(14, $value, $idx);
    }
    
    /**
     * Get all elements of <attrs>
     *
     * @return \RO\Cmd\UserAttrSvr[]
     */
    public function getAttrsList(){
     return $this->_get(14);
    }
    
    /**
     * Add a new element to <attrs>
     *
     * @param \RO\Cmd\UserAttrSvr $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function addAttrs(\RO\Cmd\UserAttrSvr $value){
     return $this->_add(14, $value);
    }
    
    /**
     * Check if <vecdata> has a value
     *
     * @return boolean
     */
    public function hasVecdata(){
      return $this->_has(15);
    }
    
    /**
     * Clear <vecdata> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearVecdata(){
      return $this->_clear(15);
    }
    
    /**
     * Get <vecdata> value
     *
     * @param int $idx
     * @return int
     */
    public function getVecdata($idx = NULL){
      return $this->_get(15, $idx);
    }
    
    /**
     * Set <vecdata> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setVecdata( $value, $idx = NULL){
      return $this->_set(15, $value, $idx);
    }
    
    /**
     * Get all elements of <vecdata>
     *
     * @return int[]
     */
    public function getVecdataList(){
     return $this->_get(15);
    }
    
    /**
     * Add a new element to <vecdata>
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function addVecdata( $value){
     return $this->_add(15, $value);
    }
    
    /**
     * Check if <fromname> has a value
     *
     * @return boolean
     */
    public function hasFromname(){
      return $this->_has(16);
    }
    
    /**
     * Clear <fromname> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearFromname(){
      return $this->_clear(16);
    }
    
    /**
     * Get <fromname> value
     *
     * @return string
     */
    public function getFromname(){
      return $this->_get(16);
    }
    
    /**
     * Set <fromname> value
     *
     * @param string $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setFromname( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <sparetime> has a value
     *
     * @return boolean
     */
    public function hasSparetime(){
      return $this->_has(17);
    }
    
    /**
     * Clear <sparetime> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearSparetime(){
      return $this->_clear(17);
    }
    
    /**
     * Get <sparetime> value
     *
     * @return int
     */
    public function getSparetime(){
      return $this->_get(17);
    }
    
    /**
     * Set <sparetime> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setSparetime( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <setendtime> has a value
     *
     * @return boolean
     */
    public function hasSetendtime(){
      return $this->_has(18);
    }
    
    /**
     * Clear <setendtime> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearSetendtime(){
      return $this->_clear(18);
    }
    
    /**
     * Get <setendtime> value
     *
     * @param int $idx
     * @return int
     */
    public function getSetendtime($idx = NULL){
      return $this->_get(18, $idx);
    }
    
    /**
     * Set <setendtime> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setSetendtime( $value, $idx = NULL){
      return $this->_set(18, $value, $idx);
    }
    
    /**
     * Get all elements of <setendtime>
     *
     * @return int[]
     */
    public function getSetendtimeList(){
     return $this->_get(18);
    }
    
    /**
     * Add a new element to <setendtime>
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function addSetendtime( $value){
     return $this->_add(18, $value);
    }
    
    /**
     * Check if <timetick> has a value
     *
     * @return boolean
     */
    public function hasTimetick(){
      return $this->_has(19);
    }
    
    /**
     * Clear <timetick> value
     *
     * @return \RO\Cmd\BufferStateBlob
     */
    public function clearTimetick(){
      return $this->_clear(19);
    }
    
    /**
     * Get <timetick> value
     *
     * @return int
     */
    public function getTimetick(){
      return $this->_get(19);
    }
    
    /**
     * Set <timetick> value
     *
     * @param int $value
     * @return \RO\Cmd\BufferStateBlob
     */
    public function setTimetick( $value){
      return $this->_set(19, $value);
    }
  }
}

