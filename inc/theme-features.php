<?php

if ( ! function_exists('sherpa_theme_features') ) {

	// Register Theme Features
	function sherpa_theme_features()  {
	
		// Add theme support for Automatic Feed Links
		add_theme_support( 'automatic-feed-links' );
	
		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );
	
		// Add theme support for HTML5 Semantic Markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'caption', 'gallery' ) );
	
		// Add theme support for document Title tag
		add_theme_support( 'title-tag' );
		
        add_image_size( 'testimonial_profile_pic', 450, 450, TRUE );
        add_image_size( 'blog_featured_image', 737, 414, TRUE );
        add_image_size( 'blog_interior_image', 1170, 200, TRUE );
        
        // Remove Responsive Images
        add_filter( 'wp_calculate_image_srcset', '__return_false' );
	}
	
	// Hook into the 'after_setup_theme' action
	add_action( 'after_setup_theme', 'sherpa_theme_features' );

}
