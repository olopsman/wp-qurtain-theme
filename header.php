<!DOCTYPE html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<script>
		   jQuery(document).ready(function(){
				 jQuery('iframe').wrap("<div class='iframe-flexible-container'></div>");
		   });
		</script>
	</head>
		<!-- add the body tag - the navigation section is used by all pages -->
		<body>
        <nav id="nav">
            <ul class="row">
							<!--custom logo -->
							<li>
							<?php the_custom_logo(); ?>
						  </li>
							<li>
							<!-- first navigation - change to being loaded from the menu -->
							<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
						  </li>
            </ul>
        </nav>
				<!-- mobile -->
				<nav id="mobile" class="row hide-md">
						<div class="custom-logo">
						<?php the_custom_logo(); ?>
						</div>
	          <a id="nav-open-button" class="nav-button gray hide-md">
	              <svg version="1.1" class="button-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="23px" viewBox="0 0 24 23" enable-background="new 0 0 24 23" xml:space="preserve">
	      		<path class="fill" d="M21,6H3C2.171,6,1.5,5.329,1.5,4.5S2.171,3,3,3h18c0.828,0,1.5,0.671,1.5,1.5S21.828,6,21,6z M22.5,11.5
	          c0-0.829-0.672-1.5-1.5-1.5H3c-0.829,0-1.5,0.671-1.5,1.5C1.5,12.328,2.171,13,3,13h18C21.828,13,22.5,12.328,22.5,11.5z M22.5,18.5
	          c0-0.828-0.672-1.5-1.5-1.5H3c-0.829,0-1.5,0.672-1.5,1.5S2.171,20,3,20h18C21.828,20,22.5,19.328,22.5,18.5z"></path>
	      				</svg>
	          </a>
						<div class="menu-wrap">
						<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
						<button class="close-button" id="close-button">Close Menu</button>
	        </div>
				</nav>
				<!-- end mobile -->
