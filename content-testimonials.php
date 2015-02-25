<?php
	
							$temp_query = clone $wp_query;
							
							$testimonial_query_args = array(
								'post_type'			=> 'testimonial',
								'posts_per_page'	=> '-1'
							);
							
							$wp_query = new WP_Query($testimonial_query_args);
							
							$no_pic = get_template_directory_uri() . '/img/no-profile-pic.png';
							$star_rating = '5';
							
							if(have_posts()) {
								while(have_posts()) {
									the_post();
									
									$star_rating_url = get_template_directory_uri() . "/img/$star_rating-star-rating.png";
									
									if(has_post_thumbnail(get_the_ID())) {
										$profile = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'testimonial-profile-pic');
										$profile_url = $profile[0];
									} else {
										$profile_url = $no_pic;
									}
									
									
									echo "<blockquote itemprop=\"review\" itemscope itemtype=\"http://schema.org/Review\" class=\"testimonial\">\n";
									echo "\t<div itemprop=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">\n";
									echo "\t\t<meta itemprop=\"worstRating\" content = \"1\"/>\n";
									echo "\t\t<meta itemprop=\"BestRating\" content = \"5\"/>\n";
									echo "\t\t<meta itemprop=\"ratingValue\" content = \"5\"/>\n";
									echo "\t</div>\n";
									echo "\t<img src=\"$profile_url\" class=\"profile-pic img-circle\" />\n";
									echo "\t<img src=\"$star_rating_url\" class=\"star-rating\" />\n";
									echo "\t<div class=\"quote\">\n";
									$edit_link = (get_edit_post_link()) ? "<a href=\"" . get_edit_post_link() . "\" class=\"post-edit-link\">Edit Testimonial</a>" : '';
									echo "\t\t<h3 itemprop=\"author\">" . get_the_title() . "$edit_link</h3>";
									echo "<div itemprop=\"description\">\n";
									echo "\t\t";
									the_content();
									echo "\n";
									echo "\t\t</div>\n";
									echo "\t</div>\n";
									echo "</blockquote>\n";
								}
							}
							
							
							
							$wp_query = clone $temp_query;