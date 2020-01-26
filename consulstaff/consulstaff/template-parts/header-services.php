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
<body <?php body_class('page-services'); ?>>
  <header class="header header-post">
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