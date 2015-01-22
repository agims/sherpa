<?php
	
	$includes = array(
		'checks.php',
		'styles.php',
		'scripts.php',
		'sidebars.php',
		'agi-excerpt.php',
		'agi-options-page.php',
		'do-shortcode-widget.php',
		'menus.php',
		'paging-nav.php',
		'theme-features.php',
		'wp_bootstrap_navwalker.php'
	);
	
	$prefix = 'inc/';
	
	foreach($includes as $include) {
		require_once($prefix . $include);
	}