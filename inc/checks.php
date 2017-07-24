<?php
	
	// Check to see if social media options have been created
	$social_media_options = array(

    	// Social Media
		'sherpa_facebook_url'						=> 'http://facebook.com/',
		'sherpa_twitter_url'						=> 'http://twitter.com/',
		'sherpa_google_plus_url'					=> 'http://plus.google.com/',
		'sherpa_pinterest_url'						=> 'http://pinterest.com/',
		'sherpa_linkedin_url'						=> 'http://linkedin.com/',
		'sherpa_youtube_url'                        => 'https://www.youtube.com',
		
		// Fonts
		'sherpa_typekit'							=> '',
		'sherpa_google_font_family'                 => '',
		
		// Analytics and SEO
		'sherpa_google_analytics'			        => '',
		'sherpa_stat_counter_project'		        => '',
		'sherpa_stat_counter_security'		        => '',
		'sherpa_google_site_verification'	        => '',
		'sherpa_schema'                             => '',
		
		// General Business Info
		'sherpa_business_name'                      => get_bloginfo('name'),
		'sherpa_business_address'                   => '',
		'sherpa_business_city'                      => '',
		'sherpa_business_state'                     => '',
		'sherpa_business_zip'                       => '',
		'sherpa_telephone_number'					=> '',
		'sherpa_business_days'                      => '',
		'sherpa_business_hours'                     => '',

        // Map Stuff
		'sherpa_map_link'                           => '',
		'sherpa_map_directions_link'                => '',
		
		// General Theme Options
		'sherpa_automatic_h1'                       => 'y',
		'sherpa_use_title'                          => 'y',
		'sherpa_use_featured_in_post_filter'        => 'n',
		'sherpa_blog_interior_image_width'          => '1170',
		'sherpa_blog_interior_image_height'         => '200',
		'sherpa_blog_interior_image_classes'        => '',

	);
	
	foreach($social_media_options as $key => $value) {
		if(!get_option($key)) {
			add_option($key, $value);
		}
	}