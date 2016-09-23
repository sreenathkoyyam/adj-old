<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('f_name(character varying),l_name(character varying),
c_name(character varying),b_category(character varying),
web(character varying),brand_name(character varying),address1(character varying),
house_name(character varying),country(bigint),state (bigint),city(character varying),
email(character varying),phone(character varying),reg_status (bigint),owner_id(bigint)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}

//print_r($param);

$result=$bl->site_owner_register($param);
// $prm=array();
// $prm[0]=$result['data'][0]['owner_id'];
// $prm[1]=$result['data'][0]['b_id'];
// $prm[2]=$result['data'][0]['c_id'];
// // print_r($result['data'][0]['owner_id']);
 // $results=$bl->site_thumb_ctgry($prm);
 //print_r($results);
 $SC -> clear_param($result);
 print(json_encode($result));
?>
