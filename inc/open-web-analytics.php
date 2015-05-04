<?php
	
	//  Add in Open Web Analytics
	function sherpa_owa() {
	
		$sherpa_owa = get_option('sherpa_owa');
		
		if(!empty($sherpa_owa)) {
			?>		
			<!-- Start Open Web Analytics Tracker -->
			<script type="text/javascript">
				//<![CDATA[
				var owa_baseUrl = 'http://chile.agiclients.com/';
				var owa_cmds = owa_cmds || [];
				owa_cmds.push(['setSiteId', '<?=$sherpa_owa?>']);
				owa_cmds.push(['trackPageView']);
				owa_cmds.push(['trackClicks']);
				owa_cmds.push(['trackDomStream']);
				
				(function() {
					var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
					owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
					_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
					var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
				}());
				//]]>
			</script>
			<!-- End Open Web Analytics Code -->
					
			<?php
		}
	}
	
	add_action('wp_head', 'sherpa_owa');