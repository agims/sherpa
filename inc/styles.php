<?php

// Register Style
function sherpa_styles() {

	// We are going to defer loading our styles until after WooCommerce has loaded its styles IF WooCommerce exists
	if(function_exists('is_woocommerce')) {
		$main_css_deps = array('woocommerce-layout');
	} else {
		$main_css_deps = FALSE;
	}
	
	wp_register_style( 'main_css', get_stylesheet_directory_uri() . '/css/style.css', $main_css_deps, '1.0', 'all' );
	wp_enqueue_style( 'main_css' );

	wp_register_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', false, '4.5.0', 'all' );
	wp_enqueue_style( 'font_awesome' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'sherpa_styles' );
	
?>