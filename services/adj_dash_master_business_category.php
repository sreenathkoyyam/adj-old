<?php

require_once( "../src/model/admin_login.php" );



$user = new admin();

$result=$user->business_category_get();

// if(isset($result['id']))
// {
    // $rsult["success"] = TRUE;
    // $rsult["id"] =$result['id'];
// }
// else{
	// $rsult["success"] = FALSE;
    // $rsult["id"] =0;
// }

$retval = array( 'status_value' => 1,'status_text' => 'TRUE','total_count' => count($result), 'data' => $result);

print(json_encode($retval));

?>
