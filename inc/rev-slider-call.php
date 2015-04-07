<?php
	
	function put_rev_slider($echo = TRUE) {
		$slider_slug = get_option('home_page_slider');
		
		if(!empty($slider_slug) && shortcode_exists('rev_slider')) {
			$to_return = do_shortcode("[rev_slider $slider_slug]");
		} else {
			$to_return = "
			<div id=\"no-ss\">
				<img src=\"http://placehold.it/1140x385/0640aa/FFFFFF/&text=Slider+to+go+here\" />
			</div>
			";
		}
		if($echo) {
			echo $to_return;
			return TRUE;
		} else {
			return $to_return;
		}
	}