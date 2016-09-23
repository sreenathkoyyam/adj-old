<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('b_name(character varying),site_owners_id(bigint),product_type(bigint),catgry_ids(character varying),
new_brand_name(character varying),tmb_name(character varying),new_brand_name(character varying),chk_value(bigint)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}


$result=$bl->adj_thumb_image_upload($param);


print(json_encode($result));
?>
