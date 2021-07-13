<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header p-home__header">
    <div class="container">
      <div class="header__bar">
        <a class="logo header__logo" href="<?= home_url(); ?>">
          <img 
            class="logo__image" 
            data-san="animate__fadeInLeft" 
            src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" 
            alt="<?php the_field('site-name'); ?>" 
          />
          <span class="logo__text" data-san="animate__fadeInUp" data-san-delay="300">
            <?php the_field('site-name'); ?>
          </span>
        </a>
        <nav class="menu header__menu">
          <button type="button" class="menu__button" aria-expanded="false" aria-controls="menu__list">
            <svg class="menu__icon">
              <use class="menu__icon-menu" href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#toggle"></use>
              <use class="menu__icon-cross" href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#cross"></use>
            </svg>
          </button>
          <ul id="menu__list" class="menu__list">
            <li class="menu__item" data-san="animate__fadeInDown" data-san-delay="200">
              <a class="menu__link" href="#contacts">Контакты</a>
            </li>
            <li class="menu__item" data-san="animate__fadeInUp" data-san-delay="500">
              <a class="menu__link" href="<?= wp_login_url(); ?>">Вход</a>
            </li>
            <li class="menu__item menu__item" data-san="animate__fadeInDown" data-san-delay="800">
              <a class="menu__link menu__link--sign-up" href="<?= wp_registration_url(); ?>">Регистрация</a>
            </li>
            <li class="menu__item menu__item--share" data-san="animate__fadeInUp" data-san-delay="1100">
              <button class="share-button menu__link" type="button" aria-label="Поделиться ссылкой">
                <svg class="share-button__icon">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#share"></use>
                </svg>
                Поделиться
              </button>
            </li>
          </ul>
        </nav>
      </div>
      <div class="promo header__promo" data-san="animate__zoomInDown" data-san-delay="300">
        <h1 class="promo__title"><?php the_field('promo_title'); ?></h1>
        <?php the_field('promo_text'); ?>
        <a class="button button--white promo__button" href="tel:<?= str_replace([' ', '(', ')', '-'], '', get_field('phone')); ?>">
          Попробовать бесплатно
        </a>
      </div>
    </div>
  </header>