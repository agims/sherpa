<?php
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();
			
			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">" . __('Edit Post','sherpa') . "</a></small>";
			} else {
				$edit_link = "";
			}
				
			
			echo "<article>";
			the_title("<h3><a href=\"$permalink\">", "</a>$edit_link</h3>");
			the_excerpt();
			echo "</article>";
		}
		
	}
