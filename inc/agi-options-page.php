<?php

function agi_register_settings() {
	register_setting('default', 'facebook_url');
	register_setting('default', 'twitter_url');
	register_setting('default', 'google_plus_url');
	register_setting('default', 'pinterest_url');
	register_setting('default', 'home_page_slider');
}

add_action( 'admin_init', 'agi_register_settings');

function agi_option_menu() {
	add_options_page('AGI Options Page', 'AGI Options', 'manage_options', 'agi-options', 'agi_option_page');
}

add_action('admin_menu', 'agi_option_menu');

function agi_option_page() {
	if( !current_user_can('manage_options')) {
		wp_die( __('Umm, what are you doing?', 'rincon'));
	}
	?>
	<div class="wrap">
		<h2>AGI Options</h2>
		<form method="post" action="options.php">
			<h3>Social Media URLs</h3>
			<?php settings_fields('default'); ?>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="facebook_url">Facebook URL</label>
						</th>
						<td>
							<input name="facebook_url" type="text" value="<?=get_option('facebook_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="google_plus_url">Google Plus URL</label>
						</th>
						<td>
							<input name="google_plus_url" type="text" value="<?=get_option('google_plus_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="twitter_url">Twitter URL</label>
						</th>
						<td>
							<input name="twitter_url" type="text" value="<?=get_option('twitter_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="pinterest_url">Pinterest URL</label>
						</th>
						<td>
							<input name="pinterest_url" type="text" value="<?=get_option('pinterest_url')?>" class="regular-text">
						</td>
					</tr>
				</tbody>
			</table>
			<h3>Home Page Slider</h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="home_page_slider">Alias for the home page slider</label>
						</th>
						<td>
							<input name="home_page_slider" type="text" value="<?=get_option('home_page_slider')?>" class="regular-text">
						</td>
					</tr>
				</tbody>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}