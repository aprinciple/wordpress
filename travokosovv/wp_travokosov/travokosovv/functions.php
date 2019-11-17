<?php

  add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
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
    enqueue_versioned_style( 'style', '/assets/css/default.css' );
    enqueue_versioned_script( 'script', '/assets/js/script.js', array(), true );
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LcRE8IUAAAAAKUgSwOlfnrfLEwJN1cqbApfanxl', '', 'null', );
  }

  // Setting name of title for every page of site
  function theme_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
  function theme_add_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(650, 450, true);
    add_image_size( 'post-description', 650, 450, true );
    add_image_size( 'promo-post-slider', 780, 430, true );
    add_image_size( 'main-slider', 1800, 850, true );
    add_image_size( 'main-example-service', 500, 300, true );
    add_image_size( 'main-our-works-example', 520, 385, true );
    add_image_size( 'main-materials-example', 405, 340, true );
  }

  /**
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/menu.php';

  // Form order
  require get_template_directory() . '/inc/form-order.php';
  require get_template_directory() . '/inc/form-questions.php';

  /**
   * Filters
   */
  
  /**
   * Setting excerpt
   */
  add_filter( 'excerpt_length', function() {
    return 12;
  });
  add_filter('excerpt_more', function($more) {
    return '...';
  });

  /**
   * Disable Gutenberg
   */
  add_filter('use_block_editor_for_post', '__return_false', 10);

  /**
   * Hide admin bar
   */
  add_filter('show_admin_bar', '__return_false');

  /**
   * Check current user by role
   */

  function is_user_role_in( $roles, $user = false ) {
    if( ! $user )           $user = wp_get_current_user();
    if( is_numeric($user) ) $user = get_userdata( $user );

    if( empty($user->ID) )
      return false;

    foreach( (array) $roles as $role )
      if( isset($user->caps[ $role ]) || in_array($role, $user->roles) )
        return true;

    return false;
  }
  add_action('init', 'is_user_role_in');


  /**
   * Remove unnecessary tags of 'wp_head'
   */

  function remove_else_link() {
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'rsd_link'); 
    remove_action( 'wp_head', 'wlwmanifest_link'); 
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
    remove_action( 'wp_head', 'wp_resource_hints', 2);
    remove_action( 'wp_head', 'wp_generator' );
    add_filter('the_generator', '__return_empty_string');
  }
  add_action('init', 'remove_else_link');

  /**
   * Settings for wordpress
   */
  define('DISALLOW_FILE_EDIT', true);
  add_filter('xmlrpc_enabled', '__return_false');

  remove_all_filters( 'wp_mail_from' );
  remove_all_filters( 'wp_mail_from_name' );

?>