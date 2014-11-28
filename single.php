<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- post title -->
			<?php if (is_linked_list()): ?>
  				<h2 class="single_title"><?php the_title(); ?>&rarr;</h2>
			<?php else: ?>
  				<h2 class="single_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
			<!-- /post title -->
			
			
			
			<div class="post_content">
				<?php the_content('Read more...'); ?>
			</div>

			<!-- post details -->
			<div class="meta">
				<span class="date"><?php the_time('F j, Y'); ?></span> 
			</div>
			<!-- /post details -->
			
			<?php comments_template(); ?>
			
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
	
	</section>
	<!-- /section -->

<?php get_footer(); ?>