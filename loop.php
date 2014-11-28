<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<!-- post title -->
		<?php if (is_linked_list()): ?>
  			<h2 class="linked-list-item"><a href="<?php the_linked_list_link(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?> &rarr;</a></h2>
		<?php else: ?>
  			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		<!-- /post title -->
		
		<div class="post_content">
		<?php the_content('Read more...'); ?>
		</div>

		<!-- post details -->
		<div class="meta">
			<span class="date"><a href="<?php echo get_permalink(); ?>"><?php the_time('F j, Y'); ?></a></span> |
			<span class="comments"><?php comments_popup_link( __( 'Kommentieren', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		</div>
		<!-- /post details -->
		
		
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>