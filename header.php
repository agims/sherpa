<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <?php
            if(HASMOBILESITE == 'y' && MOBILESITE != NULL && is_front_page() && $_GET['desktop'] != 'true') {
                ?>
        <script src="<?=THEMEURL?>/js/vendor/mobile-detect.min.js"></script>
        <script>
            var md = new MobileDetect(window.navigator.userAgent);
            if(md.phone()) {
                window.location = '<?=MOBILESITE?>';
            }
        </script>
                <?php
            }
        ?>
        
        
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php
            if(ISRESPONSIVE == 'y') {
                ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <?php
            } else {
                ?>
        
        <meta name="viewport" content="width=1100">
                <?php
            }
        ?>

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
        
        <?php if(!empty(get_option( 'sherpa_schema' ))): ?>

<?=get_option('sherpa_schema')?>
            
        <?php endif; ?>

    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
            <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <section id="header">
	        <div class="container">
		        <div class="row">
			        <div class="<?=FULLWIDTH?>">
				        <?=__('Header','sherpa')?>
			        </div>
		        </div>
		        <div class="row">
			        <div class="<?=FULLWIDTH?>">
				        <?php
							// Call either the responsive_bs_menu() or the non_responsive_bs_menu() here
							//  If you are using a menu besides 'primary', use this as the first argument in the function.
							//  You can control whether the menu is right- or left-aligned with $menu_side.  It will be left-aligned unless you set
							//      $menu_side = 'right'
							//  You can also set up what the text is on the left-hand side of the mobile menu with $brand.
							//  Lastly, the menu now returns rather than echoing out, so make sure to echo out the menu.
                            //
							//  responsive_bs_menu($primary_menu_location, $menu_side, $brand);
							
							// If you don't send a second argument, it will default to no menu on the right side.

                            if(ISRESPONSIVE == 'y') {
                                echo responsive_bs_menu('primary');
                            } else {
                                echo non_responsive_bs_menu('primary');
                            }
							
				        ?>
			        </div>
		        </div>
	        </div>
        </section>
