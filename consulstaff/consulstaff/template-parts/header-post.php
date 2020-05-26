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
  </header>