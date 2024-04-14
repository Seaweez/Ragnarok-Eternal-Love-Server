<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobTicket extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\BlobTicketData[]  */
    public $tickdata = array();
    
    /**  @var \RO\Cmd\BlobTicketCacheCmd[]  */
    public $cache_cmds = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobTicket');

      // REPEATED MESSAGE tickdata = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tickdata";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BlobTicketData';
      $descriptor->addField($f);

      // REPEATED MESSAGE cache_cmds = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "cache_cmds";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BlobTicketCacheCmd';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tickdata> has a value
     *
     * @return boolean
     */
    public function hasTickdata(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tickdata> value
     *
     * @return \RO\Cmd\BlobTicket
     */
    public function clearTickdata(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tickdata> value
     *
     * @param int $idx
     * @return \RO\Cmd\BlobTicketData
     */
    public function getTickdata($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <tickdata> value
     *
     * @param \RO\Cmd\BlobTicketData $value
     * @return \RO\Cmd\BlobTicket
     */
    public function setTickdata(\RO\Cmd\BlobTicketData $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <tickdata>
     *
     * @return \RO\Cmd\BlobTicketData[]
     */
    public function getTickdataList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <tickdata>
     *
     * @param \RO\Cmd\BlobTicketData $value
     * @return \RO\Cmd\BlobTicket
     */
    public function addTickdata(\RO\Cmd\BlobTicketData $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <cache_cmds> has a value
     *
     * @return boolean
     */
    public function hasCacheCmds(){
      return $this->_has(2);
    }
    
    /**
     * Clear <cache_cmds> value
     *
     * @return \RO\Cmd\BlobTicket
     */
    public function clearCacheCmds(){
      return $this->_clear(2);
    }
    
    /**
     * Get <cache_cmds> value
     *
     * @param int $idx
     * @return \RO\Cmd\BlobTicketCacheCmd
     */
    public function getCacheCmds($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <cache_cmds> value
     *
     * @param \RO\Cmd\BlobTicketCacheCmd $value
     * @return \RO\Cmd\BlobTicket
     */
    public function setCacheCmds(\RO\Cmd\BlobTicketCacheCmd $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <cache_cmds>
     *
     * @return \RO\Cmd\BlobTicketCacheCmd[]
     */
    public function getCacheCmdsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <cache_cmds>
     *
     * @param \RO\Cmd\BlobTicketCacheCmd $value
     * @return \RO\Cmd\BlobTicket
     */
    public function addCacheCmds(\RO\Cmd\BlobTicketCacheCmd $value){
     return $this->_add(2, $value);
    }
  }
}
