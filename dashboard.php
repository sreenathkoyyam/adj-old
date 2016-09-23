<?php


//error_reporting(0);
include 'inc/libs.php';

//$profile_viewer_uid = "<script language=javascript>document.write(profile_viewer_uid);</script>";

  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>
      <!-- //multi select -->
       <script src="js/dashboard.js" type="text/javascript"></script>
     <!--   <script type="text/javascript" src="js/ajaxfileupload.js"></script>
      <script src="js/upload.js"></script> -->
      
<link rel="stylesheet" type="text/css" href="css/jquery.multiselect.css" />
<link rel="stylesheet" type="text/css" href="css/chk_style.css" /> 
<link rel="stylesheet" type="text/css" href="css/prettify.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<!-- <script type="text/javascript" src="js/jquery_chk.js"></script> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="js/jquery.multiselect.js"></script>
<script type="text/javascript" src="js/multi_combo.js"></script>
       
    
    		<script src="js/flexigrid.js"></script>
    		<link rel="stylesheet" type="text/css" href="css/flexigrid.css" />
    

<!--          <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />   -->


      
   
    <script type="text/javascript">
    var user_ids=<?php echo $_SESSION['admin_id'] ?>;
    var  profile_viewer_uid = 1;
 $(function(){
    $('#example-basic').multiselect();
  
   //  $('input.two').simpleDatepicker({ startdate: 2001, enddate: 2012 });
});
function start () {
  multy_combos(0,0);
  // combo_chainge();
}
 
 window.onload =start;

		$(document).ready(function(){
	   $('#brand_name_tr').show();
       $('#brand_name_edit_tr').hide();
			site_owner();  
		    //business_category_get();
			master_country_get();
			$('#new_cust_grid').css('display','none');
			$('#cust_grid').css('display','block');
			
			$('#new_cust').click(function(){
				
				$('#new_cust_grid').css('display','block');
				$('#cust_grid').css('display','none');
				$('#change_password').css('display','none');
			});
			$('#cust').click(function(){
				
				$('#new_cust_grid').css('display','none');
				$('#cust_grid').css('display','block');
				$('#change_password').css('display','none');
			});
			$('#ch_pwd').click(function(){
				
				$('#new_cust_grid').css('display','none');
				$('#cust_grid').css('display','none');
				$('#change_password').css('display','block');
			});
			
			
            $('#sub2').click(function(){
               
           
          window.location.assign("thumbs_upload.php");
           
            });
		});

		
		
    </script>
    <?php

$profile_viewer_uid = "<script language=javascript>document.write(profile_viewer_uid);</script>";
// echo "**************************************************";
   // echo $profile_viewer_uid;
