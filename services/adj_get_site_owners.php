<?php

require_once( "../src/model/admin_login.php" );

$customer_name=$_REQUEST['customer_name'];

// echo "<script language= 'JavaScript'>alert(' . $customer_name . ');</script>";
$user = new admin();
$customer_names = str_replace(array('/', '\\'), '', $customer_name);
$result=$user->get_site_owners($customer_names);

if(count($result)>0)
{
		$data=$result;
 		$page=1;
  		foreach ($data as $final)
   		{
      		$entry = array('id'=>$final['site_owner_id'],
	        	'cell'=>array(
	            		'name'=>$final['name'],
	            		'company_name'=>$final['company_name'],
	             		'is_active'=>$final['reg_completion_status'],
	        	),
    		);
    		$jsonData[] = $entry;
		}
	$retval = array('cust' => $customer_name, 'status_value' => 1,'status_text' => 'TRUE','page'=>$page,'total' =>  count($result), 'rows'=>$jsonData);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
    ob_end_clean();
print(json_encode($retval));

?>
