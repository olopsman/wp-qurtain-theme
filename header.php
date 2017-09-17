<!DOCTYPE html>
	<head>		
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		<?php 
			bloginfo('name'); 
			if(is_singular()) {
				?> &raquo; Blog Archive
				<?php
				wp_title();				
			} 
			?>
		</title>	
		<!-- what does two tags do? -->
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

		<!-- before you close the head call the wp_head template tag  
		NOTES
		** some setup marks are added on the theme activation such as the 
		*** - title
		*** - default stylesheets
		-->
		<?php wp_head(); ?>
	</head>
		<!-- add the body tag - the navigation section is used by all pages -->
		<body>
    <body data-tab-active="false">
        <div id="modal"></div>
        <div id="overlay"></div>
        <?php wp_nav_menu( array( 'theme_location' => 'TopNav' ) ); ?>

        <!-- first navigation - change to being loaded from the menu -->
        <nav id="nav" class="nav-right" role="navigation">
            <ul class="row">
                <li class="color-codes">
        <a property="url" class="" href="http://htmlcolorcodes.com/">				<span class="hide-md">
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
        <a property="url" class="" href="http://htmlcolorcodes.com/color-picker/">					
            <span class="black hide-md">
        </span>
                            Picker
        </a>			</h3>
                </li>
                <li class="color-chart">
                    <h3 property="name">
        <a property="url" class="" href="http://htmlcolorcodes.com/color-chart/">				
            	<span class="black hide-md">
                    
        </span>
                            Chart
        </a>			</h3>
                </li>
                <li class="color-names">
                    <h3 property="name">
        <a property="url" class="" href="http://htmlcolorcodes.com/color-names/">				
            
                            Names
        </a>			</h3>
                </li>
                <li class="color-tutorials">
                    <h3 property="name">
        <a property="url" class="" href="http://htmlcolorcodes.com/tutorials/">				
                            Tutorials
        </a>			</h3>
                </li>
                <li class="color-resources">
                    <h3 property="name">
        <a property="url" class="" href="http://htmlcolorcodes.com/resources/">			
            	
                            Resources
        </a>			</h3>
                </li>
                <li class="credit">
                    <h3 property="name">
                        by <a href="https://dixonandmoe.com/">Dixon &amp; Moe</a>
                    </h3>
                </li>
                <li class="color-border hide-md">
                    <span class="purple"></span>
                    <span class="magenta"></span>
                    <span class="red"></span>
                    <span class="orange"></span>
                </li>
        
                <li class="hide-md credits">
                    <h5>
                            © 2015 – 2017
                    </h5>
                    <h3><a href="http://dixonandmoe.com/">Dixon &amp; Moe</a></h3>
                </li>
            </ul>
        
            <!-- <section class="subnav" >
                <ul class="row lower">
                    <li class="col-xs-24 hide-md languages"></li>
                    <li class="color-codes"></li>
                    <li class="show-md dixonandmoe">
                        <h4 property="name"><a href="http://dixonandmoe.com/">by Dixon & Moe</a></h4>
                    </li>
                    <li class="social header" >
                        
                    </li>
                </ul>
            </section>  -->
        </nav>



