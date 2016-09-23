
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="">
		<meta name="generator" content="">
		<title>Global Speaking Masters</title>
		
 <link href="css/style.css" rel="stylesheet" /> 
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="css/static_styles.css" media="screen" />
 <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.ui.widget.js"></script>
<!--     <script src="js/jquery.iframe-transport.js"></script> -->
<!--     <script src="js/jquery.fileupload.js"></script>
    <script src="js/script.js"></script>  -->
        <script src="js/alert/jquery.alerts.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="js/alert/jquery.alerts.css"> 

<script>
            $(document).ready(function(){
    
         $('#sub0').click(function(){
               //alert(1)
          window.location.assign("dashboard.php");
            });
              // $('#sub1').click(function(){
               // //alert(1)
          // window.location.assign("dashboard.php");
            // });
            $('#sub2').click(function(){
              // alert(2)
             window.location.assign("thumbs_upload.php");
            });
           $('#sub3').click(function(){
              // alert(2)
             window.location.assign("image_upload.php");
            });
          
    });
</script>

<!-- 		<link rel="stylesheet"  href="css/main_styles.css" media="all" /> -->
		<link rel="stylesheet"  href="css/zoom.css" media="all" />
		<link rel="stylesheet" href="css/display.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/dc_tabs.css" type="text/css" media="screen" />
	
<!-- 		<script type="text/javascript" src="js/loader/jquery.ajaxLoader.js"></script> -->
<!-- 		<link rel="stylesheet" type="text/css" href="js/loader/jquery.ajaxLoader.css"> -->
		<!-- <script src="js/jquery.multimediagallery.js" type="text/javascript"></script> -->
		  <script src="js/zoom.min.js"></script>
        <script src="js/zoom.js"></script>
<!-- 		<script type="text/javascript" src="js/alert/jquery.alerts.js"></script> -->
<!-- 		<link rel="stylesheet" type="text/css" href="js/alert/jquery.alerts.css">  -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('#buttonUpload').hide();
				$('#photo_back_button').click(function() {
					history.go(-1);
				});
				$("#sm-megamenu").hide();
				$('#upload').click(function() {
					$('#photo_div').slideToggle();
					$('#upload').slideToggle();
					$('#del').slideToggle();
				});
				$('#cancel').click(function() {
					$('#photo_div').slideToggle();
					$('#upload').slideToggle();
					$('#del').slideToggle();
				});
			  });
			  var extension = new Array(".jpg",".jpeg",".JPEG",".JPG",".PNG",".png",".GIF",".gif");
			  function CheckExtension(name)
				{
					
					var thisext = name.substr(name.lastIndexOf('.'));
					for(var i = 0; i < extension.length; i++)
					{
						if(thisext == extension[i]) { return true; }
					}
					return false;
					}
			  function change_image(){
						 c_bit = 2;
						//binds to onchange event of the input field
						var userfile = document.getElementById('fileToUpload'); 
							if (userfile.files[0].name) {
								var fil_ext= CheckExtension(userfile.files[0].name);
								if (fil_ext==true){
									$('#buttonUpload').show();
									$('#image_msg').hide();
									c_bit = 0;
								}
								else{
									$('#buttonUpload').hide();
									$('#image_msg').html('* Please choose an image file');
									$('#image_msg').show();
									c_bit = 1;
								}
							}
							else {
								$('#image_msg').hide();
								c_bit = 0;
							}
						}
			$(function() {
				$.zoom();
			});
		</script>
<!-- 		<script type="text/javascript" src="js/jquery.js"></script> -->
<!-- 		<script type="text/javascript" src="js/ajaxfileupload.js"></script> -->
	
	</head>
    <body id="gallery">
    	<div class="banner_tour">
			<div class="banner_tour_inner">
				<div class="banner_inside">
		 		</div> <!--end of banner-->
	   			<div id="content" class="tour_content">
					<div class="content_inside">
						<ul class="flat_tabs">
							<li><a href="member_account_information.php" >Account</a></li>
							<li class="active"><a href="member_profile_details.php" >Profile</a></li>
							<li><a href="member_leads.php">Leads</a></li>
							<li ><a href="dashboard.php" >Dashboard</a></li>
						</ul>
   						<div style="margin-left: 30px;margin-top: 75px;">
