<?php

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Stone Soup 0.1
 *
 * @return void
 */
function stonesoup_scripts() {
  // Add Lato font, used in the main stylesheet.
  wp_enqueue_style('stonesoup-google-lato', 'http://fonts.googleapis.com/css?family=Lato:400,700', array(), null);
  wp_enqueue_style('stonesoup-google-habibi', 'http://fonts.googleapis.com/css?family=Habibi', array(), null);

  wp_enqueue_style('stonesoup-bootstrap', get_template_directory_uri() . "/css/bootstrap.css", array(), null);
  wp_enqueue_style('stone-soup-custom', get_template_directory_uri() . '/css/custom.css', array( 'stonesoup-bootstrap'), '20140327');
}

add_action('wp_enqueue_scripts', 'stonesoup_scripts');

function stonesoup_setup() {
    // This theme uses wp_nav_menu() in two locations, plus one for mobile devices.
  register_nav_menus( array(
    'header_menu'   => __( 'Header Menu', 'stone-soup' ),
  ) );
}

add_action( 'after_setup_theme', 'stonesoup_setup' );
