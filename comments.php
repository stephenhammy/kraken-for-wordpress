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
?>

<!-- You can start editing here. -->
<h2 id="comments"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></h2>
<p><a class="scroll" href="#respond">Leave a comment</a> or contact me on Twitter at <a href="http://twitter.com/ChrisFerdinandi">@ChrisFerdinandi</a>.</p>

<?php if ($comments) : ?>

	<ul class="unstyled">

	    <?php foreach ($comments as $comment) : ?>

	        <li id="comment-<?php comment_ID() ?>">

		        <hr class="no-space-bottom">
		
		        <?php if ($comment->comment_approved == '0') : ?>
			        <div class="callout">
				        <p>Your comment is being held for moderation, which means it either had a link in it, or my blog thought it was spam. If you're not sure why you're seeing this, send me an email at hello (at) gomakethings (dot) com. As long as it's not spam, I'll approve asap!</p>

				        <p>- Chris</p>
			        </div>
		        <?php endif; ?>

		        <article>
			        <header class="group">
				        <figure>
					        <p><?php echo get_avatar( $comment, $size = '120' ); ?></p>
				        </figure>
				        <h3 class="text-left no-space"><?php comment_author_link() ?></h3>
				        <aside>
					        <p class="small muted"><?php comment_date('F jS, Y') ?><?php edit_comment_link('[Edit]', ' - ', ''); ?></p>
				        </aside>
			        </header>

			        <?php comment_text() ?>

			        <p><a class="small" style="cursor:pointer;" onclick='yus_replyTo("<?php comment_ID(); ?>", "<?php comment_author(); ?>")' href="#respond"><i class="icon-reply"></i> Reply</a></p>
		        <article>
		
	        </li>

		<?php endforeach; // end for each comment ?>

	</ul>



<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

    <h2 id="respond">Leave a Reply</h2>

    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	    <!-- If user must be logged in to comment -->
    <?php else : ?>
    <form class="text-center" id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

	    <?php if ( $user_ID ) : ?>

		    <p class="muted"><em>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></em></p>

	    <?php else : ?>
		    <label class="small" for="author">Your Name</label>
		    <input type="text" name="author" id="author" class="input-medium" value="<?php echo $comment_author; ?>" tabindex="1" required>

		    <label class="small" for="email">Your Email</label>
		    <input type="email" name="email" id="email" class="input-medium" value="<?php echo $comment_author_email; ?>" tabindex="2" required>

		    <label class="small" for="url">Your Website (optional)</label>
		    <input type="url" name="url" id="url" class="input-medium" value="<?php echo $comment_author_url; ?>" tabindex="3" >
	    <?php endif; ?>

		    <textarea name="comment" id="comment" tabindex="4" required></textarea>

		    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="btn" />
		    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

		    <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
