<?php
	
if ( ! function_exists( 'sherpa_navigation_menus' ) ) {

// Register Navigation Menus
function sherpa_navigation_menus() {

	$locations = array(
		'primary'	=> __( 'Primary Menu - top of page', 'sherpa' ),
		'footer'	=> __( 'Footer Menu - bottom of page', 'sherpa' ),
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'sherpa_navigation_menus' );

}	
