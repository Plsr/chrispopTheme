<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<article>
		
		<!-- Post title 
				 There are two different types of post right now with differing Headlines:
				 Normal posts with links to their single.php's and DFLL-Posts with links to external sites
		-->
		<?php if (is_linked_list()): ?>
  			<h2 class="linked-list-item"><a href="<?php the_linked_list_link(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?> &rarr;</a></h2>
		<?php else: ?>
  			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php endif; ?>

		
		<div class="post-content">
		<?php the_content('Read more...'); ?>
		</div>

		<div class="meta">
			<span class="date"><a href="<?php echo get_permalink(); ?>"><?php the_time('F j, Y'); ?></a></span> 
			<span class="comments"><?php comments_popup_link( __( 'Comment', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		</div>
		
	</article>
	
<?php endwhile; ?>

<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>


<?php endif; ?>