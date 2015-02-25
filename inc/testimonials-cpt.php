<?php
// THANK YOU GenerateWP.com!!!

if ( ! function_exists('testimonial_cpt') ) {

// Register Custom Post Type
function testimonial_cpt() {

	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'sherpa' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'sherpa' ),
		'menu_name'           => __( 'Testimonials', 'sherpa' ),
		'parent_item_colon'   => __( 'Parent Item:', 'sherpa' ),
		'all_items'           => __( 'All Testimonials', 'sherpa' ),
		'view_item'           => __( 'View Testimonial', 'sherpa' ),
		'add_new_item'        => __( 'Add New Testimonial', 'sherpa' ),
		'add_new'             => __( 'Add New', 'sherpa' ),
		'edit_item'           => __( 'Edit Testimonial', 'sherpa' ),
		'update_item'         => __( 'Update Testimonial', 'sherpa' ),
		'search_items'        => __( 'Search Testimonial', 'sherpa' ),
		'not_found'           => __( 'Not found', 'sherpa' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sherpa' ),
	);
	$rewrite = array(
		'slug'                => 'testimonial',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __( 'testimonial', 'sherpa' ),
		'description'         => __( 'Testimonials', 'sherpa' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'testimonial', $args );

}

// Hook into the 'init' action
add_action( 'init', 'testimonial_cpt', 0 );

}