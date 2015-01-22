// @codekit-prepend "plugins.js";


(function( $ ) {
	$(document).ready(function() {
	
		// SVG Swap
		$('.svg .svgimg').each(function() {
			svgImgSrc = $(this).data('svg-src');
			$(this).attr('src', svgImgSrc);
		});
		
	});	
})(jQuery);		