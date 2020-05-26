<?php 
/*
Template name: Страница - пост (цветная)
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="wave-up"></div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
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
        <div class="col-lg-6 col-md-5 col-sm-5 col-9">
          <div class="house">
            <?php 
              $image = get_field('post_img_light');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'house-light',
                ) );
              }
            ?>
            <?php 
              $image = get_field('post_img_dark');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'house-dark',
                ) );
              }
            ?>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-12 order-1 order-md-0 order-xs-2">
          <div class="info">
            <h4>
              <?php the_field('post_title'); ?>
            </h4>
            <?php the_field('post_text'); ?>
            <a class="btn go-count" href="<?php echo esc_url( home_url('/count') ); ?>">
              рассчитать стоимость
            </a>
          </div>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-2 col-3">
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
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <?php 
            $image = get_field('post_ftrs_img_light');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                'class' => 'sketch',
                'id' => 'sketch-light',
              ) );
            }
          ?>
          <?php 
            $image = get_field('post_ftrs_img_dark');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                'class' => 'sketch',
                'id' => 'sketch-dark',
              ) );
            }
          ?>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <div class="characteristics">
            <?php the_field('post_features'); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="slider slider-simple">
            <div class="owl-carousel owl-simple owl-theme">
              <?php 
                $counter = 1;
                while ($counter < 11):
                  $slider_images = get_field('post_slider_imgs');
                  $field_image = 'post_slider_img-' . $counter;
                  $slider_image = $slider_images[$field_image];
                
                  if ($slider_image): 
                    $src_image = wp_get_attachment_image_url( $slider_image['id'], 'full' );
                    echo '<div class="simple-slide">';
                      echo "<a data-fancybox=\"gallery\" href=".$src_image.">";
                        echo wp_get_attachment_image( $slider_image['id'], 'medium', false, array( 
                            'class' => 'img-fit',
                          ) );
                      echo '</a>';
                    echo '</div>';
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
  <?php get_template_part('template-parts/block-footer') ?>
</div>
<?php get_template_part('template-parts/footer-single-full') ?>