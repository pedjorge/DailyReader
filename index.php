<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>A Collection of Page Transitions</title>
		<meta name="description" content="A Collection of Page Transitions with CSS Animations" />
		<meta name="keywords" content="page transition, css animation, website, effect, css3, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<?php include 'php_support/getNews.php'; ?>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/multilevelmenu.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/animations.css" />
		<link rel="stylesheet" type="text/css" href="css/welcome.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>	
		<header>
			<h1><em>Welcome Pedro</em></h1>
			<ul id="navigation">
				<li id="iterateEffects"><a href="#">Portugal</a></li>
				<li><a href="#">Internacional</a></li>
				<li><a href="#">UK</a></li>
				<li><a href="#">Desporto</a></li>
				<li><a href="#">Tech</a></li>
			</ul>
		</header>

		<div id="pt-main" class="pt-perspective">
			<div class="pt-page pt-page-1">
				<div id="container">
					<div class="news_container">
						<h2><em>Visão</em></h2>
						<?php 
							showRSS("http://visao.sapo.pt/static/rss/visao-geral.xml");
						?>
					</div>
					<div class="news_container">
						<h2><em>Expresso</em></h2>
						<?php  
							showRSS("http://expresso.sapo.pt/static/rss/atualidade--arquivo_23412.xml");
						?>
					</div>
					<div class="news_container">
						<h2><em>Publico</em></h2>
						<?php 
							showRSS("http://feeds.feedburner.com/PublicoRSS");
						?>
					</div>
				</div>
			</div>
			<div class="pt-page pt-page-2"></div>
			<div class="pt-page pt-page-3"></div>
			<div class="pt-page pt-page-4"></div>
			<div class="pt-page pt-page-5"></div>
			<div class="pt-page pt-page-6"></div>
		</div>

		<footer>
			<ul>
				<li class="first">
					&#169; 2014 Pedro Jorge
				</li>
				<li id="social_media"><a href="http://www.quora.com" target="_blank"><img src="images/quora.png" width="40px" height="40px"></a></li>
				<li id="social_media"><a href="http://www.instagram.com" target="_blank"><img src="images/instagram.png" width="40px" height="40px"></a></li>
				<li id="social_media"><a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png" width="40px" height="40px"></a></li>
				<li id="social_media"><a href="http://www.facebook.com" target="_blank"><img src="images/facebook.png" width="40px" height="40px"></a></li>			
			</ul>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/pagetransitions.js"></script>
	</body>
</html>
