<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>

<aside class="catalog-nav">
  <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
  <div class="catalog-title">
    <img 
      class="arrow" 
      src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-catalog.svg" alt="Каталог">
      Каталог
  </div>
  <div class="catalog-icons">
    <?php wp_nav_menu( [ 'theme_location' => 'aside-menu' ] ); ?>
  </div>
</aside>