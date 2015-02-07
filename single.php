<?php get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php if (is_linked_list()): ?>
			<? $format = 'linked-list'; ?>
		<?php else: ?>
			<?php $format = get_post_format(); ?>
		<?php endif; ?>

		<article>
			
			<?php get_article_format($format); ?>
			
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