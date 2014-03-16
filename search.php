<?php

/* ======================================================================
	search.php
	Template for search results.
 * ====================================================================== */

get_header(); ?>


<?php if (have_posts()) : ?>
	<header>
		<h1><?php printf( __( 'Search results for "%s"', 'kraken' ), the_search_query() ); ?></h1>
	</header>

	<?php while (have_posts()) : the_post(); ?>

		<article>

			<header>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php if ( get_post_type() == 'post' ) : ?>
					<aside>
						<p>
							<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time> /
							<a href="<?php comments_link(); ?>">
								<?php comments_number( __( 'Comment', 'kraken' ), __( '1 Comment', 'kraken' ), __( '% Comments', 'kraken' ) ); ?>
							</a>
							<?php edit_post_link( __( 'Edit', 'kraken' ), ' / ', '' ); ?>
						</p>
					</aside>
				<?php else : ?>
					<aside>
						<?php edit_post_link( __( 'Edit', 'kraken' ), '', '' ); ?>
					</aside>
				<?php endif; ?>
			</header>

			<?php the_content( __( 'Read More', 'kraken' ) ); ?>

		</article>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<article>
		<header>
			<h1><?php printf( __( 'No results found for "%s"', 'kraken' ), the_search_query() ); ?></h1>
		</header>
		<p><?php _e( 'Sorry, your search didn\'t turn up any results. Maybe try using different keywords?', 'kraken' ) ?></p>

		<?php get_search_form(); ?>
	</article>
<?php endif; ?>


<?php get_footer(); ?>