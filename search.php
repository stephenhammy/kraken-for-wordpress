<?php

/* ======================================================================
    search.php
    Template for search results.
 * ====================================================================== */

    get_header(); 
?>


<?php if (have_posts()) : ?>

	<header>
		<h1>Search Results for "<?php the_search_query(); ?>"</h1>
	</header>

	<?php while (have_posts()) : the_post(); ?>

		<article>

			<header>
				<!-- Post title -->
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


<!-- If no search results were found... -->
<?php else : ?>
	<article>
		<header>
			<h1>No Results Found for "<?php the_search_query(); ?>"</h1>
		</header>
		<p>Sorry, your search didn't turn up any results. Maybe try using different keywords?</p>

		<!-- Insert search form -->
		<?php get_search_form(); ?>
	</article>
<?php endif; ?>
	

<?php get_footer(); ?>