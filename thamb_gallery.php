
<?php
include 'inc/libs.php';
  // echo "<script language= 'JavaScript'>alert(' . $file . ');</script>";
?>
<link rel="stylesheet"  href="css/zoom.css" media="all" />
        <link rel="stylesheet" href="css/display.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/dc_tabs.css" type="text/css" media="screen" />
    
<!--        <script type="text/javascript" src="js/loader/jquery.ajaxLoader.js"></script> -->
<!--        <link rel="stylesheet" type="text/css" href="js/loader/jquery.ajaxLoader.css"> -->
        <!-- <script src="js/jquery.multimediagallery.js" type="text/javascript"></script> -->
          <script src="js/zoom.min.js"></script>
        <script src="js/zoom.js"></script>
    <style>
    .main_div
    {
        width: 500px;
    }   
        
    </style>
    <script>
        $(function() {
                $.zoom();
            });
    </script>
</head>
<body>
   <!--  <div class="container_12"> -->
   <?php
include 'inc/header.php';
?>
        
        <div class="grid_10" id="new_cust_grid" >
            <div class="box round first" style=" min-height: 900px;  height: auto;">
                    <fieldset id="sub2">
                <h2>Thumbnail Gallery</h2>
                <div class="dash_block">
                    <div class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
                        
              
                        <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 92%; margin: 0 auto; margin-left:3%;float: left;">
                            <legend style="color: #2E5E79;">Thumbnail Gallery :</legend>
                        <div class="main_div">
                           
                                    <div class="member-form2" id="reviewForm1" >
                            <p id="image_count">YOU DO NOT HAVE ANY PHOTOS</p>
                        </div>
                        <div id="img_table" class="container">
                            <?php
                            // $sp_id=3;
                        //  $sp_id = $_SESSION['member']['speaker_id'];
                        
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
