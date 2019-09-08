<?php 

  /**
   * Filter classes of body
   */
  add_filter( 'body_class','my_body_classes' );
  function my_body_classes( $classes ) {
    $class = array_pop($classes);
    $classes = array();
    array_push($classes, $class);

    if ( is_user_logged_in() ) {
      $classes[] = 'logged-in';
    }

    if ( is_user_role_in('inventor') ) {
      array_push($classes, 'logged-inventor');
    } else {
      array_push($classes, '');
    }
    
    return $classes;
  }

?>