<!-- 						<form action="services/gsm_web_upload_photo_gallery.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8" > -->
							</br></br>
							<div id="photo_div">
    							<a class="closeX" id="cancel"  style="margin-right:10px;">
										<span id="cancel_image3">	<li id="cancel_sprite_image3"></li>		</span>										
								</a>
    							<table>
            		  				<tr>
                						<td style="padding-top: 50px;">
<!--                 						<input type="file" name="photo[]" id="photo1"  multiple style="margin-left:15px;"/> -->
                							<input id="fileToUpload" type="file" size="45" name="fileToUpload" class="input" onchange="change_image()" style="margin-left:15px;">
<!--                 						<input type="hidden" name="MAX_FILE_SIZE" value="" /> -->
                							<button id="buttonUpload" onclick="return ajaxFileUpload();" class="form-button form-button-default" style="width: 80px;padding-bottom: 2px;">Upload</button>
<!--                 				 		<input type="submit" value="Upload" id="btn_img" class="form-button form-button-follow form-button-small form-button-default form-button-left-icon form-button-icon-follow" style="width: 80px;padding-bottom: 2px;"/> -->
                						</td>
                					</tr>
    							</table>
     			 			<p id="image_msg" style="display: none;color: red"></p>
							</div>
<!-- 						</form> -->
	      					<input type="button" id="upload"  class="form-button form-button-default" value="Upload Photos"/> 
          					<input type="button" id="del"  class="form-button form-button-default"  value="Delete Photos"/>  
<!--           				<a href="member_profile_details.php"> -->
          					<input type="button" id="photo_back_button"  class="form-button form-button-default"  value="Back"/>
<!--           				</a> -->
<!-- 						</div> -->
        				</div>
        				<div class="member-form2" id="reviewForm1" >
							<p id="image_count">YOU DO NOT HAVE ANY PHOTOS</p>
		 				</div>
         				<div id="img_table" class="container">
							<?php
							// $sp_id=3;
						//	$sp_id = $_SESSION['member']['speaker_id'];
						
							$pathname = "icons/";
							// mkdir($pathname);
							$pathname1 = $pathname . '/1/';
							// mkdir($pathname1);
						
							if (!file_exists($pathname)) {
								mkdir($pathname);
								mkdir($pathname1);
							}
						
							$dh = opendir($pathname1);
						
							echo '</br><ul class="gallery">';
						
							$data = array();
							$extList = array('gif', 'jpg', 'jpeg', 'png');
							 $i=0;
							while (($file = readdir($dh)) !== false) {
						
								$file_info = pathinfo($file);
								if (in_array(strtolower($file_info['extension']), $extList) > 0) {
						
									$maxcols = 2;
									$i = 0;
						
									if ($i == $maxcols) {
										$i = 0;
						
									}
									echo '<li><input style="float:left;margin-left:15px;" type="checkbox" id="chk" name="' . $file . '" value= ' . $file . ' >
						  		<a style="margin-left:25px;" href="' . $pathname1 . "/" . $file . '"><img width="125" height="125" src="' . $pathname1 . "/" . $file . '">&nbsp;&nbsp;
						  		</a></li>';
									$i++;
								}
							}
							echo '</ul>';
							
							if ($i==0) {		
							 ?> 
							<script type="text/javascript">
								$('#del').hide();
								$('#image_count').show();
								$('.gallery').hide();
							</script>
							<?php
								}?>
  						</div>
    				</div>
				</div> <!-- end content -->
			</div>
		</div>
	</body>
 	<?php
		include 'inc/footer.php';
	?>
</html>