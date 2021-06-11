<?php

function theme_register_nav_menu() {
  register_nav_menus( array(
    'header_menu' => 'Главное меню',
  ) );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Filters for header menu
add_filter( 'wp_nav_menu_args', 'filter_wp_nav_menu_args' );
function filter_wp_nav_menu_args( $args ) {
  if ( $args['theme_location'] === 'header_menu' ) {
    $args['container']  = false;
    $args['menu_class'] = 'menu__list';
    $args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
  }
  return $args;
}

add_filter( 'nav_menu_item_id', 'filter_nav_menu_item_css_id', 10, 4 );
function filter_nav_menu_item_css_id( $menu_id, $item, $args, $depth ) {
  return $args->theme_location === 'header_menu' ? '' : $menu_id;
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_item_css_class', 10, 4 );
function filter_nav_menu_item_css_class( $classes, $item, $args, $depth ) {
  if ( $args->theme_location === 'header_menu' ) {
    $classes = [
      'menu__item'
    ];
  }
  return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
  if ( $args->theme_location === 'header_menu' ) {
    $atts['class'] = 'menu__link';
    if ( $item->current ) {
      $atts['class'] .= ' menu__link--active';
    }
  }
  return $atts;
}

// // Изменяет класс у вложенного ul
// add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
// function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
//   if ( $args->theme_location === 'header_menu' ) {
//     $classes = [
//       'menu__sub-list'
//     ];
//   }
//   return $classes;
// }



class Theme_Walker_Nav_Menu extends Walker_Nav_Menu {

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $classes = ['menu__item'];

    if ( $args->walker->has_children ) {
      $classes[] = 'menu__sub-menu';
    }
  
    $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
  
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
  
    $output .= '<li'. $class_names .'>';
  
    $atts           = array();
    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    $atts['target'] = ! empty( $item->target ) ? $item->target : '';
    if ( '_blank' === $item->target && empty( $item->xfn ) ) {
      $atts['rel'] = 'noopener noreferrer';
    } else {
      $atts['rel'] = $item->xfn;
    }
    $atts['class'] = 'menu__link';
    $atts['href']         = ! empty( $item->url ) ? $item->url : '';
    $atts['aria-current'] = $item->current ? 'page' : '';

    if ( $item->current ) {
			$atts['class'] .= ' menu__link--active';
		}
  
    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
  
    $attributes = '';
    foreach ( $atts as $attr => $value ) {
      if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
        $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }
  
    $title = apply_filters( 'the_title', $item->title, $item->ID );
    $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
  
    $item_output  = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . $title . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="menu__list menu__sub-list">';
  }
}