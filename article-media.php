<div class="post-content">
	<?php if(get_field(image_post_image)): ?>
		<img src="<?php the_field(image_post_image); ?>">
	<?php elseif (get_field(media_iframe)): ?>
		<?php the_field(media_iframe); ?>
	<?php endif; ?>

	<?php if(is_single()): ?>
		<span class="single-date"><?php the_time('F j, Y'); ?></span> 
	<?php endif; ?>

	<?php the_content(); ?>
</div>