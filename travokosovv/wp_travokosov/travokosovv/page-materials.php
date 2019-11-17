<?php get_header(); ?>
<div class="page-materials__promo-post promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item--text">
      <h1 class="promo-post__title"><?php the_field("promo-title"); ?></h1>
      <?php
        $content = get_field("promo-text");
        $content = str_replace('<p', '<p class="promo-post__text"', $content); 
      ?>
      <?php echo $content; ?>
    </div>
    <div class="promo-post__item promo-post__item--slider page-materials__slider">
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

<div class="page-materials__container container">
  <div class="page-materials__menu-tab menu-tab">
    <div class="menu-tab__item menu-tab__item--nav menu-tab__nav">
      <?php wp_nav_menu( ['theme_location' => 'materials-menu'] ) ?>
    </div>
    <div class="menu-tab__item menu-tab__item--info menu-tab__info">
      <div class="menu-tab__info-images">
        <img class="menu-tab__info-image" src="" alt="">
      </div>
    </div>
  </div>
</div>

<div class="page-materials__make-request">
  <section class="make-request">
    <div class="make-request__container container">
      <p class="make-request__item make-request__text">
        Необходимый материал для производства работ Вы можете посмотреть в разделе Материалы или позвонить нашему
        оператору для уточнению расчета
      </p>
      <div class="make-request__item make-request__buttons">
        <button class="make-request__button make-request__button--order button" type="button">Сделать заявку</button>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>