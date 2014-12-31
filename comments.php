<div class="comments">
	<?php if (post_password_required()) : ?>
		<p>You need to enter the post password to write a comment on this article.</p>
	<?php return; endif; ?>

	<?php if (have_comments()) : ?>
		<h3 id="comments-anchor"><?php comments_number(); ?></h3>
	
		<ul>
			<?php wp_list_comments();?>
		</ul>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p>Comments are closed, sorry.</p>
		<p>Anyways, feel free to talk to me at <a href="http://twitter.com/_chrispop">&#xe601;Twitter</a> or via <a href="mailto:mail@chrispop.de">&#xe600;Mail</a>.
	<?php else: ?>
		<h3 id="comments-anchor">No comments yet</h3>
	<?php endif; ?>
	
	<div class="comment-form">
		<form action="<?= home_url('/'); ?>wp-comments-post.php" method="post">
          <div class="fields">
            <input type="text" name="author" id="author" placeholder="Name">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="text" name="url" id="url" placeholder="Website">
          </div>
          <div class="area">
            <textarea name="comment" placeholder="Your two cents"></textarea>
            <button type="submit"><span class="mq-sr">Send</span></button>
          </div>
          <?php comment_id_fields(); ?>
          <?php do_action('comment_form', $post->ID); ?>
        </form>
	</div>
</div>