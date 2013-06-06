<?php

/* ======================================================================

    Search Form Shortcode v1.0
    A PHP script and shortcode for the WordPress search form.

    Script by Elliot Jay Stocks.
    http://viewportindustries.com/products/starkers/

    Rebounded by Chris Ferdinandi.
    http://gomakethings.com

    Add a search form anywhere on your site by adding <?php echo kraken_wpsearch(); ?> to a template file.
    You can also use the [searchform] shortcode in the WordPress content editor.
    The `.screen-reader` class hides the search form label if you're using the Kraken CSS boilerplate.
    Add additional classes and styling as needed.
    
 * ====================================================================== */

function kraken_wpsearch() {
	$form = '<form method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader" for="s">Search this site:</label>
	<input type="text" placeholder="Search this site..." value="' . get_search_query() . '" name="s" id="s">
	<input type="submit" id="searchsubmit" value="Search">
	</form>';
	return $form;
}
add_shortcode( 'searchform', 'kraken_wpsearch' );

?>
