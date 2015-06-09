<?php
	
	function bs_menu($is_responsive = TRUE, $theme_location = 'primary', $secondary_location = NULL) {
		echo "<nav class=\"navbar navbar-sherpa\">\n";
		if($is_responsive == TRUE) {
			$collapse_id = rand(1,99);
			echo "
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class=\"navbar-header\">
						      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-$collapse_id\">
						        <span class=\"sr-only\">Toggle navigation</span>
						        <span>Menu</span>
						      </button>
						    </div>
						
						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-$collapse_id\">
			";
		}
		$args = array(
			'theme_location'	=> $theme_location,
			'depth'				=> 2,
			'menu_class'		=> 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker()
		);
		wp_nav_menu($args);
		
		if($secondary_location != NULL) {
			$args = array(
				'theme_location'	=> $secondary_location,
				'depth'				=> 2,
				'menu_class'		=> 'nav navbar-nav navbar-right',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker()
			);
			wp_nav_menu($args);
		}
		
		if($is_responsive == TRUE) {
			echo "
						    </div><!-- /.navbar-collapse -->
			";
		}
		
		echo "
						</nav>
		";
		
	}
	
	function responsive_bs_menu($theme_location = 'primary', $secondary_location = NULL) {
		bs_menu(TRUE, $theme_location, $secondary_location);
	}
	
	function non_responsive_bs_menu($theme_location = 'primary', $secondary_location = NULL) {
		bs_menu(FALSE, $theme_location, $secondary_location);
	}
