<?php 

/**
 * Enqueue scripts and styles.
 */
function wooks_theme_scripts() {

  wp_enqueue_style( 'wooks-style', get_stylesheet_uri() );
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array(), 1);
  wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/assets/vendor/jquery-ui.css', array(), 1);
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css', array(), 'slick' );

  wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js');
  wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/vendor/jquery-ui.js', '', true);
  wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', '3.0.0', true);
  wp_enqueue_script( 'wooks-theme-scripts', get_template_directory_uri() . '/assets/js/build.min.js', '', true);
}
add_action( 'wp_enqueue_scripts', 'wooks_theme_scripts' );

function google_fonts_manrope() {
  wp_enqueue_style( 'google-fonts-manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;800&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts_manrope' );

function google_fonts_sinhala() {
  wp_enqueue_style( 'google-fonts-sinhala', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts_sinhala' );

/* Acdding Menu bar */
function register_wooks_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'bottom-menu' => __( 'Bottom Menu' )
    )
  );
}
add_action( 'init', 'register_wooks_menus' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/* ACF Option pages */
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'Wooks Theme Options',
		'menu_title'	=> 'Wooks General Options',
		'menu_slug' 	=> 'wooks-theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
  ));
}

/* Access to upload .svg images */
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
  }
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Prevent include node-modules files when exporting using WP-all-in-one plugin
 */
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {

  $exclude_filters[] = 'themes/wooks/node_modules';

  return $exclude_filters;

  $exclude_filters[] = 'themes/wooks/node_modules';
  return $exclude_filters;
}); 