<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
$SC -> print_param('user_id (bigint),oldpassword(character varying),passwor_val(character varying)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
$result=$bl->adj_admin_change_password($param);

 $SC -> clear_param($result);
 
print(json_encode($result));
?>