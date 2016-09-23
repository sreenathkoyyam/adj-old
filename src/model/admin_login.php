<?php

require_once( "dbmodel.php" );
  // ============================================================
 //
// ==============================================================
class admin extends DBModel
{
  
  
  
     // ==========================================================
   // Eros:test bl
  // ============================================================
  public function adj_test($parameter){
       // print_r($parameter);
         $storedProcedure='adj_get_brand_name';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['id'] = $row['id'];
         $data[$i]['b_category_name'] = $row['b_category_name'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;
    }  
  
     // ==========================================================
   // Eros:geting brand category names
  // ============================================================
    public function adj_get_brand_category_name($parameter){
       // print_r($parameter);
         $storedProcedure='adj_get_brand_category_name';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['category_id'] = $row['id'];
         $data[$i]['b_category_name'] = $row['b_category_name'];
         $data[$i]['check_val'] = $row['check_val'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;
    }  
    
  // ==========================================================
   // Eros:admin_signup
  // ============================================================

public function adm_signin($user_id,$pwd )
{
 $pwds=md5($pwd);
   	$database = Mysql_Database::getInstance();	
	$query = mysql_query("select g.adj_user_id,g.adj_email from adj_users g where g.adj_email  =   '". $user_id ."' and g.adj_pwd = '".$pwds. "' and is_active=1 AND g.user_type_id=1"); 
 	//print_r($query);
 	$data=array();
 	while($row=mysql_fetch_array($query)){
			$data['adj_user_id']=$row[0];
			$data['adj_email']=$row[1];
		}
//print_r($data);
    return $data;

}
    
    
    
      // ==========================================================
   // Eros:business_category
  // ============================================================


public function business_category_get()
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("select b.id,b.b_category_name from adj_master_business_category b where is_active=1"); 
    //print_r($query);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['id'] = $row['id'];
         $data[$i]['b_category_name'] = $row['b_category_name'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}
      // ==========================================================
   // Eros:master_state
  // ============================================================


public function master_state_get($country_id)
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("select b.state_id,b.state_name from adj_master_states b where b.country_id='.$country_id.' and is_active=1 "); 
    //print_r($query);
   $data=array();
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['state_id'] = $row['state_id'];
         $data[$i]['state_name'] = $row['state_name'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}

      // ==========================================================
   // Eros:master_state
  // ============================================================


public function master_site_owner_get()
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("select s.site_owner_id,s.first_name,s.last_name from adj_site_owner s WHERE is_active=1"); 
    //print_r($query);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['site_owner_id'] = $row['site_owner_id'];
         $data[$i]['name'] = $row['first_name'].$row['last_name'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}

      // ==========================================================
   // Eros:master_state
  // ============================================================


public function master_brand_get()
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("select s.site_owner_id,s.first_name,s.last_name from adj_site_owner s WHERE is_active=1"); 
    //print_r($query);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['site_owner_id'] = $row['site_owner_id'];
         $data[$i]['name'] = $row['first_name'].$row['last_name'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}
      // ==========================================================
   // Eros:master_country
  // ============================================================


public function master_country_get()
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("select b.country_id,b.country_name from adj_master_country b where is_active=1"); 
    //print_r($query);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['country_id'] = $row['country_id'];
         $data[$i]['country_name'] = $row['country_name'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}
    

     // ==========================================================
   //// Eros:insertion of site_owner
  // ============================================================
   public function site_owner_register($parameter)
    {
           

         $storedProcedure='adj_site_owner_registeration';          
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['owner_id'] = $row['owner_id'];
         $data[$i]['b_id'] = $row['b_id'];
        
         $i++;
          }
         $data[0]['c_id']=str_replace("'", "", $parameter['b_category']);
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
    }
    
      // ==========================================================
   // sreenath:insert thumb category maping
  // ============================================================


public function site_thumb_ctgry($params)
{
    
 $this -> dbmodel = new DBModel();
        
 $b_category=str_replace("'", "", $params['c_id']);
  $database = Mysql_Database::getInstance(); 
    $owner_id=$params['owner_id'];
    $b_id=$params['b_id'];
          $category_ids=explode( ",", $b_category );
          for ($i=0; $i < count($category_ids); $i++) {
            $c_id=$category_ids[$i];
$query = "INSERT INTO adj_thumb_brand_category_mapping (site_owner_id,brand_id,category_id,created_on,created_by,is_active) VALUES ($owner_id,$b_id,$c_id,now(),1,1);";
 //print_r($query);
 $res = mysql_query($query);
  
          }
          $data=array();
 if(isset($res))
 {
       $data[0]['ctg_status_value'] = 1;
 }
 else {
      $data[0]['ctg_status_value'] = 0;
 }
      
        $retrieval = $this -> dbmodel -> make_result($data);
        return $retrieval;
    
}
      // ==========================================================
   // Eros:get provider_type
  // ============================================================


public function master_provider_type_get()
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("select p.product_type_id,p.product_type FROM adj_master_product_types p WHERE p.is_active=1"); 
    //print_r($query);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['product_type_id'] = $row['product_type_id'];
         $data[$i]['product_type'] = $row['product_type'].$row['product_type'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}


      // ==========================================================
   // Eros:insert  thamb details
  // ============================================================


public function insrt_brand_thumb_details($site_owners_id,$product_type,$b_name,$new_brand_name,$tmb_name,$new_brand_name,$chk_value)
{
    if($chk_value=1)
    {
      $query1 = "INSERT INTO `adj_brands` (`brand_name`,`site_owner_id`,`product_type_id`,`created_by`,`created_on`,`is_active`) 
    VALUES ('{$b_name}','{$site_owners_id}','{$product_type}','{$b_category}','{$web}','{$brand_name}','{$address1}','{$house_name}','{$country}','{$state}','{$city}','{$email}','{$phone}','{$reg_status}',1)";
      
    }
else
{
    
}
    $database = Mysql_Database::getInstance();  
    
    
    //print_r($query);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['product_type_id'] = $row['product_type_id'];
         $data[$i]['product_type'] = $row['product_type'].$row['product_type'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;

}

  


//Eros:get brand detatls
public function adj_get_brand_name($parameter){
         $storedProcedure='adj_get_brand_name';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['brand_id'] = $row['brand_id'];
         $data[$i]['brand_name'] = $row['brand_name'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;
    }

public function adj_thumb_image_upload($parameter){
       // print_r($parameter);
         $storedProcedure='adj_get_brand_name';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction_without_param($storedProcedure);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['brand_id'] = $row['brand_id'];
         $data[$i]['brand_name'] = $row['brand_name'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;
    }
//shine
public function adj_admin_change_password($parameter)
{
     $storedProcedure='adj_admin_update_password';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['status_value'] = $row['status_value'];
         $data[$i]['status_text'] = $row['status_text'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;

}
   

public function adj_get_site_owner_deatails($customer_id)
{
    $database = Mysql_Database::getInstance();  
    $query = mysql_query("SELECT site_owner_id,first_name,last_name,address1,address2,country_id,state_id,city,company_name,website,adj_email,phone FROM adj_site_owner WHERE site_owner_id=$customer_id "); 
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['owner_id'] = $row['site_owner_id'];
         $data[$i]['first_name'] = $row['first_name'];
         $data[$i]['last_name'] = $row['last_name'];
         $data[$i]['company_name'] = $row['company_name'];
         // $data[$i]['category_id'] = $row['b_category_id'];
         $data[$i]['website'] = $row['website'];
         // $data[$i]['brand_name'] = $row['brand_name'];
         $data[$i]['address1'] = $row['address1'];
         $data[$i]['address2'] = $row['address2'];
         $data[$i]['country_id'] = $row['country_id'];
         $data[$i]['state_id'] = $row['state_id'];
         $data[$i]['city'] = $row['city'];
         $data[$i]['email'] = $row['adj_email'];
         $data[$i]['phone'] = $row['phone'];
        $i++;
        }
    return $data;

}

//shine
public function adj_master_image_dimension($parameter)
{
     $storedProcedure='adj_master_image_dimension';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['dimension_id'] = $row['dimention_id'];
         $data[$i]['dimension'] = $row['dimention'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;

}

// Shine 
public function adj_insert_thumb_brand_category_mapping($parameter)
{
     $storedProcedure='adj_insert_thumb_brand_category_mapping';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['status_value'] = $row['status_value'];
         $data[$i]['status_text'] = $row['status_text'];
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
}


//==============================================================

public function adj_get_thumbnails($parameter)
{
     $storedProcedure='adj_get_thambnails';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['thumb_img_url'] = $row['thumb_img_url'];			 
          $data[$i]['brand_category_map_id'] = $row['brand_category_map_id'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;

}
public function get_site_owners($customer_name)
		{
		$database = Mysql_Database::getInstance();
		$qur="SELECT site_owner_id,CONCAT(first_name, ' ', last_name) as name ,company_name,reg_completion_status FROM adj_site_owner  WHERE CONCAT(first_name, ' ', last_name) LIKE COALESCE( CONCAT('%', $customer_name, '%') ,CONCAT(first_name, ' ', last_name))";
		$query = mysql_query($qur);
		//print_r($qur);
		$i=0;
		while($row=mysql_fetch_array($query)){
		$data[$i]['site_owner_id'] = $row['site_owner_id'];
		$data[$i]['name'] = $row['name'];
		$data[$i]['company_name'] = $row['company_name'];
		$data[$i]['reg_completion_status'] = $row['reg_completion_status'];
		$i++;
		}
		return $data;
		}
		
		//shine
public function adj_insert_images($parameter)
{
     $storedProcedure='adj_insert_images';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['status_value'] = $row['status_value'];
         $data[$i]['status_text'] = $row['status_text'];
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
}
     // ==========================================================
   // Eros:deleting image
  // ============================================================
    public function delete_thumb_image($parameter){
       // print_r($parameter);
         $storedProcedure='adj_get_brand_category_name';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['category_id'] = $row['id'];
         $data[$i]['b_category_name'] = $row['b_category_name'];
         $data[$i]['check_val'] = $row['check_val'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;
    }  
    public function adj_delete_thumb_photo_gallery($parameter)
{
     $storedProcedure='adj_delete_thumb_photo_gallery';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['status_value'] = $row['status_value'];
         $data[$i]['status_text'] = $row['status_text'];
         $data[$i]['img_urls'] = $row['img_urls'];
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
}

 
   public function adj_get_images_gallery($parameter)
{
     $storedProcedure='adj_get_images_gallery';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['image_url'] = $row['image_url'];			 
          $data[$i]['image_id'] = $row['image_id'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;

}


public function adj_delete_image_photo_gallery($parameter)
{
     $storedProcedure='adj_delete_image_photo_gallery';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['status_value'] = $row['status_value'];
         $data[$i]['status_text'] = $row['status_text'];
         $data[$i]['img_urls'] = $row['img_urls'];
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
}
 public function adj_get_thumb_related_images($parameter)
{
     $storedProcedure='adj_get_thumb_related_images';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
    
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['image_url'] = $row['image_url'];             
          $data[$i]['image_id'] = $row['image_id'];
        
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
 
         return $retrieval;

}

public function adj_get_master_categories($parameter)
{
     $storedProcedure='adj_get_master_categories';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
         $data[$i]['category_id'] = $row['id'];
         $data[$i]['category'] = $row['b_category_name'];
         $data[$i]['is_active'] = $row['is_active'];
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
}
function adj_insert_master_categories($parameter){
	 $storedProcedure='adj_insert_master_categories';
         $this -> dbmodel = new DBModel();
         $retrieval = $this -> dbmodel -> call_dbFunction($storedProcedure, $parameter);
         $i=0;
         $data=array();
         while($row=mysql_fetch_array($retrieval)){
        $data[$i]['status_value'] = $row['status_value'];
         $data[$i]['status_text'] = $row['status_text'];
         $i++;
          }
         $retrieval = $this -> dbmodel -> make_result($data);
         return $retrieval;
}

    
}



?>

