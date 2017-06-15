<?php

if(get_option( 'sherpa_use_featured_in_post_filter') == 'y'):

    function add_image_to_post($content)
    {
        if(is_single()):
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'blog_interior_image', true);
            $thumb_url = $thumb_url_array[0];
        
            if(empty($thumb_url) || $thumb_url == SITEURL . '/wp-includes/images/media/default.png')  {
                $thumb_url = null;
            }
        
        endif;
        
        $classes = get_option('sherpa_blog_interior_image_classes');
        if(!empty($classes))
        {
            $classes = ' class="' . $classes . '"';
        }
        else
        {
            $classes = NULL;
        }
    
        if(!empty($thumb_url)):
            $img = "\n\n" . '<img src="' . $thumb_url . '" alt="' . get_the_title() . '"' . $classes .' />' . "<br /><br />";
        else:
            $img = "\n";
        endif;
    
        $content = preg_replace("/\n/", $img, $content, 1);
    
        return $content;
    }
    
    add_filter( 'the_content', 'add_image_to_post', 100 );

endif;