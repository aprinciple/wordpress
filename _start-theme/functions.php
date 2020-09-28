<?php
add_theme_support( 'title-tag' );

// Wrapper function for css
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
  wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

// Wrapper function for js
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
  wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Register and enqueue styles
 */
function theme_register_css() {

}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {

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

add_action( 'after_setup_theme', 'theme_add_thumbnails' );
function theme_add_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size(650, 450, true);
  add_image_size( 'post-project', 800, 865, true );
}

add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );
function aw_custom_add_image_sizes() {
  add_image_size( 'xsm', 360, 9999 ); // 300px wide unlimited height
  add_image_size( 'sm', 768, 9999 ); // 768px wide unlimited height
  add_image_size( 'md', 1024, 9999 ); // 1024px wide unlimited height
  add_image_size( 'lg', 1280, 9999 ); // 1200px wide unlimited height
  add_image_size( 'xl', 1920, 9999 ); // 2000px wide unlimited height
}

/**
 * Register nav-menus of theme
 */
// require get_template_directory() . '/inc/nav_menu.php';

/**
 * Form
 */
// require get_template_directory() . '/inc/form-request.php';

/**
 * Register custom post type
 */
// require get_template_directory() . '/inc/post-type.php';