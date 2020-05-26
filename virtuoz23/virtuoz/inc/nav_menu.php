<?php

/**
 * Register nav-menus of site
 */
function theme_register_nav_menu() {
  register_nav_menus( array(
    'header_menu' => 'Главное меню',
  ) );
}
add_action('after_setup_theme', 'theme_register_nav_menu');

class Theme_Walker_Nav_Menu extends Walker_Nav_Menu {

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

    if ($depth === 0) {
      $classes = ['rd-nav-item level-0'];
    } else {
      $classes = ['rd-dropdown-item level-1'];
    }

    if ( $item->current ) {
      $classes = ['select active'];
    }

    // if ( $args->walker->has_children ) {
    //   $classes[] = '';
    // }
  
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
    $atts['class'] = 'rd-nav-link';
    $atts['href']         = ! empty( $item->url ) ? $item->url : '';
    $atts['aria-current'] = $item->current ? 'page' : '';
    
    if ($depth > 0) {
      $atts['class'] = 'rd-dropdown-link';
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
		$output .= '<span class="rd-navbar-submenu-toggle"></span><ul class="rd-menu rd-navbar-dropdown">';
  }
}