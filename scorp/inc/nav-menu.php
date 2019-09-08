<?php 

  /**
   * Register nav-menus of site
   */
  function scorp_register_nav_menu() {
    register_nav_menus( [
      'breadcrumbs_home' => 'Breadcrumbs home',
      'breadcrumbs_login_menu' => 'Breadcrumbs login',
      'breadcrumbs_registration_menu' => 'Breadcrumbs registration',
      'breadcrumbs_about_us_menu' => 'Breadcrumbs about-us',
      'breadcrumbs_privacy_policy' => 'Breadcrumbs privacy-policy',
      'breadcrumbs_agreement_policy' => 'Breadcrumbs agreement-policy',
      'breadcrumbs_get_status' => 'Breadcrumbs get-status',
      'breadcrumbs_profile' => 'Breadcrumbs profile',
      'breadcrumbs_add_project' => 'Breadcrumbs add-project',
      'breadcrumbs_want' => 'Breadcrumbs want',
      'breadcrumbs_can' => 'Breadcrumbs can',
      'breadcrumbs_single_post_want' => 'Breadcrumbs project want',
      'breadcrumbs_single_post_can' => 'Breadcrumbs project can',
    ] );
  }

  /**
   * Filters for nav_menu
   */

  // Setting classes for tag 'a' in nav/menu
  add_filter('nav_menu_link_attributes', 'filter_menu_link_attributes', 10, 4);
    function filter_menu_link_attributes($atts, $item, $args, $depth) {
      if (
          $args->theme_location === 'breadcrumbs_login_menu' ||
          $args->theme_location === 'breadcrumbs_registration_menu' ||
          $args->theme_location === 'breadcrumbs_about_us_menu' ||
          $args->theme_location === 'breadcrumbs_privacy_policy' ||
          $args->theme_location === 'breadcrumbs_agreement_policy' ||
          $args->theme_location === 'breadcrumbs_get_status' ||
          $args->theme_location === 'breadcrumbs_profile' ||
          $args->theme_location === 'breadcrumbs_add_project' ||
          $args->theme_location === 'breadcrumbs_want' ||
          $args->theme_location === 'breadcrumbs_can' ||
          $args->theme_location === 'breadcrumbs_single_post_want' ||
          $args->theme_location === 'breadcrumbs_single_post_can'
        ) {
        $atts['class'] = 'breadcrumbs__link';
      }
      if ($item->current) {
        $atts['class'] = 'breadcrumbs__link breadcrumbs__link--active';
      }
      return $atts;
    }

?>