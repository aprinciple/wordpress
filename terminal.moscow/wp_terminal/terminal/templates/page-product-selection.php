<?php
/*
Template Name: Выбор продукта для закупки
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<section class="choice">
  <div class="wrapper">
    <div class="choice-info">
      <h1 class="section-title choice-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <?php the_field('promo_text'); ?>
      <div class="choice-bottom">
        <a href="#modal-form" class="button-modal choice-subtitle">Заказать можно по телефону</a>
        <a href="tel:<?php the_field('promo_phone'); ?>"><?php the_field('promo_phone'); ?></a>
      </div>
    </div>
    <div class="choice-img">
      <?php 
        $image = get_field('promo_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'choice-img__image',
          ) );
        }
      ?>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/block-nav-icon'); ?>
<section class="working working-second">
  <div class="wrapper">
    <div class="working-info">
      <h2 class="section-title">
      <?php the_field('choice_title'); ?>
      </h2>
      <div class="working-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-bg-1.png" alt="Alt">
      </div>
      <?php the_field('choice_text'); ?>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>