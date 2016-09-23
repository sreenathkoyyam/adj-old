<?php

require_once( "../src/model/admin_login.php" );

$country_id=$_REQUEST['customer_name'];

$user = new admin();

$result=$user->get_site_owners($customer_name);

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
	$retval = array( 'status_value' => 1,'status_text' => 'TRUE','page'=>$page,'total' =>  count($result), 'rows'=>$jsonData);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
    ob_end_clean();
print(json_encode($retval));

?>
