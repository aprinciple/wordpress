<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
  $locale = determine_locale();
?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159071928-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-159071928-1');
  </script>
</head>
<body <?php body_class(); ?>>
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
                <?php wp_nav_menu( ['theme_location' => 'header-menu'] ); ?>
                <div class="menu__language-switcher">
                  <?php get_template_part('template-parts/language-switcher') ?>
                </div>
              </div>
            </nav>
          </div>
          <a 
            class="nav-bar__phone" 
            href="tel:<?php the_field('main_contacts_phone', $frontpage_id); ?>">
            <?php the_field('main_contacts_phone', $frontpage_id); ?>
          </a>
          <div class="nav-bar__language-switcher">
            <?php get_template_part('template-parts/language-switcher') ?>
          </div>
        </div>
      </div>
    </div>

    <?php if ( $locale === 'it_IT' ) { ?>
      <div class="header__advert-link">
        <div class="advert-link">
          <h3 class="advert-link__title">
            <?php the_field('promo_link_text'); ?>
          </h3>
          <a class="advert-link__link" 
            href="<?php the_field('promo_link'); ?>">
            Maggiori dettagli
            <span class="advert-link__link-icon"></span>
          </a>
        </div>
      </div>
    <? } ?>

    <div class="nav-slider">
      <div class="nav-slider__items">
        <div class="nav-slider__item">
          <div class="nav-slider__container container">
            <div class="nav-slider__inner">
              <a href="services/<?php the_field('main_slider_link-1') ?>">
                <h1 class="nav-slider__item-title">
                  <?php the_field('main_slider_title-1'); ?>
                </h1>
              </a>
              <a href="services/<?php the_field('main_slider_link-1') ?>">
                <p class="nav-slider__item-text">
                  <?php the_field('main_slider_text-1'); ?>
                </p>
              </a>
              <span class="nav-slider__item-years">
                <?php the_field('main_slider_years-1'); ?>
              </span>
              <a 
                class="nav-slider__item-link" 
                href="services/<?php the_field('main_slider_link-1') ?>">
                <?php the_field('btn_more', $frontpage_id); ?>
              </a>
            </div>
          </div>
          <?php 
            $image = get_field('main_slider_image-1');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                'class' => 'nav-slider__item-image',
              ) );
            }
          ?>
        </div>
        <div class="nav-slider__item">
          <div class="nav-slider__container container">
            <div class="nav-slider__inner">
              <a href="services/<?php the_field('main_slider_link-2') ?>">
                <h1 class="nav-slider__item-title">
                  <?php the_field('main_slider_title-2'); ?>
                </h1>
              </a>
              <a href="services/<?php the_field('main_slider_link-2') ?>">
                <p class="nav-slider__item-text">
                  <?php the_field('main_slider_text-2'); ?>
                </p>
              </a>
              <span class="nav-slider__item-years">
                <?php the_field('main_slider_years-2'); ?>
              </span>
              <a 
                class="nav-slider__item-link" 
                href="services/<?php the_field('main_slider_link-2') ?>">
                <?php the_field('btn_more', $frontpage_id); ?>
              </a>
            </div>
          </div>
          <?php 
            $image = get_field('main_slider_image-2');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                'class' => 'nav-slider__item-image',
              ) );
            }
          ?>
        </div>
        <div class="nav-slider__item">
          <div class="nav-slider__container container">
            <div class="nav-slider__inner">
              <a href="services/<?php the_field('main_slider_link-3') ?>">
                <h1 class="nav-slider__item-title">
                  <?php the_field('main_slider_title-3'); ?>
                </h1>
              </a>
              <a href="services/<?php the_field('main_slider_link-3') ?>">
                <p class="nav-slider__item-text">
                  <?php the_field('main_slider_text-3'); ?>
                </p>
              </a>
              <span class="nav-slider__item-years">
                <?php the_field('main_slider_years-3'); ?>
              </span>
              <a 
                class="nav-slider__item-link" 
                href="services/<?php the_field('main_slider_link-3') ?>">
                <?php the_field('btn_more', $frontpage_id); ?>
              </a>
            </div>
          </div>
          <?php 
            $image = get_field('main_slider_image-3');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                'class' => 'nav-slider__item-image',
              ) );
            }
          ?>
        </div>
        <div class="nav-slider__item">
          <div class="nav-slider__container container">
            <div class="nav-slider__inner">
              <a href="services/<?php the_field('main_slider_link-4') ?>">
                <h1 class="nav-slider__item-title">
                  <?php the_field('main_slider_title-4'); ?>
                </h1>
              </a>
              <a href="services/<?php the_field('main_slider_link-4') ?>">
                <p class="nav-slider__item-text">
                  <?php the_field('main_slider_text-4'); ?>
                </p>
              </a>
              <span class="nav-slider__item-years">
                <?php the_field('main_slider_years-4'); ?>
              </span>
              <a 
                class="nav-slider__item-link" 
                href="services/<?php the_field('main_slider_link-4') ?>">
                <?php the_field('btn_more', $frontpage_id); ?>
              </a>
            </div>
          </div>
          <?php 
            $image = get_field('main_slider_image-4');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                'class' => 'nav-slider__item-image',
              ) );
            }
          ?>
        </div>
      </div>
      <div class="nav-slider__nav container"></div>
    </div>
  </header>