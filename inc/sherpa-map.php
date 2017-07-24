<?php

/*
    To Do:
        Create theme option for key
        Create theme options for lat and lng for center of map
        Create theme options for marker lat and lng
        Create theme option for zoom
        Create theme options for map styles
            Make link to Snazzy Maps for ease of creation of map styles
        Create theme option for color of marker
        Create theme option for either using Directions or Address
        
        In Sherpa Theme Options Page, remove responsive question + mobile site stuff out,
            rename "Mobile Options" to something else, and then move it into the same cell as
            Fonts.  Create a maps section where "Mobile Options" was.
        
    Thoughts:
        Could lat and lng for marker and map center be pre-populated based on the address, using address?
        
        Should Map Link and Directions Link be moved over to the new "maps" section?
        
        Can we make it where it has a variable number of markers?
*/

function get_sherpa_map()
{
    
}

function sherpa_map()
{
    echo get_sherpa_map();
    return true;
}