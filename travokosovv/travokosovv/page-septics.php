<?php get_header(); ?>
<div class="page-septics__promo-post promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item--text">
      <h1 class="promo-post__title"><?php the_field("promo-title"); ?></h1>
      <?php
        $content = get_field("promo-text");
        $content = str_replace('<p', '<p class="promo-post__text"', $content); 
      ?>
      <?php echo $content; ?>
    </div>
    <div class="promo-post__item promo-post__item--slider page-septics__slider">
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

<div class="page-septics__container container">
  <div class="page-septics__menu-tab menu-tab">
    <div class="menu-tab__item menu-tab__item--nav menu-tab__nav">
      <?php wp_nav_menu( ['theme_location' => 'septics-menu'] ) ?>
    </div>
    <div class="menu-tab__item menu-tab__item--info menu-tab__info">
      <div class="menu-tab__info-images">
        <img class="menu-tab__info-image" src="" alt="">
      </div>
    </div>
  </div>
</div>

<section class="post-table">
  <div class="post-table__container container">
    <?php 
      $table = get_field( 'table-page-1' );
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
      $table = get_field( 'table-page-2' );
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
      $table = get_field( 'table-page-3' );
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

<div class="page-septics__make-request">
  <section class="make-request">
    <div class="make-request__container container">
      <p class="make-request__item make-request__text">
        Необходимый материал для производства работ Вы можете посмотреть в разделе Материалы или позвонить нашему
        оператору для уточнению расчета
      </p>
      <div class="make-request__item make-request__buttons">
        <a class="make-request__button make-request__button--transparent button" href="<?php echo home_url(); ?>/materials" target="_blank">Материалы</a>
        <button class="make-request__button make-request__button--order button" type="button">Сделать заявку</button>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>