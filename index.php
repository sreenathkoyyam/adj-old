<?php
include('core/config.php');
$url='http://www.webiezz.com/adj/';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <script src="<?php echo $url;?>js/jquery-1.7.1.min.js"></script>
	    <script>
                     var cvb;
             var pl;
             var cc; 
var cc; 
var total_count;
var dc;
var cx=0;

            var site_id =2;
           var b_id =1;
           var  c_id =2;   
    
        function checks (tmb_id) {

            
            
           // alert(tmb_id)
          // tmb_id=val;
          
               $.ajax({
        dataType : "json",
        type : "POST",
          data : {
            tmb_id :tmb_id,
         
        },
       url : 'services/adj_get_thumb_related_images.php',

        success : function(response) {
         
             var total_count=response.total_count;
                //alert(total_count);
                var ax='';
                var rec_s= new Array();
                    for(var i=0; i<total_count; i++)
                    {
                       
                ax+= '<div class="bb-item"><a href="#"><img src="'+response.data[i].image_url+'" alt="image01"/></a></div>' ;       
                    } 
                    pl=ax;
                       cc='<div class="main clearfix">'+
                '<div class="bb-custom-wrapper">'+
                    '<div id="bb-bookblock" class="bb-bookblock">'+
                       pl+
               // this.$sliderUl=             $(
                    '</div>'+
                    '<nav>'+
                        '<a id="pp" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>'+
                        '<a id="nn" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>'+
                    '</nav>'+
                '</div>'+
            '</div>';
            foo=1;
           
             // site_id =1;
          // b_id =1;
          // c_id =3;
              //this.$sliderUl= $( cc ).append( this.$sliderLi );
                 // alert(cc);         // alert(pl)
                 //im()
                 
                  //return cc;
                  //this.$sliderUl= $( cc ).append( this.$sliderLi )
        }
});
                 // setTimeout( $.proxy( function() {
         // //mic();
         // }, this ), 1000 ); 
        //gup();
        }       
            
        </script>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Home</title>
		<meta name="description" content="Thumbnail Grid with Expanding Preview" />
		<meta name="keywords" content="thumbnails, grid, preview, google image search, jquery, image grid, expanding, preview, portfolio" />
		<meta name="author" content="Codrops" />		
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php echo $url;?>css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $url;?>css/component.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $url;?>css/search.css" />		
		<!-- Attach our CSS -->
		<link rel="stylesheet" href="<?php echo $url;?>css/orbit-1.2.3.css">
	  	<link rel="stylesheet" href="<?php echo $url;?>css/demo-style.css">	  	
		<!-- Attach necessary JS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $url;?>css/bookblock.css" />
		<!-- custom demo style -->		
		<link rel="stylesheet" type="text/css" href="<?php echo $url;?>css/demo1.css" />
		<script src="<?php echo $url;?>js/modernizr.custom.js"></script>		
		<style type="text/css">
		body{
			background-color: #E6E6E6;
		}
		.page{
			/*position:fixed;*/
			box-shadow: 0 2px 6px rgba(100, 100, 100, 0.3);
		    margin-bottom: 3.42857rem;
		    margin-top: 3.42857rem;
		    margin: 0 auto;
		    /*max-width: 68.5714rem;*/
		   	max-width:99%;
		   /* overflow: hidden;*/
		    background-color: #FFFFFF;
		    /*padding: 0 1.71429rem;*/
		   	margin-top:10px;
		   	margin-left: 0.5%;
		}	
		#header-bar{
			left:0px;
			top: 0px;
			position: fixed;
			width:100%;
			height:53px;
			background-color:#000;
			border-bottom:1px solid #191919;
			z-index:100;
			line-height:53px;
			margin-bottom:1px
			font-family: 'Lato',Calibri,Arial,sans-serif;
		}
		#header-bar p{
			color: #fff;
			float: left;
			font-size:20px;
			font-weight:bold;
			font-family: 'Lato',Calibri,Arial,sans-serif;
		}
		#footer-bar{
			bottom:0px;
			position: fixed;
			width:100%;
			height:20px;
			background-color:#000;
			border-bottom:1px solid #191919;
			z-index:100;
			line-height:53px;
			margin-bottom:1px
			color:#fff;
		}
		#footer-bar p{
			color: #fff;
			float: left;
			line-height: 16px;
			font-size:10px;
			margin-left:50px;
			font-family: 'Lato',Calibri,Arial,sans-serif;
		}
		
		

