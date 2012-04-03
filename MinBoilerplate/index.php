<!DOCTYPE html>
<html class="no-js">
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
		<script>
			(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
		</script>
		
		<script 
			src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
		</script>
		<script>
			window.jQuery || document.write('<script src="Assets/Javascript/jquery-1.7.1.min.js"><\/script>')
		</script>
		
		<?php 
			include_once "Assets\PHPScripts\lib.php"; 
		?>
			<script type="text/javascript" src="Assets\Javascript\lib.js"></script>
		<?php
			$pageTitle = 'Template';
			$description = 'Description';
			$keywords = 'Keyword 1, keyword 2';
			$author = 'Dom Chester';
			$currentURL = getPageURL();
		?>
		
		<link rel="author" href="/humans.txt" />
		
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
		
		<link rel="canonical" href="<?php echo $currentURL;?>" />
		
		<link rel="stylesheet/less" type="text/css" href="Assets/CSS/reset.less" media="screen" />
		<link rel="stylesheet/less" type="text/css" href="Assets/CSS/main.less" media="screen" />
		<link rel="stylesheet/less" type="text/css" href="Assets/CSS/print.less" media="print"/>
		
		<script src="Assets/Javascript/less.js" type="text/javascript"></script>
		
		<?php
			connectMySQl();
		?>
		
		<link rel="shortcut icon" href="Assets/Images/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="Assets/Images/IOS.ico" />
		
		<!--[if lt IE 7.]>
			<script defer type="text/javascript" src="Assets/Javascript/pngfix.js"></script>
		<![endif]-->
		
		<title>
			<?php
				echo $pageTitle;
			?>
		</title>
	</head>
	
	<body>
		<div class="wrapper">	        			
			<div class="header">
				<?php 
					include "Assets/Includes/header.inc.php" 
				?>
			</div>
			
			<div class="sidebar">
				<?php 
					include "Assets/Includes/sidebar.inc.php" 
				?>
			</div>
			
			<div class="content">
			<!--[if lt IE 7]>
				<div class=chromeFrame>
					Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site better.  <a href="#" onclick="hideItem(chromeFrame)">description</a>
				</div>
			<![endif]-->
			</div>
			
			<div class="footer">
				<?php 
					include "Assets/Includes/footer.inc.php" 
				?>
			</div>
		</div> 
	</body>
</html>