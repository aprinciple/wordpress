<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <div class="header-top">
          <a 
            class="logo header-top__logo" 
            href="<?php echo esc_url( home_url( '/' ) ); ?>" 
            rel="home">
            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/logo-main.png" width="235" height="78" alt="Логотип - Маро">
          </a>
          <div class="header-top__address">
            <div class="header-top__address-item">
              <h6 class="header-top__address-title">Адрес</h6>
              <p class="header-top__address-text">
              <?php the_field('h_adress', $frontpage_id); ?>
              </p>
            </div>
            <div class="header-top__address-item">
              <h6 class="header-top__address-title">Режим работы</h6>
              <p class="header-top__address-text">
              <?php the_field('h_workh', $frontpage_id); ?>
              </p>
            </div>
          </div>
          <form class="header-top__search form-search" action="<?= site_url(); ?>" method="GET">
            <input type="search" name="s" class="form-search__input" placeholder="Поиск" aria-label="Поиск">
            <button type="submit" class="form-search__button"></button>
          </form>
          <?php get_template_part( 'template-parts/block-social' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="header__nav">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php get_template_part('template-parts/block-nav'); ?>
        </div>
      </div>
    </div>
  </div>
</header>