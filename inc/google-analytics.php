<?php
	
	//  Add in Open Web Analytics
	function sherpa_google_analytics() {
	
		$sherpa_google_analytics = get_option('sherpa_google_analytics');
		
		if(!empty($sherpa_google_analytics)) {
			?>
                <!-- Global Site Tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$sherpa_google_analytics?>"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments)};
                  gtag('js', new Date());
                
                  gtag('config', '<?=$sherpa_google_analytics?>');
                </script>
			<?php
		}
	}
	
	add_action('wp_head', 'sherpa_google_analytics');