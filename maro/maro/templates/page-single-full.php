<?php 
/*
Template name: Страница - пост (цветная)
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content page-single-full">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
            <?php global $post;
              if ( $post->post_parent ) { ?>
                <a href="<?php echo get_permalink( $post->post_parent ); ?>">
                <?php echo get_the_title( $post->post_parent ); ?>
                </a>
            <?php } ?>
          </div>
          <div class="subhead"></div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <div class="house page-single-full__promo">
  
            <div class="page-single-full__promo-wrapper">
              <div class="page-single-full__promo-figure">
                <?php 
                  $image = get_field('post_img_light');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                      'class' => 'house-light',
                      'id' => 'sketch-light',
                    ) );
                  }
                ?>
                <?php 
                  $image = get_field('post_img_dark');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                      'class' => 'house-dark',
                      'id' => 'sketch-dark',
                    ) );
                  }
                ?>
              </div>
    
              <div class="page-single-full__promo-buttons">
                <button 
                  type="button" 
                  id="on" 
                  class="sonlight light-trigger" 
                  onclick="lightOn()">
                </button>
                <button 
                  type="button" 
                  id="off" 
                  class="moon light-trigger" 
                  onclick="lightOff()">
                </button>
              </div>
            </div>
  
            <div class="info page-single-full__promo-text">
              <?php the_field('post_text'); ?>
              <a class="btn go-count page-single-full__promo-text-button" href="<?php echo esc_url( home_url('/count') ); ?>">
                рассчитать стоимость
              </a>
            </div>
  
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="table-characteristics">
  
            <div class="table-characteristics__item table-characteristics__item--image">
              <span class="table-characteristics__title">
              <?php the_field('post_char_title'); ?>
              </span>
              <div class="table-characteristics__image">
                <?php 
                  $image = get_field('post_char_img_light');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], 'full', false, array() );
                  }
                ?>
              </div>
            </div>
  
            <div class="table-characteristics__item table-characteristics__item--text">
              <span class="table-characteristics__title">
              <?php the_field('post_char_title'); ?>
              </span>

              <?php 
                $counter = 1;
                while ($counter < 6):
                  $char_items = get_field('post_char_txt');
                  $field_item = 'post_char_txt_' . $counter;
                  $char_item = $char_items[$field_item];
                
                  if ($char_item):

                    ?>
                      <div class="table-characteristics__text">
                        <?= $char_item; ?>
                      </div>
                    <?php

                  endif; 

                  $counter++;
                endwhile;
              ?>
            </div>
  
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="page-single-full__slider slider-post">
            <button class="slider-post__button slider-post__button--prev"></button>
            <button class="slider-post__button slider-post__button--next"></button>
            <div class="slider-post__items">
              <?php 
                $counter = 1;
                while ($counter < 11):
                  $slider_images = get_field('post_slider_imgs');
                  $field_image = 'post_slider_img-' . $counter;
                  $slider_image = $slider_images[$field_image];
                  if ($slider_image): 
                    ?>
                      <div class="slider-post__item">
                        <a data-fancybox="gallery" href="<?= wp_get_attachment_image_url( $slider_image['id'], 'full' ) ?>">
                          <?= wp_get_attachment_image( $slider_image['id'], 'medium', false, array() ); ?>
                        </a>
                      </div>
                    <?php
                  endif; 

                  $counter++;
                endwhile;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>