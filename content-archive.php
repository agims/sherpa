<?php
	if(have_posts()) {
    	?>
    	<div class="row">
        	<div class="flex-wrap">
            	
    	<?php
		while(have_posts()) {
			the_post();
			
			$permalink = get_permalink();
			
			if(current_user_can('edit_pages')) {
				$edit_url = get_edit_post_link();
				$edit_link = " <small><a href=\"$edit_url\" class=\"post-edit-link\">" . __('Edit Post','sherpa') . "</a></small>";
			} else {
				$edit_link = "";
			}

			if(is_home()):
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'blog-featured-image', true);
                $thumb_url = $thumb_url_array[0];

                if(empty($thumb_url) || $thumb_url == SITEURL . '/wp-includes/images/media/default.png')  {
                    $thumb_url = 'http://placehold.it/737x414/';
                }

			endif;
			
			echo "<article>";
			if(!empty($thumb_url)):
			?>
			<a href="<?=$permalink?>">
			<img src="<?=$thumb_url?>" alt="<?=get_the_title()?>" class="blog-pic" />
			</a>
			
			<?php
			endif;
			the_title("<h3><a href=\"$permalink\">", "</a>$edit_link</h3>");
			sherpa_excerpt();
			echo "</article>";
		}
		?>
		
        	</div>
    	</div>
    	<div class="row">
        	<div class="col-sm-6 text-sm-left text-xs-center">
            	<?php previous_posts_link( 'Newer posts' ); ?>
        	</div>
        	<div class="col-sm-6 text-sm-right text-xs-center">
            	<?php next_posts_link( 'Older posts' ); ?>
        	</div>
    	</div>
		<?php
	}
