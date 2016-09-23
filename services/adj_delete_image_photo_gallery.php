<?php
/**
 *
 * @author sreenATH
 * @version 1.0
 * @copyright 
 * @package default
 */
require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
//session_start();
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('site_owner_ids(bigint),brand_ids (bigint),category_ids(character varying)');
// 	
// 	

// 	
// $ids='1,2,3';
// $owner_id=1;
// $b_id=1;
// print_r($ids);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
$param['user_id']=1;
$c_ids = str_replace(array('/', '\\'), '', $param['category_ids']);
$param['category_ids']=$c_ids;

$results=array();
$results=$bl->adj_delete_image_photo_gallery($param);
$SC -> clear_param($results);
print(json_encode($results));

// $pathname="uploads/thumbs/".$owner_id;
// echo $owner_id;
// echo $b_id;



?>
