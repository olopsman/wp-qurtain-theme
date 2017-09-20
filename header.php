<!DOCTYPE html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
		<!-- add the body tag - the navigation section is used by all pages -->
		<body>
    <body data-tab-active="false">
        <div id="modal"></div>
        <div id="overlay"></div>

        <nav id="nav" class="nav-right" role="navigation">
            <ul class="row">
							<!--custom logo -->
							<li>
							<?php the_custom_logo(); ?>
						  </li>
							<li>
							<!-- first navigation - change to being loaded from the menu -->
							<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
						  </li>

                <li class="color-codes">
        <a property="url" class="" href="#">				<span class="hide-md">
        <svg version="1.1" id="htmlcolorcodes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <path fill="#581845" d="M15.891,15.887C14.852,16.927,13.471,17.5,12,17.5V24c3.207,0,6.223-1.25,8.489-3.52L15.891,15.887z"></path>
        <path fill="#900C3F" d="M17.5,12c0,1.468-0.57,2.85-1.609,3.886l4.598,4.597C22.753,18.216,24,15.204,24,12H17.5z"></path>
        <path fill="#C70039" d="M20.484,3.515L15.887,8.11C16.927,9.151,17.5,10.533,17.5,12H24C24,8.797,22.751,5.784,20.484,3.515z"></path>
        <path fill="#FF5733" d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12v-6.5c-3.033,0-5.5-2.467-5.5-5.5S8.967,6.5,12,6.5
            c1.468,0,2.85,0.572,3.889,1.612l4.594-4.599C18.215,1.248,15.203,0,12,0z"></path>
        </svg>
        </span>
          <div class="logo show-md">
          <div class="deg-hidden"></div>
          <div class="donut deg45-1-gray"></div>
          <div class="donut deg45-1"></div>
          <div class="donut deg45-2-gray"></div>
          <div class="donut deg45-2"></div>
          <div class="donut deg45-3-gray"></div>
          <div class="donut deg45-3"></div>
          <div class="donut deg45-6-gray"></div>
          <div class="donut deg45-6"></div>
          <div class="donut deg45-5-gray"></div>
          <div class="donut deg45-5"></div>
          <div class="donut deg45-4-gray"></div>
          <div class="donut deg45-4"></div>
        </div>
            <h3 property="name" class="hide-md">Home</h3>
        </a>		</li>
                <li class="color-picker">
                    <h3 property="name">
        <a property="url" class="" href="#">
            <span class="black hide-md">
        </span>
                            Picker
        </a>			</h3>
                </li>
            </ul>

        </nav>
				<!-- mobile -->
				<nav id="mobile" class="row hide-md">
				        <div>
				      <a class="mobile-logo" href="http://htmlcolorcodes.com/">  		<svg version="1.1" id="htmlcolorcodes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
				      <path fill="#581845" d="M15.891,15.887C14.852,16.927,13.471,17.5,12,17.5V24c3.207,0,6.223-1.25,8.489-3.52L15.891,15.887z"></path>
				      <path fill="#900C3F" d="M17.5,12c0,1.468-0.57,2.85-1.609,3.886l4.598,4.597C22.753,18.216,24,15.204,24,12H17.5z"></path>
				      <path fill="#C70039" d="M20.484,3.515L15.887,8.11C16.927,9.151,17.5,10.533,17.5,12H24C24,8.797,22.751,5.784,20.484,3.515z"></path>
				      <path fill="#FF5733" d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12v-6.5c-3.033,0-5.5-2.467-5.5-5.5S8.967,6.5,12,6.5
				          c1.468,0,2.85,0.572,3.889,1.612l4.594-4.599C18.215,1.248,15.203,0,12,0z"></path>
				      </svg>

				      </a>      <ol class="show-sm" vocab="http://schema.org/" typeof="BreadcrumbList">
				          <li property="itemListElement" typeof="ListItem">
				      <a property="item" typeof="WebPage" href="http://htmlcolorcodes.com/">          <h4 property="name">HTML Color Codes</h4>
				      </a>      <meta property="position" content="1">
				          </li>
				          <li property="itemListElement" typeof="ListItem">
				      <a property="item" typeof="WebPage" href="http://htmlcolorcodes.com/color-names/">        <span>›</span>
				              <h4 property="name">Color Names</h4>
				      </a>      <meta property="position" content="2">
				          </li>
				        </ol>

				          <h4 class="hide-sm"><a href="http://htmlcolorcodes.com/">HTML Color Codes</a></h4>
				          <a id="nav-open-button" class="nav-button gray hide-md">
				              <svg version="1.1" class="button-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="23px" viewBox="0 0 24 23" enable-background="new 0 0 24 23" xml:space="preserve">
				      <path class="fill" d="M21,6H3C2.171,6,1.5,5.329,1.5,4.5S2.171,3,3,3h18c0.828,0,1.5,0.671,1.5,1.5S21.828,6,21,6z M22.5,11.5
				          c0-0.829-0.672-1.5-1.5-1.5H3c-0.829,0-1.5,0.671-1.5,1.5C1.5,12.328,2.171,13,3,13h18C21.828,13,22.5,12.328,22.5,11.5z M22.5,18.5
				          c0-0.828-0.672-1.5-1.5-1.5H3c-0.829,0-1.5,0.672-1.5,1.5S2.171,20,3,20h18C21.828,20,22.5,19.328,22.5,18.5z"></path>
				      </svg>
				          </a>
				        </div>
				</nav>
				<!-- end mobile -->
