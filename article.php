<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php if(is_single()): ?>
	<span class="single-date"><?php the_time('F j, Y'); ?></span> 
<?php endif; ?>

<div class="post-content">
	<?php the_content('Read more...'); ?>
</div>
	
