<?php

define('SITEURL',		get_site_url()					        );
define('THEMEURL',		get_template_directory_uri()            );

define('FACEBOOK', 		get_option('sherpa_facebook_url')       );
define('TWITTER', 		get_option('sherpa_twitter_url')        );
define('GOOGLEPLUS', 	get_option('sherpa_google_plus_url')    );
define('PINTEREST', 	get_option('sherpa_pinterest_url')      );
define('LINKEDIN',		get_option('sherpa_linkedin_url')       );
define('YOUTUBE',       get_option('sherpa_youtube_url')        );

define('BUSADDRESS',    get_option('sherpa_business_address')   );
define('BUSCITY',       get_option('sherpa_business_city')      );
define('BUSSTATE',      get_option('sherpa_business_state')     );
define('BUSZIP',        get_option('sherpa_business_zip')       );
define('TELEPHONE',		get_option('sherpa_telephone_number')	);
define('MAP',           get_option('sherpa_map_link')           );
define('DIRECTIONS',    get_option('sherpa_map_directions_link'));

define('ISRESPONSIVE',  get_option('sherpa_is_responsive')      );
define('HASMOBILESITE', get_option('sherpa_has_separate_mobile'));
define('MOBILESITE',    get_option('sherpa_mobile_redirect')    );

define('COLBASE',		12);
define('FULLWIDTH',		'col-xs-' . COLBASE);