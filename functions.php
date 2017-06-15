<?php
	
	$includes = array(
		'checks.php', 					      // Set up options
		'constants.php',				      // Add in Constants
		'styles.php', 					      // Enqueue our styles
		'scripts.php', 					      // Enqueue our scripts
		'sidebars.php',					      // Set up our sidebar
		'sherpa-excerpt.php',			      // Special excerpt so that includes a read more button
		'sherpa-theme-options-page.php',      // Create our options page - Settings => Theme Options
		'do-shortcode-widget.php',		      // Create a widget to do a single shortcode
		'menus.php',					      // Set up our menus
		'navs.php',						      // Include our navs functions
		'paging-nav.php',				      // Set up our paging nav
		'theme-features.php',			      // Set up our theme features
		'testimonials-cpt.php',			      // Set up our Testimonials Custom Post Type
		'wp_bootstrap_navwalker.php',	      // Set up our Custom Walker for Bootstrap 3.x for wp_nav_menu()
		'prevent-image-size-attr.php',	      // Prevent WP from adding Height and Width to images
		'SocialMedia.php',				      // Set up social media function
		'google-analytics.php',		          // Include Google Analytics
		'stat-counter.php',				      // Include Stat Counter
		'google-site-verification.php',	      // Include Google Site Verification
		'schema.php',                         // Include Schema Function (www.schema.org)
		'create-pages.php',                   // Create the home page and the blog page upon activation
		'address.php',                        // Address and their related functions
		'sherpa-gallery.php',                 // Make gallery shortcode work with colorbox
		'class-tgm-plugin-activation.php',    // Allow for required plugins
		'required-plugins.php',               // Set up required plugins
		'disable-emoji.php',                  // Disable Emoji
		'add-to-any.php',                     // Add filter for 'the_content' to add Social Media sharing buttons
		'add-image-to-post.php',              // Add featured image to post
		'sherpa-video-embed-shortcode.php',   // Add shortcode 
		'add-tags-to-single.php',             // Add tags to the content on single posts
		'get-stars-for-rating.php',           // Get Stars for ratings on testimonials
	);
	
	$prefix = 'inc/';
	
	foreach($includes as $include) {
		require_once($prefix . $include);
	}