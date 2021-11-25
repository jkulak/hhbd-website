<?php

/**
* 
*/
class Jkl_Db extends Jkl_Cache
{
  private $_db;
  private $_queryCount = 0;
  private $_cacheHits = 0;
  
  static private $_instance;
  
  /**
   * Singleton instance
   *
   * @return Jkl_Db
   */
  public static function getInstance($adapter = null, $params = null)
  {
      if (null === self::$_instance) {
          self::$_instance = new self($adapter, $params);
      }

      return self::$_instance;
  }  
  
  function __construct($adapter, $params) {
    $this->_db = Zend_Db::factory($adapter, $params);
    parent::__construct();
  }
  
  /*
  * FechtAll
  */
  public function fetchAll($query, $lifeTime = null)
  {
    if (null === $lifeTime) {
      $config = Zend_Registry::get('Config_App');
      $lifeTime = $config['cache']['front']['lifetime'];
    }
    
    $this->_queryCount++;

    $result = $this->_db->fetchAll($query);   

    return $result;
  }
  
  /*
  * Used for non cached queries (like UPDATE)
  */
  public function query($query)
  {
    $this->_queryCount++;
    return $this->_db->query($query);
  }
  
  public function getQueryCount()
  {
    return $this->_queryCount;
  }
  
  static public function escape($value)
  {
    $search = array("\\", "\0", "\n", "\r", "\x1a", "'", '"', '%');
    $replace = array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"', '\%');
    return str_replace($search, $replace, $value);
  }
  
}
