<?php 

  /**
   * Register menus of site
   */

  function theme_register_nav_menu() {
    register_nav_menus( [
      'header-menu' => 'Верхнее меню',
      'tab-menu' => 'Меню Услуги',
      'materials-menu' => 'Меню Материалы',
      'septics-menu' => 'Меню Септики',
      'drainage-menu' => 'Меню Дренажные системы',
      'fence-installation' => 'Меню Установка забора',
      'landscaping-menu' => 'Меню Озеленение',
      'thuja-menu' => 'Меню Туя',
    ] );
  }

  /**
   * Filters for main menu
   */
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
        $atts['class'] .= ' menu__link--active';
      }
    }
    return $atts;
  }

  /**
   * Filters for tab menu
   */
  add_filter( 'wp_nav_menu_args', 'filter_wp_tab_menu_args' );
  function filter_wp_tab_menu_args( $args ) {
    if ( 
        $args['theme_location'] === 'tab-menu' ||
        $args['theme_location'] === 'materials-menu' ||
        $args['theme_location'] === 'septics-menu' ||
        $args['theme_location'] === 'drainage-menu' ||
        $args['theme_location'] === 'fence-installation' ||
        $args['theme_location'] === 'landscaping-menu' || 
        $args['theme_location'] === 'thuja-menu'
       ) {
      $args['container']  = false;
      $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
      $args['menu_class'] = 'menu-tab__list';
    }
    return $args;
  }

  add_filter( 'nav_menu_item_id', 'filter_tab_menu_item_css_id', 10, 4 );
  function filter_tab_menu_item_css_id( $menu_id, $item, $args, $depth ) {
    return $args->theme_location === 'tab-menu' ? '' : $menu_id;
  }

  add_filter( 'nav_menu_css_class', 'filter_tab_menu_css_classes', 10, 4 );
  function filter_tab_menu_css_classes( $classes, $item, $args, $depth ) {
    if ( 
        $args->theme_location === 'tab-menu' ||
        $args->theme_location === 'materials-menu' ||
        $args->theme_location === 'septics-menu' ||
        $args->theme_location == 'drainage-menu' ||
        $args->theme_location == 'fence-installation' ||
        $args->theme_location == 'landscaping-menu' ||
        $args->theme_location == 'thuja-menu'
       ) {
      $classes = [
        'menu-tab__list-item'
      ];
    }
    return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'filter_tab_menu_link_attributes', 10, 4 );
  function filter_tab_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( 
        $args->theme_location === 'tab-menu' ||
        $args->theme_location === 'materials-menu' ||
        $args->theme_location === 'septics-menu' ||
        $args->theme_location == 'drainage-menu' ||
        $args->theme_location == 'fence-installation' ||
        $args->theme_location == 'landscaping-menu' ||
        $args->theme_location == 'thuja-menu'
       ) {
      $atts['class'] = 'menu-tab__list-link';
      $atts['target'] = '_blank';
      if ( $item->current ) {
        $atts['class'] .= ' menu-tab__list-link--active';
      }
    }
    return $atts;
  }


  // ATATA

  add_filter( 'wp_nav_menu_objects', 'filter_wp_nav_menu_objects', 10, 2 );
  function filter_wp_nav_menu_objects( $items, $args ) {
    if ( 
        $args->theme_location == 'tab-menu' ||
        $args->theme_location == 'materials-menu' ||
        $args->theme_location == 'septics-menu' ||
        $args->theme_location == 'drainage-menu' ||
        $args->theme_location == 'fence-installation' ||
        $args->theme_location == 'landscaping-menu' ||
        $args->theme_location == 'thuja-menu'
       ) {
      foreach ( $items as $item ) {
        $field = get_field('tab-menu-image', $item);
        $item->title .= 
          '
            <i class="menu-tab__list-link-img-url">'.$field['url'].'</i>
            <i class="menu-tab__list-link-img-alt">'.$field['alt'].'</i>
          ';
      }
    }
    return $items;
  }

?>