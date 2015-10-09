<?php /* Template Name: Link List */ ?>
<?php get_header(); ?>

		<h2 class="page-title"><?php the_title(); ?></h2>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="post-content -dark" id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
		</div>

	<?php endwhile; ?>

	<?php else: ?>
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
	<?php endif; ?>

		<?php $query = new WP_Query( array( 'post_type' => 'daily_link')); ?>
		<?php while ( $query->have_posts() ) { $query->the_post(); ?>
				<article>
					<?php get_article_format($format); ?>

					<div class="meta">
						<span class="date"><a href="<?php echo get_permalink(); ?>"> written <?php the_time('F j, Y'); ?></a></span>
					</div>

				</article>
			<?php } wp_reset_postdata(); ?>






<?php get_footer(); ?>
