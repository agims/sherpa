<?php
	define('SITEURL',		get_site_url()					);
	define('THEMEURL',		get_template_directory_uri()	);
	define('FACEBOOK', 		get_option('facebook_url')		);
	define('TWITTER', 		get_option('twitter_url')		);
	define('GOOGLEPLUS', 	get_option('google_plus_url')	);
	define('PINTEREST', 	get_option('pinterest_url')		);
	define('LINKEDIN',		get_option('linkedin_url')		);
	define('YOUTUBE',       get_option('youtube_url')       );
    define('BUSADDRESS',    get_option('business_address')  );
    define('BUSCITY',       get_option('business_city')     );
    define('BUSSTATE',      get_option('business_state')    );
    define('BUSZIP',        get_option('business_zip')      );
	define('TELEPHONE',		get_option('telephone_number')	);
	define('SLIDER', 		get_option('home_page_slider')	);
	
	define('COLBASE',		12);
	define('FULLWIDTH',		'col-xs-' . COLBASE);