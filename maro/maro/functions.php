<?php

add_theme_support( 'title-tag' );
add_action( 'wp_enqueue_scripts', 'theme_register_css' );
add_action( 'wp_enqueue_scripts', 'theme_register_js' );
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

  /**
   * Register and enqueue css
   */
  function theme_register_css() {
    wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap', array(), '', 'all');
    wp_enqueue_style( 'bootsrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css', array(), '', 'all');
    wp_enqueue_style( 'fancyboxcss', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array(), '', 'all');
    wp_enqueue_style( 'tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css', array(), '', 'all');

    enqueue_versioned_style( 'style', '/assets/css/style.css' );
  }

  /**
   * Register and enqueue scripts
   */
  function theme_register_js() {
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LdYRuYUAAAAANPdfG2S96uadzQBfF9BThAHRxPO', array(), '');

    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '', true);
    wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), '', true);
    wp_enqueue_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', array(), '', true);
    wp_enqueue_script('form', get_stylesheet_directory_uri() . '/assets/js/form.js', array(), '', true);

    enqueue_versioned_script('main', '/assets/js/script.js', array(), true);

    if ( is_page_template('templates/page-count.php') ) {
      wp_enqueue_script('quiz', get_stylesheet_directory_uri() . '/assets/js/quiz.js', array(), '', true);
    }

    if ( is_page_template('templates/page-count.php') ) {
      wp_enqueue_script('quiz', get_stylesheet_directory_uri() . '/assets/js/quiz.js', array(), '', true);
    }
    if ( is_page_template('templates/page-catalog.php') ) {
      wp_enqueue_script('quiz', get_stylesheet_directory_uri() . '/assets/js/catalog-preview.js', array(), '', true);
    }
    if ( is_page_template('templates/page-single-full.php') ) {
      wp_enqueue_script('quiz', get_stylesheet_directory_uri() . '/assets/js/light.on-off.js', array(), '', true);
    }
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
  require get_template_directory() . '/inc/form-callback.php';
  
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