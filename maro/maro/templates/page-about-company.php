<?php 
/*
Template name: Страница - О компании
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav'); ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content p-about">
    <?php the_post(); ?>
    <div class="container p-about__container">
      <div class="p-about__item">
        <div class="head">
          <h2>
            <?php the_title(); ?>
          </h2>
        </div>
        <div class="p-about__description">
          <img class="p-about__description-image" src="<?= get_stylesheet_directory_uri(); ?>/assets/img/about-logo.png" alt="Логотип - Маро">
          <div class="p-about__description-content">
            <?php the_field('about_text'); ?>
          </div>
        </div>
        <div class="p-about__production">
          <h3 class="p-about__production-title">
          <?php the_field('a_prod_title'); ?>
          </h3>
          <div class="p-about__production-images">
          <?php 
            $counter = 1;
            while ($counter < 13):
              $images = get_field('a_prod_imgs');
              $field_image = 'a-prod-img_' . $counter;
              $image = $images[$field_image];
            
              if ($image): 
                ?>
                  <a class="p-about__production-image" data-fancybox="gallery" href="<?= $image['url']; ?>">
                    <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                  </a>
                <?php
              endif; 

              $counter++;
            endwhile;
          ?>
          </div>
          <p class="p-about__production-text">
            <?php the_field('a_prod_txt'); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>