<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<header>
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			<h1>On <?php single_cat_title(); ?>...</h1>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h1>On <?php single_tag_title(); ?>...</h1>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h1>On <?php the_time('F jS, Y'); ?>...</h1>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>From <?php the_time('F, Y'); ?>...</h1>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h1>From <?php the_time('Y'); ?>...</h1>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			<?php } ?>

			<div class="dotted"></div>
		</header>

		<?php while (have_posts()) : the_post(); ?>

			<article>
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<aside class="meta"><?php the_time('F j, Y') ?><?php edit_post_link('[Edit]', '<br>', ''); ?></aside>
				</header>

				<?php the_content('<p>Keep reading...</p>'); ?>

				<p class="text-center padding-top"><a class="muted" href="<?php comments_link(); ?>"><i class="icon chat"></i> <?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a></p>
			</article>

			<div class="dotted"></div>


		<?php endwhile; ?>

		<!-- Previous/Next page navigation -->
		<nav>
			<p class="text-center"><?php posts_nav_link( '&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;', '&larr; Newer', 'Older &rarr;' ); ?></p>
		</nav>

	<?php else : ?>
		<article>
			<header>
				<h2>Oh snap!</h2>
			</header>
			<p>The page your looking for doesn't exist. Check the URL, or try using the search function.</p>
		</article>
	<?php endif; ?>

<?php get_footer(); ?>