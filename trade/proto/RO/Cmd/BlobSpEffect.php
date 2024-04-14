<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobSpEffect extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\SpEffectData[]  */
    public $data = array();
    
    /**  @var \RO\Cmd\BlobLineData[]  */
    public $wholineme = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobSpEffect');

      // REPEATED MESSAGE data = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SpEffectData';
      $descriptor->addField($f);

      // REPEATED MESSAGE wholineme = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "wholineme";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BlobLineData';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(1);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\BlobSpEffect
     */
    public function clearData(){
      return $this->_clear(1);
    }
    
    /**
     * Get <data> value
     *
     * @param int $idx
     * @return \RO\Cmd\SpEffectData
     */
    public function getData($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <data> value
     *
     * @param \RO\Cmd\SpEffectData $value
     * @return \RO\Cmd\BlobSpEffect
     */
    public function setData(\RO\Cmd\SpEffectData $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <data>
     *
     * @return \RO\Cmd\SpEffectData[]
     */
    public function getDataList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <data>
     *
     * @param \RO\Cmd\SpEffectData $value
     * @return \RO\Cmd\BlobSpEffect
     */
    public function addData(\RO\Cmd\SpEffectData $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <wholineme> has a value
     *
     * @return boolean
     */
    public function hasWholineme(){
      return $this->_has(2);
    }
    
    /**
     * Clear <wholineme> value
     *
     * @return \RO\Cmd\BlobSpEffect
     */
    public function clearWholineme(){
      return $this->_clear(2);
    }
    
    /**
     * Get <wholineme> value
     *
     * @param int $idx
     * @return \RO\Cmd\BlobLineData
     */
    public function getWholineme($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <wholineme> value
     *
     * @param \RO\Cmd\BlobLineData $value
     * @return \RO\Cmd\BlobSpEffect
     */
    public function setWholineme(\RO\Cmd\BlobLineData $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <wholineme>
     *
     * @return \RO\Cmd\BlobLineData[]
     */
    public function getWholinemeList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <wholineme>
     *
     * @param \RO\Cmd\BlobLineData $value
     * @return \RO\Cmd\BlobSpEffect
     */
    public function addWholineme(\RO\Cmd\BlobLineData $value){
     return $this->_add(2, $value);
    }
  }
}

