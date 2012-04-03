<!DOCTYPE html>
<html class="no-js">
	<!-- Start html selection -->
		<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
		<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
		<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<!-- End html selection-->			
		<!-- Start head -->
			<!-- Start JavaScript checker -->
				<script>
					(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
				</script>
			<!-- End JavaScript checker -->
				
			<!-- Start jQuery -->
				<script 
					src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
				</script>
 				<script>
 					window.jQuery || document.write('<script src="Assets/Javascript/jquery-1.7.1.min.js"><\/script>')
 				 </script>
			<!-- End JQuery -->
			
			<!-- Start includes-->
				<?php 
					include_once "Assets\PHPScripts\lib.php"; 
				?>
				<script type="text/javascript" src="Assets\Javascript\lib.js"></script>
			<!-- End includes-->
				
			<!-- Start variables -->
				<?php
					//Page title
					$pageTitle = 'Template';
					//Description MetaData
					$description = 'Description';
					//Keyword MetaData
					$keywords = 'Keyword 1, keyword 2';
					//Author MetaData
					$author = 'Dom Chester';
					// Current URl MetaData
					$currentURL = getPageURL();
				?>
			<!-- End variables -->
			
			<!-- Start humans.txt -->
				<link rel="author" href="/humans.txt" />
			<!-- End humans.txt -->
			
			<!-- Start metadata -->
				<meta http-equiv="content-type" content="text/html; charset=utf-8" />
				<meta http-equiv="imagetoolbar" content="false" />
				<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1" />
				<meta name="viewport" content="width=device-width">
				<meta name="description" content="<?php echo $description;?>" />
				<meta name="keywords" content="<?php echo $keywords;?>" />
				<meta name="author" content="<?php echo $author;?>" />
				<meta name="application-name" content="<?php echo $pageTitle;?>" />
				<meta name="msapplication-tooltip" content="<?php echo $description;?>" />
				<meta name="msapplication-starturl" content="<?php echo $currentURL;?>" />
			<!-- End metadata -->
			
			<!-- Start canonical URL -->
				<link rel="canonical" href="<?php echo $currentURL;?>" />
			<!-- Start canonical URL -->		
			
			<!-- Start stylesheets -->
				<link rel="stylesheet/less" type="text/css" href="Assets/CSS/reset.less" media="screen" />
				<link rel="stylesheet/less" type="text/css" href="Assets/CSS/main.less" media="screen" />
				<link rel="stylesheet/less" type="text/css" href="Assets/CSS/print.less" media="print"/>
			<!-- End stylesheets -->
			
			<!-- Start Less -->
				<script src="Assets/Javascript/less.js" type="text/javascript"></script>
			<!-- End Less -->
			
			<!-- Start connect to MySQL -->
				<?php
					connectMySQl();
				?>
			<!-- End connect to MySQL -->
			
			<!-- Start icons -->
				<link rel="shortcut icon" href="Assets/Images/favicon.ico" type="image/x-icon" />
				<link rel="apple-touch-icon" href="Assets/Images/IOS.ico" />
			<!-- End icons -->
			
			<!-- Start pngfix test -->
				<!--[if lt IE 7.]>
					<script defer type="text/javascript" src="Assets/Javascript/pngfix.js"></script>
				<![endif]-->
			<!-- End pngfix test -->
			
			<!-- Start title -->
				<title>
					<?php
						echo $pageTitle;
					?>
				</title>
			<!-- End title -->
		</head>
	<!-- End head -->
	
	<!-- Start body-->
	    <body>
			<!-- Start wrapper -->
	        	<div class="wrapper">	        		
					<!-- Start header-->
						<div class="header">
							<?php 
								include "Assets/Includes/header.inc.php" 
							?>
						</div>
					<!-- End header-->
					
					<!-- Start sidebar-->
						<div class="sidebar">
							<?php 
								include "Assets/Includes/sidebar.inc.php" 
							?>
						</div>
					<!-- End sidebar-->
					
					<!-- Start content-->
						<div class="content">
							<!-- Start cromeframe -->
								<!--[if lt IE 7]>
									<div class=chromeFrame>
										Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site better.  <a href="#" onclick="hideItem(chromeFrame)">description</a>
									</div>
								<![endif]-->
							<!-- End cromeframe -->
						</div>
					<!-- End content-->
					
					<!-- Start footer-->
						<div class="footer">
							<?php 
								include "Assets/Includes/footer.inc.php" 
							?>
						</div>
					<!-- End footer-->
	        	</div> 
			<!-- End wrapper -->
	    </body>
	<!-- End body -->
</html>