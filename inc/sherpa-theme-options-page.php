<?php

function sherpa_register_settings() {
	register_setting('default', 'sherpa_facebook_url');
	register_setting('default', 'sherpa_twitter_url');
	register_setting('default', 'sherpa_google_plus_url');
	register_setting('default', 'sherpa_pinterest_url');
	register_setting('default', 'sherpa_linkedin_url');
	
	register_setting('default', 'sherpa_typekit');
	register_setting('default', 'sherpa_google_font_family');
	
	register_setting('default', 'sherpa_is_responsive');
	register_setting('default', 'sherpa_has_separate_mobile');
	register_setting('default', 'sherpa_mobile_redirect');
	
	register_setting('default', 'sherpa_business_address');
	register_setting('default', 'sherpa_business_city');
	register_setting('default', 'sherpa_business_state');
	register_setting('default', 'sherpa_business_zip');
	register_setting('default', 'sherpa_telephone_number');

	register_setting('default', 'sherpa_google_analytics');
	register_setting('default', 'sherpa_stat_counter_project');
	register_setting('default', 'sherpa_stat_counter_security');
	
	register_setting('default', 'sherpa_google_site_verification');
	register_setting('default', 'sherpa_schema');
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
	<style>
    	#layout {
        	width: 100%;
    	}
    	
        #layout td {
            vertical-align: top;
        }
        
        .form-table th[colspan="2"] {
            padding-bottom: 0;
            padding-top: 0;
        }
        
        .form-table h3 {
            background-color: #000;
            box-sizing: border-box;
            color: #EEB935;
            padding: 5px 10px;
            margin-left: -10px;
            margin-top: 0;
            text-shadow: 1px 1px 0 #333;
        }
        
        .form-table td[colspan="2"] {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
	
	
	<div class="wrap">
		<h2>Sherpa Theme Options</h2>
		<form method="post" action="options.php">
			<?php settings_fields('default'); ?>
			<table id="layout">

    			<tr>
        			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3>Business Address</h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_business_address">Address</label>
						</th>
						<td>
							<input name="sherpa_business_address" type="text" value="<?=get_option('sherpa_business_address')?>" class="regular-text" placeholder="Example:  1370 Pullman Dr, Ste. G">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_business_city">City</label>
						</th>
						<td>
							<input name="sherpa_business_city" type="text" value="<?=get_option('sherpa_business_city')?>" class="regular-text" placeholder="Example:  El Paso">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_business_state">State</label>
						</th>
						<td>
							<input name="sherpa_business_state" type="text" value="<?=get_option('sherpa_business_state')?>" class="regular-text" placeholder="Example:  TX">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_business_zip">Zip</label>
						</th>
						<td>
							<input name="sherpa_business_zip" type="text" value="<?=get_option('sherpa_business_zip')?>" class="regular-text" placeholder="Example:  79936">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_telephone_number">Phone Number</label>
						</th>
						<td>
							<input name="sherpa_telephone_number" type="text" value="<?=get_option('sherpa_telephone_number')?>" class="regular-text" placeholder="Example:  915-590-7420">
						</td>
					</tr>
					<tr>
    					<td colspan="2">
        					<?php submit_button(); ?>
    					</td>
					</tr>
				</tbody>
			</table>
        			</td>

        			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3>Social Media URLs</h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_facebook_url">Facebook URL</label>
						</th>
						<td>
							<input name="sherpa_facebook_url" type="text" value="<?=get_option('sherpa_facebook_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_google_plus_url">Google Plus URL</label>
						</th>
						<td>
							<input name="sherpa_google_plus_url" type="text" value="<?=get_option('sherpa_google_plus_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_twitter_url">Twitter URL</label>
						</th>
						<td>
							<input name="sherpa_twitter_url" type="text" value="<?=get_option('sherpa_twitter_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_pinterest_url">Pinterest URL</label>
						</th>
						<td>
							<input name="sherpa_pinterest_url" type="text" value="<?=get_option('sherpa_pinterest_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_linkedin_url">LinkedIn URL</label>
						</th>
						<td>
							<input name="sherpa_linkedin_url" type="text" value="<?=get_option('sherpa_linkedin_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
    					<td colspan="2">
        					<?php submit_button(); ?>
    					</td>
					</tr>
				</tbody>
			</table>
        			</td>
    			</tr>



    			<tr>
        			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3>Fonts</h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_typekit">Typekit - Kit ID</label>
						</th>
						<td>
							<input name="sherpa_typekit" type="text" value="<?=get_option('sherpa_typekit')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_google_font_family">Google Fonts - Font Family</label><br />
							<small>Within the standard "Embed Font" code <code>&lt;link href="https://fonts.googleapis.com/css?family=XXXXXXXXXX" rel="stylesheet"&gt;</code></small>
						</th>
						<td>
							<input name="sherpa_google_font_family" type="text" value="<?=get_option('sherpa_google_font_family')?>" class="regular-text" placeholder="Example: Lato|Oswald:400,700">
						</td>
					</tr>
					<tr>
    					<td colspan="2">
        					<?php submit_button(); ?>
    					</td>
					</tr>
				</tbody>
			</table>
        			</td>



        			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3>Mobile Options</h3>
            			</th>
        			</tr>
    			</thead>
    			<tbody>
 					<tr>
						<th scope="row">
							<label for="sherpa_is_responsive">Is this site responsive?</label>
						</th>
						<td>
    						<select name="sherpa_is_responsive" id="sherpa_is_responsive">
        						<?php
            					    $responsive_options = array(
                					    'y' => 'Yup!',
                					    'n' => 'Nope!',
            					    );
            					    
            					    foreach($responsive_options as $option => $text) {
                					    if($option == get_option('sherpa_is_responsive')) {
                    					    $selected = " selected";
                					    } else {
                    					    $selected = NULL;
                					    }
                					    ?>
                					    <option value="<?=$option?>"<?=$selected?>><?=$text?></option>
                					    <?php
            					    }
            				    ?>
    						</select>
						</td>
					</tr>
 					<tr>
						<th scope="row">
							<label for="sherpa_has_separate_mobile">Does the site have a separate mobile site?</label>
						</th>
						<td>
    						<select name="sherpa_has_separate_mobile" id="sherpa_has_separate_mobile">
        						<?php
            					    $responsive_options = array(
                					    'y' => 'Yup!',
                					    'n' => 'Nope!',
            					    );
            					    
            					    foreach($responsive_options as $option => $text) {
                					    if($option == get_option('sherpa_has_separate_mobile')) {
                    					    $selected = " selected";
                					    } else {
                    					    $selected = NULL;
                					    }
                					    ?>
                					    <option value="<?=$option?>"<?=$selected?>><?=$text?></option>
                					    <?php
            					    }
            				    ?>
    						</select>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_mobile_redirect">What is the URL for the separate mobile site?</label>
						</th>
						<td>
							<input name="sherpa_mobile_redirect" type="text" value="<?=get_option('sherpa_mobile_redirect')?>" class="regular-text" placeholder="Example:  http://www.agims.com/m/">
						</td>
					</tr>
					<tr>
    					<td colspan="2">
        					<?php submit_button(); ?>
    					</td>
					</tr>
                </tbody>
			</table>
        			</td>
    			</tr>



    			<tr>
        			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3>Analytics</h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_google_analytics">Google Analytics - Kit ID</label><br />
							<small>This is the ID that usually looks like <code>UA-XXXXXXXX-X</code>
						</th>
						<td>
							<input name="sherpa_google_analytics" type="text" value="<?=get_option('sherpa_google_analytics')?>" class="regular-text" placeholder="Example:  UA-XXXXXXXX-X">
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
					<tr>
    					<td colspan="2">
        					<?php submit_button(); ?>
    					</td>
					</tr>
				</tbody>
			</table>
			</td>
			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3>Misc</h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_google_site_verification">Google Site Verification</label><br />
							<small>This usually looks like <code>&lt;meta name="google-site-verification" content="xxxxxxxxxxxxxxxxxxxx" /&gt;</code> (You just want the <strong>xxxx</strong> part)</small>
						</th>
						<td>
							<input name="sherpa_google_site_verification" type="text" value="<?=get_option('sherpa_google_site_verification')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_schema">Schema</label><br />
							<small>This is for the LD+JSON formatted Schema.  It will go in the head right before the <code>&lt;/head&gt;</code> tag.
						</th>
						<td>
							<textarea name="sherpa_schema" class="large-text" style="min-height: 15em;"><?=get_option('sherpa_schema')?></textarea>
						</td>
					</tr>
					<tr>
    					<td colspan="2">
        					<?php submit_button(); ?>
    					</td>
					</tr>
				</tbody>
			</table>
			</td>
			</tr>
			</table>
			
			
		</form>
	</div>
	<?php
}