<article <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>
	<div class="meta-info">
		<p><?php echo 'Publicado por:'; ?> <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
	</div>
  <div class="conteudo">
    <?php the_content(); ?>
  </div>
</article>