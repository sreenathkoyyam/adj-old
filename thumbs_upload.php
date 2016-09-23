
<?php
include 'inc/libs.php';
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>

   
        <script src="js/dashboard.js" type="text/javascript"></script>
        <script src="js/alert/jquery.alerts.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="js/alert/jquery.alerts.css"> 
<link rel="stylesheet" type="text/css" href="css/dashboard.css"> 
<!--     <script src="js/jquery-1.7.1.min.js"></script> -->
    <script type="text/javascript" src="js/ajaxfileupload.js"></script>
      <script src="js/upload.js"></script>
   <!-- //multi select -->
       <script src="js/dashboard.js" type="text/javascript"></script>
       <script type="text/javascript" src="js/ajaxfileupload.js"></script>
      <script src="js/upload.js"></script>
      
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
    var admin_id=<?php echo $user_id ?>;
 $(function(){
    $('#tmb_malti').multiselect();
});
//Eros:chainged
// function start () {
  
// }
//  
 // window.onload =start;



        var chk_val;
		$(document).ready(function(){
        $('#new_brand_creation').hide();
		master_site_owner_get();
		//get_brand_name(0);
		 thumb_category_combos(0,0);
		
		//combos()
			 $('#sub0').click(function(){
               //alert(1)
          window.location.assign("dashboard.php");
            });
              $('#sub1').click(function(){
               //alert(1)
          window.location.assign("dashboard.php");
            });
            $('#sub2').click(function(){
              // alert(2)
             window.location.assign("thumbs_upload.php");
            });
          
             $('#example-basic').click(function(){
              // alert(2)
               //alert($('#example-basic').val());
            });
            
             // $('#b_new_creation').click(function(){
               // alert(2)
               // $('#brand_select').hide();
               // $('#new_brand_creation').show();
//             
            // });
      $('#b_new_creation').change(function() {
        if($(this).is(":checked")) {
               $('#brand_select').hide();
               $('#new_brand_creation').show();
        }
        else
        {
            $('#brand_select').show();
            $('#new_brand_creation').hide();
        }
		});
		});
    </script>
    <style>
    .main_div
    {
    	width: 500px;margin: 0 auto;
    }	
    </style>
</head>
<body>
        <div class="container_12">
   <?php
include 'inc/header.php';
?>
        
        <div class="grid_10" id="new_cust_grid" >
            <div class="box round first" style="height: auto;">
                    <fieldset id="sub2">
                <h2>Thumbnail Uploads</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 92%; margin: 0 auto; margin-left:3%;float: left;">
							<legend style="color: #2E5E79;">Thumbnail Upload :</legend>
						<div class="main_div">
							<table>
							     <tr>
                                    <td style="padding-top: 20px;">Site Owners*</td>
                                    <td>:</td>
                                    <td>
                                        <select id="site_owners" class="text-selsct_thumb" onchange="site_owners_chk()" name="site_owners"  >
                                            <option value="0">Select Site Owners</option>
                                        </select>
                                    </td>
                                </tr>
							    <tr>
                                    <td style="padding-top: 20px;">Product Type*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="product_type" name="product_type"  onchange="product_type_chk()"  class="text-selsct_thumb" >
                                                    <option value="0">Select Product Type</option>
                                                </select>
                                    </td>
                                </tr>
                                 <tr>
                                    <td><input type="checkbox" name="b_new_creation" id="b_new_creation"  class="text-input"/></td>
                                    <td></td>
                                    <td style="padding-top: 20px;padding-left: 27px;">Create New Brand</td>
                                </tr>
                                 <tr id="brand_select">
                                    <td style="padding-top: 20px;">Brand Name*</td>
                                    <td>:</td>
                                    <td>
<!--                                     	Eros:chainged -->
                                                <select id="b_name" name="b_name"  onchange="thumb_category_combos($('#site_owners').val(),$('#b_name').val())" class="text-selsct_thumb" >
                                                    <option value="0">Select One Brand</option>
                                                </select>
                                    </td>
                                </tr>
                                 <tr style="display: none;" id="new_brand_creation">
									<td style="padding-top: 20px;">Create New Brand Name*</td>
									<td style="width:10px;">:</td>
									<td><input type="text" onkeyup="new_brand_names_chk()" onkeydown="new_brand_names_chk()" name="new_brand_names" id="new_brand_names" class="text-input"/></td>
								</tr>
								 <tr>
                                    <td style="padding-top: 20px;">Business Category*</td>
                                    <td>:</td>
                                    <td style="padding-left: 25px;">
                                                 <select title="Basic example" multiple="multiple" id="tmb_malti" style="width:288px;" name="tmb_malti" size="5">
                                    </select>
                                  <br />   <span id="remark_cat" style="color: #FF0000;display: none">* Please Select a Business Category</span>
                                    </td>
                                   
                                </tr>	
								<tr>
									<td style="padding-top: 20px;">Thumbnail Name</td>
									<td>:</td>
									<td><input type="text" name="tmb_name" id="tmb_name" class="text-input_thumb"  onkeyup="tmb_name_chk()" onkeydown="tmb_name_chk()"/></td>
								</tr>
								 <tr>
                                    <td style="padding-top: 20px;">Thumbnail Display Dimention*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="tmb_dimention_id" name="tmb_dimention_id"  onchange="tmb_dimention_id_chk()"  class="text-selsct_thumb" >
                                                    <option value="0">Select One Dimention</option>
                                                </select>
                                    </td>
                                </tr>
							
							<tr>
                                    <td style="padding-top: 20px;">Thumbnail*</td>
                                    <td>:</td>
                                    <td style="padding-left: 25px">
                                        <input id="fileToUpload" type="file" size="45" onchange="change_image()" name="fileToUpload" class="input" multiple>
                                 <br />  	<span id="remark_thump" style="color: #FF0000;display: none"> * Please Select a Thumbnail</span>
                                    </td>
                                </tr>
								<tr>
                                    <td id="mandatory" style="display: none; color: #FF0000;padding-top: 30px;">
                                    * Please Fill all the above fields
                                     </td>
                                </tr>
								<!-- <tr>
                                    <td style="padding-top: 10px; float: right;">
                                        <input type="button" id="my_tmb_upload" onclick="return ajaxFileUpload();"  name="my_tmb_upload" value="Save"  style="background: #2E5E79;color: #fff;cursor: pointer;"/>
                                        <input type="button" id="clr" value="Clear" style="background: #2E5E79;color: #fff; cursor: pointer;" />
                                    </td> -->
                                </tr>
							</table>
						<div style=" margin-left: -290px;margin-top: 30px;"><div style="width:200px; margin-left: 374px;"><input type="button" id="my_tmb_upload" onclick="return ajaxFileUpload();"  name="my_tmb_upload" value="Save"  class="status"/></div>
                                     <div style="width:200px;margin-left: 540px; margin-top: -48px;">   <input type="button" id="clr" value="Clear" class="status"/>
                                        </div></div>

					</div>
					</fieldset>
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
