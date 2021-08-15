<?php get_header( 'single' ); ?>
<section id="post-individual">
  <div class="container">
    <div class="corpo">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', get_post_format( ) ); ?>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>