.search-form {
    height: 26px;
    margin: 0 auto;
    padding: 14px 20px;
    width: 388px;
}

.search-form form {
    width: 388px;;
    height: 26px;
    background: none repeat scroll 0 0 #FFFFFF;
}


.search-form form #search-form-query {
    font-size: 14px;
    height: 26px;
    width: 388px;
    border: 0 none;
    color: #2A2A2A;
    display: block;
    float: left;
    padding: 0 2px;
}
.search-form form #search-form-icon {
    background-position: 0 -184px;
    height: 17px;
    margin: 5px 4px 4px 2px;
    width: 18px;
}
.search-form form #search-form-icon {
    background: url("img/ui_sprites.png") no-repeat scroll 0 -167px transparent;
    cursor: pointer;
    display: block;
    float: left;

}

.search-form form #search-form-submit {
    display: none;
}
		</style>
		
	</head>
	<body>
		<div id="header-bar">
			<img src="<?php echo $url;?>img/logo.jpg" style="float: left; margin: 8px; margin-left: 50px; height: 40px; width:40px; " />
			<p>Your Site</p>
			
			<div class="module search-form search_form">
		      <form method="get" action="#">
		      	<input type="text" name="query" id="search-form-query">
		      		<span id="search-form-icon"></span>
		      	<input type="submit" value="Search" id="search-form-submit">
		      </form>
		    </div>
			<!-- <div style="width: 20%; float: right;">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"></span>
					</form>
				</div>
			</div> -->
		</div>
		<div class="container1">	
			<div style="margin-top: 60px;">
				<p style="text-align: right; padding-right: 50px;">To publish your ads, <span><a href="<?php echo $url;?>admin.php" style="font-weight:bold; color: #E67E22;"> Click here</a></span>. Its absolutly free of cost.</p>
			</div>
			
		<!-- 	<?php
				if ($dir = opendir('icons/tmbs')) {
					$tmbs = array();
					while (false !== ($file = readdir($dir))) {
						if ($file != "." && $file != "..") {
							$tmbs[] = $file; 
						}
					}
					closedir($dir);
				}
			?> -->
			<?php
			  require_once( "services/adj_get_index_thambnails.php" );
              
               echo '<div class="page">';
                echo '<ul id="og-grid" class="og-grid">';
			//print_r($result);
			//"' . $img_url . '" 
			if($result['status_value']==1)
                            {
						foreach($result['data'] as $tmbs) {
						    $img_url=$tmbs['thumb_img_url'];
                           // print_r($img_url);
						     $id=$tmbs['brand_category_map_id'];
                              echo '<li>';
                               echo '<a href="#" data-largesrc="' . $img_url . '"  data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">';
                                echo '<img src="' . $img_url . '"   onclick="checks(' . $id . ');" alt="img01"/>';
                                 echo '</a>';
                                  echo '</li>';
						   // print_r($tmbs['thumb_img_url']);
							// $fold=explode('.', $tmb);
						
										}
										}
			else {
								echo "YOU DO NOT HAVE ANY THUMBNAILS";
							}
					?>

				</ul>
			</div>
		</div><!-- /container -->
		
		<script src="<?php echo $url;?>js/jquerypp.custom.js"></script>
		
<!-- 		<script src="<?php echo $url;?>js/jquerypp.custom.js"></script> -->
		<!-- <script src="<?php echo $url;?>js/jquery.bookblock.js"></script>	 -->
		<!-- <script>
			
		</script> -->
		<script src="<?php echo $url;?>js/grid.js"></script>
		<script>
		
			$(function() {
			   // alert(11098)
				Grid.init();
			});
			
			// function gup() {
			   // //$("#og-grid").animate({top: "50px",}, 500).delay(1000);
			 // //$( "#og-grid" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 );
			  // //alert(23)
			  // // var preview = $.data( this, 'preview' );
			  // // Grid.preview.create1();
			// }

		</script>
		<div id="footer-bar">
			<p>Copyright @ your company Pvt Ltd. 2013</p>
		</div>
	</body>
</html>