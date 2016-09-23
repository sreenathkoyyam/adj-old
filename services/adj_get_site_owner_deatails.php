<?php

require_once( "../src/model/admin_login.php" );


$customer_id=$_REQUEST['customer_id'];
$user = new admin();

$result=$user->adj_get_site_owner_deatails($customer_id);

if(count($result)>0)
{

$retval = array( 'status_value' => 1,'status_text' => 'TRUE', 'data' => $result);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
print(json_encode($retval));

?>
