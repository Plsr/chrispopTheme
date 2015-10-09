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

		<?php $query = new WP_Query( array( 'post_type' => 'daily_link', 'posts_per_page' => '1')); ?>
		<?php while ( $query->have_posts() ) { $query->the_post(); ?>
				<article>
					<h2><?php the_title(); ?></h2>

					<?php if(is_single()): ?>
						<span class="single-date"><?php the_time('F j, Y'); ?></span>
					<?php endif; ?>

					<div class="post-content">
						<?php the_content('Read more...'); ?>
					</div>


					<div class="meta">
						<span class="date"> written <?php the_time('F j, Y'); ?></span>
					</div>

				</article>
			<?php } wp_reset_postdata(); ?>






<?php get_footer(); ?>
