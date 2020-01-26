<?php
/*
Template Name: Мазут М-100
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<?php get_template_part('template-parts/block-promo'); ?>
<?php get_template_part('template-parts/block-table'); ?>
<?php get_template_part('template-parts/block-sale'); ?>
<section class="fuel">
		<div class="wrapper">
			<div class="fuel-info">
				<h2 class="page-title">
        <?php the_field('block-1_title'); ?>
        </h2>
				<?php the_field('block-1_text'); ?>
			</div>
			<div class="fuel-descr">
      <?php the_field('block-1_list'); ?>
			</div>
		</div>
	</section>

	<section class="selling selling-second selling-mob__img">
		<div class="wrapper">
			<div class="selling-img">
        <?php 
          $image = get_field('block-2_image');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'xl', false );
          }
        ?>
			</div>
			<div class="selling-info">
				<h2 class="page-title">
        <?php the_field('block-2_title'); ?>
        </h2>
				<?php the_field('block-2_text'); ?>
			</div>
		</div>
	</section>
<?php get_template_part('template-parts/block-delivery'); ?>
<?php get_template_part('template-parts/block-certificates'); ?>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>