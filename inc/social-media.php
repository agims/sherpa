<?php
	
	function social_media_links($networks = array('facebook' => FALSE, 'twitter' => FALSE, 'google_plus' => FALSE, 'pinterest' => FALSE, 'linked_in' => FALSE, 'telephone' => FALSE), $size = 'lg', $style = 'square', $echo = TRUE) {

		if($size == 'sm') {
			$size_class = '';
		} elseif($size == 'lg') {
			$size_class = 'fa-lg';
		} else {
			return FALSE;
		}
		
		if($style == 'rounded') {
			$button_style = "rounded";
		} elseif($style == 'circle') {
			$button_style = "circle";
		} else {
			$button_style = "square";
		}
		
		extract($networks, EXTR_OVERWRITE);
		
		$to_return .= "<ul class=\"list-inline social-media\">\n";
		
		
		if($facebook === TRUE) {
			$facebook_url = FACEBOOK;
			$to_return .= "<li><a href=\"$facebook_url\" class=\"facebook-button social-media-button $size $button_style \"><i class=\"fa fa-facebook $size_class\"><span>Facebook</span></i></a></li>\n";
		}
		if($twitter === TRUE) {
			$twitter_url = TWITTER;
			$to_return .= "<li><a href=\"$twitter_url\" class=\"twitter-button social-media-button $size $button_style\"><i class=\"fa fa-twitter $size_class\"><span>Twitter</span></i></a></li>\n";
		}
		if($google_plus === TRUE) {
			$google_plus_url = GOOGLEPLUS;
			$to_return .= "<li><a href=\"$facebook_url\" class=\"google-plus-button social-media-button $size $button_style\"><i class=\"fa fa-google-plus $size_class\"><span>Google Plus</span></i></a></li>\n";
		}
		if($pinterest === TRUE) {
			$pinterest_url = PINTEREST;
			$to_return .= "<li><a href=\"$pinterest_url\" class=\"pinterest-button social-media-button $size $button_style\"><i class=\"fa fa-pinterest-p $size_class\"><span>Pinterest</span></i></a></li>\n";
		}
		if($linked_in === TRUE) {
			$linked_in_url = LINKEDIN;
			$to_return .= "<li><a href=\"$linked_in_url\" class=\"linked-in-button social-media-button $size $button_style\"><i class=\"fa fa-linkedin $size_class\"><span>LinkedIn</span></i></a></li>\n";
		}
		if($telephone === TRUE) {
			$telephone_number = TELEPHONE;
			$to_return .= "<li><a href=\"tel:$telephone_number\" class=\"phone-button social-media-button $size $button_style visible-xs\"><i class=\"fa fa-phone $size_class\"><span>Call Us</span></i></a></li>\n";
		}
			
		$to_return .= "</ul>\n";
		
		if($echo) {
			echo $to_return;
		} else {
			return $to_return;
		}
	}