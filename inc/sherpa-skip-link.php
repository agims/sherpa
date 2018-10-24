<?php
/** Render "Skip to content" link conditionally */
function sherpa_skip_link() {

    // Default content area
    $target = '#content';

    /** Example: Different target on homepage
    if (is_front_page()) {
    $target = '#middle';
    } /**/

    /** Example: Different target on a specific subpage
    if (is_page('calendar')) {
    $target = '#evt-listing';
    } /**/

    /** Example: Different target on blog archives
    if (is_home() || is_post_type_archive('post')) {
    $target = '#main';
    } /**/

    echo '<a href="' . $target . '" id="sherpa-skip-link">Skip to content</a>';
}
