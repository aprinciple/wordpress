<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>
<div class="wrapper main p-home">
  <div class="bg">
    <video class="video" loop autoplay muted>
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video2.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video2.mp4" type="video/webm">
    </video>
    <img 
      class="mask dark-blue" 
      src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-max"></div>
          <div class="description p-home__description">
            <h1 class="home-promo-title">
              <?php the_field('home_title'); ?>
            </h1>
            <?php the_field('home_text'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer') ?>
</div>
<?php get_footer(); ?>