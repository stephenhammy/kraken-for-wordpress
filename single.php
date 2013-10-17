<?php

/* ======================================================================
	Single.php
	Template for individual blog posts.
 * ====================================================================== */

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article>

			<header>
				<h1><?php the_title(); ?></h1>
				<aside>
					<p>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time> /
						<a href="<?php comments_link(); ?>">
							<?php comments_number( __( 'Comment', 'kraken' ), __( '1 Comment', 'kraken' ), __( '% Comments', 'kraken' ) ); ?>
						</a>
						<?php edit_post_link( __( 'Edit', 'kraken' ), ' / ', '' ); ?>
					</p>
				</aside>
			</header>

		<?php the_content(); ?>

		<?php comments_template(); ?>

	</article>

<?php endwhile; endif; ?>


<?php get_footer(); ?>