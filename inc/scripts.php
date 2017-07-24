<?php

function sherpa_front_and_backend_scripts() {
	$typekit = get_option('sherpa_typekit');
	
	if(!empty($typekit)) {
		wp_register_script( 'typekit', '//use.typekit.net/' . $typekit . '.js', false, false, false );
		wp_enqueue_script( 'typekit' );
		
		wp_register_script( 'typekit_init', THEMEURL . '/js/typekit-init.js', array('typekit'), '1', false);
		wp_enqueue_script( 'typekit_init' );	
	}
}

function sherpa_frontend_scripts() {
    // As of v3.0.2, making modernizr available but not automatically loaded.
	wp_register_script( 'modernizr', THEMEURL . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', false, '2.8.3', false );
	//wp_enqueue_script( 'modernizr' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.2.4', false );
	wp_enqueue_script( 'jquery' );

	if(file_exists(__DIR__ . '/../js/min/main-min.js')) {
		wp_register_script( 'main_js', THEMEURL . '/js/min/main-min.js', array( 'jquery'), time(), true );	
	} else {
    	wp_register_script( 'bootstrap', THEMEURL . '/js/bootstrap.min.js', array('jquery'), '3.3.6', TRUE );
    	wp_register_script( 'plugins_js', THEMEURL . '/js/plugins.js', array('jquery', 'bootstrap'), '1.0', TRUE );
		wp_register_script( 'main_js', THEMEURL . '/js/main.js', array( 'jquery', 'plugins_js'), '1.0.0', true );
	}

	wp_enqueue_script( 'main_js' );


	sherpa_front_and_backend_scripts();	
}

function sherpa_backend_scripts() {
	sherpa_front_and_backend_scripts();
}


add_action('wp_enqueue_scripts', 'sherpa_frontend_scripts');
add_action('admin_enqueue_scripts', 'sherpa_backend_scripts');
