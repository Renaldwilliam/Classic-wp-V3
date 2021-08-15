<article <?php post_class(); ?>>
	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>	
	<div class="image">
    <?php the_post_thumbnail( ); ?>
  </div>
	<div class="meta-info">
		<p><?php _e( 'Published in', 'wpcurso' ); ?> <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
		<p><?php _e( 'Categories:', 'wpcurso' ) ?> <?php the_category( ' ' ); ?></p>
		<p><?php the_tags( __( 'Tags: ',  'wpcurso'), ', ' ); ?></p>
	</div>
	<?php the_content(); ?>
</article>