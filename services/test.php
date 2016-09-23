
<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$result=array();
$SC -> print_param('user_id (bigint),
b_name (character varying),
site_owners_id (bigint),
product_type (bigint)
');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
if($param){
$result=$bl->adj_insert_brand_name($param);
	print(json_encode($result));
}
// $SC -> clear_param($result);


?>