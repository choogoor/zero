<?php

if ( ! function_exists( 'zero_setup' ) ) :

  function zero_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
      array(
        'menu' => esc_html__( 'Primary' ),
      )
    );

    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );
  }

endif;


add_action( 'after_setup_theme', 'zero_setup' );
