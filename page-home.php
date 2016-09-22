<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>

<section id="home-slideshow">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<img src="http://placehold.it/1140x385/0640aa/FFFFFF/&text=Slider+to+go+here" />
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