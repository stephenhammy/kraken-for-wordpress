<?php

/* ======================================================================
    Functions.php
    For modifying and expanding core WordPress functionality.
    Remove the "#" before a function to activate it.
    Add a "#" before a function to deactivate it.
 * ====================================================================== */

require_once('functions/load-js.php'); // Load external JS files
require_once('functions/search-form-shortcode.php'); // A WordPress search form shortcode
require_once('functions/remove-header-junk.php'); // Remove unneccessary junk that WordPress adds to the header
require_once('functions/no-self-pings.php'); // Prevent self-pings
#require_once('functions/remove-trackbacks-from-comments.php'); // Remove trackbacks from comments and comment count
#require_once('functions/exclude-pages-from-search.php'); // Exclude pages from your search results
#require_once('functions/html-minify.php'); // Minify the HTML output from your WordPress site

?>
