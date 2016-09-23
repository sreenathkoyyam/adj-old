<?php


// require_once( "src/db/Database.php" );
 require_once __DIR__ . '/../db/database.php';
// ============================================================

 //
// ==============================================================
class DBModel
{
  // Utility Members
  protected $invisible   = array();
  protected $table       = "";
  protected $foreign_key = "";

  // Generic Database Fields
  protected $id       = 0;
  protected $created  = 0;
  protected $modified = 0;

  // Relationship Arrays-
  protected $belongsTo = array();
  protected $hasMany   = array();
  protected $joinedTo  = array();
  protected $associations = NULL;
  //public static $sta=0;

    // ==========================================================
   //
  // ============================================================
  function __construct( $id = NULL )
  {
    $this->invisible[] = "invisible";
    $this->invisible[] = "table";
    $this->invisible[] = "foreign_key";
    $this->invisible[] = "belongsTo";
    $this->invisible[] = "hasMany";
    $this->invisible[] = "joinedTo";
    $this->invisible[] = "associations";

    $this->associations = array(
      'belongsTo' => array(),
      'hasMany'   => array(),
      'joinedTo'  => array() );

    if( !is_null( $id ) ) {
      $this->id = $id;
    }
  }

    // ==========================================================
   //
  // ============================================================
  protected function init()
  {
    //echo "a";
    if( !empty( $this->id ) && !is_null( $this->id ) ) {
      $this->set( $this->find( array( "id" => $this->id ) ) );
    }
  }

    // ==========================================================
   //
  // ============================================================

  public function set( $data )
  {

   //error_reporting (E_ALL ^ E_NOTICE); 
   
    foreach( $this as $key => $value )
     {
         
        if( !in_array( $key, $this->invisible ) )
        {
        
        if( isset($data[$key])  &&  !is_null( $data[$key])  ) 
      {
        $this->$key = $data[$key];
                }
      }
 }
  }
  
  
     // ==========================================================
   //
  // ============================================================
  // public function set( $data )
  // {
    // foreach( $this as $key => $value ) {
      // if( !in_array( $key, $this->invisible ) ) {
        // if( !is_null( $data[$key] ) ) {
          // $this->$key = $data[$key];
        // }
      // }
    // }
  // }
//   

    // ==========================================================
   //
  // ============================================================
  public function get( $field )
  {
    if( in_array( $field, $this->invisible ) ) {
      return( NULL );
    }

    foreach( $this as $key => $value )
    {
      if( $key == $field ) {
        return( $this->$key );
      }
    }
    return( NULL );
  }

 
        //Function to Sort the parameter
    public function sort_param($param) {
        $temp_array = array();
        $sorted_param = array();
        $i = 0;
        foreach ($param as $key => $value) {
            $temp_array[urldecode($key)] = urldecode($value);
            // print_r($temp_array);
        }
        foreach (explode(',', $this->parameters) as $key => $value) {
            $index = trim(substr($value, 0, strrpos($value, "(")));

            if (array_key_exists($index, $temp_array))
                $sorted_param[$i++] = $temp_array[$index];
            
            else {
                if (count($param) > 0)
                    echo '"'.$index . '" parameter is not provided.<br>';
            }
            // print_r($sorted_param);
        }
        return $sorted_param;
    }
    
    
       //Function to Print the Parametes
    
    public function print_param($param) {
        $this -> parameters = $param;
        $currentFile = $_SERVER["PHP_SELF"];
        $parts = explode('/', $currentFile);
        //Start Output Buffer
        ob_start();
        print_r("<h2>".$parts[count($parts) - 1]."</h2><form method=\"post\">");
        print_r("<table cellspacing=\"0\" cellpadding=\"4\" bordercolor=\"#dcdcdc\" style=\"border-collapse: collapse;\" rules=\"none\" frame=\"box\"><tr><td bgcolor=\"#dcdcdc\" style=\"border-right: 2px solid white;\">Parameters&nbsp;</td><td bgcolor=\"#dcdcdc\">Values</td></tr>");
        $inc = 1;
        foreach (explode(',', $param) as $key => $value) {
            $var=trim(substr($value, 0, strrpos($value, "(")));
            print_r("<tr><td>" .$value. " : </td><td><input type=\"text\" name=\"" .$var. "\" size=\"50\" /></td></tr>");
        }
        // print_r("<table cellspacing=\"0\" cellpadding=\"4\" bordercolor=\"#dcdcdc\" style=\"border-collapse: collapse;\" rules=\"none\" frame=\"box\">");
        print_r("<tr><td colspan=\"2\" align=\"right\"><input type=\"submit\" value=\"Invoke\" onclick=\"this.form.target='_blank';return true;\" style=\"background-color: #DCDCDC;\"/></td></tr></table>\n</form>");
        print_r('<hr>');

    }

    //Function to Clear the Parametes
    public function clear_param($value) {
        
        if (array_key_exists('data', $value)) {
            ob_end_clean();
        } 
        // elseif (array_key_exists('status_value', $value)) {
            // ob_end_clean();
        // }
    }

    //Function to Print JSON Data
    public function make_result($result) {
          if(count($result)>0)
{

$retval = array( 'status_value' => 1,'status_text' => 'TRUE','total_count' => count($result), 'data' => $result);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
  //  print_r($expression)
    return $retval;
    }
    

        
    // ====================================================================
    //  Connection::call_dbFunction
    // ====================================================================
    
    protected function array_to_string($parameter) {

        $xx = '';
        foreach ($parameter as $key) {
            $xx .= $key . ',';

        }

        $xx = substr($xx, 0, strlen($xx) - 1);

        $xx = stripcslashes(str_replace("\"", "'", $xx));
        return $xx;
    }

    public function call_dbFunction($dbFunctionName, $param) {
        $this -> database =  Mysql_Database::getInstance();
         // $database = Mysql_Database::getInstance();
        // print_r($param);
        // echo "<hr>";
       // $fields="'1','2','3'";
        //$fields="'test','test','test','1,2,233','test','test','test','test',2,1,'test','test','test',1";
        $fields = $this -> array_to_string($param);
		//print_r($fields);
		//echo "============";
        $query ="call $dbFunctionName($fields);";
         //print_r($query);
        // $query = 'SELECT * from ' . $dbFunctionName . '(' . $fields . ');';
        $result = $this -> database -> query($query);
        //print_r($result);
        return $result;
    }

    public function call_dbFunction_without_param($dbFunctionName) {
        $this -> database =  Mysql_Database::getInstance();
      
        $query ="call $dbFunctionName();";
               $result = $this -> database -> query($query);
        //print_r($result);
        return $result;
    }



  
}

?>
