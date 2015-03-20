<?php

function agi_front_and_backend_scripts() {

	$typekit = get_option('typekit');
	
	if(!empty($typekit)) {
		wp_register_script( 'typekit', '//use.typekit.net/' . $typekit . '.js', false, false, false );
		wp_enqueue_script( 'typekit' );
		
		wp_register_script( 'typekit_init', get_template_directory_uri() . '/js/typekit-init.js', array('typekit'), '1', false);
		wp_enqueue_script( 'typekit_init' );	
	}
}

function agi_frontend_scripts() {
	wp_register_script( 'modernizr_respond', get_stylesheet_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', false, '2.8.3', false );
	wp_enqueue_script( 'modernizr_respond' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, '1.11.2', false );
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'main_js', get_stylesheet_directory_uri() . '/js/main-ck.js', array( 'jquery'), '1.0.0', true );
	wp_enqueue_script( 'main_js' );

	agi_front_and_backend_scripts();	
}

function agi_backend_scripts() {
	
	
	agi_front_and_backend_scripts();
}


add_action( 'wp_enqueue_scripts', 'agi_frontend_scripts' );

add_action('admin_enqueue_scripts', 'agi_backend_scripts');

