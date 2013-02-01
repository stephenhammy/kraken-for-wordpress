<?php get_header(); ?>

<article>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<header>
			<h1 class="padding-top small-space-bottom instapaper_title"><?php the_title(); ?></h1>
			<aside class="muted">
				<p class="text-center"><?php the_time('F j, Y') ?><?php edit_post_link('[Edit]', ' - ', ''); ?></p>
			</aside>
		</header>

		<div class="instapaper_body">
			<?php the_content(); ?>
		</div>

		<?php comments_template(); ?>

	
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	
</article>
	
<?php get_footer(); ?>
