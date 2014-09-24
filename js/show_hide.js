$(document).ready(function () {
	
				$('.news li').click(function () {

					var text = $(this).children('.old_news_item_description');

					// Check if description is empty
					if(text.html().replace(/\s|&nbsp;/g, '').length != 0) {
						if (text.is(':hidden')) {
							text.slideDown('200');
							$(this).children('span').html('-');		
						} else {
							text.slideUp('200');
							$(this).children('span').html('+');		
						}
					}
				});

			});