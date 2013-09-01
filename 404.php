<?php

/* ======================================================================
    404.php
    Template for 404 error page.
 * ====================================================================== */

    get_header(); 
?>


<!-- 404 Content -->
<article>
	<header>
		<h1>Page Not Found</h1>
	</header>

	<p>Sorry, but the page you were looking for doesn't exist. It looks like this was the result of either:</p>

    <ol>
        <li>A mistyped address.</li>
        <li>An out-of-date link.</li>
    </ol>

    <!-- Insert search form -->
    <?php get_search_form(); ?>

</article>


<?php get_footer(); ?>