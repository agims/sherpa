// @codekit-prepend "plugins.js";


(function( $ ) {
	$(document).ready(function() {
	
		$('.external').each(function() {
			$(this).attr('target','_blank');
		});

		$('a.gallery').colorbox({
    		rel: 'gal',
    		maxHeight: '90%',
    		maxWidth: '90%'
    		
		});
			
	});	
})(jQuery);		