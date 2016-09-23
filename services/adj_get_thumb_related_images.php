
<?php

//require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
// $SC = new DBModel();
 $bl= new admin();
 $param=array();
// $SC -> print_param('owner_id (bigint)');
// 
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $param = $_POST;
// } else {
    // $param = $_GET;
// 
// }
    
$param[0]=$_REQUEST['tmb_id'];


$result=$bl->adj_get_thumb_related_images($param);
print(json_encode($result));
//print_r($result);
 // $SC -> clear_param($result);
  //ob_end_clean();

?>