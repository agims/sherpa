<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>

<section id="home-main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('template-parts/content', 'page-home'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>