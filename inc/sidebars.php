<?php

// Register Sidebar
function main_sidebar() {

	$args = array(
		'name'          => __( 'Main Sidebar', 'rincon' ),
		'id'			=> 'main-sidebar',
		'description'   => __( 'This is the main sidebar that is on the left side of every page.', 'rincon' ),
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s"class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'main_sidebar' );

?>