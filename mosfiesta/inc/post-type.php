<?php 
  /**
   * Register custom post type
   */

  // Post type "services"
add_action('init', 'theme_post_type_services');
function theme_post_type_services() {
  register_post_type('post-services', array(
    'labels'             => array(
      'name'               => 'Мы делаем',
      'singular_name'      => 'Мы делаем',
      'add_new'            => 'Добавить новую запись',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись мы делаем',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Мы делаем',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Мы делаем"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'taxonomies'         => array(),
    'map_meta_cap'       => 'true',
    'can_export'         => 'true'
  ) );
}

add_action('init', 'theme_post_type_portfolio');
function theme_post_type_portfolio() {
  register_post_type('post-portfolio', array(
    'labels'             => array(
      'name'               => 'Портфолио',
      'singular_name'      => 'Портфолио',
      'add_new'            => 'Добавить новую запись',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись Портфолио',
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
    'menu_position'      => 6,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'taxonomies'         => array(),
    'map_meta_cap'       => 'true',
    'can_export'         => 'true'
  ) );
}

add_action('init', 'theme_post_type_reviews');
function theme_post_type_reviews() {
  register_post_type('post-reviews', array(
    'labels'             => array(
      'name'               => 'Отзывы',
      'singular_name'      => 'Отзывы',
      'add_new'            => 'Добавить новую запись',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись отзывы',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Отзывы',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Отзывы"',
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 7,
    'menu_icon'          => 'dashicons-welcome-write-blog',
    'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
    'taxonomies'         => array(),
    'map_meta_cap'       => 'true',
    'can_export'         => 'true'
  ) );
}