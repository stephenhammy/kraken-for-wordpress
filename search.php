<?php get_header(); 
/* ======================================================================
 * Search.php
 * Template for search results.
 * ====================================================================== */
?>


<?php if (have_posts()) : ?>
	<header>
		<h1>Search Results for "<?php the_search_query(); ?>"</h1>
		<hr>
	</header>

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
			<h1>No Results Found for "<?php the_search_query(); ?>"</h1>
		</header>
		<p>Sorry, your search didn't turn up any results. Maybe try using different keywords?</p>

		<?php echo kraken_wpsearch(); ?>
	</article>
<?php endif; ?>
	

<?php get_footer(); ?>
