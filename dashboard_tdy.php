<?php
include 'inc/libs.php';
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>

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
       
    
    		<script src="js/flexigrid.js"></script>
    		<link rel="stylesheet" type="text/css" href="css/flexigrid.css" />
    

<!--          <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />   -->


      
   
    <script type="text/javascript">
 $(function(){
    $('#example-basic').multiselect();
  
   //  $('input.two').simpleDatepicker({ startdate: 2001, enddate: 2012 });
});
function start () {
  multy_combos();
  // combo_chainge();
}
 
 window.onload =start;

		$(document).ready(function(){
			var customer_name
		if ($("#customer_name").val()=='') 
				{
					customer_name="null";
				}
				else{
					customer_name=$("#customer_name").val();
				}
 			$("#membershipAvailable_area").flexigrid({
 				
			 		type : "POST",
			 		dataType : "json",
					colModel : [
						{display: 'Customer Name', name : 'name',index:'name', width : 135, sortable : true, align: 'center'},
						{display: 'Company', name :'company_name',index:'company_name', width : 135, sortable : true, align: 'center'},
						{display: 'Option', name : 'option',index:'option', width : 135, sortable : true, align: 'center'}
					],
					sortname: "Customer Name",
					sortorder: "asc",
					usepager: true,
					title: 'Customer Details',
					useRp: true,
					rp: 15,
					multiSelect: true,
		    		showTableToggleBtn: false,
					width: 705,
					resizable:false,
					height: 260,
					preProcess: insertLink,
			});
 		 	jQuery('#membershipAvailable_area').flexOptions({
				url :  "services/adj_get_site_owners.php",
				params : [{
						name : 'customer_name',
						value : customer_name,
				
						}]
			}).flexReload();

			function insertLink(data)
			{
				for( i = 0; i < data.rows.length; i++) 
				{
					    data.rows[i].cell['option'] = "<a class='bold' style='color:green;cursor:pointer' onclick = activate_deactivate_area(" + data.rows[i].id + ")>Edit</a>";
					
		        }
				return data;
			}
  			$("#cus_search").click(function(){
	  
	      
		});
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
     <?php
include 'inc/header.php';
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>
        
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
                                                 <select title="Basic example" style="width:287px;" multiple="multiple" id="example-basic" name="example-basic" size="5">
 
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
									<td><input type="text" id="customer_name" name="search" style="width: 100%;"/></td>
									<td>
										<input type="button" id="cus_search" name="cus_search" value="Search"  style="margin-left:5px; background: #2E5E79;color: #fff;cursor: pointer;"/>
									</td>
								</tr>
							</table>
							<div style=" height:400px; width: 92%; border: 1px solid #E6F0F3; border-radius: 3px; margin: 0 auto; margin-bottom:10px;"></div>
						</fieldset>
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 67%; height: auto; margin: 0 auto; float: left; margin-left: 2%;">
							<legend style="color: #2E5E79;">Customer Details :</legend>
							<div id="avail_table">
							<table id='membershipAvailable_area'></table>
						</div>
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
