<?php get_header(); 
/* ======================================================================
    Index.php
    Template for page that displays all of your posts.
 * ====================================================================== */
?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<article>

			<header>
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<aside>
					<p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y') ?></time><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
				</aside>
			</header>

			<?php the_content('<p>Keep reading...</p>'); ?>

			<p><a href="<?php comments_link(); ?>"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a></p>

		</article>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<nav>
		<p><?php posts_nav_link( '&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;', '&larr; Newer', 'Older &rarr;' ); ?></p>
	</nav>


<?php else : ?>
	<article>
		<header>
			<h1>No Posts to Display</h1>
		</header>
	</article>
<?php endif; ?>


<?php get_footer(); ?>
