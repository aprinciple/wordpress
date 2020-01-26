<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap&subset=cyrillic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>

<body <body <?php body_class('page'); ?>>
  <header class="header">
    <div class="header__top">
      <div class="header__top-wrapper container">
        <a class="logo" href="<?php echo home_url(); ?>">
          <img class="logo__image" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Логотип">
          <span class="logo__text"><b>Снег</b>Утиль</span>
        </a>
        <button class="header__top-toggle" type="button"></button>
        <nav class="menu header__menu">
          <ul class="menu__list">
            <li class="menu__item"><a class="menu__link" href="#advantages">Преимущества</a></li>
            <li class="menu__item"><a class="menu__link" href="#our-works">Портфолио</a></li>
            <li class="menu__item"><a class="menu__link" href="#export-cost">Стоимость</a></li>
            <li class="menu__item"><a class="menu__link" href="#footer">Контакты</a></li>
            <li class="menu__phone">
              <a class="menu__phone-item" href="tel:<?php the_field('contacts_phone'); ?>"><?php the_field('contacts_phone'); ?></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="header__wrapper">
      <div class="container">
        <div class="header__promo">
          <div class="header__promo-item header__promo-text">
            <h1 class="header__promo-text-title"><strong>Уборка снега и установка кондиционеров</strong> <br> в Санкт-Петербурге
            </h1>
            <p class="header__promo-text-item"><span>Механизированная</span> уборка снега</p>
            <p class="header__promo-text-item"><span>Ручная</span> уборка снега</p>
            <p class="header__promo-text-item"><span>Установка</span> кондиционеров</p>
            <p class="header__promo-text-item"><span>Квалифицированный</span> персонал</p>
          </div>
          <div class="header__promo-item header__promo-form">
            <?php echo do_shortcode( '[form_header]' ) ?>
          </div>
        </div>
      </div>
    </div>
  </header>