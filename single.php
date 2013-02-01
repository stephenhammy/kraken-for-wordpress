<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<header>
			<h1 class="instapaper_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<aside class="meta"><?php the_time('F j, Y') ?><?php edit_post_link('[Edit]', '<br>', ''); ?></aside>
		</header>

		<div class="instapaper_body">
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
		</div>

		<div class="dotted dotted-half"></div>
		<?php comments_template(); ?>

	
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	
</article>
	
<?php get_footer(); ?>