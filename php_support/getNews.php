<?php

	function showRSS($url, $index) {
		$xml=$url;
						
		$xmlDoc = new DOMDocument();
		$xmlDoc->load($xml);
								
		//get and output "<item>" elements
		$x=$xmlDoc->getElementsByTagName('item');

		//array for images
		$images = array("zerozero.png","visao.png","expresso.png", "publico.png", "saramago.png");

		$breaking_news = True;					
		for ($i=0; $i<=5; $i++) {
		    $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
			$item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
			$item_description=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
			$item_date=$x->item($i)->getElementsByTagName('pubDate')->item(0)->childNodes->item(0)->nodeValue;

			// Breakdown date
			list($day,$number,$month,$year,$time) = preg_split('/[ ,]/',$item_date,false,PREG_SPLIT_NO_EMPTY);
			preg_match('/([0-9]+):([0-9]+)/',$time,$timeparts);
			list($time,$hour,$minute) = $timeparts;

			if ($breaking_news) { 
				echo ("<ul class='news'>
					   <li class='breaking_news'>
					   <div class='image'><img class='image_logo' src='images/" . $images[$index] . "'></div>" 
					   . "<div class='info'><div class='time_container'>" . $time . "</div>"
					   . "<div class='breaking_news_link'><a class='news_link' href='" . $item_link  . "' >" 
					   . $item_title . "</a></div>"
					   . "<br><div class='breaking_news_item_description'><p>" . $item_description . "</p></div>"
					   . "</div></li>"
				);
				$breaking_news = False;
			}
			else {
					echo ("<li class='old_news'>" 
						  . "<div class='old_time_container'>" . $time . "</div>"
						  . "<div class='old_news_link'>
						  		<a class='news_link' href='" . $item_link  . "' >" . $item_title . "</a>
						    </div>"
						  . "<span>+</span>"
						  . "<a class='link' href='" . $item_link  . "' target='_blank'><img src='images/link.png' height='17px' width='19px'></a>"
						  . "<br>
						  	<p class='old_news_item_description'>" . $item_description . "</p>"
						  . "</li>"
					);
			} // else
		} // for
		echo "</ul>";
	} // function
?>