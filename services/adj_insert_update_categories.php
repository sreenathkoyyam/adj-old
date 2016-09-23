<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('category_id(bigint),category(character varying),user_id (bigint),is_active (bigint)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}


//$result=$bl->site_owner_register($param);
$results=array();
 $results=$bl->adj_insert_master_categories($param);
 // print_r($results);
 $SC -> clear_param($results);
print(json_encode($results));
?>
