<?php
	
	$date_format = get_option('date_format');
	
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();
			
			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">" . __('Edit','sherpa') . "</a></small>";
			} else {
				$edit_link = "";
			}
				
			
			echo "<article>";
			the_title("<h1>", "$edit_link</h1>");
			echo '<div class="article-meta"><div class="row"><div class="col-sm-4 text-sm-left text-xs-center">';
			the_date($date_format, '<div class="post-date">','</div>');
			echo '</div><div class="col-sm-8 text-sm-right hidden-xs">';
			the_category(', ');
			echo '</div></div></div>';
			echo '<div class="rte">';
			the_content();
			echo '</div>';
			
			echo '<div class="row"><div class="col-sm-6 text-sm-left text-xs-center">';
			previous_post_link();
			echo '</div><div class="col-sm-6 text-sm-right text-xs-center">';
			next_post_link();
			echo '</div></div>';
			
			echo "</article>";
		}
		
	}
