<?php get_header(); ?>
<?php the_post(); ?>
<div class="promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item--text">
      <h1 class="promo-post__title"><?php the_title(); ?></h1>
      <?php
        $content = get_field("promo-text");
        $content = str_replace('<p', '<p class="promo-post__text"', $content); 
      ?>
      <?php echo $content; ?>
    </div>
    <div class="promo-post__item promo-post__item--slider promo-post__slider">
      <div class="slider-post">
        <div class="slider-post__items">
          <?php 
          $counter = 1;
          while ($counter < 11):
            $slider_images = get_field('slider-images');
            $field_image = 'slider-image-' . $counter;
            $slider_image = $slider_images[$field_image];
          
            if ($slider_image): 
              echo '<div class="slider-post__item">'; 
                echo '<img class="slider-post__image" src="' . $slider_image['url'] . '" alt="' . $slider_image['alt'] . '">';
              echo '</div>';
            endif; 

            $counter++;
          endwhile;
        ?>
        </div>
        <div class="slider-post__nav">
          <button class="slider-post__button slider-post__button--left">
            <svg class="slider-post__button-icon">
              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-arrow-left"></use>
            </svg>
          </button>
          <button class="slider-post__button slider-post__button--right">
            <svg class="slider-post__button-icon">
              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-arrow-right"></use>
            </svg>
          </button>
        </div>
        <div class="slider-post__dots"></div>
      </div>
    </div>
  </div>
</div>

<section class="post-table">
  <div class="post-table__container container">
    <?php 
      $table = get_field( 'table-post' );
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
      $table = get_field( 'table-post-2' );
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
      $table = get_field( 'table-post-3' );
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

<section class="post-description">
  <div class="post-description__container container">
    <div class="post-description__items">
      <div class="post-description__item post-description__item--demo">
        <?php echo get_the_post_thumbnail('', 'full', array('class' => "post-description__item-image"));?>
      </div>

      <div class="post-description__item post-description__item--info post-description__info">
        <?php 
          $image = get_field('post-background');
          if( !empty( $image ) ): ?>
        <img class="post-description__info-background" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>
        <h2 class="post-description__item-title"><?php the_field('post-title'); ?></h2>
        <div class="post-description__info-wrapper">
          <div class="post-description__item-text">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="make-request">
  <div class="make-request__container container">
    <p class="make-request__item make-request__text">
      Необходимый материал для производства работ Вы можете посмотреть в разделе Материалы или позвонить нашему
      оператору для уточнению расчета
    </p>
    <div class="make-request__item make-request__buttons">
      <a class="make-request__button make-request__button--transparent button"
        href="<?php echo home_url(); ?>/materials" target="_blank">Материалы</a>
      <button class="make-request__button make-request__button--order button" type="button">Сделать заявку</button>
    </div>
  </div>
</section>
<?php get_footer(); ?>