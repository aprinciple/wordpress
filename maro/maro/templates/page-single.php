<?php 
/*
Template name: Страница - пост
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg">
    <img class="mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content small-page">
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
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
        <?php if ( has_post_thumbnail()) { ?>
          <?php the_post_thumbnail( 'full', array( 'class' => 'catalog-img-max' ) ); ?>
        <?php } ?>
          <div class="description catalog-description">
            <?php the_content(); ?>
            <a 
              class="btn go-count" 
              href="<?php echo esc_url( home_url('/count') ); ?>">
              рассчитать стоимость
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer') ?>
</div>
<?php get_footer(); ?>