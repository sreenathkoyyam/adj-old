<?php
include('core/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
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
		<div class="container">	
			<div style="margin-top: 60px;">
				<p style="text-align: right; padding-right: 50px;">To publish your ads, <span><a href="<?php echo $url;?>admin.php" style="font-weight:bold; color: #E67E22;"> Click here</a></span>. Its absolutly free of cost.</p>
			</div>
			
			<?php
				if ($dir = opendir('icons/tmbs')) {
					$tmbs = array();
					while (false !== ($file = readdir($dir))) {
						if ($file != "." && $file != "..") {
							$tmbs[] = $file; 
						}
					}
					closedir($dir);
				}
			?>
			<div class="page">
				<ul id="og-grid" class="og-grid">
					<?php
						foreach($tmbs as $tmb) {
							$fold=explode('.', $tmb);
						?>
						<li>
							<a href="#" data-largesrc="<?php echo $url;?>icons/<?php echo $fold[0].'/'.$tmb;?>" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
								<img src="<?php echo $url;?>icons/tmbs/<?php echo $tmb;?>" alt="img01"/>
							</a>
						</li>
					<?php
						}
					?>
		
				</ul>
			</div>
		</div><!-- /container -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo $url;?>js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
		<script src="<?php echo $url;?>js/classie.js"></script>
		<script src="<?php echo $url;?>js/uisearch.js"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
		<div id="footer-bar">
			<p>Copyright @ your company Pvt Ltd. 2013</p>
		</div>
	</body>
</html>