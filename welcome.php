<!DOCTYPE html>
<html>
	<head>
		
		<title>Welcome</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/welcome.css" />
		
		<!-- Refresh every 15 minutes -->
		<meta http-equiv="refresh" content="900">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Prociono">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans" />
		<link rel="icon" href="favicon.ico" />

		<?php include 'php_support/getNews.php'; ?>
		
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
		<div id="menu">
			<div id="logos">
				<ul>
					<li><a href="#"><h2><em>ZeroZero</em></h2></a></li>
					<li><h2><em>Visão</em></h2></li>
					<li><h2><em>Expresso</em></h2></li>
					<li><h2><em>Publico</em></h2></li>
					<li><h2><em>O Jogo</em></h2></li>
					<li><h2><em>A Bola</em></h2></li>
				</ul>
			</div>
		</div>
		<div id="container">
			<div class="news_container">
				<?php showRSS("http://www.zerozero.pt/rss/noticias.php", "0"); ?>
			</div>	
			<div class="news_container">
				<?php showRSS("http://visao.sapo.pt/static/rss/visao-geral.xml", "1"); ?>
			</div>
			<div class="news_container">
				<?php showRSS("http://expresso.sapo.pt/static/rss/atualidade--arquivo_23412.xml", "2"); ?>
			</div>
			<div class="news_container">
				<?php showRSS("http://feeds.feedburner.com/PublicoRSS", "3"); ?>
			</div>
		<!--	<div class="news_container">
				<?php showRSS("http://feeds.ojogo.pt/OJ-Ultimas", "4"); ?>
		    </div>
			<div class="news_container">
				<?php showRSS("http://www.abola.pt/rss/index.aspx", "5"); ?>
			</div> -->
		</div>
		<div style="clear:both;"></div> 
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
	</body>
</html>