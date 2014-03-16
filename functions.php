<?php

/* ======================================================================
	functions.php
	For modifying and expanding core WordPress functionality.
 * ====================================================================== */

// Load theme scripts in the footer
function kraken_load_theme_js() {
	wp_register_script('kraken-theme-js', get_template_directory_uri() . '/js/scripts.js', false, null, true);
	wp_enqueue_script('kraken-theme-js');
}
add_action('wp_enqueue_scripts', 'kraken_load_theme_js');



// Add a shortcode for the search form
function kraken_wpsearch() {
	$form = get_search_form();
	return $form;
}
add_shortcode( 'searchform', 'kraken_wpsearch' );



// Replace default password-protected post messaging with custom language
function kraken_post_password_form() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$form =
		'<form class="text-center" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p>' . __( 'This is a password protected post.', 'kraken' ) . '</p><label class="screen-reader" for="' . $label . '">' . __( 'Password', 'kraken' ) . '</label><input id="' . $label . '" name="post_password" type="password"><input type="submit" name="Submit" value="' . __( 'Submit', 'kraken' ) . '"></form>';
	return $form;
}
add_filter( 'the_password_form', 'kraken_post_password_form' );



// Make the `wp_title` function more useful
function kraken_pretty_wp_title( $title, $sep ) {

	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name
	$title .= get_bloginfo( 'name' );

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'kraken' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'kraken_pretty_wp_title', 10, 2 );

?>