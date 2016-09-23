<?php

require_once( "../src/model/admin_login.php" );

// $user_id          = $_REQUEST['user_id'];
// $company_id       = $_REQUEST['company_id'];

$result = array();
$result["success"] = false;
$user = new admin();
$reslt=$user->user_register($_REQUEST['g_f_name'],$_REQUEST['l_name'],$_REQUEST['c_name'],$_REQUEST['email'],$_REQUEST['phone'],$_REQUEST['web'] );

// print_r($reslt);
if($reslt>0)
{
    $result["success"] = TRUE;
}

print( json_encode( $result ) );

?>
