<?php
include 'inc/libs.php';
?>
<script src="js/dashboard.js" type="text/javascript"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="js/jquery.knob.js"></script>
<!-- jQuery File Upload Dependencies -->
<!-- <script src="js/jquery.ui.widget.js"></script> -->
<script src="js/jquery.iframe-transport.js"></script>
<script src="js/jquery.fileupload.js"></script>
<!-- Our main JS file -->
<script src="js/script.js"></script>
<!-- The main CSS file -->
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="css/static_styles.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/jquery.multiselect.css" />
<link rel="stylesheet" type="text/css" href="css/chk_style.css" /> 
<link rel="stylesheet" type="text/css" href="css/prettify.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<!-- <script type="text/javascript" src="js/jquery_chk.js"></script> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="js/jquery.multiselect.js"></script>
<script type="text/javascript" src="js/multi_combo.js"></script>


<!-- <link type="text/css" rel="stylesheet" href="css/demo.css"> -->
 <link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script> -->
<script type="text/javascript" src="js/jquery-te-1.4.0.min.js" charset="utf-8"></script> 
<script type="text/javascript">
	$(function() {
		$('#img_malti').multiselect();
	});
	// function ali() {
	    // alert($('#img_discription').val())
// 		
	// }

// 
	// window.onload = start;
	var chk_val;
	$(document).ready(function() {
		$('input:radio[name="is_follow"]').filter('[value="0"]').attr('checked', true);
		$('#new_brand_creation').hide();
		master_site_owner_get();
		adj_master_social_sites();
		
	});

</script>

<style>
	.main_div {
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
		<div class="box round first" style="height: auto;">
			<form method="post" action="services/upload.php" ondrop="return uploads() " enctype="multipart/form-data" >
				<input type="hidden" name="multiVal" id="multiVal"/>
			<fieldset id="sub2">
				<h2>Image Uploads</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 62%; margin: 0 auto; margin-left:-1%;float: left;">
							<legend style="color: #2E5E79;">
								Image Upload :
							</legend>
							<div class="main_div" style="margin-left: 55px">
								<table class="tmb_table">
									<tr>
										<td style="padding-top: 20px;">Site Owners*</td>
										<td>:</td>
										<td>
											<select id="site_image_owners" name="site_image_owners"  onchange="get_brand_name($('#site_image_owners').val());" class="text-selsct">
												<option value="0">Select Site Owners</option>
											</select>
										</td>
										</td>
									<tr id="brand_select">
										<td style="padding-top: 20px;">Brand Name*</td>
										<td>:</td>
										<td>
											<select id="b_name" name="b_img_name"  onchange="image_category_combos($('#site_image_owners').val(),$('#b_name').val());" class="text-selsct">
												<option value="0">Select One Brand</option>
											</select>
										</td>
									</tr>
									
										<tr>
												<td style="padding-top: 20px;">Business Category*</td>
												<td style="width:10px;">:</td>
												<td><select title="Basic example"  style="width:287px;margin-left:25px;" multiple="multiple" id="img_malti" name="img_malti" class="text-selsct_dash"  size="5"></select></td>
										</tr>

									<tr>
										<td style="padding-top: 20px;">Image Name</td>
										<td>:</td>
										<td>
											<input type="text" name="img_name" id="img_name" class="text-input" />
										</td>
									</tr>
									<tr>
										<td style="padding-top: 20px;">Image Display Dimention*</td>
										<td>:</td>
										<td>
											<select id="tmb_dimention_id" name="tmb_dimention_id"  onchange="tmb_dimention_id_chk()"   class="text-selsct" >
												<option value="0">Select One Dimention</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 20px;">Image Redirect Url</td>
										<td>:</td>
										<td>
										<input type="text" name="rediarect_url" id="rediarect_url" class="text-input" />
										</td>
									</tr>
									<tr>
										<td style="padding-top: 20px;">Follow Ad In Social Networking Site</td>
										<td>:</td>
										<td>
										<input type="radio" style="margin-left: 50px" name="is_follow" id="is_follow_1" value="1" />
										Yes
										<input type="radio" style="margin-left: 110px" checked name="is_follow" id="is_follow_0" value="0" />
										No</td>
									</tr>
									<tr>
										<td style="padding-top: 20px;">Select Social Site*</td>
										<td>:</td>
										<td>
										<select id="social_sites" name="social_sites"  onchange="social_sites_chk()" class="text-selsct">
											<option value="0">Select Site Owners</option>
											<option value="1">fb</option>
										</select>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 20px;">Add Link Url</td>
										<td>:</td>
										<td>
											<input type="text" name="link_url" id="link_url" class="text-input" />
										</td>
									</tr>
									<tr>
									    <td style="padding-top: 20px;">Add Image Discription</td>
                                        <td>:</td>
                                        <td><textarea id="img_discription" name="img_discription" onclick="ali();" class="jqte-test"><b>My contents are from <u><span style="color:rgb(0, 148, 133);">TEXTAREA</span></u></b></textarea>
										</td>
                                    </tr>
									<tr>
										<td ></td>
										<td></td>
										<td style="padding-top: 20px;">
										<input style="float: right; background: #2E5E79;color: #fff;cursor: pointer;" type="button" value="Submit" onclick="uploads()" />
										</td>
									</tr>
									
								</table>
							</div>
						</fieldset>
						<fieldset id="customer_step2">
							<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 88%; height: auto; margin: 0 auto; float: left; margin-left: 10%;min-height: 480px;">
								<legend style="color: #2E5E79;">
									Picture Upload :
								</legend>
								<div id="upload" style="  margin-left: 28px; margin-top: 25px;">
									<div style="margin: 0 auto; height: auto;">
											<div id="drop">
												Drop Here <a >Browse</a>
												<input type="file" onclick=" return uploads();" name="upl" id="upl"  />
												<br />
												<span id="remark_thump" style="color: #FF0000;display: none"> * Please Select a Thumbnail</span>
											<ul></ul>
									</div>
								</div>
							</fieldset>
						</fieldset>
					</div>
				</div>
				</fieldset>
				</form>
		</div>
	</div>
	<div class="clear"></div>
	</div> <div class="clear"></div>
	<div id="site_info">
		<p>
			Copyright <a href="#">MySite</a>. All Rights Reserved.
		</p>
	</div>
	<script>
    $('.jqte-test').jqte();
    
    // settings of status
    var jqteStatus = true;
    $(".status").click(function()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status" : jqteStatus})
    });
</script>
</body>
</html> 