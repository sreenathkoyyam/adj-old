<?php
session_start();
require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();

$result = array();

$SC -> print_param('categ_id (bigint)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}

$result = $bl -> adj_test($param);

 // print_r($result);
 $SC -> clear_param($result);
 //$SC->print_result($result);
 print(json_encode($result));


?>
