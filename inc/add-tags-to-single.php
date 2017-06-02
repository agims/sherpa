<?php

function add_tags_to_single($content)
{
    ob_start();
    
    if(is_single() && !empty($content)):
    ?>
    
<div class="single-tagged-as">
    <?php the_tags('Article tagged as: ', ', ',''); ?>
</div>
    
    <?php
        
    endif;
    return $content . ob_get_clean();
}

add_filter('the_content', 'add_tags_to_single', 90);