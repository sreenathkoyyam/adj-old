
<?php

//require_once( "../src/model/dbmodel.php" );
require_once( "src/model/admin_login.php" );

$param=array();
$param[0]=0;
$param[1]=0;
$param[2]=0;
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

$result=$bl->adj_get_thumbnails($param);
//print(json_encode($result));
 // $SC -> clear_param($result);
  //ob_end_clean();

?>