						<nav class="navbar navbar-sherpa">
							<?php
								$args = array(
									'menu'				=> 'primary',
									'theme_location'	=> 'primary',
									'depth'				=> 2,
									'container'			=> FALSE,
									'menu_class'		=> 'nav navbar-nav',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker()
								);
								wp_nav_menu($args);
							?>
						</nav>