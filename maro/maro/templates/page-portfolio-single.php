<?php 
/*
Template name: Страница - Портфолио-пост
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content p-portfolio-single">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="more p-portfolio-single__content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>