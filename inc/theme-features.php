<?php

if ( ! function_exists('agi_theme_features') ) {

// Register Theme Features
function agi_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
	

}

// Hook into the 'after_setup_theme' action
add_action( 'after_setup_theme', 'agi_theme_features' );

}
	
?>