<?php
require_once( "../src/model/admin_login.php" );

$user = new admin();



   $result=$user->insrt_brand_thumb_details($_REQUEST['site_owners_id'],$_REQUEST['product_type'],$_REQUEST['b_name']
  ,$_REQUEST['new_brand_name'],$_REQUEST['tmb_name'],$_REQUEST['new_brand_name'],$_REQUEST['chk_value']);

                if(count($result)>0)
                    {

                        $retval = array( 'status_value' => 1,'status_text' => 'TRUE','total_count' => count($result), 'data' => $result);

                    }
                    else
                     {
                        $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
                     }
                    print(json_encode($retval));




$site_owners_id=$_REQUEST['site_owners_id'];
$error = "";
$msg = "";
    $fileElementName = 'fileToUpload';

    if(empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none')
    {
        $error = "Photo uploading failed";
        header('Location:thumbs_upload.php');
    }else{
        $sp_id=1;

        $pathname1='../uploads/thumbs/'.$site_owners_id;
        
        
        if (file_exists($pathname1)) 
        {  
         }
        else
            {
             mkdir($pathname1);    
                
            }
        $file_name=array();
        $file_name1=array();
        $file_name=$_FILES['fileToUpload']['tmp_name'];
        $file_name1=$_FILES['fileToUpload']['name'];

        $f_name['filename']=$pathname1.basename($file_name1);
        //print_r( $f_name['filename']);
        
        move_uploaded_file($file_name,$f_name['filename']);
       // if( )
       // {
      


           
    
      // }
      
        
    }
     
?>