<?php get_header(); ?>
  <main role="main" id="main" class="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; endif; ?>
    <?php // get_sidebar(); ?>
  </main>
<?php get_footer(); ?>
