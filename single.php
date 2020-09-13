<?php get_header(); ?>
  <main role="main" id="main" class="main">
    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : ?>

        <?php the_post(); ?>
        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

        <?php //if ( comments_open() || get_comments_number() ) : ?>

          <?php //comments_template(); ?>

        <?php //endif; ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php endif; ?>
    <?php // get_sidebar(); ?>
  </main>
<?php get_footer(); ?>
