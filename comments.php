<!-- This is the template for your comments section -->

<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<a name="comments"></a>
<?php if ($comments) : ?>
	<h2>Comments</h2>

	<ul class="unstyled">

	<?php foreach ($comments as $comment) : ?>

		<!-- Trackback Links -->
		<?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type == 'comment') { ?>


		<li <?php echo $oddcomment; ?> id="comment-<?php comment_ID() ?>">
			
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="callout">
					<p>Your comment is being held for moderation, which means it either had a link in it, or my blog thought it was spam. If you're not sure why you're seeing this, send me an email at hello (at) gomakethings (dot) com. As long as it's not spam, I'll approve asap!</p>

					<p>- The Management (aka Chris)</p>
				</div>
			<?php endif; ?>

			<article>
				<header class="text-center">
					<figure>
						<p class="padding-top"><?php echo get_avatar( $comment, $size = '86' ); ?></p>
					</figure>
					<h3 class="no-space"><?php comment_author_link() ?></h3>
					<aside>
						<p class="muted"><?php comment_date('F jS, Y') ?><?php edit_comment_link('[Edit]', '<br>', ''); ?></p>
					</aside>
				</header>
				<?php comment_text() ?>

				<p class="text-center"><a class="muted" style="cursor:pointer;" onclick='yus_replyTo("<?php comment_ID() ?>", "<?php comment_author();?>")'><i class="icon chat"></i> Reply</a></p>
			<article>

			<div class="dotted dotted-short"></div>
			
		</li>

		<?php
			/* Changes every other comment to a different class */
			$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
		?>

		<!-- Trackback Links -->
		<?php } else { $trackback = true; } /* End of is_comment statement */ ?>

		<?php endforeach; /* end for each comment */ ?>

	</ul>

	<!-- Trackback Links -->
	<?php if ($trackback == true) { ?>
		<h3>Places that have linked here</h3>
		<ol class="comment-text">
		<?php foreach ($comments as $comment) : ?>
		<?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type != 'comment') { ?>
		<li><?php comment_author_link() ?></li>
		<?php } ?>
		<?php endforeach; ?>
		</ol>
		<div class="dotted dotted-short"></div>
	<?php } ?>



<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h2>Leave a Comment</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<div class="text-center">

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( $user_ID ) : ?>

		<p class="muted"><em>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></em></p>

	<?php else : ?>

		<p class="padding-top"><a data-toggle="collapse" href="#get-avatar"><img class="avatar" src="<?php bloginfo('stylesheet_directory'); ?>/img/default-avatar.png"></a></p>

		<p class="collapse muted" id="get-avatar">Want to add a photo to your comment? Visit <a href="http://gravatar.com">gravatar.com</a> to upload an image.</p>

		<label class="muted" for="author">Your Name *</label>
		<input type="text" name="author" id="author" class="input-wide text-center" value="<?php echo $comment_author; ?>" tabindex="1" required>

		<label class="muted" for="email">Your Email *</label>
		<input type="email" name="email" id="email" class="input-wide text-center" value="<?php echo $comment_author_email; ?>" tabindex="2" required>

		<label class="muted" for="url">Your Website</label>
		<input type="url" name="url" id="url" class="input-wide text-center" value="<?php echo $comment_author_url; ?>" tabindex="3" >

	<?php endif; ?>

		<textarea name="comment" id="comment" tabindex="4" required></textarea>

		<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="btn btn-large" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

	<?php do_action('comment_form', $post->ID); ?>

</form>

</div><!--/text-center-->

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>