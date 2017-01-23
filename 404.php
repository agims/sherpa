<?php get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<h1><?=__('Oh no!','sherpa')?></h1>
				<h2><?=__("We looked really hard but we couldn't find it!",'sherpa')?></h2>
				
				<p><?=__("In the meanwhile, we've found this funny animal video for you to watch.  Enjoy!",'sherpa')?></p>
				
				<div class="embed-responsive embed-responsive-16by9">
    				<iframe src="https://www.youtube.com/embed/EQ1HKCYJM5U" allowfullscreen class="embed-responsive-item"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>