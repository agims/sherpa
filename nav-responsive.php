						<nav class="navbar navbar-sherpa">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						    </div>
						
						    <!-- Collect the nav links, forms, and other content for toggling -->
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php
									$args = array(
										'menu'				=> 'primary',
										'theme_location'	=> 'primary',
										'depth'				=> 2,
										'menu_class'		=> 'nav navbar-nav',
										'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
										'walker'            => new wp_bootstrap_navwalker()
									);
									wp_nav_menu($args);
								?>
						    </div><!-- /.navbar-collapse -->
						</nav>
