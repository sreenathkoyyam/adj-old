<?php
session_start();
include 'inc/libs.php';
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Dashboard | MySite Admin</title>
    
   
        <script src="js/dashboard.js" type="text/javascript"></script>
        <script src="js/alert/jquery.alerts.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="js/alert/jquery.alerts.css"> 
<!--     <script src="js/jquery-1.7.1.min.js"></script> -->
    <script type="text/javascript" src="js/ajaxfileupload.js"></script>
      <script src="js/upload.js"></script>
<!--          <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />   -->

  <script type="text/javascript">
$(function(){
    $('#example-basic').multiselect();
  
   //  $('input.two').simpleDatepicker({ startdate: 2001, enddate: 2012 });
});
function start () {
  multy_combos();
}
 
window.onload =start;


// */----------------------------------------------*/
		$(document).ready(function(){
		     // var text='sree';
// 		    
		    // jAlert(text, 'Message', function(r) {   
// 		       
                // // $('.password').hide();      
                // // $('#profileForm').show();                     
                // });     
			business_category_get();
			master_country_get();
			$('#new_cust_grid').css('display','none');
			$('#cust_grid').css('display','block');
			
			$('#new_cust').click(function(){
				
				$('#new_cust_grid').css('display','block');
				$('#cust_grid').css('display','none');
			});
			$('#cust').click(function(){
				
				$('#new_cust_grid').css('display','none');
				$('#cust_grid').css('display','block');
			});
			
			
            $('#sub2').click(function(){
               
           
          window.location.assign("thumbs_upload.php");
           
            });
		});
		
    
		
		
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                <h3 style="color: #fff;">Dashboard</h3>
                   <!--  <img src="img/logo_dash.png" alt="Logo" />-->
                  </div> 
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello <?php echo $_SESSION['admin'];?></li>
                           <!--  <li><a href="#">Config</a></li> -->
                            <li><a href="index.php">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-form-style"><a href="dashboard.php"><span>Customers</span></a></li>
               <!-- <li class="ic-typography"><a href="javascript:"><span>Controls</span></a>
                    <ul>
                        <li><a href="form-controls.html">Forms</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="form-controls.html">Full Page Example</a> </li>
                        <li><a href="table.html">Page with Sidebar Example</a> </li>
                    </ul>
                </li> -->
                <!-- <li class="ic-typography"><a href="typography.html"><span>Typography</span></a></li>
				<li class="ic-charts"><a href="charts.html"><span>Charts & Graphs</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="image-gallery.html">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
                    </ul>
                </li>
                <li class="ic-notifications"><a href="notifications.html"><span>Notifications</span></a></li> -->

            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem" id="cust">Customers</a>
                          <ul class="submenu">
                                <li id="new_cust"><a><label id="sub1" >Create Site Owner</label></a> </li>
                            </ul>
                             <ul class="submenu">
                                <li id="new_cust"><a><label id="sub2" >trm</label></a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem" id="set">Settings</a>
                           
                        </li>
                        <li><a class="menuitem" id="ch_pwd">Change Password</a>
                          
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="grid_10" id="new_cust_grid" style="display:none;">
            <div class="box round first" style=" min-height: 900px;  height: auto;">
                    <fieldset id="sub2">
                <h2>New Customer</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 45%; margin: 0 auto; margin-left:3%;float: left;">
							<legend style="color: #2E5E79;">Customer Details :</legend>
						
							<table style=" margin: 0 auto; margin-top: 30px; margin-bottom: 30px;">
							    
							    								<tr>
									<td>First Name*</td>
									<td style="width:10px;">:</td>
									<td><input type="text" name="f_name" id="f_name" style="width: 100%;"/></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Last Name</td>
									<td>:</td>
									<td><input type="text" name="l_name" id="l_name" style="width: 100%;" /></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Company Name*</td>
									<td>:</td>
									<td><input type="text" name="c_name" id="c_name" style="width: 100%;"/></td>
								</tr>
								<tr>
								    <td style="padding-top: 20px;">Business Category*</td>
                                    <td>:</td>
								    <td>
                                                <select id="b_category" name="b_category"  onchange=""   style="height: 34px" >
                                                    <option>Select Business Category</option>
                                                </select></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Website*</td>
									<td>:</td>
									<td><input type="text" name="web" id="web" style="width: 100%;"/></td>
								</tr>
								<tr>
                                    <td style="padding-top: 20px;">Brand Name*</td>
                                    <td>:</td>
                                    <td><input type="text" name="brand_name" id="brand_name" style="width: 100%;"/></td>
                                </tr>
                                
                                    <tr>
                                    <td style="padding-top: 20px;">Address*</td>
                                    <td>:</td>
                                    <td><input type="text" name="address1" id="address1" style="width: 100%;"/></td>
                                </tr>
                                 <tr>
                                    <td style="padding-top: 20px;"></td>
                                    <td>:</td>
                                    <td><input type="text" name="house_name" id="house_name" style="width: 100%;"/></td>
                                 
                                       
                                </tr>
                                
                                                 <tr>
                                    <td style="padding-top: 20px;">Country*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="country" name="country" id="country" onchange="master_state_get()"   style="height: 34px;width: 286px;" >
                                                    <option>Select Country</option>
                                                </select></td>
                                </tr>
                                        <tr>
                                    <td style="padding-top: 20px;">State*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="state" name="state" id="state" onchange=""   style="height: 34px;width: 286px;" >
                                                    <option>Select a State</option>
                                                </select></td>
                                </tr>
                                   <tr>
                                     <td style="padding-top: 20px;">city*</td>
                                    <td>:</td>
                                    <td><input type="text" name="city" id="city" style="width: 100%;"/></td>
                                 
                                       
                                            </tr>
                               
								<tr>
									<td style="padding-top: 20px;">Email*</td>
									<td>:</td>
									<td><input type="text" name="email" id="email" style="width: 100%;"/></td>
								</tr>
								<tr>
									<td style="padding-top: 20px;">Contact No.</td>
									<td>:</td>
									<td><input type="text" name="phone" id="phone" style="width: 100%;" /></td>
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
									<td><input type="text" name="phone" style="width: 100%;"/></td>
								</tr>
								<tr>
									<td colspan="3" style="padding-top: 20px;">
										<textarea style=" width: 100%; height: 120px; resize: none;">Description </textarea>
									</td>
								</tr> -->
								<tr>
									<td colspan="2"></td>
									<td style="padding-top: 10px; float: right;">
										<input type="button" id="site_ownersave" onclick="site_owner_register()"  name="my_upload" value="Save"  style="background: #2E5E79;color: #fff;cursor: pointer;"/>
										<input type="button" id="clr" value="Clear" style="background: #2E5E79;color: #fff; cursor: pointer;" />
									</td>
								</tr>
							</table>
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
                <h2>Customers</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 30%; margin: 0 auto; float: left;">
							<legend style="color: #2E5E79;">Customer Search :</legend>
							<table style="margin-left: 10px;">
								<tr>
									<td style="padding-top: 20px;">Customer Name</td>
									<td style="width:10px;">:</td>
									<td><input type="text" name="search" style="width: 100%;"/></td>
									<td>
										<input type="button" id="search" name="cus_search" value="Search"  style="margin-left:5px; background: #2E5E79;color: #fff;cursor: pointer;"/>
									</td>
								</tr>
							</table>
							<div style=" height:400px; width: 92%; border: 1px solid #E6F0F3; border-radius: 3px; margin: 0 auto; margin-bottom:10px;"></div>
						</fieldset>
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 67%; height: auto; margin: 0 auto; float: left; margin-left: 2%;">
							<legend style="color: #2E5E79;">Customer Details :</legend>
							<!-- <div align="right" style="font-weight:bold; text-decoration: underline; width: 100%;margin-right: 20px;cursor: pointer; color: #204562;" id="new_cust">New Customer?</div> -->
						</fieldset>
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
