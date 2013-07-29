<?php

/* ======================================================================

    Load JS v3.0
    Load theme JavaScript file.
    Learn more: http://codex.wordpress.org/Function_Reference/wp_register_script
    
 * ====================================================================== */

function load_theme_js() {

    // Register and load Kraken.js
	wp_register_script('kraken-js', get_template_directory_uri() . '/js/kraken.js', false, null, true);
	wp_enqueue_script('kraken-js');

}
add_action('wp_enqueue_scripts', 'load_theme_js');

?>
