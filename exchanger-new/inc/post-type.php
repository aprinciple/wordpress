<?php 
  /**
   * Register custom post type
   */

  // Post type "news"
add_action('init', 'theme_post_type_news');
function theme_post_type_news() {
  register_post_type('post-news', array(
    'labels'             => array(
      'name'               => 'Новости',
      'singular_name'      => 'Новости',
      'add_new'            => 'Добавить новую запись',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись Новости',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Новости',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Новости"',
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

add_action('init', 'theme_post_type_faq');
function theme_post_type_faq() {
  register_post_type('post-faq', array(
    'labels'             => array(
      'name'               => 'FAQ',
      'singular_name'      => 'FAQ',
      'add_new'            => 'Добавить новую запись',
      'add_new_item'       => 'Добавить новую запись',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись FAQ',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'FAQ',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "FAQ"',
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