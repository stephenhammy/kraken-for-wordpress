<?php

/* ======================================================================
    Single.php
    Template for individual blog posts.
 * ====================================================================== */

    get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

	    <header>
            <!-- Post title -->
		    <h1><?php the_title(); ?></h1>
		    <aside>
                <!-- Post date and edit link -->
			    <p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
		    </aside>
	    </header>

        <!-- Post content -->
	    <?php the_content(); ?>

        <!-- Post comments -->
	    <?php comments_template(); ?>

    </article>

<?php endwhile; endif; ?>

	
<?php get_footer(); ?>
