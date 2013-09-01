<?php

/* ======================================================================
    page.php
    Template for individual pages.
 * ====================================================================== */

    get_header(); 
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

	    <header>
            <!-- Page title -->
		    <h1><?php the_title(); ?></h1>
	    </header>

        <!-- Page content -->
	    <?php the_content(); ?>

        <!-- Page edit link -->
	    <?php edit_post_link('[Edit]', '<p>', '</p>'); ?>

    </article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
