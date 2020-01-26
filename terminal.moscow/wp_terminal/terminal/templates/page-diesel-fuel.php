<?php
/*
Template Name: Дизельное топливо
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<?php get_template_part('template-parts/block-promo'); ?>
<?php get_template_part('template-parts/block-table'); ?>
<?php get_template_part('template-parts/block-sale'); ?>
<section class="customers block-mob">
  <div class="wrapper">
    <div class="customers-row">
      <div class="customers-col">
        <h2 class="page-title">
        <?php the_field('advantage_title-1'); ?>
        </h2>
        <?php the_field('advantage_text-1'); ?>
      </div>
      <div class="customers-col">
        <h2 class="page-title">
        <?php the_field('advantage_title-2'); ?>
        </h2>
        <?php the_field('advantage_text-2'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/block-delivery'); ?>
<?php get_template_part('template-parts/block-certificates'); ?>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>