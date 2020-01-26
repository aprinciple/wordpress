<?php 
  /**
   * Register custom post type
   */

  // Post type "Наша команда"
  function consull_post_type_staff() {
    register_post_type('post-staff', array(
      'labels'             => array(
        'name'               => 'Наша команда',
        'singular_name'      => 'Наша команда',
        'add_new'            => 'Добавить новую',
        'add_new_item'       => 'Добавить новую запись',
        'edit_item'          => 'Редактировать запись',
        'new_item'           => 'Новая запись',
        'view_item'          => 'Посмотреть запись',
        'search_items'       => 'Найти запись наша команда',
        'not_found'          => 'Записей не найдено',
        'not_found_in_trash' => 'В корзине записей не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Наша команда',
        'all_items'          => 'Все записи'
        ),
      'description'        => 'Записи страницы "Наша команда"',
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

  function consull_post_type_project() {
    register_post_type('post-project', array(
      'labels'             => array(
        'name'               => 'Проекты',
        'singular_name'      => 'Проекты',
        'add_new'            => 'Добавить новый проект',
        'add_new_item'       => 'Добавить новый проект',
        'edit_item'          => 'Редактировать запись',
        'new_item'           => 'Новая запись',
        'view_item'          => 'Посмотреть запись',
        'search_items'       => 'Найти запись проекты',
        'not_found'          => 'Записей не найдено',
        'not_found_in_trash' => 'В корзине записей не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Проекты',
        'all_items'          => 'Все записи'
        ),
      'description'        => 'Записи страницы "Проекты"',
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

  function consull_post_type_news() {
    register_post_type('post-news', array(
      'labels'             => array(
        'name'               => 'Новости',
        'singular_name'      => 'Новости',
        'add_new'            => 'Добавить новую новость',
        'add_new_item'       => 'Добавить новую новость',
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
      'menu_position'      => 6,
      'menu_icon'          => 'dashicons-welcome-write-blog',
      'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
      'taxonomies'         => array(),
      'map_meta_cap'       => 'true',
      'can_export'         => 'true'
    ) );
  }

  function consull_post_type_referral() {
    register_post_type('post-referral', array(
      'labels'             => array(
        'name'               => 'Команда направления',
        'singular_name'      => 'Команда направления',
        'add_new'            => 'Добавить новую',
        'add_new_item'       => 'Добавить новую запись',
        'edit_item'          => 'Редактировать запись',
        'new_item'           => 'Новая запись',
        'view_item'          => 'Посмотреть запись',
        'search_items'       => 'Найти запись команда направления',
        'not_found'          => 'Записей не найдено',
        'not_found_in_trash' => 'В корзине записей не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Команда направления',
        'all_items'          => 'Все записи'
        ),
      'description'        => 'Записи страницы "Команда направления"',
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

?>