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
  wp_enqueue_style('gfont', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {
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

/**
 * Hide admin
 */
add_filter('show_admin_bar', '__return_false');

add_action( 'after_setup_theme', 'theme_add_thumbnails' );
function theme_add_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size(640, 450, true);
  // add_image_size( 'post-project', 800, 865, true );
}

function remove_default_image_sizes( $sizes ) {
  unset( $sizes[ 'thumbnail' ]);
  unset( $sizes[ 'medium' ]);
  unset( $sizes[ 'medium_large' ]);
  unset( $sizes[ 'large' ]);
  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );

function aw_custom_add_image_sizes() {
  add_image_size( 'sm', 375, 9999 ); // 375px wide unlimited height
  add_image_size( 'md', 768, 9999 ); // 768px wide unlimited height
  add_image_size( 'lmd', 1024, 9999 ); // 1024px wide unlimited height
  add_image_size( 'lg', 1200, 9999 ); // 1200px wide unlimited height
  add_image_size( 'xl', 2000, 9999 ); // 2000px wide unlimited height
}
add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );

add_filter( 'body_class','theme_body_class' );
function theme_body_class( $classes ) {

	if( is_front_page() ) {
		$classes[] = 'page';
  }

	if( is_page() || is_single() ) {
		$classes[] = 'p-subpage p-post';
  }

	if( is_page_template( 'templates/contact.php' ) ) {
		$classes[] = 'p-subpage p-contacts';
  }

	return $classes;
}

/**
 * Register nav-menus of theme
 */
require get_template_directory() . '/inc/nav_menu.php';

/**
 * Form
 */
// require get_template_directory() . '/inc/form-request.php';

/**
 * Register custom post type
 */
// require get_template_directory() . '/inc/post-type.php';

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  $content = str_replace('<br />', '', $content);
      
  return $content;
});