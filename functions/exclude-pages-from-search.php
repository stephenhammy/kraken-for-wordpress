<?php

/* ======================================================================

    Exclude Pages from Search v1.1
    A simple function to exclude pages from your search results.

    Script by C. Bavota.
    http://bavotasan.com/2010/excluding-pages-from-wordpress-search/

    Rebounded by Chris Ferdinandi.
    http://gomakethings.com
    
 * ====================================================================== */

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post'); // Exclude all pages (only show posts)
        // $query->set('post__not_in', array( -xx ) ); // Exclude specific pages/posts. xx = page id
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

?>
