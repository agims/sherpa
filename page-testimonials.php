<?php
	/*
		Template Name: Testimonials	
	*/
	
	get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('content', 'page'); ?>
				<?php get_template_part('content', 'testimonials'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
