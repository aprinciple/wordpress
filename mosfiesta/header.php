<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body class="p-home">
  <header class="header p-home__header" id="header">
    <div class="container header__bar">
      <a class="logo header__logo" href="<?= home_url(); ?>" data-san="animate__fadeInLeft">
        <img class="logo__image" src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Mosfiesta" />
      </a>
      <nav class="menu header__menu">
        <button 
          type="button" 
          class="menu__button" 
          aria-expanded="false" 
          aria-controls="menu__list" 
        >
          <svg class="menu__icon">
            <use class="menu__icon-menu" href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#toggle"></use>
            <use class="menu__icon-cross" href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#cross"></use>
          </svg>
        </button>
        <ul id="menu__list" class="menu__list">
          <li class="menu__item">
            <a class="menu__link" href="#about">О нас</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#we-do">Мы делаем</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#portfolio">Портфолио</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#reviews">Отзывы</a>
          </li>
          <li class="menu__item">
            <a class="menu__link" href="#contacts">Контакты</a>
          </li>
          <li class="menu__social">
            <div class="social">
              <a class="social__item" href="<?php the_field('c_fb'); ?>" aria-label="Facebook" target="_blank">
                <svg class="social__icon">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#facebook"></use>
                </svg>
              </a>
              <a class="social__item" href="<?php the_field('c_im'); ?>" aria-label="Instagram" target="_blank">
                <svg class="social__icon">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#instagram"></use>
                </svg>
              </a>
              <a class="social__item" href="<?php the_field('c_tw'); ?>" aria-label="Twitter" target="_blank">
                <svg class="social__icon social__icon--twitter">
                  <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#twitter"></use>
                </svg>
              </a>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>