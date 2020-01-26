<?php
/*
Template Name: Бензин
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<?php get_template_part('template-parts/block-promo'); ?>
<?php get_template_part('template-parts/block-table'); ?>
<?php get_template_part('template-parts/block-sale'); ?>
<section class="selling selling-big selling-versa">
  <div class="wrapper">
    <div class="selling-img">
    <?php 
      $image = get_field('petrol_adv_image');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], 'xl', false );
      }
    ?>
    </div>
    <div class="selling-info petrol__list">
      <h2 class="page-title">
      <?php the_field('petrol_adv_title'); ?>
      </h2>
      <?php the_field('petrol_adv_text'); ?>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/block-delivery'); ?>
<?php get_template_part('template-parts/block-certificates'); ?>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>