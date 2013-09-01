<?php

/* ======================================================================
    index.php
    Template for page that displays all of your posts.
 * ====================================================================== */

    get_header();
?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<article>

			<header>
				<!-- Title of post -->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<aside>
					<!-- Date and edit link -->
					<p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
				</aside>
			</header>

			<!-- Post content -->
			<?php the_content('<p>Keep reading...</p>'); ?>

			<!-- Link to comments -->
			<p><a href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a></p>

		</article>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<nav>
		<p><?php posts_nav_link( '&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;', '&larr; Newer', 'Older &rarr;' ); ?></p>
	</nav>


<!-- If no posts are found... -->
<?php else : ?>
	<?php get_template_part( 'no-posts' ); ?>
<?php endif; ?>


<?php get_footer(); ?>
