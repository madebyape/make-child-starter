<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

	// Removes WP version of jQuery
	//wp_deregister_script('jquery');
	
	// Load jQuery files in header - load in header to avoid issues with plugins
	//wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/vendor/jquery/dist/jquery.min.js', array(), '', false );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'ch-js', get_stylesheet_directory_uri() . '/ch-nav/ch-nav.js', array( 'jquery' ), '', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'ch-css', get_stylesheet_directory_uri() . '/ch-nav/ch-nav.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

