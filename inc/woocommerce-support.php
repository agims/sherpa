<?php
	
	function woocommerce_support() {
		add_theme_support('woocommerce');
	}
	
	add_action('after_setup_theme', 'woocommerce_support');
	
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
	
	add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
	
	function my_theme_wrapper_start() {
		?>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-24">
		<?php
	}
	
	function my_theme_wrapper_end() {
		?>
			</div>
		</div>
	</div>
</section>
	  	<?php
	}