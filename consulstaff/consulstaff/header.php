<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
  $locale = determine_locale();
?>
<!DOCTYPE html>
<html lang="<?php echo determine_locale(); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class('page-home'); ?>>
  <header class="header">
    <div class="header__nav-bar">
      <div class="nav-bar">
        <div class="nav-bar__container">
          <div class="nav-bar__logo">
            <a class="logo" href="<?php echo home_url(); ?>"></a>
          </div>
          <div class="nav-bar__menu">
            <nav class="menu">
              <button class="menu__toggle"></button>
              <div class="menu__wrapper">
                <a class="menu__logo" href="<?php echo home_url(); ?>"></a>
                <?php wp_nav_menu( ['theme_location' => 'header-menu'] ); ?>
                <div class="menu__language-switcher">
                  <?php get_template_part('template-parts/language-switcher') ?>
                </div>
                <div class="menu__wrapper-aside">
                  <img class="menu__wrapper-aside-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-menu.svg" alt="Squared">
                </div>
              </div>
            </nav>
          </div>
          <?php get_template_part('template-parts/social-header') ?>
        </div>
      </div>
    </div>
    <div class="header__promo-slider">
      <div class="promo-slider">
        <div class="promo-slider__items">
          <div class="promo-slider__item">
            <div class="promo-slider__container container">
              <div class="promo-slider__inner">
                <div class="promo-slider__inner-wrapper">
                  <h1 class="promo-slider__inner-title">
                  <?php the_field('main_slider_title-1'); ?>
                  </h1>
                  <p class="promo-slider__inner-text">
                  <?php the_field('main_slider_text-1'); ?>
                  </p>
                </div>
                <span class="promo-slider__inner-years">
                <?php the_field('main_slider_years-1'); ?>
                </span>
              </div>
            </div>
            <?php 
              $image = get_field('main_slider_image-1');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                  'class' => 'promo-slider__image',
                ) );
              }
            ?>
          </div>
          <div class="promo-slider__item">
            <div class="promo-slider__container container">
              <div class="promo-slider__inner">
                <div class="promo-slider__inner-wrapper">
                  <h1 class="promo-slider__inner-title">
                    <?php the_field('main_slider_title-2'); ?>
                </h1>
                  <p class="promo-slider__inner-text">
                  <?php the_field('main_slider_text-2'); ?>
                  </p>
                </div>
                <span class="promo-slider__inner-years">
                <?php the_field('main_slider_years-2'); ?>
                </span>
              </div>
            </div>
            <?php 
              $image = get_field('main_slider_image-2');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                  'class' => 'promo-slider__image',
                ) );
              }
            ?>
          </div>
          <div class="promo-slider__item">
            <div class="promo-slider__container container">
              <div class="promo-slider__inner">
                <div class="promo-slider__inner-wrapper">
                  <h1 class="promo-slider__inner-title">
                    <?php the_field('main_slider_title-3'); ?>
                </h1>
                  <p class="promo-slider__inner-text">
                  <?php the_field('main_slider_text-3'); ?>
                  </p>
                </div>
                <span class="promo-slider__inner-years">
                <?php the_field('main_slider_years-3'); ?>
                </span>
              </div>
            </div>
            <?php 
              $image = get_field('main_slider_image-3');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                  'class' => 'promo-slider__image',
                ) );
              }
            ?>
          </div>
          <div class="promo-slider__item">
            <div class="promo-slider__container container">
              <div class="promo-slider__inner">
                <div class="promo-slider__inner-wrapper">
                  <h1 class="promo-slider__inner-title">
                    <?php the_field('main_slider_title-4'); ?>
                </h1>
                  <p class="promo-slider__inner-text">
                  <?php the_field('main_slider_text-4'); ?>
                  </p>
                </div>
                <span class="promo-slider__inner-years">
                <?php the_field('main_slider_years-4'); ?>
                </span>
              </div>
            </div>
            <?php 
              $image = get_field('main_slider_image-4');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                  'class' => 'promo-slider__image',
                ) );
              }
            ?>
          </div>
          <div class="promo-slider__item">
            <div class="promo-slider__container container">
              <div class="promo-slider__inner">
                <div class="promo-slider__inner-wrapper">
                  <h1 class="promo-slider__inner-title">
                    <?php the_field('main_slider_title-5'); ?>
                </h1>
                  <p class="promo-slider__inner-text">
                  <?php the_field('main_slider_text-5'); ?>
                  </p>
                </div>
                <span class="promo-slider__inner-years">
                <?php the_field('main_slider_years-5'); ?>
                </span>
              </div>
            </div>
            <?php 
              $image = get_field('main_slider_image-5');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                  'class' => 'promo-slider__image',
                ) );
              }
            ?>
          </div>
        </div>
        <div class="promo-slider__container container">
          <div class="promo-slider__nav">
            <button class="promo-slider__button promo-slider__button--left">
              <svg class="promo-slider__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1" viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <polygon points="476.21 223.11 57.426 223.11 91.819 188.71 70.606 167.5 0 238.11 70.606 308.71 91.819 287.5 57.426 253.11 476.21 253.11" />
              </svg>
            </button>
            <button class="promo-slider__button promo-slider__button--right">
              <svg class="promo-slider__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1" viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <polygon points="405.61 167.5 384.39 188.71 418.79 223.11 0 223.11 0 253.11 418.79 253.11 384.39 287.5 405.61 308.71 476.21 238.11" />
              </svg>
            </button>
            <div class="promo-slider__pointer">
              <span class="promo-slider__pointer-item">
          <i class="promo-slider__pointer-num">0</i>
        </span>
              <span class="promo-slider__pointer-item promo-slider__pointer-item--amount">
          /<i class="promo-slider__pointer-amount">0</i>
        </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header__bar">
      <div class="header__bar-container container">
        <div class="header__bar-item">
          <img class="header__bar-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bar.svg" alt="Consul Staff">
        </div>
        <div class="header__bar-item header__bar-aside">
          <a class="header__bar-item-link" href="mailto:<?php the_field('main_contacts_mail', $frontpage_id); ?>"><?php the_field('main_contacts_mail', $frontpage_id); ?></a>
          <a class="header__bar-item-link" href="tel:<?php the_field('main_contacts_phone', $frontpage_id); ?>"><?php the_field('main_contacts_phone', $frontpage_id); ?></a>
          <?php get_template_part('template-parts/language-switcher') ?>
        </div>
      </div>
    </div>
  </header>