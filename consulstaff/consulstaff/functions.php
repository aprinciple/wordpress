<?php

  add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  add_action('init', 'consull_post_type_staff');
  add_action('init', 'consull_post_type_referral');
  add_action('init', 'consull_post_type_objects');
  // add_action('init', 'consull_post_type_project'); old version
  add_action('init', 'consull_post_type_news');
  add_action('init', 'consull_post_type_library');
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
  }

  add_action('wp', 'recaptcha_for_needed_pages');
  function recaptcha_for_needed_pages() {
    if( is_front_page() )
      add_action( 'wp_enqueue_scripts', 'script_recaptcha' );

    if( is_page('contacts') )
      add_action( 'wp_enqueue_scripts', 'script_recaptcha' );

    if( is_page_template('templates/page-subsidy.php') )
      add_action( 'wp_enqueue_scripts', 'script_recaptcha' );
  }

  function script_recaptcha() {
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU', array(), null, '');
  }

    // Script of Tiny Slider
    add_action('wp', 'tiny_slider_for_pages');
    function tiny_slider_for_pages() {
      if( is_page_template('templates/page-objects.php') )
        add_action( 'wp_enqueue_scripts', 'script_tiny_slider' );
  
      if ( get_post_type() === 'objects' )
        add_action( 'wp_enqueue_scripts', 'script_tiny_slider' );
    }
    function script_tiny_slider() {
      wp_enqueue_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js', '', '', false);
    }
  
    // Style of Tiny Slider
    add_action('wp', 'style_tiny_slider_for_pages');
    function style_tiny_slider_for_pages() {
      if( is_page_template('templates/page-objects.php') )
        add_action( 'wp_enqueue_scripts', 'style_tiny_slider' );
  
      if ( get_post_type() === 'objects' )
        add_action( 'wp_enqueue_scripts', 'style_tiny_slider' );
    }
    function style_tiny_slider() {
      wp_enqueue_style('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css', '', '', '');
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
      $classes[] = 'page-home';
      return $classes;
    }

    if( is_page('about-us') ) {
      $classes[] = 'page-about-us';
      return $classes;
    }

    if( is_page('services') ) {
      $classes[] = 'page-services';
      return $classes;
    }

    if( is_page('corporate') ) {
      $classes[] = 'page-corporate';
      return $classes;
    }

    if( is_page('investing') ) {
      $classes[] = 'page-investing';
      return $classes;
    }

    if( is_page('business') ) {
      $classes[] = 'page-business';
      return $classes;
    }

    if( is_page('merger') ) {
      $classes[] = 'page-merger';
      return $classes;
    }

    // if( is_page('projects') ) {
    //   $classes[] = 'page-projects';
    //   return $classes;
    // }

    if( is_page('news') ) {
      $classes[] = 'page-news';
      return $classes;
    }

    if( is_page('contacts') ) {
      $classes[] = 'page-contacts';
      return $classes;
    }

    if( is_page('design') ) {
      $classes[] = 'page-design';
      return $classes;
    }

    if( is_page_template('templates/page-subsidy.php') ) {
      $classes[] = 'page-subsidy';
      return $classes;
    }

    if( is_page_template('templates/page-projects.php') ) {
      $classes[] = 'page-library';
      return $classes;
    }

    if( is_page_template('templates/page-objects.php') ) {
      $classes[] = 'p-objects';
      return $classes;
    }

    // Posts
    // if ( get_post_type() === 'post-project' ) {
    //   $classes[] = 'page-post-project';
    //   return $classes;
    // }

    if ( get_post_type() === 'post-news' ) {
      $classes[] = 'page-post-news';
      return $classes;
    }

    if ( get_post_type() === 'objects' ) {
      $classes[] = 'p-object';
      return $classes;
    }

    return $classes;
  }

  /**
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/menu.php';

  // Forms
  require get_template_directory() . '/inc/form-contact.php';
  require get_template_directory() . '/inc/form-home.php';
  require get_template_directory() . '/inc/form-subsidy.php';


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

    if( is_page('about-us') ) {
      if ( $new_template = locate_template( array( 'templates/page-about-us.php' ) ) )
        return $new_template;
    }

    if( is_page('services') ) {
      if ( $new_template = locate_template( array( 'templates/page-services.php' ) ) )
        return $new_template;
    }

    if( is_page('corporate') ) {
      if ( $new_template = locate_template( array( 'templates/page-corporate.php' ) ) )
        return $new_template;
    }

    if( is_page('investing') ) {
      if ( $new_template = locate_template( array( 'templates/page-investing.php' ) ) )
        return $new_template;
    }

    if( is_page('business') ) {
      if ( $new_template = locate_template( array( 'templates/page-business.php' ) ) )
        return $new_template;
    }

    if( is_page('merger') ) {
      if ( $new_template = locate_template( array( 'templates/page-merger.php' ) ) )
        return $new_template;
    }

    // if( is_page('projects') ) {  // old version
    //   if ( $new_template = locate_template( array( 'templates/page-projects.php' ) ) )
    //     return $new_template;
    // }

    if( is_page('news') ) {
      if ( $new_template = locate_template( array( 'templates/page-news.php' ) ) )
        return $new_template;
    }

    if( is_page('contacts') ) {
      if ( $new_template = locate_template( array( 'templates/page-contacts.php' ) ) )
        return $new_template;
    }

    if( is_page('design') ) {
      if ( $new_template = locate_template( array( 'templates/page-design.php' ) ) )
        return $new_template;
    }

    if( is_page_template('templates/page-subsidy.php') ) {
      if ( $new_template = locate_template( array( 'templates/page-subsidy.php' ) ) )
        return $new_template;
    }

    // Posts
    if ( get_post_type() === 'post-staff' ) {
      $new_template = locate_template( array( 'templates/post-staff.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }

    if ( get_post_type() === 'post-referral' ) {
      $new_template = locate_template( array( 'templates/post-referral.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }

    // if ( get_post_type() === 'post-project' ) { old version
    //   $new_template = locate_template( array( 'templates/post-project.php' ) );
    //   if ( '' != $new_template ) {
    //       return $new_template;
    //   }
    // }

    if ( get_post_type() === 'post-news' ) {
      $new_template = locate_template( array( 'templates/post-news.php' ) );
      if ( '' != $new_template ) {
          return $new_template;
      }
    }
  
    return $template;
  }


  // Таксономия для "Командая направления"
  add_action( 'init', 'taxonomy_referral' );
  function taxonomy_referral(){

    register_taxonomy( 'referral', [ 'post-referral' ], [ 
      'label'                 => '',
      'labels'                => [
        'name'              => wpm_translate_string('[:it]Direzione[:en]Direction[:ru]Направление'),
        'singular_name'     => wpm_translate_string('[:it]Direzione[:en]Direction[:ru]Направление'),
        'search_items'      => 'Найти направление',
        'all_items'         => 'Все направления',
        'view_item '        => 'Посмотреть направление',
        'parent_item'       => 'Родитель направления',
        'parent_item_colon' => 'Родитель направления:',
        'edit_item'         => 'Редактировать направление',
        'update_item'       => 'Обновить направление',
        'add_new_item'      => 'Добавить новое направление',
        'new_item_name'     => 'Новое имя направления',
        'menu_name'         => wpm_translate_string('[:it]Direzione[:en]Direction[:ru]Направление'),
      ],
      'description'           => '',
      'public'                => true,
      'hierarchical'          => true,

      'rewrite'               => true,
      // 'query_var'             => $taxonomy, // название параметра запроса
      'capabilities'          => array(),
      'meta_box_cb'           => null,
      'show_admin_column'     => false,
      'show_in_rest'          => null,
      'rest_base'             => null,
    ] );
  }

  add_action( 'init', 'taxonomy_objects' );
  function taxonomy_objects(){

    register_taxonomy( 'objects-direction', [ 'objects' ], [ 
      'label'               => '',
      'labels'              => [
        'name'              => wpm_translate_string('[:it]Direzione[:en]Direction[:ru]Направление'),
        'singular_name'     => wpm_translate_string('[:it]Direzione[:en]Direction[:ru]Направление'),
        'search_items'      => 'Найти направление',
        'all_items'         => 'Все направления',
        'view_item '        => 'Посмотреть направление',
        'parent_item'       => 'Родитель направления',
        'parent_item_colon' => 'Родитель направления:',
        'edit_item'         => 'Редактировать направление',
        'update_item'       => 'Обновить направление',
        'add_new_item'      => 'Добавить новое направление',
        'new_item_name'     => 'Новое имя направления',
        'menu_name'         => wpm_translate_string('[:it]Direzione[:en]Direction[:ru]Направление'),
      ],
      'description'           => '',
      'public'                => true,
      'hierarchical'          => true,
      'rewrite'               => true,
      // 'query_var'             => $taxonomy, // название параметра запроса
      'capabilities'          => array(),
      'meta_box_cb'           => null,
      'show_admin_column'     => false,
      'show_in_rest'          => null,
      'rest_base'             => null,
    ] );
  }

  // Таксономия для "Проекты
  // add_action( 'init', 'taxonomy_project' ); // Old version
  // function taxonomy_project(){

  //   register_taxonomy( 'project', [ 'post-project' ], [ 
  //     'label'                 => '',
  //     'labels'                => [
  //       'name'              => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
  //       'singular_name'     => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
  //       'search_items'      => 'Найти проекты',
  //       'all_items'         => 'Все проекты',
  //       'view_item '        => 'Посмотреть проекты',
  //       'parent_item'       => 'Родитель проекты',
  //       'parent_item_colon' => 'Родитель проекты:',
  //       'edit_item'         => 'Редактировать проекты',
  //       'update_item'       => 'Обновить проекты',
  //       'add_new_item'      => 'Добавить новое проекты',
  //       'new_item_name'     => 'Новое имя проекты',
  //       'menu_name'         => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
  //     ],
  //     'description'           => '',
  //     'public'                => true,
  //     'hierarchical'          => true,

  //     'rewrite'               => true,
  //     // 'query_var'             => $taxonomy, // название параметра запроса
  //     'capabilities'          => array(),
  //     'meta_box_cb'           => null,
  //     'show_admin_column'     => false,
  //     'show_in_rest'          => null,
  //     'rest_base'             => null,
  //   ] );
  // }

  
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