<?php
	if(!function_exists('qurtain_theme_setup')) :
		/*
			Sets up the theme defaults 
		*/
		function qurtain_theme_setup() {

			//adds default post and comments rss feeds links to the head
			add_theme_support('automatic-feed-links');

			//lets wordpress manage the document title - no hard coded title
			add_theme_support('title-tag');
		}

	endif;
?>