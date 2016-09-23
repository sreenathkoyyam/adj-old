<?php include 'inc/libs.php';?>
<script src="js/dashboard.js" type="text/javascript"></script>   
<link rel="stylesheet" type="text/css" href="css/chk_style.css" /> 
<link rel="stylesheet" type="text/css" href="css/prettify.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="js/jquery.multiselect.js"></script>
<script type="text/javascript" src="js/multi_combo.js"></script>
<script src="js/flexigrid.js"></script>
<link rel="stylesheet" type="text/css" href="css/flexigrid.css" />
<script type="text/javascript">
  $(document).ready(function(){
    	masterCat();
    		});
    var user_ids=<?php echo $_SESSION['admin_id'] ?>;
  
</script>
</head>
<body>
     <div class="container_12">
      <?php include 'inc/header.php';?>
		<div class="grid_10" id="cust_grid">
            <div class="box round first" style=" min-height: 650px;  height: auto;">
                <h2>Category Settings</h2>
				<div class="dash_block">
					<div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
						<fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 67%; height: auto; margin: 0 auto; float: left; margin-left: 2%;">
							<legend style="color: #2E5E79;">Category Details :</legend>
							<table style="margin-left: 10px;">
								<tr>
									<td style="padding-top: 20px;">Category Name</td>
									<td style="width:10px;">:</td>
									<td><input type="text" class="text-input_dash" id="categoryName" onkeydown="categoryNameChk()" onkeyup="categoryNameChk()" name="search" /></td>
									<td id="addClass">
										<input type="button" id="addCat"  onclick="addCategory()" name="addCat" value="Add"  class="status" style="  margin-bottom: -9px; margin-left: 36px;width: 60px;float: left;" />
										<input type="button" id="clearAdd"  onclick="clearBtn()" name="clearAdd" value="Clear"  class="status" style="  margin-bottom: -9px; margin-left: 16px;width: 60px;float: right" />	
									</td>
								</tr>
							</table>
							<div id="avail_table">
							<table id='masterCat'></table>
						</div>
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
