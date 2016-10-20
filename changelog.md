# Changelog
## Version 3.0.1 - Nanga Parbat
* Fix Typekit issue
* Add size class to ul for Social Media

## Version 3.0 *Big Update!*
* Add mobile-detect in case we need a JS mobile redirect
* Add Responsive option
* Add Javascript additions in case JS hasn't been minified and combined
* Update video for the 404 page
* Remove 'rincon' references
* Prefix all options with 'sherpa_' to reduce the likelihood of conflicts
* Create Testimonials Page
* Set more options upon activation 
  * timezone
  * time format
  * start of week
  * make site private
  * prevent comments
  * permalink structure
* Fix URL for Font Awesome
* Add image size for testimonials
* Update Bootstrap to 3.3.7
* Update plugins.js to include the bootstrap parts rather than the full bootstrap.min.js so that it's easier to pick and choose the plugins you want

## Version 2.9.2
* Bugfix:  Fix the prepend call for the colorbox call
* Bugfix:  Add the css for the HTML5 gallery

## Version 2.9.1
* Bugfix:  remove call to removed rev_slider file

## Version 2.9
* Change gallery shortcode to work with colorbox
* Add Colorbox to javascript

## Version 2.8
#### Big update!
* Add schema.php
* Add Address into admin
* Set up constants for the address fields
* Return phone to admin
* Create "Home" and "Blog" pages upon activation
* Set "Home" as the Home page and "Blog" and the posts page
* Add address.php
* Add the get_the_address and get_the_address_inline functions
* Removed Revolution Slider stuff
* Removed requirements for Compass

## Version 2.7.3
* Rollback Modernizr back to 2.8.3 to fix the "hidden" issue
* Remove the last mixin that needs compass
* Comment out the import for compass
* Fix the options page issue for google site verification

## Version 2.7.2
* Removed link from title on content-single.php

## Version 2.7.1
* Bumped to jQuery 2.x
* Bumped to Modernizr 3.3.1

## Version 2.7
* Added 404.php
* Added archive.php
* Updated home.php to be a little more generic so that we can co-opt what was content-home.php into content-archive.php

## Version 2.6.4
* Convert the default location for minified version of main.js to /js/min/main-min.js instead of /js/main-ck.js
* Added in the color for YouTube

## Version 2.6.3
* Added Youtube back in as an option in the SocialMedia class

## Version 2.6.2
* Fixed order of social networks to be whatever order is given at instantiation rather than the order of the networks given in the class

## Version 2.6.1
* Bug fix in inc/SocialMedia.php

## Version 2.6
* Added Google Site Verification

## Version 2.5.2
* Bump Bootstrap to v3.3.6

## Version 2.5.1
* Updated the styling for social media buttons
* Updated bug in inc/SocialMedia.php
* Removing WooCommerce support (Not used very much, not updated enough)

## Version 2.5
* Changed how social media is called, now Class-based.  See inc/SocialMedia.php for more info.
* Bumped FontAwesome to v4.6.3
* Removed agi-excerpt.php (should have done that before)
* Removed social-media.php

## Version 2.4.3
* Moved to FontAwesome v4.6.1

## Version 2.4.2
* Removed link from title on pages
* Changed text in edit link on pages from "Edit Post" to "Edit Page"
* Renamed "agi-excerpt" to "sherpa-excerpt"

## Version 2.4.1
* Updated in case of adjustment to the number of columns (FULLWIDTH and COLBASE set in inc/constants.php)

## Version 2.4
* Removed Open Web Analytics (no longer needed!)
* Added ability to open links in a new tab by adding an "external" class
* Added a gulp file (requires both gulp and gulp-compass)
* Added a changelog (this file right here!)