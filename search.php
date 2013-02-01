<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<header>
			<h1>Search Results for "<?php the_search_query(); ?>"</h1>
			<div class="dotted"></div>
		</header>
	
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>">

				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<aside class="meta"><?php the_time('F j, Y') ?> <?php edit_post_link('[Edit]', '<br>', ''); ?></aside>
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
				<h2>Aww shucks!</h2>
			</header>
			<p>Your search didn't turn up any results. Maybe try using different keywords?</p>
		</article>
	<?php endif; ?>
	

<?php get_footer(); ?>