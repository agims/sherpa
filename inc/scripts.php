<?php

// Register Script
function agi_scripts() {

	wp_register_script( 'modernizr_respond', get_stylesheet_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', false, '2.6.2', false );
	wp_enqueue_script( 'modernizr_respond' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, '1.11.2', false );
	wp_enqueue_script( 'jquery' );
	
	wp_register_script( 'typekit', '//use.typekit.net/vfh6shm.js', false, false, false );
	wp_enqueue_script( 'typekit' );
	
	wp_register_script( 'typekit_init', get_template_directory_uri() . '/js/typekit-init.js', array('typekit'), '1', false);
	wp_enqueue_script( 'typekit_init' );

	wp_register_script( 'main_js', get_stylesheet_directory_uri() . '/js/main-ck.js', array( 'jquery'), '1.0.0', true );
	wp_enqueue_script( 'main_js' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'agi_scripts' );

