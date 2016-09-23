<?php

require_once( "../src/model/admin_login.php" );
$user = new admin();
// $user_id          = $_REQUEST['user_id'];
// $company_id       = $_REQUEST['company_id'];
$result=$user->site_owner();
// $_REQUEST['f_name']='test';
// $_REQUEST['l_name']=='test';
// $_REQUEST['c_name']=='test';
// $_REQUEST['b_category']='1,2,3';$_REQUEST['web']='test';
// $_REQUEST['brand_name']='test';$_REQUEST['address1']='test';
// 
// $_REQUEST['house_name']='test';$_REQUEST['country']=95;
// $_REQUEST['state']=2;$_REQUEST['city']='test';$_REQUEST['email']='test';
// $_REQUEST['phone']='test';
// $user = new admin();
// $result=$user->site_owner($_REQUEST['f_name'],$_REQUEST['l_name'],$_REQUEST['c_name'],$_REQUEST['b_category'],$_REQUEST['web'],$_REQUEST['brand_name'],$_REQUEST['address1'],
// $_REQUEST['house_name'],$_REQUEST['country'],$_REQUEST['state'],$_REQUEST['city'],$_REQUEST['email'],$_REQUEST['phone'] );

 //print_r($result);
if($result>0)
{
session_start();
if(isset($_SESSION['site_owner_id']))
{
 unset($_SESSION['site_owner_id']); 
}
$_SESSION['site_owner_id']=$result;
 print_r($_SESSION['site_owner_id']);
$retval = array( 'status_value' => 1,'status_text' => 'TRUE','data'=>$result);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
  }
print(json_encode($retval));
?>
