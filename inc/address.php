<?php

/*
  These are functions for creating addresses based on the data that the user enters into the theme options page.
  
  The main difference between the two types are either a traditional address or an inline address.
  
  Following the WordPress style, we have two versions of each, a "get" which simply returns the value and a version without "get" that echoes it out.
  
  
  We've also created a special utility for creating phone links
*/

function get_the_address($include_phone = TRUE) {
    ob_start();
    ?>
    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <?=schema('streetAddress',BUSADDRESS)?><br />
        <?=schema('addressLocality',BUSCITY)?>, <?=schema('addressRegion',BUSSTATE)?> <?=schema('postalCode',BUSZIP)?>
        <?php if($include_phone == TRUE): ?><br />
        <?=get_the_phone_link()?>
        <?php endif; ?>
    </address>
    <?php
    return ob_get_clean();
}

function the_address($include_phone = TRUE) {
    echo get_the_address($include_phone);
}




function get_the_address_inline($include_phone = TRUE, $sep = '|') {
    ob_start();
    ?>
    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <?=schema('streetAddress',BUSADDRESS)?> <?=$sep?> <?=schema('addressLocality',BUSCITY)?>, <?=schema('addressRegion',BUSSTATE)?> <?=schema('postalCode',BUSZIP)?><?php if($include_phone == TRUE): ?> <?=$sep?> <?=get_the_phone_link()?><?php endif; ?>
    </address>
    <?php
    return ob_get_clean();
}

function the_address_inline($include_phone = TRUE, $sep = '|') {
    echo get_the_address_inline($include_phone);
}





function get_the_phone_link($phone = TELEPHONE) {
    return '<a href="tel:' . $phone . '">' . schema('telephone',$phone) .  '</a>';
}

function the_phone_link($phone = TELEPHONE) {
    echo get_the_phone_link($phone);
}