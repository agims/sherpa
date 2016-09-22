<?php

/*
  This is what creates our Home and Blog pages and then sets the home page to "Home" and the posts page to "Blog"
  Based on code from http://wpsnipp.com/index.php/functions-php/create-page-on-theme-activation/
*/

if (isset($_GET['activated']) && is_admin()){
    sherpa_create_page('Home', '', 'page-home.php');
    sherpa_create_page('Blog', '', '');
    
    $home = get_page_by_title( 'Home');
    $blog = get_page_by_title( 'Blog');
    
    update_option( 'page_on_front', $home->ID);
    update_option( 'page_for_posts', $blog->ID);
    update_option('show_on_front','page');
}

function sherpa_create_page($new_page_title, $new_page_content, $new_page_template) {
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
            'post_type' => 'page',
            'post_title' => $new_page_title,
            'post_content' => $new_page_content,
            'post_status' => 'publish',
            'post_author' => 1,
    );
    if(!isset($page_check->ID)){
            $new_page_id = wp_insert_post($new_page);
            if(!empty($new_page_template)){
                    update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
            }
    }
}