<?php

  add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  add_action('init', 'praktika_post_type_services');
  add_action('init', 'praktika_post_type_universities');
  add_action( 'after_setup_theme', 'theme_add_thumbnails' );


  // Wrapper function for css
  function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
    wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
  }

  // Wrapper function for js
  function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
    wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
  }

  // Getting files of css/js
  function theme_styles_scripts() {
    enqueue_versioned_style( 'style', '/assets/css/style.css' );
    enqueue_versioned_script( 'script', '/assets/js/script.js', array(), true );
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LfK3uAUAAAAADkInJv9kTtSxSlW9VOk-Txt0uVq', '', 'null', );
  }

  // Setting name of title for every page of site
  function theme_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
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

add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
function aw_custom_add_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    'xsm' => __( 'XSmall' ),
    'sm' => __( 'Small' ),
    'md' => __( 'Medium' ),
    'lg' => __( 'Large' ),
    'xl' => __( 'XLarge' ),
  ) );
}

 /**
  * Setting the class name for pages
  */

  add_filter( 'body_class','my_class_names' );
  function my_class_names( $classes ) {

    // Pages
    if( is_front_page() ) {
      $classes[] = 'page';
      return $classes;
    }

    return $classes;
  }

  /**
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/menu.php';

  // Forms
  require get_template_directory() . '/inc/form-request.php';


  /**
   * Register custom post type
   */
  require get_template_directory() . '/inc/post-type.php';

  //  Include templates

  add_filter('template_include', 'my_template');
  function my_template( $template ) {

    // Pages
    if( is_front_page() ) {
      if ( $new_template = locate_template( array( 'templates/page-home.php' ) ) )
        return $new_template;
    }

    // Posts
    if ( get_post_type() === 'post-services' ) {
      $new_template = locate_template( array( 'templates/post-services.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }

    if ( get_post_type() === 'post-universities' ) {
      $new_template = locate_template( array( 'templates/post-universities.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }
  
    return $template;
  }


  // add_filter( 'post_type_link', 'remove_post_slug', 10, 3 );
  function remove_post_slug( $post_link, $post, $leavename ) {

    if ( 'post-services' != $post->post_type ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
  }

  // add_action( 'pre_get_posts', 'parse_request_trick' );
  function parse_request_trick( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post-services' ) );
    }
  }
  
  /**
   * Setting excerpt
   */
  add_filter( 'excerpt_length', function() {
    return 50;
  });
  add_filter('excerpt_more', function($more) {
    return '...';
  });

  ## Отключает новый редактор блоков в WordPress (Гутенберг).
  ## ver: 1.0
  if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
    remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );
    add_action( 'admin_init', function(){
      remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
      add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
  }

?>