# Changelog
## Version 3.5.4 - Kangchenjunga
* Remove responsive images (inc/theme-features.php)
* Add a shortcode for sherpavembed
* Fix:  forgot to add call to inc/add-image-to-post.php in functions.php; fixed now
* Add extra `<br />` in inc/add-to-any.php
* Add links to next and previous posts in content-single.php
* Add categories to single posts in content-single.php
* Add tags to single posts through content filter (inc/add-tags-to-single.php)
* Add paging for blog on content-archive.php

## Version 3.5.3 - Kangchenjunga
* Add color options for social media buttons so you don't have to modify the mixins
* Add scss/_sherpa-mixins.scss
* Add options for social media buttons into scss/_sherpa-variables.scss
* Fix "set" methods in inc/SocialMedia.php so that they return `$this` upon success so that you can chain methods 
* Remove excerpt from Testimonials Custom Post Type (inc/testimonials-cpt.php)
* Fix secondary functions in inc/navs.php as they were expecting things to be echoed rather than returned

## Version 3.5.2 - Kangchenjunga
* Fix default pic size
* Fix get_the_phone_link to allow for the use of schema
* Add get_the_phone_btn so that you can create buttons with the phone as well as custom text
* Add classes to scss/_sherpa-general.scss
* Update inc/navs.php to take out secondary menu and add multiple other options
* Remove bottom margin on the navbar in scss/_sherpa-navbar.scss
* Simplify styling of navbar in scss/_sherpa-variables.scss
* Add cache-busting to CSS by setting version to time() in inc/styles.php (change back when going live)

## Version 3.5.1 - Kangchenjunga
* Fix sherpa_excerpt to work with the flexbox styling

## Version 3.5 - Kangchenjunga
* Add flexbox styling and markup for blog index
* Add custom thumbnail 'blog-featured-image' (inc/theme-features.php)
* Add image to blog index
* Rename MAPLINK to MAP (inc/constants.php)
* Add ability to include an ID in the SocialMedia class (inc/SocialMedia.php)
* Remove "Slideshow" stand-in from page-home.php
* Simplify styling the colors on testimonials
* Add social media sharing buttons through filter in "the_content" (inc/add-to-any.php)
* Add ability to have the featured image included inside the post (inc/add-image-to-post.php)
* Add custom thumbnail 'blog-interior-image' (inc/theme-features.php)
* Add ability to turn on or off featured image in the post, defaulting to off

## Version 3.4 - Manaslu
* Remove config.rb
* Add Map Link
* Add Map Directions Link
* Add Constants - MAPLINK, DIRECTIONS
* Add ability to use or not use schema with address functions

## Version 3.3.2 - Cho Oyu
* Update 404 page to remove video and add page listing
* Add ability to have stacked social media icons in inc/SocialMedia.php
* Updated the way styles are enqueued in inc/styles.php

## Version 3.3.1 - Cho Oyu
* Fix issue caused by i18n conversion in SocialMedia.php
* Fix backwards compatibility on an option call in styles.php

## Version 3.3.0 - Cho Oyu
* Add i18n

## Version 3.2.1 - Makalu
* Clean out superfluous JS
* Add ability to see testimonials in REST API

## Version 3.2.0 - Makalu
* Disable Emoji from theme

## Version 3.1.1 - Lhotse
* Fix issue with schema.php

## Version 3.1.0 - Lhotse
* Required and Suggested Plugins! (Thank you [TGM Plugin Activation](http://tgmpluginactivation.com/))
* Options page updated with styling and formatting
* Added Schema to options page (for LD+JSON format)
* Added ability to easily add in Google Fonts

## Version 3.0.3 - Nanga Parbat
* Bump FontAwesome to 4.7.0

## Version 3.0.2 - Nanga Parbat
* Move stat-counter from header to footer
* Set Typekit to load asynchronously
* No longer loading Modernizr by default.  To enable, uncomment out the line in inc/scripts.php

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