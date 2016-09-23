
<?php
// require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// $SC = new DBModel();
$bl= new admin();
// $SC -> print_param('owner_id(bigint),b_id (bigint),c_id(character varying)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
$retval=array();
// session_start();
$error = "";
$msg = "";
$site_owners_id=$_REQUEST['site_owners_id'];

    $fileElementName = 'fileToUpload';
$test = getimagesize($_FILES['fileToUpload']['tmp_name']);
$width = $test[0];
$height = $test[1];
$image_valid_id=0;
 // echo $_REQUEST['tmb_dimention_id'];
 // echo $width;
 // echo "string";
 // echo $height;
if($_REQUEST['tmb_dimention_id']==1)
{
    
if ($width == 50 && $height == 45)
{
$image_valid_id=1;

}
}
elseif ($_REQUEST['tmb_dimention_id']==2) {
     //echo $image_valid_id; 
    
    if ($width == 80 && $height == 45)
{
$image_valid_id=1;
}
// echo "*******";
  // echo $image_valid_id;  
}
elseif ($_REQUEST['tmb_dimention_id']==3) {
   // echo "***";
    if ($width ==95 && $height == 45)
{
$image_valid_id=1;
}
    
}
elseif ($_REQUEST['tmb_dimention_id']==4) {
    
    if ($width ==130 && $height ==45)
{
$image_valid_id=1;
}
    
}

if($image_valid_id==1)
{
    
    if(empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none')
    {
        $error = "Photo uploading failed";
        header('Location:../thump_upload.php');
    }
    else{
        $pathname='../uploads/thumbs/'.$site_owners_id.'/';
        $pathname_chk='uploads/thumbs/'.$site_owners_id.'/';
        if (!file_exists($pathname)) {
            mkdir($pathname);
            }
        $file_name=array();
        $file_name1=array();
        $file_name=$_FILES['fileToUpload']['tmp_name'];
        $file_name1=$_FILES['fileToUpload']['name'];
        $f_name['filename']=$pathname.basename($file_name1);
       $success_result= move_uploaded_file($file_name,$f_name['filename']);
        $msg = "Your photo was successfully uploaded";
    }

if ($success_result){
            
                $thump_url="'".$pathname_chk.basename($file_name1)."'";
                array_push($param, $thump_url);
                $result=$bl->adj_insert_thumb_brand_category_mapping($param);
                if($result['data'][0]['status_value']==0){
                unlink($pathname.basename($file_name1));
            }
    }   
    
else {
      $retval['success'] = FALSE;
      $retval['status_value'] = 0;
      $retval['status_text'] = 'Image Uploding Failed.' ;
      $result = array( 'success' => FALSE,FALSE,'status_value' => 0, 'data' => $retval );
} 
}
else {
   
	  $retval['success'] = FALSE;
      $retval['status_value'] = 2;
      $retval['status_text'] = 'Image Diamention Mismatch' ;
       $result = array( 'success' => FALSE,'status_value' => 2, 'data' => $retval );
}
print_r(json_encode($result));
?>