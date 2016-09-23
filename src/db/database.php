<?php

// ======================================================================
// A Class to handle Database communications
// ======================================================================
class Mysql_Database
{
    
    
  // protected $host     = "localhost";
  // protected $user     = "root";
  // protected $password = "";
  // protected $database = "adj";
  //protected $port     = "17770";
  
  //for beta
    protected $host     = "182.50.131.89";
  protected $user     = "adsj";
  protected $password = "Adsj@123";
  protected $database = "adsj";
  protected $connected = FALSE;

  private static $_instance = NULL;

  // ====================================================================
  // Database::CONSTRUCTOR
  // ====================================================================
  private function __construct()
  {
    $connection = mysql_connect( $this->host, $this->user, $this->password);
    if( $connection )
    {
    //
    // echo "Connected";    
      if( mysql_select_db( $this->database ) ) {
        $this->connected = TRUE;
      }
    }
 
  }

    // ==========================================================
   //
  // ============================================================
  public static function getInstance()
  {
    if( is_null( self::$_instance ) ) {
      self::$_instance = new Mysql_Database();
    }
    return( self::$_instance );
  }

  // ====================================================================
  //  Database::connected
  // ====================================================================
  function connected() {
    return( $this->connected );
  }

  // ====================================================================
  //  Database::disconnect
  // ====================================================================
  public static function  disconnect() {
    mysql_close();
    $this->connected = FALSE;
  }

  // ====================================================================
  //  Database::query
  // ====================================================================
  public function query( $query ) {
    // file_put_contents( "/tmp/foo", "\n$query", FILE_APPEND );
   // print_r($query);
    return( mysql_query( $query ) );
  }

  // ====================================================================
  //  Database::batch
  // ====================================================================
  public function batch( $batch ) {
    $parts = explode( ";", $batch );
    foreach( $parts as $query ) {
      $this->query( $query );
    }

    return( TRUE );
  }

  // ====================================================================
  // Database::begin
  // ====================================================================
  public function begin()
  {
    $this->query( "BEGIN" );
  }

  // ====================================================================
  // Database::commit
  // ====================================================================
  public function commit()
  {
    $this->query( "COMMIT" );
  }

  // ====================================================================
  // Database::rollback
  // ====================================================================
  public function rollback()
  {
    $this->query( "ROLLBACK" );
  }

}
// ======================================================================
// TEST CODE
// ======================================================================
//$db = Database::getInstance();
//if( $db->connected() ) {
//  print( "\nConnected" );
//}
?>