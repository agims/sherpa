<?php

function add_to_any($content)
{
    ob_start();
    
    if(((is_page() && !is_front_page()) || is_single()) && !empty($content)):
    ?>
        <br />
        <h4><?=__('Like this content?  Share it here!', 'sherpa')?></h4>
            <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_google_plus"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
        <br />
    <?php
    endif;
    
    $content = $content . ob_get_clean();
    
    return $content;
}

add_filter('the_content', 'add_to_any', 101);