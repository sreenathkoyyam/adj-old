
<?php
include 'inc/libs.php';
$param=array();
$param[0]=0;
$param[1]=0;
$param[2]=0;
 if (isset($_POST['submit'])) {
         
      $param[0]=$_POST['site_owners'];
      $param[1]=$_POST['b_name'];  
       $param[2]=$_POST['tmb_malti_glry'];    
    
  }
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>
<link rel="stylesheet"  href="css/zoom.css" media="all" />
        <link rel="stylesheet" href="css/display.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/dc_tabs.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/static_styles.css" type="text/css" media="screen" />
        <script src="js/dashboard.js" type="text/javascript"></script>
        <script src="js/zoom.min.js"></script>
        <script src="js/zoom.js"></script>
    <style>
    .main_div
    {
        width: 500px;
    }   
        
    </style>
    <script>
      $(document).ready(function(){
		thumb_gallery_site_owner_get();
		
		});
        $(function() {
                $.zoom();
            });
            
                    
    function start () {
  multy_combos(0,0);
  // combo_chainge();
}

 function delete_photo()
{
    if($("input[id='chk_tmb']:checked").val()){
        var selected = $("input:checked").map(function() {
            return this.name;
        }).get();
        //alert(1234)
        var owner_id=$('#site_owners').val();
        
          //alert(selected)
       // if($('#site_owners').val()>0 && $('#b_name').val()>0&& selected!='')   
//           
          // {
        $.ajax({
               type: "POST",
               dataType: "json",
               url: "services/adj_delete_image_photo_gallery.php",
               data : {
                
                site_owner_ids :owner_id,
                 brand_ids:$('#b_name').val(),
                 category_ids:"'" +selected+"'" ,
            
          },
               success: function(data){
                 //  alert(1);
                    if(data)
                    {
                        window.location.reload('image_gallery.php');
                    }
                }
        });
        // }
        // else
        // {
            // alert(1)
        // }
    }
    else{
            jAlert("Select the images to be deleted");
    }
}
          
    </script>
</head>
<body>
 <div class="container_12">
   <?php
include 'inc/header.php';
?>
        
        <div class="grid_10" id="new_cust_grid" >
            <div class="box round first" style=" min-height: 900px;  height: auto;">
                    <fieldset id="sub2">
                <h2>Thumbnail Gallery</h2>
                <div class="dash_block">
                    <div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
                        
              
                        <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 97%; margin: 0 auto; margin-left:3%;float: left;">
                            <legend style="color: #2E5E79;">Thumbnail Gallery :</legend>
                        <div class="main_div">
                           
                             <!--        <div class="member-form2" id="reviewForm1" >
                            <p id="image_count">YOU DO NOT HAVE ANY PHOTOS</p>
                        </div> -->
                       <form action="" method="post">
                        <div style="margin-top: 30px;">
                        <div style="width: 329px;margin-left: 14px;">Site Owner:
                        <select id="site_owners" class="text-selsct-tmb-glry" onchange="site_owners_chk()" name="site_owners"  >
                                            <option value="0">Select Site Owners</option>
                                        </select></div>
                                        <div style="margin-left: 268px;; margin-top: -33px;width: 353px;">Brand Name:
                          <select id="b_name" name="b_name"  onchange="b_name_chk()" class="text-selsct-tmb-glry" >
                                                    <option value="0">Select One Brand</option>
                                                </select></div>
                                                
                                                <div style="margin-left: 530px; margin-top: -33px; width: 375px;">Category:
                                                	   <select id="tmb_malti_glry" name="tmb_malti_glry"  class="text-selsct-tmb-glry" >
                                                    <option value="0">Select One Category</option>
                                                </select>
                                                                     
                                                	
                                             <!-- <select title="" id="tmb_malti_glry" style="width:216px;" name="tmb_malti_glry" >
                                    </select> -->     	
                                                </div>
                                                  <input type="submit" name="submit"  value="Search"  class="status" style=" margin-left: 798px; margin-top: -29px;width: 73px;"/>
                     
                                            <input type="button" name="del_button" onclick="delete_photo();" class="status"  value="Delete"  style="margin-left: 888px;margin-top: -48px;width: 74px;"/>
                     
                                               </div>
                                               
                                               </form>
                        <div id="img_table" class="container">
                    
                          
                          <?php
                          
                          require_once( "services/adj_get_image_gallery.php" );
                      
                            echo '</br><ul class="gallery">';
                             
                            // if(isset($_POST['site_owners']))
                            // {
                                // echo "****************************/////////*****************";
                            // }
                       
                            // $i=0;
                            //print_r($result);
                            if($result['status_value']==1)
                            {
                            	//echo "string";
                            foreach ($result['data'] as $par) {
                                    
                                
                                $pathname1=$par['image_url'];
						        $file_id=$par['image_id'];
								//echo $file_id;
								
                              echo '<li><input style="float:left;margin-left:15px;" type="checkbox"  id="chk_tmb" name="' . $file_id . '" value= ' . $file_id . ' >
                                <a style="margin-left:25px;" href="' . $pathname1 . '"><img width="125" height="125" src="' . $pathname1 . '">&nbsp;&nbsp;
                                </a></li>';
                               // $i++;
                            }
							}
							else {
								echo "YOU DO NOT HAVE ANY PHOTOS";
							}
                          ?>
                          
                          
                          
                        </div>
                                  
                               
                            </div>
                        </fieldset>
                        
<!--                        2nd field set -->
              <!--   <fieldset id="customer_step2" style="display: none;">
    
                        
    
    
                        
                    <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 40%; height: auto; margin: 0 auto; float: left; margin-left: 5%;">
                            <legend style="color: #2E5E79;">Picture Upload :</legend>
                    
                           <div style="margin: 0 auto; height: auto;"> <form style="margin:0 auto; margin-top: 30px; margin-bottom: 30px;" id="upload" method="post" action="services/upload.php" enctype="multipart/form-data">
                                <div id="drop">Drop Here
                                                <a>Browse</a>
                                    <input type="file" name="upl" multiple />
                                </div>
                                <ul></ul>
                           </div>
                        </fieldset> 
                        
                                    </fieldset> -->
                    </div>
                </div>
            </div>
        </div>
        

        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright <a href="#">MySite</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
