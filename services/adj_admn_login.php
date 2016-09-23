<?php
session_start();
require_once( "../src/model/admin_login.php" );


$result = array();

$user_id=$_REQUEST['g_username'];
$pwd=$_REQUEST['g_pwd'];
$user = new admin();

$result=$user->adm_signin($user_id,$pwd);

if(isset($result['adj_user_id']))
{
    $rsult["success"] = TRUE;
    $rsult["id"] =$result['adj_user_id'];
	$_SESSION['admin_name']=$result['adj_email'];
	$_SESSION['admin_id']=$result['adj_user_id'];
}
else{
	$rsult["success"] = FALSE;
    $rsult["id"] =0;
}
print(json_encode($rsult));

?>
