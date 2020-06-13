<?php 

  /**
   * Register menus of site
   */

  function theme_register_nav_menu() {
    register_nav_menus( [
      'header-menu' => 'Верхнее меню',
      'aside-menu' => 'Боковое меню',
    ] );
  }

  // Filters for header menu
  add_filter( 'wp_nav_menu_args', 'filter_nav_menu_args' );
  function filter_nav_menu_args( $args ) {
    if ( $args['theme_location'] === 'header-menu' ) {
      $args['container']  = false;
      $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
      $args['menu_class'] = 'top-menu';
    }
    return $args;
  }

  add_filter( 'nav_menu_item_id', 'filter_nav_menu_item_css_id', 10, 4 );
  function filter_nav_menu_item_css_id( $menu_id, $item, $args, $depth ) {
    return $args->theme_location === 'header-menu' ? '' : $menu_id;
  }

  add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
  function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'header-menu' ) {
      $classes = [''];
    }
    return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
  function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'header-menu' ) {
      $atts['class'] = 'top-menu__link';
      if ( $item->current ) {
        $atts['class'] .= ' top-menu__link--active';
      }
    }
    return $atts;
  }

  // Filters for aside menu
  add_filter( 'wp_nav_menu_args', 'filter_nav_aside_menu_args' );
  function filter_nav_aside_menu_args( $args ) {
    if ( $args['theme_location'] === 'aside-menu' ) {
      $args['container']  = false;
      $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
      $args['menu_id'] = '';
      $args['menu_class'] = 'nav-catalog__list';
    }
    return $args;
  }

  add_filter( 'nav_menu_item_id', 'filter_menu_aside_item_css_id', 10, 4 );
  function filter_menu_aside_item_css_id( $menu_id, $item, $args, $depth ) {
    return $args->theme_location === 'aside-menu' ? '' : $menu_id;
  }

  add_filter( 'nav_menu_css_class', 'filter_menu_aside_css_classes', 10, 4 );
  function filter_menu_aside_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'aside-menu' ) {
      $classes = ['nav-catalog__item'];
    }
    return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'filter_menu_aside_link_attributes', 10, 4 );
  function filter_menu_aside_link_attributes( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'aside-menu' ) {
      $atts['class'] = 'nav-catalog__link';
      if ( $item->current ) {
        $atts['class'] .= ' nav-catalog__link--active';
      }
    }
    return $atts;
  }
?>