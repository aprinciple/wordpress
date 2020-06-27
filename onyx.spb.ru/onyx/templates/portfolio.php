<?php 
/**
 * Template Name: Портфолио
 */
get_header();
?>
<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<h1 class="b-title">Наши работы</h1>

<div class="p-portfolio">
  <?php 
    $args = array(
      'post_type'      => 'post-portfolio',
      'posts_per_page' => -1,
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : ?>

      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="p-portfolio__item">
          <?php 
            $group = get_field('slides');
            $image = $group['slide_1'];
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'full', false, array() );
            }
          ?>
          <span class="p-portfolio__item-title"><?php the_title(); ?></span>
        </div>

        <div class="slider-portfolio">
          <button class="slider-portfolio__close"></button>
          <div class="slider-portfolio__items">
            <?php 
              $counter = 1;
              while ($counter < 5) :
                $group = get_field('slides');
                $field_image = 'slide_' . $counter;
                $image = $group[$field_image];
              
                if ($image) {
                  ?>
                    <div class="slider-portfolio__item">
                      <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                    </div>
                  <?php
                } 
                $counter++;
              endwhile;
            ?>
          </div>

          <div class="slider-portfolio__controls">
            <button class="slider-portfolio__button slider-portfolio__button--prev"></button>
            <button class="slider-portfolio__button slider-portfolio__button--next"></button>

            <ul class="slider-portfolio__thumbnails">
              <?php 
                $counter = 1;
                while ($counter < 5) :
                  $group = get_field('slides');
                  $field_image = 'slide_' . $counter;
                  $image = $group[$field_image];
                
                  if ($image) {
                    ?>
                      <li class="slider-portfolio__thumbnails-item">
                        <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                      </li>
                    <?php
                  } 
                  $counter++;
                endwhile;
              ?>
            </ul>

          </div>

          <div class="slider-portfolio__desc">
            <h5 class="slider-portfolio__desc-title"><?php the_title(); ?></h5>
            <?php the_field('desc'); ?>
          </div>
        </div>

        <?php wp_reset_postdata(); ?>
      <?php endwhile; ?>

  <?php endif; wp_reset_query(); ?>
</div>

<?php get_template_part('template-parts/make-request'); ?>
<?php get_footer(); ?>