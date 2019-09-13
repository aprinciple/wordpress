<?php

  add_action( 'wp_enqueue_scripts', 'scorp_styles_scripts' );
  add_action( 'after_setup_theme', 'scorp_title' );
  add_action( 'after_setup_theme', 'scorp_register_nav_menu' );
  add_action( 'after_setup_theme', 'scorp_add_thumbnails' );
  add_action('init', 'scorp_post_type_want');
  add_action('init', 'scorp_post_type_can');

  // Wrapper function for css
  function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
    wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
  }

  // Wrapper function for js
  function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
    wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
  }

  // Getting files of css/js
  function scorp_styles_scripts() {
    enqueue_versioned_style( 'default_theme', '/assets/css/default.css' );
    enqueue_versioned_script( 'script', '/assets/js/script.js', array(), true );
  }

  // Setting name of title for every page of site
  function scorp_title() {
    add_theme_support( 'title-tag' );
  }

  // Adding thumbnails
  function scorp_add_thumbnails() {
    add_theme_support( 'post-thumbnails', array( 'post-want', 'post-can' ) );
    add_image_size( 'post-project', 590, 305, true );
    add_image_size( 'post-slider', 480, 400, true );

  }

  /**
   * Register custom post type
   */
  require get_template_directory() . '/inc/post-type.php';

  /**
   * Register nav-menus of site
   */
  require get_template_directory() . '/inc/nav-menu.php';
		
  /**
   * Settings of redirect for page of login
   */
  require get_template_directory() . '/inc/redirect-login.php';

  /**
   * Settings of redirect for page of registration
   */
  require get_template_directory() . '/inc/redirect-registration.php';

  /**
   * Settings of redirect for page of profile
   */
  require get_template_directory() . '/inc/redirect-profile.php';


  /**
   * Custom user login, registration, profile forms
   */

  // Custom login
  require get_template_directory() . '/inc/form-login.php';

  // Custom registration
  require get_template_directory() . '/inc/form-registration.php';

  // Custom profile
  require get_template_directory() . '/inc/form-profile.php';

  // Form post of page add-project
  require get_template_directory() . '/inc/form-add-project.php';

  // Form post of page get-status
  require get_template_directory() . '/inc/form-get-status.php';

  // Form post of page about-us
  require get_template_directory() . '/inc/form-ask.php';

  // Used for tracking error messages of custom login/reg/profile pages
  function custom_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
  }

  // Displays error messages from form submissions
  function custom_show_error_messages() {
    if($codes = custom_errors()->get_error_codes()) {
      // Loop error codes and display errors
      foreach($codes as $code) {
        $message = custom_errors()->get_error_message($code);
        echo '<p class="form__error-text">Ошибка: ' . $message . '</p>';
      }
    }	
  }

  function func_response_mail() {
    static $form_result;
    return isset($form_result) ? $form_result : ($form_result = new WP_Error(null, null, null));
  }

  function show_response_mail() {
    if($codes = func_response_mail()->get_error_codes()) {
      foreach($codes as $code) {
        $message = func_response_mail()->get_error_message($code);
        if ($message == 'success') {
          echo '
          <script>
            let alert = document.querySelector(".alert");
            let alertMessage = document.querySelector(".alert__message");
            alertMessage.textContent = "Ваше сообщение отправлено!";
            alert.classList.add("alert--success");
            alert.style.display = "flex";
          </script>';
        }
        if ($message == 'failure') {
          echo '
          <script>
            let alert = document.querySelector(".alert");
            let alertMessage = document.querySelector(".alert__message");
            alertMessage.textContent = "Упс! Ошибка :(";
            alert.classList.add("alert--error");
            alert.style.display = "flex";
          </script>';
        }
      }
    }	
  }

  /**
   * Adding new role "Inventor"
   */
  require get_template_directory() . '/inc/new-role.php';


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
   * Filter classes of body
   */
  require get_template_directory() . '/inc/filter-classes-body.php';

  /**
   * Hide admin bar
   */
  add_filter('show_admin_bar', '__return_false');

  /**
   * Set default avatar
   */

  add_filter( 'avatar_defaults', 'add_default_avatar_option' );
  function add_default_avatar_option( $avatars ){
    $url = get_stylesheet_directory_uri() . '/assets/img/user-photo.png';
    $avatars[$url] = 'Аватар сайта';
    return $avatars;
  }

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