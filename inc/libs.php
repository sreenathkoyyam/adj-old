     <?php
     error_reporting(0);
     session_start();
if(!isset($_SESSION['admin_id']))
        {
            echo "<script language='javascript'>alert('Your session has expired, please login to continue')</script>";
            echo "<script language='javascript'>window.location='admin.php'</script>";
        }
$user_id=$_SESSION['admin_id'];

   //echo "<script language= 'JavaScript'>alert(' . $user_id . ');</script>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Adsjungles</title>
      <!-- //multi select -->
     
    <link rel="shotcut icon" type="img/icon" href="img/icon/logo.jpg"/>


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
            $('#sub4').click(function(){
              // alert(2)
             window.location.assign("thumbnail_gallery.php");
            });
             $('#sub5').click(function(){
              // alert(2)
             window.location.assign("image_gallery.php");
            });
          
    });
</script>




