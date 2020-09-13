<?php if ( post_password_required() ) {
  return;
} ?>

<?php if ( have_comments() ) : ?>

  <?php printf( _nx( 'One comment on "%2$s"', '%1$s comments on "%2$s"', get_comments_number(), 'comments title'),
    number_format_i18n( get_comments_number() ), get_the_title() );
  ?>
  <?php wp_list_comments( array(
    'short_ping'  => true,
    'avatar_size' => 50,
  ) ); ?>

<?php endif; ?>

<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

  <?php _e( 'Comments are closed.' ); ?>

<?php endif; ?>

<?php comment_form(); ?>
