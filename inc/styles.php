<?php

// Register Style
function agi_styles() {

	wp_register_style( 'main_css', get_stylesheet_directory_uri() . '/css/style.css', false, '1.0', 'all' );
	wp_enqueue_style( 'main_css' );

	wp_register_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, '4.3', 'all' );
	wp_enqueue_style( 'font_awesome' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'agi_styles' );
	
?>