<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('owner_id(bigint),b_id (bigint),c_id(character varying)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
//only for live
$b_id_str=$param['b_id'];
$c_ids_str=$param['c_id'];
$owner_id_str=$param['owner_id'];
//print_r($param['c_id']);
$owner_ids = str_replace(array('/', '\\'), '', $owner_id_str);
$b_ids = str_replace(array('/', '\\'), '', $b_id_str);
$c_ids = str_replace(array('/', '\\'), '', $c_ids_str);
$param['c_id']=$c_ids;
$param['b_id']=$b_ids;
$param['owner_id']=$owner_ids;
//print_r($param);
//$result=$bl->site_owner_register($param);
$results=array();
$results=$bl->site_thumb_ctgry($param);
 // print_r($results);
$SC -> clear_param($results);
print(json_encode($results));
?>
