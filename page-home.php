<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>

<section id="home-slideshow">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php put_rev_slider(TRUE); ?>
			</div>
		</div>
	</div>
</section>

<section id="home-main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('content', 'page-home'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>