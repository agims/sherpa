<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<h1><?=__("Oh no!  It's a 404!",'sherpa')?></h1>
				<h2><?=__("We looked really hard but we couldn't find it!",'sherpa')?></h2>
				
				<h4><?=__("In the meanwhile, let's see if you were looking for one of these pages",'sherpa')?>:</h4>
				<ul>
                <?php
                    // Make sure to add in the IDs of any pages you want to exclude such as Thank You pages
                    
                    $args = array(
                        'title_li' => '',
                        'exclude' => ''
                    );
                    
                    wp_list_pages($args);  
                ?>
				</ul>				

			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>