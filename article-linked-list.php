<h2 class="linked-list-item"><a href="<?php the_linked_list_link(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?> &rarr;</a></h2>

<?php if(is_single()): ?>
	<span class="single-date"><?php the_time('F j, Y'); ?></span> 
<?php endif; ?>

<div class="post-content">
	<?php the_content('Read more...'); ?>
</div>
	