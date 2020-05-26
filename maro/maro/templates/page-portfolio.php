<?php 
/*
Template name: Страница - Портфолио
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg">
    <img class="mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
            <a 
              href="<?php echo esc_url( home_url( '/companies' ) ); ?>">
              компании
            </a> | 
            <a 
              href="<?php echo esc_url( home_url( '/services' ) ); ?>">
              услуги
            </a>
          </div>
          <div class="subhead"></div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_footer(); ?>