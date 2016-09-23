
<?php

//require_once( "../src/model/dbmodel.php" );
require_once( "src/model/admin_login.php" );
// require_once( "connection.php" );
// $SC = new DBModel();
 $bl= new admin();
// $SC -> print_param('owner_id (bigint)');
// 
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $param = $_POST;
// } else {
    // $param = $_GET;
// 
// }
// $param['owner_id']=1;
// $param['brand_ids']=1;

$result=$bl->adj_get_images_gallery($param);
//print_r($result);
 // $SC -> clear_param($result);
  //ob_end_clean();

?>