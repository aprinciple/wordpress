<?php

// Wrapper function for css
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
  wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

// Wrapper function for js
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
  wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Register and enqueue css
 */
function theme_register_css() {
  wp_enqueue_style( 'gfont-pt-sans', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap' );
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
  wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  enqueue_versioned_style( 'main', '/assets/css/style.css' );
  enqueue_versioned_style( 'ml-icons', '/assets/fonts/MaterialIcons.css' );
  enqueue_versioned_style( 'ml-design-icons', '/assets/fonts/materialdesignicons.css' );
  enqueue_versioned_style( 'fl-bigmug', '/assets/fonts/fl-bigmug-line.css' );
}
add_action('wp_enqueue_scripts', 'theme_register_css');


/**
 * Register and enqueue scripts
 */
function theme_register_js() {
  enqueue_versioned_script( 'email-decode', '/assets/js/email-decode.min.js', array(), true );
  enqueue_versioned_script( 'core', '/assets/js/core.min.js', array(), true );
  enqueue_versioned_script( 'main', '/assets/js/script.js', array(), true );
  wp_enqueue_script( 'marquiz', 'https://script.marquiz.ru/v1.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_register_js');

add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);

/**
* Adding thumbnails
*/
function theme_add_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size(350, 290, true);
  add_image_size( 'post-news', 770, 430, true );
}
add_action( 'after_setup_theme', 'theme_add_thumbnails' );
  
/**
 * Removing default image sizes
 */
function theme_unset_image_sizes( $sizes) {
  unset( $sizes['thumbnail']);
  // unset( $sizes['medium']);
  // unset( $sizes['medium_large']);
  // unset( $sizes['large']);
  
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'theme_unset_image_sizes');

/**
 * Register nav-menus of site
 */
require get_template_directory() . '/inc/nav_menu.php';
require get_template_directory() . '/inc/breadcrumb.php';
require get_template_directory() . '/inc/post-type.php';
require get_template_directory() . '/inc/taxonomies.php';