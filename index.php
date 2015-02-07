<?php get_header(); ?>
	
	<!-- Main lopp -->
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php if (is_linked_list()): ?>
			<? $format = 'linked-list'; ?>
		<?php else: ?>
			<?php $format = get_post_format(); ?>
		<?php endif; ?>

		<article>	
			<?php get_article_format($format); ?>
			
			<div class="meta">
				<span class="date"><a href="<?php echo get_permalink(); ?>"> written <?php the_time('F j, Y'); ?></a></span> 
			</div>
			
		</article>
	
	<?php endwhile; ?>


	<!-- Pagination -->
	<div class="pagination clearfix">
		<span class="nav-previous"><?php next_posts_link( 'Older posts &rarr;' ); ?></span>
		<span class="nav-next"><?php previous_posts_link( '&larr; Newer posts' ); ?></span>
	</div>
	
	<?php else: ?>
	
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>


	<?php endif; ?>
	


	
<?php get_footer(); ?>