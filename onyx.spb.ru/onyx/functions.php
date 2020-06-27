<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_register_css' );
function theme_register_css() {
  wp_enqueue_style('gfont-open-sans', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap');
  wp_enqueue_style('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css');
}

add_action( 'wp_enqueue_scripts', 'theme_register_js' );
function theme_register_js() {
  wp_enqueue_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', '', '', true);
  wp_enqueue_script('onyx-form', get_stylesheet_directory_uri() . '/storage/js/form.js', '', '', true);
  wp_enqueue_script('onyx-script', get_stylesheet_directory_uri() . '/storage/js/script.js', '', '', true);
}

add_action( 'after_setup_theme', 'theme_remove_actions' );
function theme_remove_actions() {
  remove_action( 'storefront_header', 'storefront_product_search', 40 );
  remove_action( 'storefront_header', 'storefront_header_cart', 60 );
  remove_action( 'storefront_footer', 'storefront_credit', 20 );
}

add_action( 'after_setup_theme', 'theme_add_actions' );
function theme_add_actions() {
  add_action( 'storefront_header', 'theme_header_contacts', 30 );
  add_action( 'storefront_header', 'storefront_header_cart', 40 );
  add_action( 'storefront_footer', 'theme_footer', 20 );
  add_action( 'storefront_after_footer', 'theme_footer_copyright', 10 );
}

function theme_header_contacts() {
  ?>
    <?php 
      $frontpage_id = get_option( 'page_on_front' );
    ?>
    <div class="b-contacts">
      <ul class="b-contacts__list">
        <li class="b-contacts__item">
          <a 
            class="b-contacts__link b-contacts__link--vk" 
            href="<?php the_field('c_vk', $frontpage_id); ?>" 
            target="_blank">
          onyx_spb
          </a>
        </li>
        <li class="b-contacts__item">
          <a 
            class="b-contacts__link b-contacts__link--mail" 
            href="mailto:<?php the_field('c_mail', $frontpage_id); ?>" 
            target="_blank">
          <?php the_field('c_mail', $frontpage_id); ?>
          </a>
        </li>
        <li class="b-contacts__item">
          <a 
            class="b-contacts__link b-contacts__link--phone" 
            href="tel:<?php the_field('c_phone_1', $frontpage_id); ?>" 
            target="_blank">
          <?php the_field('c_phone_1', $frontpage_id); ?>
          </a>
        </li>
      </ul>
    </div>
  <?php
}

function theme_footer() {
  ?>
  <?php 
    $frontpage_id = get_option( 'page_on_front' );
  ?>
  <div class="footer">
    <div class="footer__container container">
      <div class="footer__item footer__item--logo">
        <div class="logo">
          <h3 class="logo__title">
            <a href="<?= home_url(); ?>">Оникс</a>
          </h3>
          <h3 class="logo__subtitle">
            Мы оказываем полный спектр услуг по облицовке и обработке камня
          </h3>
        </div>
      </div>
      <div class="footer__item">
        <h6 class="footer__title">Адрес</h6>
        <ul class="footer__list">
          <li class="footer__list-item">
            <?php the_field('c_address', $frontpage_id); ?>
          </li>
        </ul>
      </div>
      <div class="footer__item">
        <h6 class="footer__title">Контакты</h6>
        <ul class="footer__list">
          <li class="footer__list-item">
            <a 
              class="footer__list-link" 
              href="tel:<?php the_field('c_phone_1', $frontpage_id); ?>">
              <?php the_field('c_phone_1', $frontpage_id); ?>
            </a>
          </li>
          <?php
            $phone_2 = get_field('c_phone_2', $frontpage_id);
            if($phone_2) {
              ?>
              <li class="footer__list-item">
                <a 
                  class="footer__list-link" 
                  href="tel:<?php the_field('c_phone_2', $frontpage_id); ?>">
                  <?php the_field('c_phone_2', $frontpage_id); ?>
                </a>
              </li>
              <?php
            }
          ?>
          <li class="footer__list-item">
            <a 
              class="footer__list-link" 
              href="mailto:<?php the_field('c_mail', $frontpage_id); ?>">
            <?php the_field('c_mail', $frontpage_id); ?>
            </a>
          </li>
        </ul>
      </div>
      <div class="footer__item footer__item--social">
        <div class="social">
          <h6 class="social__title">Соц-сети</h6>
          <ul class="social__list">
            <li class="social__item">
              <a
                class="social__link social__link--vk"
                href="<?php the_field('c_vk', $frontpage_id); ?>"
                target="_blank"
              >
              </a>
            </li>
            <li class="social__item">
              <a
                class="social__link social__link--fb"
                href="<?php the_field('c_fb', $frontpage_id); ?>"
                target="_blank"
              >
              </a>
            </li>
            <li class="social__item">
              <a
                class="social__link social__link--im"
                href="<?php the_field('c_im', $frontpage_id); ?>"
                target="_blank"
              >
              </a>
            </li>
            <li class="social__item">
              <a
                class="social__link social__link--tw"
                href="<?php the_field('c_tw', $frontpage_id); ?>"
                target="_blank"
              >
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/alert'); ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <?= do_shortcode( '[form_order]' ); ?>

  <?php

}
function theme_footer_copyright() {
  ?>
    <div class="footer-copyright">
      <div class="col-full footer-copyright__wrapper">
        <p class="footer-copyright__info">
          Правовая информация: &copy; <?= date('Y'); ?>  onyx.spb.ru
        </p>
        <p>Доставка по всей России!</p>
      </div>
    </div>
  <?php
}

// Filter nav menu

add_filter( 'wp_nav_menu_args', 'filter_wp_menu_args' );
function filter_wp_menu_args( $args ) {
	if ( $args['theme_location'] === 'primary' ) {
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'menu nav-menu';
	}
	return $args;
}

add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
	return $args->theme_location === 'primary' ? '' : $menu_id;
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'primary' ) {
		if ( $item->current ) {
			$classes[] = 'nav-menu__item--active';
		}
	}
	return $classes;
}

add_filter( 'wp_nav_menu_args', 'filter_wp_handheld_menu_args' );
function filter_wp_handheld_menu_args( $args ) {
	if ( $args['theme_location'] === 'handheld' ) {
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'menu';
	}
	return $args;
}

add_filter( 'nav_menu_item_id', 'filter_handheld_menu_item_css_id', 10, 4 );
function filter_handheld_menu_item_css_id( $menu_id, $item, $args, $depth ) {
	return $args->theme_location === 'handheld' ? '' : $menu_id;
}

add_filter( 'nav_menu_css_class', 'filter_nav_handheld_menu_css_classes', 10, 4 );
function filter_nav_handheld_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'handheld' ) {
		if ( $item->current ) {
			$classes[] = 'nav-menu__item--active';
		}
	}
	return $classes;
}

// Form order
require get_theme_file_path('include/post-type.php');
require get_theme_file_path('include/form-order.php');
require get_theme_file_path('include/form-questions.php');
require get_theme_file_path('include/form-callback.php');


add_action( 'wp', 'woa_remove_sidebar_shop_page' );
function woa_remove_sidebar_shop_page() {

  if ( is_product() ) {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
    add_filter( 'body_class', 'woa_remove_sidebar_class_body', 10 );
  }
}

function woa_remove_sidebar_class_body( $wp_classes ) {
  $wp_classes[] = 'page-template-template-fullwidth-php';
  return $wp_classes;
}