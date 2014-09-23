<html>
<head>
	
	<title>Welcome</title>

	<!-- CSS-->
	<link rel="stylesheet" type="text/css" href="global.css">

	<!-- RSS-->
	
	<!-- Refresh every 15 minutes-->
	<meta http-equiv="refresh" content="900">
	<!-- Icon-->
	<link rel="icon" href="favicon.ico" />
	
</head>
<body>



	<div id="overall_container">
		<div id="navigation_container">
			<h1>Welcome</h1>
			<ul id="navigation_contents">
				<li><a href="#">Portugal</a></li>
				<li><a href="#">Desporto</a></li>
				<li><a href="#">Tecnologia</a></li>
				<li><a href="#">Politica</a></li>
				<li><a href="#">Reino Unido</a></li>
			</ul>
			<p id="copyright">&#169; 2014 Pedro Jorge</p>
		</div>
		<div id="container">
			<div class="rssOutput">
				<div class="logo">
					<img src='images/logo_visao.png' alt='Visao'>
				</div>
				<div class="news">
					<?php
				
						$xml="http://visao.sapo.pt/static/rss/visao-geral.xml";
					
							$xmlDoc = new DOMDocument();
							$xmlDoc->load($xml);
							
							//get elements from "<channel>"
							$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
							$channel_title = $channel->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$channel_link = $channel->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							
							//get and output "<item>" elements
							$x=$xmlDoc->getElementsByTagName('item');
							
							for ($i=0; $i<=4; $i++) {
							  $item_title=$x->item($i)->getElementsByTagName('title')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  $item_link=$x->item($i)->getElementsByTagName('link')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  echo ("<p><a href='" . $item_link  . "' >" . $item_title . "</a>");
							}
					?>
				</div>
			</div>
			<div class="rssOutput">
				<div class="logo">
					<img src='images/logo_publico.png' alt='Publico'>
				</div>
				<div class="news">
					<?php
				
						$xml="http://feeds.feedburner.com/PublicoRSS";
					
							$xmlDoc = new DOMDocument();
							$xmlDoc->load($xml);
							
							//get elements from "<channel>"
							$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
							$channel_title = $channel->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$channel_link = $channel->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							
							//get and output "<item>" elements
							$x=$xmlDoc->getElementsByTagName('item');
							
							for ($i=0; $i<=4; $i++) {
							  $item_title=$x->item($i)->getElementsByTagName('title')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  $item_link=$x->item($i)->getElementsByTagName('link')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  echo ("<p><a href='" . $item_link  . "' >" . $item_title . "</a>");
							}
					?>
				</div>
			</div>
			<div class="rssOutput">
				<div class="logo">
					<img src='images/logo_bbc.png' alt='BBC'>
				</div>
				<div class="news">
					<?php
						$xml="http://feeds.jn.pt/JN-ULTIMAS";
					
							$xmlDoc = new DOMDocument();
							$xmlDoc->load($xml);
							
							//get elements from "<channel>"
							$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
							$channel_title = $channel->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$channel_link = $channel->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							
							//get and output "<item>" elements
							$x=$xmlDoc->getElementsByTagName('item');

							for ($i=0; $i<=4; $i++) {
							  $item_title=$x->item($i)->getElementsByTagName('title')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  $item_link=$x->item($i)->getElementsByTagName('link')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  echo ("<p><a href='" . $item_link  . "' >" . $item_title . "</a>");
							}
					?>
				</div>
			</div>
	</div>
</body>
</html>