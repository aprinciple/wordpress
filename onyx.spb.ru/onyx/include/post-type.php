<?php 
/**
 * Register custom post type
 */

// Post type "Портфолио"
function theme_post_type_portfolio() {
  register_post_type('post-portfolio', array(
    'labels'             => array(
      'name'               => 'Портфолио',
      'singular_name'      => 'Портфолио',
      'add_new'            => 'Добавить новую',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись портфолио',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Портфолио',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Портфолио"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 4,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'taxonomies'         => array(),
    'map_meta_cap'       => 'true',
    'can_export'         => 'true'
  ) );
}
add_action('init', 'theme_post_type_portfolio');