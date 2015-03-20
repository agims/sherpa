<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- If non-responsive, comment out the next line -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
            <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <section id="header">
	        <div class="container">
		        <div class="row">
			        <div class="col-xs-12">
				        Header
			        </div>
		        </div>
		        <div class="row">
			        <div class="col-xs-12">
				        <?php
					        // If non-responsive, use the second option here
					        get_template_part('nav', 'responsive');
					        // get_template_part('nav', 'non-responsive');
				        ?>
			        </div>
		        </div>
	        </div>
        </section>
