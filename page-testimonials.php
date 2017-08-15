<?php
	/*
		Template Name: Testimonials	
	*/
	
	get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
    			<article>
        			<h1><?=__('Testimonials')?></h1>
    				<?php get_template_part('template-parts/content', 'testimonials'); ?>
    			</article>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