?>
</head>
<body>
     <div class="container_12">
      <?php include 'inc/header.php';?>
        
      <div class="grid_10" id="new_cust_grid" style="display:none;">
            <div class="box round first" style=" min-height: 900px;  height: auto;">
                    <fieldset id="sub2">
                <h2>New Site Owner</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 91%; margin: 0 auto; margin-left:3%;float: left;">
							<legend style="color: #2E5E79;">Site Owner Details :</legend>
						
							<table style=" margin: 0 auto; margin-top: 30px; margin-bottom: 30px;">
							      <input type="text" name="owner_id" id="owner_id" value="0" style="display: none;"/>
                               
							    								<tr>
									<td>First Name*</td>
									<td style="width:10px;">:</td>
									<td><input type="text" class="text-input_dash" name="f_name" id="f_name" /></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Last Name</td>
									<td>:</td>
									<td><input type="text" class="text-input_dash" name="l_name" id="l_name"  /></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Company Name*</td>
									<td>:</td>
									<td><input type="text" class="text-input_dash" name="c_name" id="c_name" /></td>
								</tr>
								<tr id="brand_name_tr">
                                    <td style="padding-top: 20px;">Brand Name*</td>
                                    <td>:</td>
                                    <td><input type="text" class="text-input_dash" name="brand_name" id="brand_name" /></td>
                                </tr>
                                  <tr id="brand_name_edit_tr">
                                    <td style="padding-top: 20px; ">Brand Name*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="brand_name_edit" name="brand_name_edit" class="text-selsct_dash"  id="brand_name_edit" onchange="multy_combos($('#owner_id').val(),$('#brand_name_edit').val())"   style="height: 34px;width: 286px;">
                                                    <option >Select One Brand</option>
                                                </select></td>
                                </tr>
								 <tr>
                                       
                                         
                                    <td style="padding-top: 20px;">Business Category*</td>
                                    <td style="width:10px;">:</td>
                                    <td>
                                                 <select title="Basic example"  style="width:287px;margin-left:25px;" multiple="multiple" id="example-basic" name="example-basic" class="text-selsct_dash"  size="5">
 
                                    </select></td>
                                </tr>
								<tr>
									<td style="padding-top: 20px;">Website*</td>
									<td>:</td>
									<td><input type="text" class="text-input_dash" name="web" id="web" /></td>
								</tr>
								
                                
                                    <tr>
                                    <td style="padding-top: 20px;">Address*</td>
                                    <td>:</td>
                                    <td><input type="text" class="text-input_dash" name="address1" id="address1" /></td>
                                </tr>
                                 <tr>
                                    <td style="padding-top: 20px;"></td>
                                    <td>:</td>
                                    <td><input type="text" class="text-input_dash" name="house_name" id="house_name" /></td>
                                 
                                       
                                </tr>
                                
                                                 <tr>
                                    <td style="padding-top: 20px;">Country*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="country" name="country" class="text-selsct_dash"  id="country" onchange="master_state_get()" >
                                                    <option>Select Country</option>
                                                </select></td>
                                </tr>
                                        <tr>
                                    <td style="padding-top: 20px;">State*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="state" name="state" class="text-selsct_dash"  id="state" onchange=""  >
                                                    <option>Select a State</option>
                                                </select></td>
                                </tr>
                                   <tr>
                                     <td style="padding-top: 20px;">city*</td>
                                    <td>:</td>
                                    <td><input type="text" class="text-input_dash" name="city" id="city" /></td>
                                 
                                       
                                            </tr>
                               
								<tr>
									<td style="padding-top: 20px;">Email*</td>
									<td>:</td>
									<td><input type="text" class="text-input_dash" name="email" id="email" /></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Contact No.</td>
									<td>:</td>
									<td><input type="text" class="text-input_dash" name="phone" id="phone"  /></td>
								</tr>
							<!-- 	<tr>
									<td style="padding-top: 20px;">Thumbnail*</td>
									<td>:</td>
									<td style="width:20px;">
										<input id="fileToUpload" type="file" size="45" onchange="return ajaxFileUpload();" name="fileToUpload" class="input" multiple>
									</td>
								</tr> -->
								<!-- <tr>
									<td style="padding-top: 20px;">Title*</td>
									<td>:</td>
									<td><input type="text" name="phone" /></td>
								</tr>
								<tr>
									<td colspan="3" style="padding-top: 20px;">
										<textarea style=" width: 100%; height: 120px; resize: none;">Description </textarea>
									</td>
								</tr> -->
								<tr>
									<td colspan="2"></td>
									<td style="padding-top: 10px; float: right;">
										
									</td>
								</tr>
								<tr>
                                    <td colspan="2"></td>
                                    <td style="padding-top: 10px; float: right;"><label id="error" style="color: red;display: none;"> * Please fill the mandatory fields</label>       </td>
                                </tr>
							</table>
							<div style=" margin-left: -26px;margin-top: -13px;"><div style="width:200px; margin-left: 374px;"><input type="button" id="site_ownersave" onclick="site_owner_register()"  name="my_upload" value="Save"  class="status"/></div>
                                     <div style="width:200px;margin-left: 540px; margin-top: -48px;">   <input type="button" id="clr" value="Clear" class="status" />
                                        </div></div>
						</fieldset>
						
