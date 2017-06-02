<?php

if ( ! function_exists('sherpa_video_embed_shortcode') ) {
    function sherpa_video_embed_shortcode($atts, $content = NULL) {
        $a = shortcode_atts(array('aspect' => '16by9'), $atts);
        
        extract($a);
        
        ob_start();
        ?>
<div class="embed-responsive embed-responsive-<?=$aspect?>"><iframe class="embed-responsive-item" src="<?=$content?>"></iframe></div>
        <?php
        return ob_get_clean();
    }
    add_shortcode( 'sherpavembed', 'sherpa_video_embed_shortcode' );
}