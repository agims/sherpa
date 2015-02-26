<?php
	
	function social_media_links($echo = TRUE, $size = 'lg', $facebook = TRUE, $twitter = TRUE, $google_plus = TRUE, $pinterest = TRUE) {

		if($size == 'sm') {
			$size_class = '';
		} elseif($size == 'lg') {
			$size_class = 'fa-lg';
		} else {
			return FALSE;
		}
		
		$to_return .= "<ul class=\"list-inline social-media\">\n";
		
		
		if($facebook) {
			$facebook_url = get_option('facebook_url');
			$to_return .= "<li><a href=\"$facebook_url\" class=\"facebook-button social-media-button $size\"><i class=\"fa fa-facebook $size_class\"><span>Facebook</span></i></a></li>\n";
		}
		if($twitter) {
			$twitter_url = get_option('twitter_url');
			$to_return .= "<li><a href=\"$twitter_url\" class=\"twitter-button social-media-button $size\"><i class=\"fa fa-twitter $size_class\"><span>Twitter</span></i></a></li>\n";
		}
		if($google_plus) {
			$google_plus_url = get_option('google_plus_url');
			$to_return .= "<li><a href=\"$facebook_url\" class=\"google-plus-button social-media-button $size\"><i class=\"fa fa-google-plus $size_class\"><span>Google Plus</span></i></a></li>\n";
		}
		if($pinterest) {
			$pinterest_url = get_option('pinterest_url');
			$to_return .= "<li><a href=\"$pinterest_url\" class=\"pinterest-button social-media-button $size\"><i class=\"fa fa-pinterest-p $size_class\"><span>Pinterest</span></i></a></li>\n";
		}
		$to_return .= "<li><a href=\"tel:915-345-1282\" class=\"phone-button social-media-button $size visible-xs\"><i class=\"fa fa-phone $size_class\"><span>Call Us</span></i></a></li>\n";	
		$to_return .= "</ul>\n";
		
		if($echo) {
			echo $to_return;
		} else {
			return $to_return;
		}
	}