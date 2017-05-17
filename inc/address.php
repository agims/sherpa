<?php

/*
  These are functions for creating addresses based on the data that the user enters into the theme options page.
  
  The main difference between the two types are either a traditional address or an inline address.
  
  Following the WordPress style, we have two versions of each, a "get" which simply returns the value and a version without "get" that echoes it out.
  
  
  We've also created a special utility for creating phone links
*/

function get_the_address($include_phone = TRUE, $use_schema = FALSE) {
    ob_start();
    
    if($use_schema == TRUE) {

    ?>
    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <?=schema('streetAddress',BUSADDRESS)?><br />
        <?=schema('addressLocality',BUSCITY)?>, <?=schema('addressRegion',BUSSTATE)?> <?=schema('postalCode',BUSZIP)?>
        <?php if($include_phone == TRUE): ?><br />
        <?=get_the_phone_link(TELEPHONE, TRUE)?>
        <?php endif; ?>
    </address>
    <?php

    } else {

    ?>
    <address>
        <?=BUSADDRESS?><br />
        <?=BUSCITY?>, <?=BUSSTATE?> <?=BUSZIP?>
        <?php if($include_phone == TRUE): ?><br />
        <?=get_the_phone_link(TELEPHONE, FALSE)?>
        <?php endif; ?>
    </address>
    <?php    

    }
    
    $to_return = ob_get_clean();
    return $to_return;
}

function the_address($include_phone = TRUE) {
    echo get_the_address($include_phone);
}




function get_the_address_inline($include_phone = TRUE, $sep = '|', $use_schema = FALSE) {
    ob_start();
    
    if($use_schema == TRUE) {

    ?>
    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <?=schema('streetAddress',BUSADDRESS)?> <?=$sep?> <?=schema('addressLocality',BUSCITY)?>, <?=schema('addressRegion',BUSSTATE)?> <?=schema('postalCode',BUSZIP)?><?php if($include_phone == TRUE): ?> <?=$sep?> <?=get_the_phone_link(TELEPHONE, TRUE)?><?php endif; ?>
    </address>
    <?php
    } else {
    ?>
    <address>
        <?=BUSADDRESS?> <?=$sep?> <?=BUSCITY?>, <?=BUSSTATE?> <?=BUSZIP?><?php if($include_phone == TRUE): ?> <?=$sep?> <?=get_the_phone_link(TELEPHONE, FALSE)?><?php endif; ?>
    </address>
    <?php 
    }
    $to_return = ob_get_clean();
    return $to_return;
}

function the_address_inline($include_phone = TRUE, $sep = '|') {
    echo get_the_address_inline($include_phone);
}





function get_the_phone_link($phone = TELEPHONE, $use_schema = FALSE) {
    if($use_schema == TRUE) {
        $phone_text = schema('telephone',$phone);
    } else {
        $phone_text = $phone;
    }
    return '<a href="tel:' . $phone . '">' . $phone_text .  '</a>';
}

function the_phone_link($phone = TELEPHONE, $use_schema = FALSE) {
    echo get_the_phone_link($phone, $use_schema);
}





function get_the_phone_btn($btnclasses = "btn-primary", $text = TELEPHONE, $phone = TELEPHONE, $use_schema = FALSE) {
    if($use_schema == TRUE) {
        $phone_text = schema('telephone',$phone);
    } else {
        $phone_text = $text;
    }
    return '<a href="tel:' . $phone . '" class="btn ' . $btnclasses . '">' . $phone_text .  '</a>';
}

function the_phone_btn($btnclasses = "btn-primary", $text = TELEPHONE, $phone = TELEPHONE, $use_schema = FALSE) {
    echo get_the_phone_btn($btnclasses, $text, $phone, $use_schema);
}
