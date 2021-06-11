<?php
add_theme_support( 'title-tag' );

// Wrapper function for css
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
  wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

// Wrapper function for js
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = true ) {
  wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Register and enqueue styles
 */
function theme_register_css() {
  enqueue_versioned_style('main', '/assets/css/style.css');
  wp_enqueue_style('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css');
  wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {
  wp_enqueue_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', '', '', true);
  enqueue_versioned_script('main', '/assets/js/script.min.js');
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
  // add_image_size( 'post-project', 800, 865, true );
}

function remove_default_image_sizes( $sizes ) {
  
  /* Default WordPress */
  unset( $sizes[ 'thumbnail' ]);       // Remove Thumbnail (150 x 150 hard cropped)
  unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
  unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)
  
  /* With WooCommerce */
  unset( $sizes[ 'shop_thumbnail' ]);  // Remove Shop thumbnail (180 x 180 hard cropped)
  unset( $sizes[ 'shop_catalog' ]);    // Remove Shop catalog (300 x 300 hard cropped)
  unset( $sizes[ 'shop_single' ]);     // Shop single (600 x 600 hard cropped)
  
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );

function aw_custom_add_image_sizes() {
  add_image_size( 'small', 375, 9999 ); // 375px wide unlimited height
  add_image_size( 'medium', 768, 9999 ); // 768px wide unlimited height
  add_image_size( 'medium_large', 1024, 9999 ); // 1024px wide unlimited height
  add_image_size( 'lg', 1200, 9999 ); // 1200px wide unlimited height
  add_image_size( 'xl', 2000, 9999 ); // 2000px wide unlimited height
}
// add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );

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
require get_template_directory() . '/inc/post-type.php';