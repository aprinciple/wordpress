<?php 
  /**
   * Register custom post type
   */

  // Post type "Title"

add_action('init', 'theme_post_type_services');
function theme_post_type_services() {
  register_post_type('post-services', array(
    'labels'             => array(
      'name'               => 'Услуги',
      'singular_name'      => 'Услуги',
      'add_new'            => 'Добавить новый вуз',
      'add_new_item'       => 'Добавить новый вуз',
      'edit_item'          => 'Редактировать запись',
      'new_item'           => 'Новая запись',
      'view_item'          => 'Посмотреть запись',
      'search_items'       => 'Найти запись услуги',
      'not_found'          => 'Записей не найдено',
      'not_found_in_trash' => 'В корзине записей не найдено',
      'parent_item_colon'  => '',
      'menu_name'          => 'Услуги',
      'all_items'          => 'Все записи'
      ),
    'description'        => 'Записи страницы "Услуги"',
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