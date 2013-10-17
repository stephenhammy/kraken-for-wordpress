<?php get_header(); ?>


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
		<article>

			<header>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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

			<?php the_content( __( 'Read More', 'kraken' ) ); ?>

		</article>

		<hr>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>