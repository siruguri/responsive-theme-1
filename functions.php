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

  wp_enqueue_script('jquery-ui', get_template_directory_uri() . "/js/jquery-ui.min.js", false, '20140329');
  wp_enqueue_script('stonesoup-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery', 'jquery-ui' ), '20140313');
}

add_action('wp_enqueue_scripts', 'stonesoup_scripts');

function stonesoup_setup() {
    // This theme uses wp_nav_menu() in two locations, plus one for mobile devices.
  register_nav_menus( array(
    'header_menu'   => __( 'Header Menu', 'stone-soup' ),
  ) );
}
add_action( 'after_setup_theme', 'stonesoup_setup' );

function stonesoup_options_handler() {
  echo '<div class="wrap">';
  echo '<h1>Stone Soup Options</h1>';

  echo '<form action="options.php" method="POST">';

  settings_fields( 'stonesoup-settings-group' );
  do_settings_sections( 'stonesoup_options' );
  submit_button();

  echo '</form> </div>';
}

function contactinfo_cb($args) {
    $val = esc_attr($args['value']);
    echo "<input type='text' name='" . esc_attr($args['name']) . "' value='$val' />";
}

function stonesoup_options_menu() {
    $settings = (array) get_option( 'stonesoup-contact-settings' );

  /* Args = Name in side bar, title on page, cap, menu slug, callback */
    add_options_page('Stone Soup Options', 'Stone Soup Options', 'manage_options', 'stonesoup_options', 'stonesoup_options_handler' );
    register_setting( 'stonesoup-settings-group', 'stonesoup-contact-settings' );

  /* No help text callbacks in this example */
    add_settings_section( 'contact-info', 'Contact Info', null, 'stonesoup_options' );
    add_settings_section( 'footer-text', 'Footer Text', null, 'stonesoup_options' );

    add_settings_field( 'phone-number', 'Phone', 'contactinfo_cb', 'stonesoup_options', 'contact-info', 
			array('name' => 'stonesoup-contact-settings[phone-number]', 'value' => $settings['phone-number']) );

    add_settings_field( 'email', 'Email', 'contactinfo_cb', 'stonesoup_options', 'contact-info',
			array('name' => 'stonesoup-contact-settings[email]', 'value' => $settings['email']) );

    add_settings_field( 'location', 'Location', 'contactinfo_cb', 'stonesoup_options', 'contact-info',
			array('name' => 'stonesoup-contact-settings[location]', 'value' => $settings['email']) );

    add_settings_field( 'fb-url', 'Facebook URL', 'contactinfo_cb', 'stonesoup_options', 'contact-info',
			array('name' => 'stonesoup-contact-settings[fb-url]', 'value' => $settings['fb-url']) );

    add_settings_field( 'twitter-url', 'Twitter URL', 'contactinfo_cb', 'stonesoup_options', 'contact-info',
			array('name' => 'stonesoup-contact-settings[twitter-url]', 'value' => $settings['twitter-url']) );

}
add_action( 'admin_menu', 'stonesoup_options_menu' );
