<?php get_header(); ?>

		<h2 class="page-title"><?php the_title(); ?></h2>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<div class="post-content" id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
		</article>
		
	<?php endwhile; ?>
	
	<?php else: ?>
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
	<?php endif; ?>

<?php get_footer(); ?>