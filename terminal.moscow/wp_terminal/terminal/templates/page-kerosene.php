<?php
/*
Template Name: Керосин ТС-1
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<?php get_template_part('template-parts/block-promo'); ?>
<?php get_template_part('template-parts/block-table'); ?>
<?php get_template_part('template-parts/block-sale'); ?>
<section class="selling selling-text">
  <div class="wrapper">
    <div class="selling-info">
      <h2 class="page-title">
      <?php the_field('block-1_title'); ?>
      </h2>
      <?php the_field('block-1_text'); ?>
    </div>
  </div>
</section>
<section class="selling selling-conversely block-mob">
  <div class="wrapper">
    <div class="selling-info kerosene__selling-info">
      <h2 class="page-title">
      <?php the_field('block-2_title'); ?>
      </h2>
      <?php the_field('block-2_text'); ?>
    </div>
    <div class="selling-img">
      <?php 
        $image = get_field('block-2_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'page-investing__promo-post-item-picture-image',
          ) );
        }
      ?>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/block-causes'); ?>
<?php get_template_part('template-parts/block-delivery'); ?>
<?php get_template_part('template-parts/block-certificates'); ?>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>