<!-- 						2nd field set -->
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
		
		<div class="grid_10" id="cust_grid">
            <div class="box round first" style=" min-height: 650px;  height: auto;">
                <h2>Site Owners</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<!-- <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 30%; margin: 0 auto; float: left;">
							<legend style="color: #2E5E79;">Customer Search :</legend>
							<table style="margin-left: 10px;">
								<tr>
									<td style="padding-top: 20px;">Site Owners Name</td>
									<td style="width:10px;">:</td>
									<td><input type="text" id="customer_name" name="search" /></td>
									<td>
										<input type="button" id="cus_search" name="cus_search" value="Search"  style="margin-left:5px; background: #2E5E79;color: #fff;cursor: pointer;"/>
									</td>
								</tr>
							</table>
							<div style=" height:400px; width: 92%; border: 1px solid #E6F0F3; border-radius: 3px; margin: 0 auto; margin-bottom:10px;"></div>
						</fieldset> -->
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 67%; height: auto; margin: 0 auto; float: left; margin-left: 2%;">
							<legend style="color: #2E5E79;">Site Owners Details :</legend>
							<table style="margin-left: 10px;">
								<tr>
									<td style="padding-top: 20px;">Site Owner Name</td>
									<td style="width:10px;">:</td>
									<td><input type="text" class="text-input_dash" id="customer_name" name="search" /></td>
									<td >
										<input type="button" id="cus_search"  onclick="site_owner()" name="cus_search" value="Search"  class="status" style="  margin-bottom: -9px; margin-left: 36px;" />	
									</td>
								</tr>
							</table>
							<div id="avail_table">
							<table id='site_owners'></table>
						</div>
						</fieldset>
					</div>
  				</div>
            </div>
		</div>
		<div class="grid_10" id="change_password" style="display: none">
            <div class="box round first" style="height: 400px;">
                <h2>Change Password</h2>
                <div class="dash_block">
                    <div class="reg" id="chgPswd" style="width:40%;  margin: 0 auto;font-size:13px !important; margin-left:2px;  margin-top: 25px;">
                        
                        <dl>
                            <label style="margin-right:30px;" for="old_pswd">Old Password</label>
                                <input type="password" id="old_pswd"  onkeyup="oldPassword_chk()" onkeydown="oldPassword_chk()" />
                        </dl>
                        <dl>
                            <label style="margin-right:30px;" for="new_pswd">New Password</label>
                                <input type="password" onkeyup="password_chk()" onkeydown="password_chk()"  id="new_pswd" />    
                        </dl>
                        <dl>
                            <label style="margin-right:30px;" for="cnfm_pswd">Confirm Password</label>
                                <input type="password" id="cnfm_pswd" onkeyup="txtPasswordConfirm_chk()" onkeydown="txtPasswordConfirm_chk()" />        
                        </dl>   
                        <dl style="text-align: center;">
                            <input type="button" style="margin-left:5px; background: #2E5E79;color: #fff;cursor: pointer;" value="Update" onclick="changePassword(<?php echo $_SESSION['admin_id'] ?>)" name="pswd_chg" id="pswd_chg">
                        </dl>
                    </div>
                </div>
            </div>
        </div>
            <!-- <div class="box round">
                <h2>
                    Figures</h2>
                <div class="block">
                    <div class="stat-col">
                        <span>Target</span>
                        <p class="purple">
                            70,000</p>
                    </div>
                    <div class="stat-col">
                        <span>Last Month Sales</span>
                        <p class="yellow">
                            32,729</p>
                    </div>
                    <div class="stat-col">
                        <span>Current Month Sales</span>
                        <p class="green">
                            63,829</p>
                    </div>
                    <div class="stat-col">
                        <span>Change</span>
                        <p class="blue">
                            99.9%</p>
                    </div>
                    <div class="stat-col">
                        <span>Difference</span>
                        <p class="red">
                            693.00</p>
                    </div>
                    <div class="stat-col">
                        <span>Stats with Icon</span>
                        <p class="purple">
                            <img src="img/icon-direction.png" alt="" />&nbsp;65,000</p>
                    </div>
                    <div class="stat-col last">
                        <span>Total</span>
                        <p class="darkblue">
                            70,000</p>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div> -->
       
      <!--   <div class="grid_5">
            <div class="box round">
                <h2>
                    Column on Left</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/horizontal.jpg" alt="Ginger" class="left" />Lorem ipsum dolor sit
                        amet, consectetur <a href="">adipisicing</a> elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur..</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div> -->
      <!--   <div class="grid_5">
            <div class="box round">
                <h2>
                    Right Column</h2>
                <div class="block">
                    <p class="start">
                        <img src="img/vertical.jpg" alt="Ginger" class="right" />Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.</p>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it
                        has a more-or-less normal distribution of letters, as opposed to using 'Content
                        here, content here', making it look like readable English. Many desktop publishing
                        packages and web page editors now use Lorem Ipsum as their default model text, and
                        a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                        versions have evolved over the years, sometimes by accident, sometimes on purpose
                        (injected humour and the like).</p>
                </div>
            </div>
        </div> -->
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
