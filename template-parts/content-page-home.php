<?php

	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			echo "<article class='rte'>";
			the_content();
			echo "</article>";
		}
		
	}
