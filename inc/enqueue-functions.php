<?php

function zero_scripts() {
  wp_enqueue_style( 'zero', get_stylesheet_uri(), array() );
  wp_enqueue_script( 'zero', get_template_directory_uri() . '/scripts.min.js', array( 'jquery' ), '0.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'zero_scripts' );


function zero_google_fonts() {
  wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap');
  wp_enqueue_style( 'google-fonts');
}

add_action('wp_print_styles', 'zero_google_fonts');


function preload_fonts( $html, $handle ) {

  if ( $handle === 'google-fonts' ) {

    return str_replace( "rel='stylesheet'", "rel='preload' as='font' type='font/woff2' crossorigin='anonymous'", $html );

  }

  return $html;
}

add_filter('style_loader_tag', 'preload_fonts', 10, 2);
