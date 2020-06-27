<?php 
/**
 * Template Name: О нас
 */
get_header();
?>
<?php the_post(); ?>
<div class="promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item--text">
      <h1 class="promo-post__title"><?php the_title(); ?></h1>
      <?php
        the_content();
      ?>
    </div>
    <div class="promo-post__item promo-post__item--slider">
      <div class="slider-post">
        <div class="slider-post__items">
          <?php 
            $counter = 1;
            while ($counter < 6):
              $slider_images = get_field('slides');
              $field_image = 'slide_' . $counter;
              $slider_image = $slider_images[$field_image];
            
              if ($slider_image): 
                ?>
                  <div class="slider-post__item">
                    <?= wp_get_attachment_image($slider_image['id'], 'full', '', array(
                      'class' => 'slider-post__image'
                    )) ?>
                  </div>
                <?php
              endif; 

              $counter++;
            endwhile;
          ?>
        </div>
        <div class="slider-post__nav">
          <button class="slider-post__button slider-post__button--prev"></button>
          <button class="slider-post__button slider-post__button--next"></button>
        </div>
        <div class="slider-post__dots"></div>
      </div>
    </div>
  </div>
</div>

<section class="our-advantages-wrapper">
  <h2 class="b-title">
    <strong>Наши преимущества</strong>
  </h2>
  <?php get_template_part('template-parts/our-advantages'); ?>
</section>

<div class="our-reasons">
  <h2 class="our-reasons__title b-title">
  <?php the_field('reason_title'); ?>
  </h2>
  <p class="our-reasons__text">
  <?php the_field('reason_slogan'); ?>
  </p>
  <div class="our-reasons__items">
    <div class="our-reasons__item">
      <p class="our-reasons__item-text">
      <?php the_field('reason_1'); ?>
      </p>
    </div>
    <div class="our-reasons__item">
      <p class="our-reasons__item-text">
      <?php the_field('reason_2'); ?>
      </p>
    </div>
    <div class="our-reasons__item">
      <p class="our-reasons__item-text">
      <?php the_field('reason_3'); ?>
      </p>
    </div>
    <div class="our-reasons__item">
      <p class="our-reasons__item-text">
      <?php the_field('reason_4'); ?>
      </p>
    </div>
    <div class="our-reasons__item">
      <p class="our-reasons__item-text">
      <?php the_field('reason_5'); ?>
      </p>
    </div>
  </div>
</div>

<div class="we-ready">
  <h2 class="we-ready__title b-title">
  <?php the_field('ready_title'); ?>
  </h2>
  <div class="we-ready__wrapper">
    <p class="we-ready__text">
    <?php the_field('ready_text'); ?>
    </p>
    <button class="we-ready__button button button--order">Заказать звонок</button>
  </div>
</div>
<?php get_footer(); ?>