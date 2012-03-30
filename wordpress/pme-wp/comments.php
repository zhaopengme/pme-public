<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
  <div class="comments-area"> 
	<h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
   
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
	<?php endif; ?>
	
<?php endif; ?>


<?php if ( comments_open() ) : ?>



<div id="comment-form">

	<h3><?php comment_form_title( 'Leave a Comment', 'Leave a Comment to %s' ); ?></h3>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>


			<div class="control-group">

            <label class="control-label" for="author">author *</label>

            <div class="controls">

              <div class="input-prepend">

                <span class="add-on"><i class="icon-user"></i></span><input name="author" id="author" class="span2"  type="text">

              </div>


            </div>

          </div>
          
			<div class="control-group">

            <label class="control-label" for="email">email *</label>

            <div class="controls">

              <div class="input-prepend">

                <span class="add-on"><i class="icon-envelope"></i></span><input name="email" id="email" class="span2"  type="text">

              </div>


            </div>

          </div>
          
			<div class="control-group">

            <label class="control-label" for="url">url </label>

            <div class="controls">

              <div class="input-prepend">

                <span class="add-on"><i class="icon-home"></i></span><input name="url" id="email" class="span2"  type="text">

              </div>

            </div>

          </div>

  
		<?php endif; ?>


		  <div class="control-group">

            <label class="control-label" for="comment">comment</label>

            <div class="controls">

              <textarea class="input-xlarge" name="comment" id="comment" rows="3" ></textarea>

            </div>

          </div>

		<div class="form-actions">

            <input class="btn" type="submit" value="Submit">
            <input class="btn" type="reset" value="Reset">

          </div>

			<?php comment_id_fields(); ?>
	
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>
 </div>

	<?php endif; // If registration required and not logged in ?>
	

<?php endif; ?>
