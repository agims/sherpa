<?php
	
	// Check to see if social media options have been created
	$social_media_options = array(
		'facebook_url'						=> 'http://facebook.com/',
		'twitter_url'						=> 'http://twitter.com/',
		'google_plus_url'					=> 'http://plus.google.com/',
		'pinterest_url'						=> 'http://pinterest.com/',
		'linkedin_url'						=> 'http://linkedin.com/',
		'youtube_url'                       => 'https://www.youtube.com',
		'home_page_slider'					=> '',
		'typekit'							=> '',
		'sherpa_google_analytics'			=> '',
		'sherpa_stat_counter_project'		=> '',
		'sherpa_stat_counter_security'		=> '',
		'sherpa_google_site_verification'	=> '',
		'business_name'                     => get_bloginfo('name'),
		'business_address'                  => '',
		'business_city'                     => '',
		'business_state'                    => '',
		'business_zip'                      => '',
		'telephone_number'					=> '',
		'business_days'                     => '',
		'business_hours'                    => '',
	);
	
	foreach($social_media_options as $key => $value) {
		if(!get_option($key)) {
			add_option($key, $value);
		}
	}