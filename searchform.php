<?php

/* ======================================================================
    searchform.php
    Template for search form.
    `.screen-reader` class hides label when used with Kraken boilerplate.
 * ====================================================================== */

?>


<form method="get" id="searchform" action="<?php echo esc_url( home_url('/') ); ?>" >
    <label class="screen-reader" for="s">Search this site:</label>
    <input type="text" placeholder="Search this site..." value="<?php get_search_query(); ?>" name="s" id="s">
    <input type="submit" id="searchsubmit" value="Search">
</form>