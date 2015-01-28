<?php

function agi_excerpt() {
	$excerpt = get_the_excerpt();
	$permalink = get_permalink();
	echo $excerpt;
	echo '<a href="' . $permalink . '" class="btn btn-read-more pull-right">' . _e('Read More', 'sherpa') . '</a>' . "\n";
	echo '<div class="clear"></div>';
	
}
?>