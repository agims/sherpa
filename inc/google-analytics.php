<?php
	
	//  Add in Open Web Analytics
	function sherpa_google_analytics() {
	
		$sherpa_google_analytics = get_option('sherpa_google_analytics');
		
		if(!empty($sherpa_google_analytics)) {
			?>		
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
				  ga('create', '<?=$sherpa_google_analytics?>', 'auto');
				  ga('send', 'pageview');
				
				</script>					
			<?php
		}
	}
	
	add_action('wp_head', 'sherpa_google_analytics');