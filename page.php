<?php
	// Standard Page Template
	// Nothing special here
	
	get_header();
	

	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();
			
			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = "<a href=\"$edit_url\" class=\"post-edit-link\">Edit Post</a>";
			} else {
				$edit_link = "";
			}
				
			
			echo "<article>";
			the_title("<h1><a href=\"$permalink\">", "</a>$edit_link</h1>");
			the_content();
			echo "</article>";
		}
		
	}

	get_footer();
