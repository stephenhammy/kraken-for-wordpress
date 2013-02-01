<?php /*
Template Name: Plain
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<header>
			<h1 class="screen-reader"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		</header>

		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>

		<?php edit_post_link('[Edit]', '<p>', '</p>'); ?>

	<?php endwhile; endif; ?>

</article>

<?php get_footer(); ?>
