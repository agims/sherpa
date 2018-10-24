<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php if(get_option('sherpa_use_title') == 'y'): ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php endif; ?>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
        
        <?php if(!empty(get_option( 'sherpa_schema' ))): ?>

<?=get_option('sherpa_schema')?>
            
        <?php endif; ?>

    </head>
    <body <?php body_class(); ?>>
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
							//  You can control whether the menu is right- or left-aligned with $menu_side.
                            //  It will be left-aligned unless you set
							//      $menu_side = 'right'
							//  You can also set up what the text is on the left-hand side of the mobile menu with $brand.
							//  Lastly, the menu now returns rather than echoing out, so make sure to echo out the menu.
                            //
							//  responsive_bs_menu($primary_menu_location, $menu_side, $brand);
							
							// If you don't send a second argument, it will default to no menu on the right side.

                            echo responsive_bs_menu('primary');
				        ?>
			        </div>
		        </div>
	        </div>
        </section>
