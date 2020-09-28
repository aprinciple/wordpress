<header class="header">
  <div class="header__bar">
    <div class="container header__bar-wrapper">
      <a 
        class="logo header__logo" 
        data-san="fade-in-left" 
        href="<?= home_url(); ?>"
      >
        <div class="logo__wrap">
          <img class="logo__image" src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="NIMS" />
        </div>
      </a>
      <button class="header__toggle" type="button">
        <span class="header__toggle-icon"></span>
      </button>
      <nav class="menu header__menu">
        <?php wp_nav_menu( ['theme_location'  => 'header_menu'] ); ?>
      </nav>
    </div>
  </div>
  <div 
    class="header__promo"
    style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID()); ?>')"
    >
    <div class="container">
      <div class="header__promo-inner">
        <h1
          class="header__promo-title"
          data-san="fade-in-bottom"
          data-san-delay="300"
        >
          <?php the_field('title'); ?>
        </h1>
        <div data-san="fade-in-right" data-san-delay="500">
          <?php the_field('subtitle'); ?>
        </div>
        <div class="header__promo-buttons">
          <a 
            class="button" 
            data-san="fade-in-bottom"
            data-san-delay="700" 
            href="<?php the_field('btn_link'); ?>"
          >
            <div class="button__wrapper">
              <span class="button__text"><?php the_field('btn_text'); ?></span>
            </div>
          </a>
          <a 
            class="button" 
            data-san="fade-in-top"
            data-san-delay="900"
            href="<?php the_field('btn_link_2'); ?>"
          >
            <div class="button__wrapper">
              <span class="button__text"><?php the_field('btn_text_2'); ?></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>