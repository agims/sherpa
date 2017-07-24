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

        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
			
	});	
})(jQuery);		