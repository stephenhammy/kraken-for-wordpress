<?php

/* ======================================================================
	404.php
	Template for 404 error page.
 * ====================================================================== */

get_header(); ?>


<article>
	<header>
		<h1><?php _e( 'Page Not Found', 'kraken' ) ?></h1>
	</header>

	<p><?php _e( 'Sorry, but the page you were looking for doesn\'t exist. It looks like this was the result of either:', 'kraken' ) ?></p>

	<ol>
		<li><?php _e( 'A mistyped address.', 'kraken' ) ?></li>
		<li><?php _e( 'An out-of-date link.', 'kraken' ) ?></li>
	</ol>

	<!-- Insert search form -->
	<?php get_search_form(); ?>

</article>


<?php get_footer(); ?>