<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'main-page' ); ?>>
  <header class="header">
    <div class="header__container container">
      <div class="header__logo">
        <div class="logo">
          <a class="logo__link" href="<?php echo home_url(); ?>">
            <img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="70" height="75">
          </a>
        </div>
      </div>
      <div class="header__user">
        <div class="user user--logged-out">
          <a class="user__photo" href="<?php echo home_url('profile'); ?>">
            <?php
              $current_user = wp_get_current_user();
              $user_photo = get_the_author_meta('user_photo', $current_user->ID);
              if ($user_photo) {
                $url = $user_photo['url'];
                $user_img = '<img src=' . $url . ' width="35" height="35" alt="Фото пользователя">';
                echo $user_img; 
              } else {
                echo get_avatar($current_user->ID, 35);
              }
            ?>
          </a>

          <div class="user__logged user__logged--out">
            <a class="user__login" href="<?php echo home_url('login'); ?>">Вход</a>
            <a class="user__registration" href="<?php echo home_url('registration'); ?>">Регистрация</a>
          </div>

          <div class="user__logged user__logged--in">
            <p class="user__name">
              <?php 
                $current_user = wp_get_current_user();
                echo $current_user->display_name;
              ?>
            </p>
            <p class="user__status">
							<?php get_current_user_role(); ?>
            </p>
            <span class="user__button"></span>
          </div>

          <ul class="user__menu">
            <li class="user__menu-item">
              <a class="user__menu-link" href="<?php echo home_url('profile'); ?>">Настройки</a>
            </li>
            <li class="user__menu-item user__menu-item--status">
              <img class="user__menu-icon user__menu-icon--status" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-settings.svg" alt="Статус">
              <a class="user__menu-link" href="<?php echo home_url('get-status'); ?>">Получить статус</a>
            </li>
            <li class="user__menu-item user__menu-item--exit">
              <a class="user__menu-link" href="<?php echo wp_logout_url( home_url() ); ?>">Выход</a>
              <img class="user__menu-icon user__menu-icon--exit" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-exit.svg" alt="Выход">
            </li>
          </ul>
        </div>
      </div>

      <div class="header__search">
        <?php get_template_part( 'searchform', 'mobile' ); ?>
      </div>
    </div>
  </header>