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
  wp_enqueue_style('gfonts', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {
  enqueue_versioned_script('main', '/assets/js/script.min.js');
}
add_action('wp_enqueue_scripts', 'theme_register_js');

add_filter( 'body_class','theme_class_names' );
function theme_class_names( $classes ) {

	if( is_singular() )
		$classes[] = 'p-post';

	return $classes;
}

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
}

/**
 * Register nav-menus of theme
 */
require get_template_directory() . '/inc/nav_menu.php';

/**
 * Form
 */
// require get_template_directory() . '/inc/form-request.php';
// require get_template_directory() . '/inc/form-subpage.php';

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