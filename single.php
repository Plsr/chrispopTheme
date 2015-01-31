<?php get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article>
			<!-- post title -->
			<?php if (is_linked_list()): ?>
  				<h2 class="linked-list-item"><a href="<?php the_linked_list_link(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?> &rarr;</a></h2>
			<?php else: ?>
  				<h2 class="single-headline"><?php the_title(); ?></h2>
			<?php endif; ?>
			
			<span class="single-date"><?php the_time('F j, Y'); ?></span> 

			<div class="post-content">
				<?php the_content('Read more...'); ?>
			</div>

			<?php get_template_part('author-info'); ?>
			
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	


<?php get_footer(); ?>