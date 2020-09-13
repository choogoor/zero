<div id="page-<?php the_ID(); ?>">
  <h2><?php the_title(); ?></h2>
  <?php the_date(); ?> | <?php esc_html_e( 'by' ); ?> | <?php the_author(); ?>

  <?php if ( has_post_thumbnail() ) : ?>

    <?php the_post_thumbnail(); ?>

  <?php endif; ?>

  <?php the_content(); ?>
</div>
