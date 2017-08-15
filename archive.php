<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
    			<?php the_archive_title('<h1>','</h1>'); ?>
				<?php get_template_part('template-parts/content', 'archive'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>