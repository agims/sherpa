<?php
	
	// Check to see if social media options have been created
	$social_media_options = array(
		'sherpa_facebook_url'						=> 'http://facebook.com/',
		'sherpa_twitter_url'						=> 'http://twitter.com/',
		'sherpa_google_plus_url'					=> 'http://plus.google.com/',
		'sherpa_pinterest_url'						=> 'http://pinterest.com/',
		'sherpa_linkedin_url'						=> 'http://linkedin.com/',
		'sherpa_youtube_url'                        => 'https://www.youtube.com',
		'sherpa_typekit'							=> '',
		'sherpa_google_analytics'			        => '',
		'sherpa_stat_counter_project'		        => '',
		'sherpa_stat_counter_security'		        => '',
		'sherpa_google_site_verification'	        => '',
		'sherpa_business_name'                      => get_bloginfo('name'),
		'sherpa_business_address'                   => '',
		'sherpa_business_city'                      => '',
		'sherpa_business_state'                     => '',
		'sherpa_business_zip'                       => '',
		'sherpa_telephone_number'					=> '',
		'sherpa_business_days'                      => '',
		'sherpa_business_hours'                     => '',
		'sherpa_is_responsive'                      => 'y',
		'sherpa_has_separate_mobile'                => 'n',
		'sherpa_mobile_redirect'                    => '',
	);
	
	foreach($social_media_options as $key => $value) {
		if(!get_option($key)) {
			add_option($key, $value);
		}
	}