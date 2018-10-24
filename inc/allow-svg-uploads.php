<?php

// Allow SVG Uploads
function sherpa_cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'sherpa_cc_mime_types');
