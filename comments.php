<?php

/* ======================================================================
    Comments.php
    Template for post comments.
 * ====================================================================== */

    /* If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments. */
    if ( post_password_required() ) {
        return;
    }

?>


<h2 id="comments"><?php comments_number( 'Respond', '1 Response', '% Responses' ); ?></h2>

<?php if ($comments) : ?>

    <?php foreach ($comments as $comment) : ?>

        <article id="comment-<?php comment_ID() ?>">
	
            <!-- If comment is held for moderation -->
	        <?php if ($comment->comment_approved == '0') : ?>
		        <p>Your comment is being held for moderation.</p>
	        <?php endif; ?>

            <!-- Template for each comment -->
	        <header class="group">
		        <figure>
			        <p><?php echo get_avatar( $comment, $size = '120' ); // $size set to 2x for retina displays ?></p>
		        </figure>
		        <h3><?php comment_author_link(); ?></h3>
		        <aside>
			        <p><?php comment_date('F jS, Y') ?><?php edit_comment_link('[Edit]', ' - ', ''); ?></p>
		        </aside>
	        </header>

	        <?php comment_text(); ?>
	
        </article>

	<?php endforeach; // end for each comment ?>


<!-- If there aren't any comments yet -->
<?php else : ?>

    <!-- If comments are open, but there are no comments... -->
	<?php if ('open' == $post->comment_status) : ?>
		<!-- Add your message here (if desired). -->

    <!-- if comments are closed... -->
    <?php else : ?>
		<!-- Add your message here (if desired). -->

	<?php endif; ?>
<?php endif; ?>


<!-- If comments are allowed... -->
<?php if ('open' == $post->comment_status) : ?>

    <h2 id="respond">Leave a Reply</h2>

    <!-- If user must be logged in to comment, and current user isn't... -->
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <!-- Add your message here (if desired). -->

    <!-- If anyone can leave a comment... -->	    
    <?php else : ?>

        <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

            <!-- If user is already logged in, show their info. -->
    	    <?php if ( $user_ID ) : ?>
    		    <p>Logged in as <?php echo $user_identity; ?>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">Logout</a></p>

            <!-- If not, ask for their info. -->
    	    <?php else : ?>
    		    <label for="author">Your Name</label>
    		    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" required>

    		    <label for="email">Your Email</label>
    		    <input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" required>

    		    <label for="url">Your Website (optional)</label>
    		    <input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" >
    	    <?php endif; ?>

    		    <textarea name="comment" id="comment" tabindex="4" required></textarea>

    		    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment">
    		    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

    		    <?php do_action('comment_form', $post->ID); ?>

        </form>

    <?php endif; // If registration required and not logged in ?>

<?php endif; // If you delete this the sky will fall on your head ?>