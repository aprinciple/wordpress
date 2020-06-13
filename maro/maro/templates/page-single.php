<?php 
/*
Template name: Страница - пост
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content page-single">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
          <div class="subhead"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 page-single__wrapper">
          <div class="page-single__figure">
            <?php if ( has_post_thumbnail()) { ?>
              <?php the_post_thumbnail( 'full', array() ); ?>
            <?php } ?>
          </div>
          <div class="description page-single__description">
            <?php the_content(); ?>
            <a 
              class="btn go-count page-single__button" 
              href="<?php echo esc_url( home_url('/count') ); ?>">
              рассчитать стоимость
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>