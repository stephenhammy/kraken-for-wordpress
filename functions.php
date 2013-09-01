<?php

/* ======================================================================
    Functions.php
    For modifying and expanding core WordPress functionality.
    Remove the "#" before a function to activate it.
    Add a "#" before a function to deactivate it.
 * ====================================================================== */

require_once( get_template_directory() . '/functions/load-jquery.php' ); // Load CDN-hosted jQuery file
require_once( get_template_directory() . '/functions/load-js.php' ); // Load external JS file
require_once( get_template_directory() . '/functions/remove-header-junk.php' ); // Remove unneccessary junk that WordPress adds to the header
require_once( get_template_directory() . '/functions/no-self-pings.php' ); // Prevent self-pings
#require_once( get_template_directory() . '/functions/remove-trackbacks-from-comments.php' ); // Remove trackbacks from comments and comment count
#require_once( get_template_directory() . '/functions/exclude-pages-from-search.php' ); // Exclude pages from your search results
#require_once( get_template_directory() . '/functions/html-minify.php' ); // Minify the HTML output from your WordPress site

?>
