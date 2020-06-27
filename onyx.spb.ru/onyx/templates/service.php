<?php 
/**
 * Template Name: Услуга
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

<section class="post-table">
  <div class="post-table__container container">
    <?php 
      $table = get_field( 'table_1' );
      if ( ! empty ( $table ) ) {
        echo '<div class="table">';
          if ( ! empty( $table['caption'] ) ) {
            echo '<span class="table__caption">' . $table['caption'] . '</span>';
          }
          echo '<div class="table__wrapper">';
            if ( ! empty( $table['header'] ) ) {
              echo '<div class="table__row table__head">';
                foreach ( $table['header'] as $th ) {
                  echo '<span class="table__header">';
                    echo $th['c'];
                  echo '</span>';
                }
              echo '</div>';
            }
            foreach ( $table['body'] as $tr ) {
              echo '<div class="table__row">';
                foreach ( $tr as $td ) {
                  echo '<span class="table__cell">';
                    echo $td['c'];
                  echo '</span>';
                }
              echo '</div>';
            }
          echo '</div>';
        echo '</div>';
      }
    ?>

    <?php 
      $table = get_field( 'table_2' );
      if ( ! empty ( $table ) ) {
        echo '<div class="table">';
          if ( ! empty( $table['caption'] ) ) {
            echo '<span class="table__caption">' . $table['caption'] . '</span>';
          }
          echo '<div class="table__wrapper">';
            if ( ! empty( $table['header'] ) ) {
              echo '<div class="table__row table__head">';
                foreach ( $table['header'] as $th ) {
                  echo '<span class="table__header">';
                    echo $th['c'];
                  echo '</span>';
                }
              echo '</div>';
            }
            foreach ( $table['body'] as $tr ) {
              echo '<div class="table__row">';
                foreach ( $tr as $td ) {
                  echo '<span class="table__cell">';
                    echo $td['c'];
                  echo '</span>';
                }
              echo '</div>';
            }
          echo '</div>';
        echo '</div>';
      }
    ?>

    <?php 
      $table = get_field( 'table_3' );
      if ( ! empty ( $table ) ) {
        echo '<div class="table">';
          if ( ! empty( $table['caption'] ) ) {
            echo '<span class="table__caption">' . $table['caption'] . '</span>';
          }
          echo '<div class="table__wrapper">';
            if ( ! empty( $table['header'] ) ) {
              echo '<div class="table__row table__head">';
                foreach ( $table['header'] as $th ) {
                  echo '<span class="table__header">';
                    echo $th['c'];
                  echo '</span>';
                }
              echo '</div>';
            }
            foreach ( $table['body'] as $tr ) {
              echo '<div class="table__row">';
                foreach ( $tr as $td ) {
                  echo '<span class="table__cell">';
                    echo $td['c'];
                  echo '</span>';
                }
              echo '</div>';
            }
          echo '</div>';
        echo '</div>';
      }
    ?>
  </div>
</section>

<?php get_template_part('template-parts/make-request'); ?>
<?php get_footer(); ?>