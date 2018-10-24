<?php
/** Set a max width and height for uploaded images. Prevents users from uploading full-resolution camera images.
 *  Width and height are set in functions.php via defines (1280x1024 is the default).
 *  Set these to 'false' to disable the resizing entirely.
 *  On the roadmap for the future is to offload the image resizing to a service like TinyJPG. */
function sherpa_upload_resize($array){
    if ($array['type'] == 'image/jpeg' OR $array['type'] == 'image/gif' OR $array['type'] == 'image/png') {
        require_once('class.resize.php');
        $maxwidth = SHERPA_IMAGE_MAX_WIDTH;
        $maxheight = SHERPA_IMAGE_MAX_HEIGHT;
        $imagesize = getimagesize($array['file']); // $imagesize[0] = width, $imagesize[1] = height

        if ($maxwidth == 0 OR $maxheight == 0) {
            if ($maxwidth == 0) {
                $objResize = new RVJ_ImageResize($array['file'], $array['file'], 'H', $maxheight);
            }
            if ($maxheight == 0) {
                $objResize = new RVJ_ImageResize($array['file'], $array['file'], 'W', $maxwidth);
            }
        } else {
            if (($imagesize[0] >= $imagesize[1]) AND ($maxwidth * $imagesize[1] / $imagesize[0] <= $maxheight))  {
                $objResize = new RVJ_ImageResize($array['file'], $array['file'], 'W', $maxwidth);
            } else {
                $objResize = new RVJ_ImageResize($array['file'], $array['file'], 'H', $maxheight);
            }
        }
    }
    return $array;
}
if (SHERPA_IMAGE_MAX_WIDTH && SHERPA_IMAGE_MAX_HEIGHT) {
    add_action('wp_handle_upload', 'sherpa_upload_resize');
}
