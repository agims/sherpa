<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
    			<h1>Blog</h1>
				<?php get_template_part('content', 'archive'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>