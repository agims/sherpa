<?php
	
function sherpa_google_site_verification() {
	$sherpa_google_site_verification = get_option('sherpa_google_site_verification');

	if(!empty($sherpa_google_site_verification)) {
		?>
		<meta name="google-site-verification" content="<?=$sherpa_google_site_verification?>" />
		<?php
	}
}

add_action('wp_head', 'sherpa_google_site_verification');