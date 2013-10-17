<?php get_header(); ?>


<?php if (have_posts()) : ?>

	<header>
		<h1>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<?php _e( 'Category:', 'kraken' ) ?> <?php single_cat_title(); ?>...
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<?php _e( 'Tag:', 'kraken' ) ?> <?php single_tag_title(); ?>...
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<?php _e( 'Day:', 'kraken' ) ?> <?php the_time('F jS, Y'); ?>...
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<?php _e( 'Month:', 'kraken' ) ?> <?php the_time('F, Y'); ?>...
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<?php _e( 'Year:', 'kraken' ) ?> <?php the_time('Y'); ?>...
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<?php _e( 'Author Archive', 'kraken' ) ?>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<?php _e( 'Blog Archive', 'kraken' ) ?>
			<?php } ?>
		</h1>
	</header>


	<?php while (have_posts()) : the_post(); ?>

		<article>

			<header>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<aside>
					<p>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time> /
						<a href="<?php comments_link(); ?>">
							<?php comments_number( __( 'Respond', 'kraken' ), __( '1 Response', 'kraken' ), __( '% Responses', 'kraken' ) ); ?>
						</a>
						<?php edit_post_link( __( 'Edit', 'kraken' ), ' / ', '' ); ?>
					</p>
				</aside>
			</header>

			<?php the_content( __( 'Read More', 'kraken' ) ); ?>

		</article>

	<?php endwhile; ?>


	<!-- Previous/Next page navigation -->
	<?php get_template_part( 'nav-page', 'Page Navigation' ); ?>


<?php else : ?>
	<?php get_template_part( 'no-posts', 'No Posts Template' ); ?>
<?php endif; ?>


<?php get_footer(); ?>