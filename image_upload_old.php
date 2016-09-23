
<?php
include 'inc/libs.php';
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>
  
 <script src="js/dashboard.js" type="text/javascript"></script>
 <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="js/jquery.ui.widget.js"></script>
        <script src="js/jquery.iframe-transport.js"></script>
        <script src="js/jquery.fileupload.js"></script>
        
        <!-- Our main JS file -->
        <script src="js/script.js"></script>
        <!-- The main CSS file -->
        <link href="css/style.css" rel="stylesheet" />
      
<link rel="stylesheet" type="text/css" href="css/jquery.multiselect.css" />
<link rel="stylesheet" type="text/css" href="css/chk_style.css" /> 
<link rel="stylesheet" type="text/css" href="css/prettify.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<!-- <script type="text/javascript" src="js/jquery_chk.js"></script> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="js/jquery.multiselect.js"></script>
<script type="text/javascript" src="js/multi_combo.js"></script>
       
    <script type="text/javascript">
 $(function(){
    $('#img_malti').multiselect();
});
function start () {
  image_category_combos();
}
 
 window.onload =start;


        var chk_val;
		$(document).ready(function(){
        $('#new_brand_creation').hide();
		master_site_owner_get();
		//get_brand_name();
		
	
		});
		
    
		
		
    </script>
    <style>
    .main_div
    {
    	width: 500px;
    }	
    	
    </style>
</head>
<body>
       <div class="container_12">
   <?php
include 'inc/header.php';
?>
        
        <div class="grid_10" id="new_cust_grid" >
            <div class="box round first" style=" min-height: 900px;  height: auto;">
                    <fieldset id="sub2">
                <h2>Image Uploads</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
					<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 47%; margin: 0 auto; margin-left:3%;float: left;">
							<legend style="color: #2E5E79;">Image Upload :</legend>
						<div class="main_div">
							<table class="tmb_table">
							    
							     <tr>
                                    <td style="padding-top: 20px;">Site Owners*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="site_image_owners" name="site_image_owners"  onchange="get_brand_name($('#site_image_owners').val())"   style="height: 34px" >
                                                    <option>Select Site Owners</option>
                                                </select></td>
                          </td>
                                 <tr id="brand_select">
                                    <td style="padding-top: 20px;">Brand Name*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="b_img_name" name="b_img_name"  onchange=""   style="height: 34px" >
                                                    <option>Select One Brand</option>
                                                </select></td>
                                                </tr>
                                                   <tr>
                                       
                                         
                                    <td style="padding-top: 20px;">Business Category*</td>
                                    <td>:</td>
                                    <td>
                                                 <select title="Basic example" multiple="multiple" id="img_malti" name="img_malti" size="5">
 
                                    </select></td>
                                </tr>
                              
                                    
								<tr>
									<td style="padding-top: 20px;">Image Name</td>
									<td>:</td>
									<td><input type="text" name="img_name" id="img_name" style="width: 100%;" /></td>
								</tr>
								 <tr>
                                    <td style="padding-top: 20px;">Image Display Dimention*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="tmb_dimention_id" name="tmb_dimention_id"  onchange=""   style="height: 34px" >
                                                    <option>Select One Dimention</option>
                                                </select></td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">Image Redirect Url</td>
                                    <td>:</td>
                                    <td><input type="text" name="tmb_name" id="tmb_name" style="width: 100%;" /></td>
                                </tr>
                                 <tr>
                                    <td style="padding-top: 20px;">Follow Ad In Social Networking Site</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                     <td><input type="radio" name="tmb_name" id="tmb_name" style="width: 20%;" />Yes</td>
                                    <td><input type="radio" name="tmb_name" id="tmb_name" style="width: 20%;" />No</td>
                                
                                </tr>
                                <tr>
                                    <td style="padding-top: 20px;">Select Social Site*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="site_image_owners" name="site_image_owners"  onchange=""   style="height: 34px" >
                                                    <option>Select Site Owners</option>
                                                </select></td>
                                            </tr>
                                             <tr>
                                    <td style="padding-top: 20px;">Add Link Url</td>
                                    <td>:</td>
                                    <td><input type="text" name="tmb_name" id="tmb_name" style="width: 100%;" /></td>
                                </tr>
						
							</table>
							</div>
						</fieldset>
						
						<fieldset id="customer_step2">
    
                        
    
       
                        
                    <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 95%; height: auto; margin: 0 auto; float: left; margin-left: 5%;">
                            <legend style="color: #2E5E79;">Picture Upload :</legend>
                     <form id="upload" method="post" action="services/upload.php" enctype="multipart/form-data" >
                          
                           <div style="margin: 0 auto; height: auto;"> <form style="margin:0 auto; margin-top: 30px; margin-bottom: 30px;" id="upload" method="post" action="services/upload.php" enctype="multipart/form-data">
                                <div id="drop">Drop Here
                                                <a >Browse</a>
                                    <input type="file" onclick=" return uploads();" name="upl" multiple  />
                                </div>
                                <ul></ul>
                           </div>
                           </form>
                        </fieldset> 
                        
                                    </fieldset>
                                

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
