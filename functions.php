<?php

	/**
	 * First, let's set the maximum content width based on the theme's design and stylesheet.
	 * This will limit the width of all uploaded images and embeds.
	 */
	if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

	if(!function_exists('qurtain_setup')) :
		/*
			Sets up the theme defaults
		*/
		function qurtain_setup() {

			//adds default post and comments rss feeds links to the head
			add_theme_support('automatic-feed-links');

			//lets wordpress manage the document title - no hard coded title
			add_theme_support('title-tag');

			//enable support for post thumbnails and featured images
			add_theme_support('post-thumbnails');

			//add support for custom navigation menus
			register_nav_menus( array(
				'primary' => __('Primary Menu', 'qurtain')
			));
			//enable support for the post types
			add_theme_support( 'post-formats', array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			) );
			add_theme_support( 'custom-logo', array(
				'flex-width'  => true,
				'flex-height' => true,
			) );

		}
		//call the theme setup on the hook
		add_action('after_setup_theme', 'qurtain_setup');
	endif; //end if

	function qurtain_enqueue_scripts() {
		wp_enqueue_style('qurtain', get_template_directory_uri() . '/css/qurtain.css', array(), '1.0.0','all');

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		//call the wp jquery
		wp_enqueue_script( 'jquery');
		wp_enqueue_script('main', get_template_directory_uri() . '/js/classie.js', array(), 1.0,true);
		wp_enqueue_script('classie', get_template_directory_uri() . '/js/mobile-main.js', array(), 1.0,true);


	}

	add_action('wp_enqueue_scripts', 'qurtain_enqueue_scripts');
?>
