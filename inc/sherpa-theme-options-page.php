<?php

function sherpa_register_settings() {
	register_setting('default', 'facebook_url');
	register_setting('default', 'twitter_url');
	register_setting('default', 'google_plus_url');
	register_setting('default', 'pinterest_url');
	register_setting('default', 'linkedin_url');
	register_setting('default', 'home_page_slider');
	register_setting('default', 'typekit');
	register_setting('default', 'sherpa_owa');
	register_setting('default', 'sherpa_google_analytics');
	register_setting('default', 'sherpa_stat_counter_project');
	register_setting('default', 'sherpa_stat_counter_security');
}

add_action( 'admin_init', 'sherpa_register_settings');

function sherpa_theme_option_menu() {
	add_theme_page('Sherpa Theme Options Page', 'Theme Options', 'manage_options', 'sherpa-theme-options', 'sherpa_theme_option_page');
}

add_action('admin_menu', 'sherpa_theme_option_menu');

function sherpa_theme_option_page() {
	if( !current_user_can('manage_options')) {
		wp_die( __('Umm, what are you doing?', 'sherpa'));
	}
	?>
	<div class="wrap">
		<h2>Sherpa Theme Options</h2>
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
					<tr>
						<th scope="row">
							<label for="linkedin_url">LinkedIn URL</label>
						</th>
						<td>
							<input name="linkedin_url" type="text" value="<?=get_option('linkedin_url')?>" class="regular-text">
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
			<h3>Typekit</h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="typekit">Kit ID</label>
						</th>
						<td>
							<input name="typekit" type="text" value="<?=get_option('typekit')?>" class="regular-text">
						</td>
					</tr>
				</tbody>
			</table>
			<h3>Analytics</h3>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_owa">Open Web Analytics - Site ID</label><br />
							<small>If you are not using this theme for AGI's analytics, make sure to change the owaBaseURL in <code>inc/open-web-analytics.php</code></small>
						</th>
						<td>
							<input name="sherpa_owa" type="text" value="<?=get_option('sherpa_owa')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_google_analytics">Google Analytics - Kit ID</label><br />
							<small>This is the ID that usually looks like <code>UA-XXXXXXXX-X</code>
						</th>
						<td>
							<input name="sherpa_google_analytics" type="text" value="<?=get_option('sherpa_google_analytics')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_stat_counter_project">Stat Counter - Project</label><br />
							<small>Within the Stat Counter code, this is the part that says <code>var sc_project=XXXXXXXX;</code></small>
						</th>
						<td>
							<input name="sherpa_stat_counter_project" type="text" value="<?=get_option('sherpa_stat_counter_project')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_stat_counter_security">Stat Counter - Security</label><br />
							<small>Within the Stat Counter code, this is the part that says <code>var sc_security="XXXXXXXX";</code></small>
						</th>
						<td>
							<input name="sherpa_stat_counter_security" type="text" value="<?=get_option('sherpa_stat_counter_security')?>" class="regular-text">
						</td>
					</tr>
				</tbody>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}