<?php

/* ======================================================================
    archive.php
    Template for posts by category, tag, author, date, etc.
 * ====================================================================== */

    get_header(); 
?>


<?php if (have_posts()) : ?>

	<header>
	    <h1>
		    <?php if (is_category()) : ?>
		        On <?php single_cat_title(); ?>...
		    <?php elseif( is_tag() ) : ?>
		        On <?php single_tag_title(); ?>...
		    <?php elseif (is_day()) : ?>
		        On <?php the_time('F jS, Y'); ?>...
		    <?php elseif (is_month()) : ?>
		        From <?php the_time('F, Y'); ?>...
		    <?php elseif (is_year()) : ?>
		        From <?php the_time('Y'); ?>...
		    <?php elseif (is_author()) : ?>
		        Author Archive
		    <?php else : ?>
		        Blog Archives
		    <?php endif; ?>
		</h1>
	</header>


	<?php while (have_posts()) : the_post(); ?>

		<article>

			<header>
				<!-- Title of post -->
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<aside>
					<!-- Date and edit link -->
					<p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
				</aside>
			</header>

			<!-- Post content -->
			<?php the_content('<p>Keep reading...</p>'); ?>

			<!-- Link to comments -->
			<p><a href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a></p>

		</article>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page' ); ?>


<!-- If no posts are found... -->
<?php else : ?>
	<?php get_template_part( 'no-posts' ); ?>
<?php endif; ?>


<?php get_footer(); ?>
