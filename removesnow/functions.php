<?php

  add_action( 'wp_enqueue_scripts', 'theme_ultiminus_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_add_thumbnails' );
  // add_action( 'after_setup_theme', 'theme_register_nav_menu' );

  function theme_ultiminus_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('default', get_stylesheet_directory_uri() . '/assets/css/default.css', '', '', 'all' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.3', true );
    wp_enqueue_script( 'grecapctha', 'https://www.google.com/recaptcha/api.js?render=6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC');
  }


  // Setting name of title for every page of site
  function theme_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
  function theme_add_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(650, 450, true);
    add_image_size( 'services-image', 365, 250, true );
    add_image_size( 'our-works-image', 370, 210, true );
    add_image_size( 'feedback-image', 350, 340, true );
  }

  /**
   * Register nav-menus of site
   */
  // require get_template_directory() . '/inc/menu.php';

  // Form order
  require get_template_directory() . '/inc/form-header.php';
  require get_template_directory() . '/inc/form-footer.php';
  require get_template_directory() . '/inc/form-popup.php';

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
   * Hide admin bar
   */
  add_filter('show_admin_bar', '__return_false');

  function starter_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );
  }
  add_action( 'wp_enqueue_scripts', 'starter_scripts' );

?>