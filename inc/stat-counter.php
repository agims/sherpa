<?php
	
	//  Add in Open Web Analytics
	function sherpa_stat_counter() {
	
		$sherpa_stat_counter_project = get_option('sherpa_stat_counter_project');
		$sherpa_stat_counter_security = get_option('sherpa_stat_counter_security');
		
		if(!empty($sherpa_stat_counter_project) && !empty($sherpa_stat_counter_security)) {
			?>
			
			<!-- Start of StatCounter Code for Default Guide -->
			<script type="text/javascript">
				var sc_project=<?=$sherpa_stat_counter_project?>; 
				var sc_invisible=1; 
				var sc_security="<?=$sherpa_stat_counter_security?>"; 
				var scJsHost = (("https:" == document.location.protocol) ?
				"https://secure." : "http://www.");
				document.write("<sc"+"ript type='text/javascript' src='" +
				scJsHost+
				"statcounter.com/counter/counter.js'></"+"script>");
			</script>
			<noscript>
				<div class="statcounter">
					<a title="free web stats" href="http://statcounter.com/" target="_blank">
						<img class="statcounter" src="http://c.statcounter.com/<?=$sherpa_stat_counter_project?>/0/<?=$sherpa_stat_counter_security?>/1/" alt="free web stats">
					</a>
				</div>
			</noscript>
			<!-- End of StatCounter Code for Default Guide -->

			
			<?php
		}
	}
	
	add_action('wp_footer', 'sherpa_stat_counter');