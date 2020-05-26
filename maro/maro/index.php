<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maro
 */

get_header();
?>

<div class="wrapper main">
  <div class="bg">
    <video class="video" loop autoplay muted>
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video2.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video2.mp4" type="video/webm">
    </video>
    <img 
      class="mask dark-blue" 
      src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-8 col-sm-12 col-xs-12">
          <nav class="nav">
            <a class="logo" href="<?php esc_url( home_url( '/' ) ); ?>" rel="home"></a>
            <span id="btn-burger" class="btn-burger">
              <i></i>
              <i></i>
              <i></i>
            </span>
            <span id="menu-mob" class="menu-mob">Меню</span>
            <span id="menu-close" class="menu-close">&Cross;</span>
            <?php wp_nav_menu( ['theme_location' => 'header-menu'] ); ?>
            <ul class="menu-footer">
              <li><a class="white_txt" href="#">Политика конфиденциальности</a></li>
              <li><a class="white_txt" href="#">Согласие на обработку данных</a></li>
              <li>
                <div class="copyright white_txt">© 2012-2020</div>
              </li>
            </ul>
          </nav>
        </div>
        <div class="social">
          <a href="#" class="soc instagram-black"></a>
          <a href="#" class="soc facebook-black"></a>
          <a href="#" class="soc whatsapp-black"></a>
          <a href="#" class="soc youtube-black"></a>
        </div>
      </div>
    </div>
  </header>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-max"></div>
          <div class="description">
            <h1>Изготовление наружней рекламы</h1>
            <br>
            <p>MAPO <br> рекламно-производственная компания</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-0 col-xs-0"></div>
        <div class="col-lg-8 col-md-1 col-sm-12 col-xs-12">
          <div class="confidence">
            <ul>
              <li><a href="#">Политика конфиденциальности</a></li>
              <li><a href="#">Согласие на обработку данных</a></li>
            </ul>
          </div>
          <div class="copyright">© 2012-2020</div>
        </div>
      </div>
    </div>
  </footer>
</div>

<?php get_footer(); ?>