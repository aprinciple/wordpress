<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php 
    $frontpage_id = get_option( 'page_on_front' );
  ?>
  <header class="header">
    <div class="header__bar">
      <div class="container header__bar-wrapper">
        <a class="logo header__logo" href="/" data-san="fade-in-left">
          <img class="logo__image" src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo" />
        </a>
        <button class="header__toggle" type="button">
          <span class="header__toggle-icon"></span>
        </button>
        <div class="header__menu">
          <div class="header__advice">
            <div class="header__advice-item">
              <p class="header__advice-text" data-san="fade-in-top" data-san-delay="100">
              <?php the_field('phone_text', $frontpage_id); ?>
              </p>
              <a 
                class="header__advice-phone" 
                data-san="fade-in-right" 
                data-san-delay="300" 
                href="tel:<?php the_field('phone_num_nf', $frontpage_id); ?>"
              >
              <?php the_field('phone_num', $frontpage_id); ?>
              </a>
            </div>
            <div class="header__advice-item header__advice-item--mobile">
              <p class="header__advice-text" data-san="fade-in-top" data-san-delay="400">
                Благоустройство территории участка
              </p>
              <a class="header__advice-phone" data-san="fade-in-right" data-san-delay="500" href="https://travokosovv.ru" target="_blank">
                Travokosovv.ru
              </a>
            </div>
          </div>
          <nav class="menu">
            <?php wp_nav_menu([
              'theme_location' => 'header_menu'
            ]); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>