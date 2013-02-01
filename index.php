<?php get_header(); ?>

	<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<article>

					<header>
						<h1 class="small-space-bottom"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<aside>
							<p class="muted text-center"><?php the_time('F j, Y') ?><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
						</aside>
					</header>

					<?php the_content('<p>Keep reading...</p>'); ?>

					<p class="text-center padding-top"><a href="<?php comments_link(); ?>"><i class="icon-chat"></i> <?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></a></p>

				</article>

				<hr>

			<?php endwhile; ?>

		<!-- Previous/Next page navigation -->
		<nav>
			<p class="text-center"><?php posts_nav_link( '<span class="muted">&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;</span>', '&larr; Newer', 'Older &rarr;' ); ?></p>
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