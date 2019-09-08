<?php 

  /**
   * Register custom post type
   */

  // Post type "Want - Хочу"
  function scorp_post_type_want() {
    register_post_type('post-want', array(
      'labels'             => array(
        'name'               => 'Записи - Хочу',
        'singular_name'      => 'Хочу',
        'add_new'            => 'Добавить новую',
        'add_new_item'       => 'Добавить новую запись',
        'edit_item'          => 'Редактировать запись',
        'new_item'           => 'Новая запись',
        'view_item'          => 'Посмотреть запись',
        'search_items'       => 'Найти запись хочу',
        'not_found'          => 'Записей не найдено',
        'not_found_in_trash' => 'В корзине записей не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Записи - Хочу',
        'all_items'          => 'Все записи'
        ),
      'description'        => 'Записи страницы "Хочу"',
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

  // Post type "Can - Могу"
  function scorp_post_type_can() {
    register_post_type('post-can', array(
      'labels'             => array(
        'name'               => 'Записи - Могу',
        'singular_name'      => 'Могу',
        'add_new'            => 'Добавить новую',
        'add_new_item'       => 'Добавить новую запись',
        'edit_item'          => 'Редактировать запись',
        'new_item'           => 'Новая запись',
        'view_item'          => 'Посмотреть запись',
        'search_items'       => 'Найти запись могу',
        'not_found'          => 'Записей не найдено',
        'not_found_in_trash' => 'В корзине записей не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Записи - Могу',
        'all_items'          => 'Все записи'
        ),
      'description'        => 'Записи страницы "Могу"',
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

?>