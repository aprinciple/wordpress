<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<!DOCTYPE html>
<html lang="<?php echo determine_locale(); ?>" id="page">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
	<div class="page__header">
    <header class="header">
      <div class="header__container container">
        <div class="header__bar">
          <div class="header__logo">
            <a class="logo" href="<?php echo esc_url( home_url() ); ?>" rel="home" title="Практику сдал!">
              <svg class="logo__image">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#logo"></use>
              </svg>
              <span class="logo__text">
                <?php the_field('header_logo_text', $frontpage_id); ?>
              </span>
            </a>
          </div>
          <button class="header__toggle">
            <span class="header__toggle-icon"></span>
            Menu
          </button>
          <div class="header__menu">
            <nav class="menu">
              <?php wp_nav_menu( ['theme_location' => 'header-menu'] ); ?>
            </nav>
          </div>
          <div class="header__contacts">
            <div class="contacts">
              <!-- <a 
                class="contacts__item" 
                href="tel:<?php the_field('header_phone', $frontpage_id); ?>">
                <?php the_field('header_phone', $frontpage_id); ?>
              </a> -->
              <a 
                class="contacts__item" 
                href="mailto:<?php the_field('header_email', $frontpage_id); ?>">
                <?php the_field('header_email', $frontpage_id); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php 
      if( is_front_page() ) {
        get_template_part('template-parts/section-promo-header');
      }
    ?>
	</div>