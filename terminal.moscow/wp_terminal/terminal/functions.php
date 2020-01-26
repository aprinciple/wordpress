<?php

  add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );
  add_action( 'after_setup_theme', 'theme_title' );
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  // add_action( 'after_setup_theme', 'theme_add_thumbnails' );

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
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js?render=6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7', '', 'null', );
  }

  // Setting name of title for every page of site
  function theme_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
  function theme_add_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size(650, 450, true);
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
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/menu.php';

  // Form order
  require get_template_directory() . '/inc/form-order.php';
	require get_template_directory() . '/inc/form-leave.php';
	require get_template_directory() . '/inc/form-request.php';
	
	add_filter('template_include', 'my_template');
  function my_template( $template ) {

    // Pages
    if( is_front_page() ) {
      if ( $new_template = locate_template( array( 'templates/page-home.php' ) ) )
        return $new_template ;
    }
  
    return $template;
  }

  /**
   * Filters
   */
  
  remove_all_filters( 'wp_mail_from' );
  remove_all_filters( 'wp_mail_from_name' );

?>