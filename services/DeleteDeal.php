<?php

require_once( "model/User.php" );

$user_id          = $_REQUEST['user_id'];
$company_id       = $_REQUEST['company_id'];

$result = array();
$result["success"] = true;

$user = new User( $user_id );
$user->removeDeal( $company_id );

print( json_encode( $result ) );

?>
