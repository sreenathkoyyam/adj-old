<?php

require_once( "../src/model/admin_login.php" );
$user = new admin();
// $user_id          = $_REQUEST['user_id'];
// $company_id       = $_REQUEST['company_id'];
$result=$user->site_owner();

?>