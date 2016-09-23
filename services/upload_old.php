<?php
require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/admin_login.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();

// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');

$_REQUEST['img_malti']='1,2';
$site_owner_id=$_REQUEST['site_image_owners'];
$brand_id=$_REQUEST['b_img_name'];
$brand_category_map_id=$_REQUEST['img_malti'];
$image_name=$_REQUEST['img_name'];
$image_dimention_id=$_REQUEST['tmb_dimention_id'];
$rediarect_url=$_REQUEST['rediarect_url'];
$is_follow=$_REQUEST['is_follow'];
$social_site_id=$_REQUEST['social_sites'];
$link_url=$_REQUEST['link_url'];
$image_url='uploads/images'.$_FILES['upl']['name'];
$created_by=1;
$param=array();
$param[0]=$site_owner_id;
$param[1]=$brand_id;
$param[2]="'".$brand_category_map_id."'";
$param[3]="'".$image_name."'";
$param[4]=$image_dimention_id;
$param[5]="'".$rediarect_url."'";
$param[6]=$is_follow;
$param[7]=$social_site_id;
$param[8]="'".$link_url."'";
$param[9]="'".$image_url."'";
$param[10]=$created_by;
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], '../uploads/images/'.$_FILES['upl']['name'])){
		// echo '{"status":"success"}';
		// exit;
			$results=array();
		 	$results=$bl->adj_insert_images($param);
		 	$SC -> clear_param($results);
			print(json_encode($results));
	}
}

echo '{"status":"error"}';
exit;
?>

