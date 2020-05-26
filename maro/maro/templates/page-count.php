<?php 
/*
Template name: Страница - Рассчитать стоимость
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-count.jpg" alt="Wave">
    <img class="mask dark-blue" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
            <br>
          </div>
          <div class="subhead"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-1 order-xs-2 order-lg-first">
          <?php echo do_shortcode( '[form_count]' ) ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="c-info">
            <?php the_field('count_text'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<div class="alert">
  <span class="alert__icon"></span>
  <div class="alert__message"></div>
  <button class="alert__close">
    <svg class="alert__close-icon" enable-background="new 0 0 60.963 60.842" version="1.1" viewBox="0 0 60.963 60.842" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
      <path d="m59.595 52.861-22.501-22.502 22.379-22.379c1.825-1.826 1.825-4.786 0-6.611-1.826-1.825-4.785-1.825-6.611 0l-22.379 22.379-22.378-22.379c-1.826-1.825-4.785-1.825-6.611 0-1.826 1.826-1.826 4.786 0 6.611l22.378 22.379-22.503 22.502c-1.826 1.826-1.826 4.785 0 6.611 0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369l22.502-22.502 22.501 22.502c0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369c1.824-1.825 1.824-4.785-1e-3 -6.611z"/>
      </svg>
  </button>
</div>
<?php get_template_part('template-parts/footer-page-count'); ?>