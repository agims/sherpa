<?php

function get_stars_for_rating($rating = 5)
{
    ob_start();
    
    $y = 1;
    
    while($y <= 5)
    {
        if($y <= $rating)
        {
            echo '<i class="fa fa-star"></i>';
        }
        else
        {
            echo '<i class="fa fa-star-o"></i>';
        }
        $y++;
    }
    
    return ob_get_clean();

}



function stars_for_rating($rating = 5)
{
    echo get_stars_for_rating($rating);
}