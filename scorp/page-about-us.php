<?php get_header('about-us'); ?>
<main class="page-about-us__main">
    <div class="container page-about-us__container">
      <div class="company">
        <h3 class="visually-hidden" class="company__title">Компания СКОРП</h3>
        <div class="company__text">
          <?php the_field('text_about_us'); ?>
        </div>
      </div>
      <div class="page-about-us__wrapper">
        <?php echo do_shortcode( '[ask_form]' ) ?>
        <div class="alert">
          <span class="alert__icon"></span>
          <p class="alert__message"></p>
          <button class="alert__close">
            <svg class="alert__close-icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-cancel"></use>
            </svg>
          </button>
        </div>
        <div class="page-about-us__contact">

          <div class="requisites">
            <h3 class="requisites__title">Счет/Банковские реквизиты</h3>
            <p class="requisites__item">Наименование банка получателя: <?php the_field('our-bank'); ?></p>
            <p class="requisites__item">Номер счета: <?php the_field('our-account-number'); ?></p>
            <p class="requisites__item">Корр. счёт: <?php the_field('our-corr-account'); ?></p>
            <p class="requisites__item">ИНН: <?php the_field('our-inn'); ?></p>
            <p class="requisites__item">КПП: <?php the_field('our-kpp'); ?></p>
            <p class="requisites__item">БИК: <?php the_field('our-bik'); ?></p>
          </div>
          <div class="confidentiality">
            <svg class="confidentiality__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-info"></use>
            </svg>
            <a class="confidentiality__link" href="<?php echo home_url('privacy-policy'); ?>">Политика конфиденциальности</a>
          </div>

          <div class="confidentiality">
            <svg class="confidentiality__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-info"></use>
            </svg>
            <a class="confidentiality__link" href="<?php echo home_url('agreement-policy'); ?>">Пользовательское соглашение</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php get_footer('about-us'); ?>