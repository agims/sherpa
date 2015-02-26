<?php
	
	$date_format = get_option('date_format');
	
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();
			
			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">Edit</a></small>";
			} else {
				$edit_link = "";
			}
				
			
			echo "<article>";
			the_title("<h1><a href=\"$permalink\">", "</a>$edit_link</h1>");
			the_date($date_format, '<div class="post-date">','</div>');
			the_content();
			
			echo "</article>";
		}
		
	}
