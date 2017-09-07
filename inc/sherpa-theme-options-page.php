<?php

function sherpa_register_settings() {

    // General Business Info
	register_setting('default', 'sherpa_business_name');
	register_setting('default', 'sherpa_business_address');
	register_setting('default', 'sherpa_business_city');
	register_setting('default', 'sherpa_business_state');
	register_setting('default', 'sherpa_business_zip');
	register_setting('default', 'sherpa_telephone_number');

    // Map Stuff
	register_setting('default', 'sherpa_map_link');
	register_setting('default', 'sherpa_map_directions_link');

    // Social Media
	register_setting('default', 'sherpa_facebook_url');
	register_setting('default', 'sherpa_twitter_url');
	register_setting('default', 'sherpa_google_plus_url');
	register_setting('default', 'sherpa_pinterest_url');
	register_setting('default', 'sherpa_linkedin_url');
	
	// Fonts
	register_setting('default', 'sherpa_typekit');
	register_setting('default', 'sherpa_google_font_family');
	
    // General Theme Options
	register_setting('default', 'sherpa_automatic_h1');
	register_setting('default', 'sherpa_use_title');
	register_setting('default', 'sherpa_use_featured_in_post_filter');
	register_setting('default', 'sherpa_blog_interior_image_width');
	register_setting('default', 'sherpa_blog_interior_image_height');
	register_setting('default', 'sherpa_blog_interior_image_classes');
	register_setting('default', 'sherpa_is_dev_mode');

	// Analytics and SEO
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
    	.wrap {
        	box-sizing: border-box;
    	}
    	
    	.wrap * {
        	box-sizing: border-box;
    	}
    	
    	#layout {
        	width: 100%;
    	}
    	
    	#layout td {
        	vertical-align: top;
    	}
    	
        .form-table th[colspan="2"] {
            padding: 0;
        }
        
        .form-table h3 {
            background-color: #000;
            box-sizing: border-box;
            color: #EEB935;
            padding: 5px 10px;
            margin-bottom: 0;
            margin-top: 0;
            text-shadow: 1px 1px 0 #333;
        }
        
        .form-table td[colspan="2"] {
            padding-left: 0;
            padding-right: 0;
        }
        
        .form-table tr {
            background-color: #DDD;
        }
        
        .form-table tr:nth-of-type(2n) {
            background-color: #BBB;
        }
        
        .form-table tr > th,
        .form-table tr > td {
            padding: 5px 15px;
        }
        
        .form-table tr > th {
            vertical-align: top;
            width: 40%;
        }
        
        .form-table tr > td {
            vertical-align: middle;
            width: 60%;
        }
        
        .form-table label {
            display: inline-block;
            padding: 10px 0;
        }
        
        .form-table input[type="text"],
        .form-table select,
        .form-table textarea {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        
        .form-table td p.submit {
            margin-bottom: 4px;
            padding: 0;
            text-align: right;
        }
        
        .form-table input[type="submit"] {
            margin-right: 15px;
        }
        
    </style>
	
	
	<div class="wrap">
		<h2><?=__('Sherpa Theme Options','sherpa')?></h2>
		<form method="post" action="options.php">
			<?php settings_fields('default'); ?>
			<table id="layout">

    			<tr>
        			<td>


            <!-- General Business Info -->
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3><?=__('Business Address','sherpa')?></h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
    				<!-- Business Name -->
					<tr>
						<th scope="row">
							<label for="sherpa_business_name"><?=__("Business Name",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_business_name" type="text" value="<?=get_option('sherpa_business_name')?>" class="regular-text">
						</td>
					</tr>
					
					<!-- Business Name -->
					<tr>
						<th scope="row">
							<label for="sherpa_business_address"><?=__("Address",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_business_address" type="text" value="<?=get_option('sherpa_business_address')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>:  1370 Pullman Dr, Ste. G">
						</td>
					</tr>
					
					<!-- Business City -->
					<tr>
						<th scope="row">
							<label for="sherpa_business_city"><?=__("City",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_business_city" type="text" value="<?=get_option('sherpa_business_city')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>:  El Paso">
						</td>
					</tr>
					
					<!-- Business State -->
					<tr>
						<th scope="row">
							<label for="sherpa_business_state"><?=__("State",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_business_state" type="text" value="<?=get_option('sherpa_business_state')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>:  TX">
						</td>
					</tr>
					
					<!-- Business Zip -->
					<tr>
						<th scope="row">
							<label for="sherpa_business_zip"><?=__("Zip",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_business_zip" type="text" value="<?=get_option('sherpa_business_zip')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>:  79936">
						</td>
					</tr>
					
					<!-- Business Phone -->
					<tr>
						<th scope="row">
							<label for="sherpa_telephone_number"><?=__("Phone Number",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_telephone_number" type="text" value="<?=get_option('sherpa_telephone_number')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>:  915-590-7420">
						</td>
					</tr>
					
					<!-- Business Map Link -->
					<tr>
						<th scope="row">
							<label for="sherpa_map_link"><?=__("Map Link",'sherpa')?></label><br />
							<small><?=__("This is for the Google Map link",'sherpa')?>.
						</th>
						<td>
							<textarea name="sherpa_map_link" class="large-text" style="min-height: 15em;"><?=get_option('sherpa_map_link')?></textarea>
						</td>
					</tr>
					
					<!-- Business Directions Link -->
					<tr>
						<th scope="row">
							<label for="sherpa_map_directions_link"><?=__("Directions Link",'sherpa')?></label><br />
							<small><?=__("This is for the Google Map directions link",'sherpa')?>.
						</th>
						<td>
							<textarea name="sherpa_map_directions_link" class="large-text" style="min-height: 15em;"><?=get_option('sherpa_map_directions_link')?></textarea>
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
                            <h3><?=__("Social Media URLs",'sherpa')?></h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_facebook_url"><?=__("Facebook URL",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_facebook_url" type="text" value="<?=get_option('sherpa_facebook_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_twitter_url"><?=__("Twitter URL",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_twitter_url" type="text" value="<?=get_option('sherpa_twitter_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_google_plus_url"><?=__("Google Plus URL",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_google_plus_url" type="text" value="<?=get_option('sherpa_google_plus_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_pinterest_url"><?=__("Pinterest URL",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_pinterest_url" type="text" value="<?=get_option('sherpa_pinterest_url')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_linkedin_url"><?=__("LinkedIn URL",'sherpa')?></label>
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
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3><?=__("Fonts",'sherpa')?></h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_typekit"><?=__("Typekit",'sherpa')?> - <?=__("Kit ID",'sherpa')?></label>
						</th>
						<td>
							<input name="sherpa_typekit" type="text" value="<?=get_option('sherpa_typekit')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_google_font_family"><?=__("Google Fonts",'sherpa')?> - <?=__("Font Family",'sherpa')?></label><br />
							<small><?=__('Within the standard "Embed Font" code','sherpa')?> <code>&lt;link href="https://fonts.googleapis.com/css?family=XXXXXXXXXX" rel="stylesheet"&gt;</code></small>
						</th>
						<td>
							<input name="sherpa_google_font_family" type="text" value="<?=get_option('sherpa_google_font_family')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>: Lato|Oswald:400,700">
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
                            <h3><?=__("Analytics and SEO",'sherpa')?></h3>
            			</th>
        			</tr>
    			</thead>
				<tbody>
					<tr>
						<th scope="row">
							<label for="sherpa_google_analytics"><?=__("Google Analytics",'sherpa')?> - <?=__("Kit ID",'sherpa')?></label><br />
							<small><?=__("This is the ID that usually looks like",'sherpa')?> <code>UA-XXXXXXXX-X</code>
						</th>
						<td>
							<input name="sherpa_google_analytics" type="text" value="<?=get_option('sherpa_google_analytics')?>" class="regular-text" placeholder="<?=__("Example",'sherpa')?>:  UA-XXXXXXXX-X">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_stat_counter_project"><?=__("Stat Counter",'sherpa')?> - <?=__("Project",'sherpa')?></label><br />
							<small><?=__("Within the Stat Counter code, this is the part that says",'sherpa')?> <code>var sc_project=XXXXXXXX;</code></small>
						</th>
						<td>
							<input name="sherpa_stat_counter_project" type="text" value="<?=get_option('sherpa_stat_counter_project')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_stat_counter_security"><?=__("Stat Counter",'sherpa')?> - <?=__("Security",'sherpa')?></label><br />
							<small><?=__("Within the Stat Counter code, this is the part that says",'sherpa')?> <code>var sc_security="XXXXXXXX";</code></small>
						</th>
						<td>
							<input name="sherpa_stat_counter_security" type="text" value="<?=get_option('sherpa_stat_counter_security')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_google_site_verification"><?=__("Google Site Verification",'sherpa')?></label><br />
							<small><?=__("This usually looks like",'sherpa')?> <code>&lt;meta name="google-site-verification" content="xxxxxxxxxxxxxxxxxxxx" /&gt;</code> (<?=__("You just want the",'sherpa')?> <strong>xxxx</strong> <?=__("part",'sherpa')?>)</small>
						</th>
						<td>
							<input name="sherpa_google_site_verification" type="text" value="<?=get_option('sherpa_google_site_verification')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_schema"><?=__("Schema",'sherpa')?></label><br />
							<small><?=__("This is for the LD+JSON formatted Schema.  It will go in the head right before the",'sherpa')?> <code>&lt;/head&gt;</code> <?=_x("tag",'referring to an HTML tag','sherpa')?>.
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



        			<td>
			<table class="form-table">
    			<thead>
        			<tr>
            			<th colspan="2">
                            <h3><?=__("Misc Options",'sherpa')?></h3>
            			</th>
        			</tr>
    			</thead>
    			<tbody>
 					<tr>
						<th scope="row">
							<label for="sherpa_automatic_h1"><?=__("Use the title for the H1 on pages?",'sherpa')?></label>
						</th>
						<td>
    						<select name="sherpa_automatic_h1" id="sherpa_automatic_h1">
        						<?php
            					    $options = array(
                					    'y' => __('Yup!','sherpa'),
                					    'n' => __('Nope!','sherpa'),
            					    );
            					    
            					    foreach($options as $option => $text) {
                					    if($option == get_option('sherpa_automatic_h1')) {
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
							<label for="sherpa_use_title"><?=__("Use the title tag?",'sherpa')?></label>
						</th>
						<td>
    						<select name="sherpa_use_title" id="sherpa_use_title">
        						<?php
            					    $options = array(
                					    'y' => __('Yup!','sherpa'),
                					    'n' => __('Nope!','sherpa'),
            					    );
            					    
            					    foreach($options as $option => $text) {
                					    if($option == get_option('sherpa_use_title')) {
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
							<label for="sherpa_use_featured_in_post_filter"><?=__("Use Featured Image in Posts?",'sherpa')?></label>
						</th>
						<td>
    						<select name="sherpa_use_featured_in_post_filter" id="sherpa_use_featured_in_post_filter">
        						<?php
            					    $use_featured_image = array(
                					    'y' => __('Yup!','sherpa'),
                					    'n' => __('Nope!','sherpa'),
            					    );
            					    
            					    foreach($use_featured_image as $option => $text) {
                					    if($option == get_option('sherpa_use_featured_in_post_filter')) {
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
							<label for="sherpa_blog_interior_image_width"><?=__("Blog Interior Image Width",'sherpa')?></label><br />
							<small><?=__('How many pixels wide?','sherpa')?></small>
						</th>
						<td>
							<input name="sherpa_blog_interior_image_width" type="text" value="<?=get_option('sherpa_blog_interior_image_width')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_blog_interior_image_height"><?=__("Blog Interior Image Height",'sherpa')?></label><br />
							<small><?=__('How many pixels tall?','sherpa')?></small>
						</th>
						<td>
							<input name="sherpa_blog_interior_image_height" type="text" value="<?=get_option('sherpa_blog_interior_image_height')?>" class="regular-text">
						</td>
					</tr>
					<tr>
						<th scope="row">
							<label for="sherpa_blog_interior_image_classes"><?=__("Blog Interior Image - Additional Classes",'sherpa')?></label><br />
							<small><?=__('If the image is being included in posts, what additional classes do you want on the image?','sherpa')?></small>
						</th>
						<td>
							<input name="sherpa_blog_interior_image_classes" type="text" value="<?=get_option('sherpa_blog_interior_image_classes')?>" class="regular-text" placeholder="<?=__('e.g. alignleft', 'sherpa')?>">
						</td>
					</tr>
 					<tr>
						<th scope="row">
							<label for="sherpa_is_dev_mode"><?=__("Is the site in development?",'sherpa')?></label>
						</th>
						<td>
    						<select name="sherpa_is_dev_mode" id="sherpa_is_dev_mode">
        						<?php
            					    $options = array(
                					    'y' => __('Yup!','sherpa'),
                					    'n' => __('Nope!','sherpa'),
            					    );
            					    
            					    foreach($options as $option => $text) {
                					    if($option == get_option('sherpa_is_dev_mode')) {
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