<?php 
  /**
   * Register custom post type
   */

  // Post type "Наша команда"
  function consull_post_type_staff() {
    register_post_type('post-staff', array(
      'labels'             => array(
        'name'               => wpm_translate_string('[:it]La nostra squadra[:en]Our team[:ru]Наша команда'),
        'singular_name'      => wpm_translate_string('[:it]La nostra squadra[:en]Our team[:ru]Наша команда'),
        'add_new'            => 'Add new',
        'add_new_item'       => 'Add new post',
        'edit_item'          => 'Edit post',
        'new_item'           => 'New post',
        'view_item'          => 'View post',
        'search_items'       => 'Find post our team',
        'not_found'          => 'No posts found',
        'not_found_in_trash' => 'No posts found',
        'parent_item_colon'  => '',
        'menu_name'          => wpm_translate_string('[:it]La nostra squadra[:en]Our team[:ru]Наша команда'),
        'all_items'          => 'All posts'
        ),
      'description'        => 'Posts page "Our team"',
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 3,
      'menu_icon'          => 'dashicons-welcome-write-blog',
      'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
      'taxonomies'         => array(),
      'map_meta_cap'       => 'true',
      'can_export'         => 'true'
    ) );
  }

  // function consull_post_type_project() { // Old
  //   register_post_type('post-project', array(
  //     'labels'             => array(
  //       'name'               => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
  //       'singular_name'      => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
  //       'add_new'            => 'Add new project',
  //       'add_new_item'       => 'Add new project',
  //       'edit_item'          => 'Edit post',
  //       'new_item'           => 'New post',
  //       'view_item'          => 'View post',
  //       'search_items'       => 'Find post projects',
  //       'not_found'          => 'No posts found',
  //       'not_found_in_trash' => 'No posts found',
  //       'parent_item_colon'  => '',
  //       'menu_name'          => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
  //       'all_items'          => 'All posts'
  //       ),
  //     'description'        => 'Posts page "Projects"',
  //     'public'             => true,
  //     'publicly_queryable' => true,
  //     'show_ui'            => true,
  //     'show_in_menu'       => true,
  //     'query_var'          => true,
  //     'rewrite'            => true,
  //     'capability_type'    => 'post',
  //     'has_archive'        => true,
  //     'hierarchical'       => false,
  //     'menu_position'      => 5,
  //     'menu_icon'          => 'dashicons-welcome-write-blog',
  //     'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields'),
  //     'taxonomies'         => array(),
  //     'map_meta_cap'       => 'true',
  //     'can_export'         => 'true'
  //   ) );
  // }

  function consull_post_type_news() {
    register_post_type('post-news', array(
      'labels'             => array(
        'name'               => wpm_translate_string('[:it]Notizie[:en]News[:ru]Новости'),
        'singular_name'      => wpm_translate_string('[:it]Notizie[:en]News[:ru]Новости'),
        'add_new'            => 'Add new post',
        'add_new_item'       => 'Add new post',
        'edit_item'          => 'Edit post',
        'new_item'           => 'New post',
        'view_item'          => 'View post',
        'search_items'       => 'Find post news',
        'not_found'          => 'No posts found',
        'not_found_in_trash' => 'No posts found',
        'parent_item_colon'  => '',
        'menu_name'          => wpm_translate_string('[:it]Notizie[:en]News[:ru]Новости'),
        'all_items'          => 'All posts'
        ),
      'description'        => 'Posts page "News"',
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

  function consull_post_type_referral() {
    register_post_type('post-referral', array(
      'labels'               => array(
        'name'               => wpm_translate_string('[:it]Team di riferimento[:en]Referral team[:ru]Команда направления'),
        'singular_name'      => wpm_translate_string('[:it]Team di riferimento[:en]Referral team[:ru]Команда направления'),
        'add_new'            => 'Add new',
        'add_new_item'       => 'Add new post',
        'edit_item'          => 'Edit post',
        'new_item'           => 'New post',
        'view_item'          => 'View post',
        'search_items'       => 'Find post referral team',
        'not_found'          => 'No posts found',
        'not_found_in_trash' => 'No posts found',
        'parent_item_colon'  => '',
        'menu_name'          => wpm_translate_string('[:it]Team di riferimento[:en]Referral team[:ru]Команда направления'),
        'all_items'          => 'All posts'
        ),
      'description'        => 'Posts page "Referral team"',
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

  function consull_post_type_library() {
    register_post_type('post-library', array(
      'labels'               => array(
        'name'               => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
        'singular_name'      => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
        'add_new'            => 'Add new',
        'add_new_item'       => 'Add new post',
        'edit_item'          => 'Edit post',
        'new_item'           => 'New post',
        'view_item'          => 'View post',
        'search_items'       => 'Find post Projects',
        'not_found'          => 'No posts found',
        'not_found_in_trash' => 'No posts found',
        'parent_item_colon'  => '',
        'menu_name'          => wpm_translate_string('[:it]Progetti[:en]Projects[:ru]Проекты'),
        'all_items'          => 'All posts'
        ),
      'description'        => 'Posts page "Projects"',
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

  function consull_post_type_objects() {
    register_post_type('objects', array(
      'labels'               => array(
        'name'               => wpm_translate_string('[:it]Oggetti[:en]Objects[:ru]Объекты'),
        'singular_name'      => wpm_translate_string('[:it]Oggetti[:en]Objects[:ru]Объекты'),
        'add_new'            => 'Add new',
        'add_new_item'       => 'Add new post',
        'edit_item'          => 'Edit post',
        'new_item'           => 'New post',
        'view_item'          => 'View post',
        'search_items'       => 'Find post Objects',
        'not_found'          => 'No posts found',
        'not_found_in_trash' => 'No posts found',
        'parent_item_colon'  => '',
        'menu_name'          => wpm_translate_string('[:it]Oggetti[:en]Objects[:ru]Объекты'),
        'all_items'          => 'All posts'
        ),
      'description'        => 'Posts page "Objects"',
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