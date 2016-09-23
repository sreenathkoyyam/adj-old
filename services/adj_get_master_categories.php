<?php
require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
//session_start();
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('category_id(bigint)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
$param=array(); 
$param['category_id']=$_REQUEST['category_id'];
$result = $bl -> adj_get_master_categories($param);
if($result['status_text']=='TRUE')
{
	$data=$result['data'];
 $total=$result['total_count'];
 $page=1;
 
 
  foreach ($data as $final) 
   {
      $entry = array('id'=>$final['category_id'],
        'cell'=>array(
         
           'category'=>$final['category'],
             'is_active'=>$final['is_active'],
        ),
    );
    $jsonData[] = $entry;
}   
   
  $final_result = array('success'=>'TRUE','page'=>$page,'total'=>$total,'rows'=>$jsonData); 
}
else {
    $final_result = array('success'=>'FALSE'); 
}
ob_clean();
echo json_encode($final_result);
		


?>
