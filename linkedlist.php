<?php /* Template Name: Link List */ ?>
<?php get_header(); ?>

<h2 class="page-title"><?php the_title(); ?></h2>
<?php if (have_posts()): ?> 
	<?php  while (have_posts()) : the_post(); ?>
		<div class="post-content -dark" id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>

<?php else: ?>
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
<?php endif; ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php $args = array (
	'post_type' => 'daily_link',
	'posts_per_page' => '1',
	'paged' => $paged
) ?>

<?php $query = new WP_Query( $args ); ?>
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
		<div class="pagination clearfix">	
			<div class="nav-next"><?php previous_posts_link( 'Newer Links', $query->max_num_pages ); ?></div>
			<div class="nav-previous"><?php next_posts_link( 'Older Links', $query->max_num_pages ); ?></div>
		</div>
	<?php } wp_reset_postdata(); ?>

<?php get_footer(); ?>
