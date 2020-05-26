<?php 

  /**
   * Register menus of site
   */

  function theme_register_nav_menu() {
    register_nav_menus( [
      'header-menu' => 'Верхнее меню',
      'footer-menu' => 'Нижнее меню',
    ] );
  }

  // Filters for header menu
  add_filter( 'wp_nav_menu_args', 'filter_wp_menu_args' );
  function filter_wp_menu_args( $args ) {
    if ( $args['theme_location'] === 'header-menu' ) {
      $args['container']  = false;
      $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
      $args['menu_class'] = 'menu__list';
    }
    return $args;
  }

  add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
  function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
    return $args->theme_location === 'header-menu' ? '' : $menu_id;
  }

  add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
  function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'header-menu' ) {
      $classes = [
        'menu__item'
      ];
    }
    return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
  function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'header-menu' ) {
      $atts['class'] = 'menu__link';
      if ( $item->current ) {
        // $atts['class'] .= ' menu__link--active';
      }
    }
    return $atts;
  }

  // Изменяет класс у вложенного ul
  add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
  function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
    if ( $args->theme_location === 'header-menu' ) {
      $classes = [
        'menu__sub-list'
      ];
    }
    return $classes;
  }

  // Filters for footer menu

  add_filter( 'wp_nav_menu_args', 'filter_wp_menu_footer_args' );
  function filter_wp_menu_footer_args( $args ) {
    if ( $args['theme_location'] === 'footer-menu' ) {
      $args['container']  = false;
      $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
      $args['menu_class'] = 'footer__menu';
    }
    return $args;
  }

  add_filter( 'nav_menu_item_id', 'filter_menu_footer_item_css_id', 10, 4 );
  function filter_menu_footer_item_css_id( $menu_id, $item, $args, $depth ) {
    return $args->theme_location === 'footer-menu' ? '' : $menu_id;
  }

  add_filter( 'nav_menu_css_class', 'filter_nav_menu_footer_css_classes', 10, 4 );
  function filter_nav_menu_footer_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'footer-menu' ) {
      $classes = [
        'footer__menu-item'
      ];
    }
    return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_footer_link_attributes', 10, 4 );
  function filter_nav_menu_footer_link_attributes( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'footer-menu' ) {
      $atts['class'] = 'footer__menu-link';
      if ( $item->current ) {
        // $atts['class'] .= ' footer__menu-link--active';
      }
    }
    return $atts;
  }

?>