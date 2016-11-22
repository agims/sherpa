<?php

/*
  This is for creating things with schema properties.  Right now it's very simple but the plan is for much more complicated ones as well.  
*/

function schema($property,$value) {

    return '<span itemprop="' . $property . '">' . $value . '</span>';

}

