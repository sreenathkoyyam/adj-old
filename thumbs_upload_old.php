
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
    var admin_id=<?php echo $_SESSION['admin_id'] ?>;
 $(function(){
    $('#tmb_malti').multiselect();
});
function start () {
  thumb_category_combos();
}
 
 window.onload =start;



        var chk_val;
        $(document).ready(function(){
        $('#new_brand_creation').hide();
        master_site_owner_get();
        get_brand_name();
        
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
               alert($('#example-basic').val());
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
                <h2>Thumbnail Uploads</h2>
                <div class="dash_block">
                    <div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
                        <!-- <div style="margin-left: 491px;">

<h2>jQuery MultiSelect Widget Demo</h2>


<p>
    <select title="Basic example" multiple="multiple" id="example-basic" name="example-basic" size="5">
    <option value="option1">Option 1</option> -->
   <!--  <option value="option2">Option 2</option>
    <option value="option3">Option 3</option>
    <option value="option4">Option 4</option>
    <option value="option5">Option 5</option>
    <option value="option6">Option 6</option>
    <option value="option7">Option 7</option>
    <option value="option8">Option 8</option>
    <option value="option9">Option 9</option>
    <option value="option10">Option 10</option>
    <option value="option11">Option 11</option>
    <option value="option12">Option 12</option> -->
 <!--    </select>
</p>

</div> -->
                        <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 92%; margin: 0 auto; margin-left:3%;float: left;">
                            <legend style="color: #2E5E79;">Thumbnail Upload :</legend>
                        <div class="main_div">
                            <table class="tmb_table">
                                
                                 <tr>
                                    <td style="padding-top: 20px;">Site Owners*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="site_owners" name="site_owners"  onchange=""   style="height: 34px;padding: 8px;" >
                                                    <option>Select Site Owners</option>
                                                </select></td>
                                </tr>
                                
                                    <tr>
                                    <td style="padding-top: 20px;">Product Type*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="product_type" name="product_type"  onchange=""   style="height: 34px;padding: 8px;" >
                                                    <option>Select Product Type</option>
                                                </select></td>
                                </tr>
                                 <tr>
                                    <td><input type="checkbox" name="b_new_creation" id="b_new_creation"  /></td>
                                    <td style="padding-top: 20px;">Create New Brand</td>
                                    <td>:</td>
                                    
                                </tr>
                                 <tr id="brand_select">
                                    <td style="padding-top: 20px;">Brand Name*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="b_name" name="b_name"  onchange=""   style="height: 34px;padding: 8px;" >
                                                    <option value="0">Select One Brand</option>
                                                </select></td>
                                </tr>
                                 
                                    </table>
                                 
                                  <table id="new_brand_creation"  class="tmb_table">
                                  <tr style="padding-top: 20px;">
                                    <td>Create New Brand Name*</td>
                                    <td style="width:10px;">:</td>
                                    <td><input type="text" name="new_brand_names" id="new_brand_names" style="width: 100%;"/></td>
                                </tr>
                                  <tr>
                                    <td style="padding-top: 20px;">Business Category*</td>
                                    <td>:</td>
                                    <td>
                                                 <select title="Basic example" multiple="multiple" id="tmb_malti" name="tmb_malti" size="5">
                                    </select>
                                    </td>
                                </tr>
                                
                                </table>
                                <table  class="tmb_table">
                                <tr>
                                    <td style="padding-top: 20px;">Thumbnail Name</td>
                                    <td>:</td>
                                    <td><input type="text" name="tmb_name" id="tmb_name" style="width: 100%;" /></td>
                                </tr>
                                 <tr>
                                    <td style="padding-top: 20px;">Thumbnail Display Dimention*</td>
                                    <td>:</td>
                                    <td>
                                                <select id="tmb_dimention_id" name="tmb_dimention_id"  onchange=""   style="height: 34px;padding: 8px;" >
                                                    <option>Select One Dimention</option>
                                                </select></td>
                                </tr>
                            
                            <tr>
                                    <td style="padding-top: 20px;">Thumbnail*</td>
                                    <td>:</td>
                                    <td style="width:20px;">
                                        <input id="fileToUpload" type="file" size="45" onchange="" name="fileToUpload" class="input" multiple>
                                    </td>
                                </tr>
                                    <tr>
                                    <td colspan="2"></td>
                                    <td style="padding-top: 10px; float: right;">
                                        <input type="button" id="my_tmb_upload" onclick="return ajaxFileUpload();"  name="my_tmb_upload" value="Save"  style="background: #2E5E79;color: #fff;cursor: pointer;"/>
                                        <input type="button" id="clr" value="Clear" style="background: #2E5E79;color: #fff; cursor: pointer;" />
                                    </td>
                                </tr>
                            </table>
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
