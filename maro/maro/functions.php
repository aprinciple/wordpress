<?php

  add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  add_action( 'after_setup_theme', 'theme_add_thumbnails' );
  
  // Wrapper function for css
  function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
    wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
  }

  // Getting files of css/js
  function theme_styles_scripts() {
    wp_enqueue_style( 'bootsrap', get_stylesheet_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), '', 'all');
    enqueue_versioned_style( 'style', '/assets/css/style.css' );
    wp_enqueue_script('jq', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery-3.4.1.min.js', array(), null, '');

    // wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU', array(), null, '');
  }

  add_action('wp', 'add_scripts_page_single_full');
  function add_scripts_page_single_full(){
    if ( $new_template = locate_template( array( 'templates/page-single-full.php' ) ) ) {
      add_action( 'wp_enqueue_scripts', 'page_single_full_scripts' );
    }
  }

  function page_single_full_scripts() {
    wp_enqueue_style( 'flipster', get_stylesheet_directory_uri() . '/assets/css/vendor/jquery.flipster.min.css', array(), '', 'all');
    wp_enqueue_style( 'owlcarousel', get_stylesheet_directory_uri() . '/assets/css/vendor/owl.carousel.min.css', array(), '', 'all');
    wp_enqueue_style( 'owltheme', get_stylesheet_directory_uri() . '/assets/css/vendor/owl.theme.default.css', array(), '', 'all');
    wp_enqueue_style( 'owlsettings', get_stylesheet_directory_uri() . '/assets/css/owl-settings.css', array(), '', 'all');
    wp_enqueue_style( 'fancyboxcss', get_stylesheet_directory_uri() . '/assets/css/vendor/jquery.fancybox.min.css', array(), '', 'all');

    wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery.fancybox.min.js', array(), null, '');
  }

  // Setting name of title for every page of site
  function theme_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
  function theme_add_thumbnails() {
    add_theme_support( 'post-thumbnails' );
  }

  /**
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/menu.php';

  // Forms
  require get_template_directory() . '/inc/form-count.php';
  
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