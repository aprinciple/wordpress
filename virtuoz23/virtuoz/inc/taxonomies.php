<?php 
/**
 * Taxonomy for "Новости - post-news"
 */

function taxonomy_news() {
  register_taxonomy( 'news', [ 'post-news' ], [ 
    'label'                 => '',
    'labels'                => [
      'name'              => 'Метки',
      'singular_name'     => 'Метки',
      'search_items'      => 'Найти метки',
      'all_items'         => 'Все направления',
      'view_item '        => 'Посмотреть метки',
      'parent_item'       => 'Родитель направления',
      'parent_item_colon' => 'Родитель направления:',
      'edit_item'         => 'Редактировать метки',
      'update_item'       => 'Обновить метки',
      'add_new_item'      => 'Добавить новое метки',
      'new_item_name'     => 'Новое имя направления',
      'menu_name'         => 'Метки',
    ],
    'description'           => '',
    'public'                => true,
    'hierarchical'          => false,
    'rewrite'               => true,
    // 'rewrite'               => array( 'slug' => 'news' ), // свой слаг в URL
    // 'query_var'             => $taxonomy, // название параметра запроса
    'capabilities'          => array(),
    'meta_box_cb'           => null,
    'show_admin_column'     => true,
    'show_in_rest'          => null,
    'rest_base'             => null,
  ] );
}
add_action( 'init', 'taxonomy_news' );