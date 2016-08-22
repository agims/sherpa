<?php

function sherpa_front_and_backend_scripts() {
	$typekit = get_option('typekit');
	
	if(!empty($typekit)) {
		wp_register_script( 'typekit', '//use.typekit.net/' . $typekit . '.js', false, false, false );
		wp_enqueue_script( 'typekit' );
		
		wp_register_script( 'typekit_init', get_template_directory_uri() . '/js/typekit-init.js', array('typekit'), '1', false);
		wp_enqueue_script( 'typekit_init' );	
	}
}

function sherpa_frontend_scripts() {
	wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/vendor/modernizr-3.3.1.js', false, '3.3.1', false );
	wp_enqueue_script( 'modernizr' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4', false );
	wp_enqueue_script( 'jquery' );

	if(file_exists(__DIR__ . '/../js/min/main-min.js')) {
		wp_register_script( 'main_js', get_stylesheet_directory_uri() . '/js/min/main-min.js', array( 'jquery'), '1.0.0', true );	
	} else {
		wp_register_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery'), '1.0.0', true );
	}
	wp_enqueue_script( 'main_js' );

	sherpa_front_and_backend_scripts();	
}

function sherpa_backend_scripts() {
	sherpa_front_and_backend_scripts();
}


add_action('wp_enqueue_scripts', 'sherpa_frontend_scripts');
add_action('admin_enqueue_scripts', 'sherpa_backend_scripts');
