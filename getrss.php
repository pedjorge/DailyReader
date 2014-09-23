<?php

	$xml=array("http://visao.sapo.pt/static/rss/visao-geral.xml", "http://feeds.feedburner.com/PublicoRSS");

	for ($i=1; $i<2; $i++) {	
		$xmlDoc = new DOMDocument();
		$xmlDoc->load($xml[$i]);
		
		//get elements from "<channel>"
		$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
		$channel_title = $channel->getElementsByTagName('title')
		->item(0)->childNodes->item(0)->nodeValue;
		$channel_link = $channel->getElementsByTagName('link')
		->item(0)->childNodes->item(0)->nodeValue;
		
		//get and output "<item>" elements
		$x=$xmlDoc->getElementsByTagName('item');
		
		// Logo
		//echo ("<img src='images/logo_visao.png' alt='Visao'>");
		echo ("<div style='width:300px; background-color:#CC021C; margin: 0 auto 0 auto;'>
			        <img src='images/logo_publico.png' alt='Publico' style='margin-left:21px;'>
			   </div>");
		for ($i=0; $i<=4; $i++) {
		  $item_title=$x->item($i)->getElementsByTagName('title')
		  ->item(0)->childNodes->item(0)->nodeValue;
		  $item_link=$x->item($i)->getElementsByTagName('link')
		  ->item(0)->childNodes->item(0)->nodeValue;
		  echo ("<p><a href='" . $item_link  . "' >" . $item_title . "</a>");
		}
	}
?>