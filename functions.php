<?php
	
	$includes = array(
		'checks.php', 					// Set up options
		'constants.php',				// Add in Constants
		'styles.php', 					// Enqueue our styles
		'scripts.php', 					// Enqueue our scripts
		'sidebars.php',					// Set up our sidebar
		'agi-excerpt.php',				// Special excerpt so that includes a read more button
		'sherpa-theme-options-page.php',// Create our options page - Settings => Theme Options
		'do-shortcode-widget.php',		// Create a widget to do a single shortcode
		'menus.php',					// Set up our menus
		'navs.php',						// Include our navs functions
		'paging-nav.php',				// Set up our paging nav
		'theme-features.php',			// Set up our theme features
		'testimonials-cpt.php',			// Set up our Testimonials Custom Post Type
		'wp_bootstrap_navwalker.php',	// Set up our Custom Walker for Bootstrap 3.x for wp_nav_menu()
		'prevent-image-size-attr.php',	// Prevent WP from adding Height and Width to images
		'social-media.php',				// Set up social media function
		'rev-slider-call.php',			// Set up slider (needs Slider Revolution)
		'google-analytics.php',			// Include Google Analytics
		'stat-counter.php',				// Include Stat Counter
		'woocommerce-support.php',		// Declare WooCommerce Support
	);
	
	$prefix = 'inc/';
	
	foreach($includes as $include) {
		require_once($prefix . $include);
	}