<?php get_template_part('template-parts/header-post'); ?>
  <section class="promo-post page-services__promo-post">
    <div class="promo-post__container container">
      <div class="promo-post__item promo-post__item-text">
        <h1 class="promo-post__title"><?php the_field('promo_title'); ?></h1>
        <h3 class="promo-post__subtitle">
          <?php the_field('promo_subtitle'); ?>
        </h3>
        <?php the_field('promo_text'); ?>
      </div>
      <div class="promo-post__item promo-post__item-slider promo-post__slider">
        <div class="post-slider">
          <div class="post-slider__items">
            <?php 
              $counter = 1;
              while ($counter < 4):
                $slider_images = get_field('promo_slider_slides');
                $field_image = 'promo_slider_slide-' . $counter;
                $slider_image = $slider_images[$field_image];
              
                if ($slider_image): 
                  echo '<div class="post-slider__item">'; 
                    echo wp_get_attachment_image( $slider_image['id'], 'xl', false, array( 
                      'class' => 'post-slider__image',
                    ) );
                  echo '</div>';
                endif; 

                $counter++;
              endwhile;
            ?>
          </div>
          <div class="post-slider__container container">
            <div class="post-slider__nav">
              <button class="post-slider__button post-slider__button--left">
                <svg class="post-slider__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1" viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="476.21 223.11 57.426 223.11 91.819 188.71 70.606 167.5 0 238.11 70.606 308.71 91.819 287.5 57.426 253.11 476.21 253.11" />
                </svg>
              </button>
              <button class="post-slider__button post-slider__button--right">
                <svg class="post-slider__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1" viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="405.61 167.5 384.39 188.71 418.79 223.11 0 223.11 0 253.11 418.79 253.11 384.39 287.5 405.61 308.71 476.21 238.11" />
                </svg>
              </button>
              <div class="post-slider__pointer">
                <span class="post-slider__pointer-item">
                  <i class="post-slider__pointer-num">0</i>
                </span>
                <span class="post-slider__pointer-item post-slider__pointer-item--amount">
                  /<i class="post-slider__pointer-amount">0</i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="info-block page-services__info-block">
    <div class="info-block__container container">
      <div class="info-block__item info-block__item-figure page-services__info-block-figure">
        <?php 
        $image = get_field('services_block-1-image');
        if( !empty( $image ) ): ?>
            <?php 
            echo wp_get_attachment_image( $image['id'], '', false, array( 'class' => 'info-block__item-figure-image' ) ); ?>
        <?php endif; ?>
      </div>
      <article class="about-us-info__item info-block__item-article page-services__info-block-article">
        <div class="page-services__info-block-article-container">
          <h2 class="info-block__item-article-title page-services__info-block-title">
            <?php the_field('services_block-1-title'); ?>
          </h2>
          <div class="info-block__item-article-wrapper page-services__info-block-article-text">
            <?php the_field('services_block-1-text'); ?>
          </div>
          <a class="button button-arrow page-services__info-block-button" href="<?php the_field('services_block-1-btn-link'); ?>">
            <span class="button-arrow__text"><?php the_field('services_block-1-btn-text'); ?></span>
          </a>
        </div>
      </article>
    </div>
  </section>

  <section class="info-block page-services__info-block">
    <div class="info-block__container container">
      <figure class="info-block__item info-block__item-figure page-services__info-block-figure">
        <?php 
        $image = get_field('services_block-2-image');
        if( !empty( $image ) ): ?>
            <img class="info-block__item-figure-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </figure>
      <article class="about-us-info__item info-block__item-article page-services__info-block-article">
        <div class="page-services__info-block-article-container">
          <h2 class="info-block__item-article-title page-services__info-block-title">
          <?php the_field('services_block-2-title'); ?>
          </h2>
          <div class="info-block__item-article-wrapper page-services__info-block-article-text">
            <?php the_field('services_block-2-text'); ?>
          </div>
          <a class="button button-arrow page-services__info-block-button" href="<?php the_field('services_block-2-btn-link'); ?>">
            <span class="button-arrow__text"><?php the_field('services_block-2-btn-text'); ?></span>
          </a>
        </div>
      </article>
    </div>
  </section>

  <section class="info-block page-services__info-block">
    <div class="info-block__container container">
      <figure class="info-block__item info-block__item-figure page-services__info-block-figure">
        <?php 
        $image = get_field('services_block-3-image');
        if( !empty( $image ) ): ?>
            <img class="info-block__item-figure-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </figure>
      <article class="about-us-info__item info-block__item-article page-services__info-block-article">
        <div class="page-services__info-block-article-container">
          <h2 class="info-block__item-article-title page-services__info-block-title">
          <?php the_field('services_block-3-title'); ?>
          </h2>
          <div class="info-block__item-article-wrapper page-services__info-block-article-text">
            <?php the_field('services_block-3-text'); ?>
          </div>
          <a class="button button-arrow page-services__info-block-button" href="<?php the_field('services_block-3-btn-link'); ?>">
            <span class="button-arrow__text"><?php the_field('services_block-3-btn-text'); ?></span>
          </a>
        </div>
      </article>
    </div>
  </section>

  <section class="info-block page-services__info-block">
    <div class="info-block__container container">
      <figure class="info-block__item info-block__item-figure page-services__info-block-figure">
        <?php 
        $image = get_field('services_block-4-image');
        if( !empty( $image ) ): ?>
            <img class="info-block__item-figure-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </figure>
      <article class="about-us-info__item info-block__item-article page-services__info-block-article">
        <div class="page-services__info-block-article-container">
          <h2 class="info-block__item-article-title page-services__info-block-title">
          <?php the_field('services_block-4-title'); ?>
          </h2>
          <div class="info-block__item-article-wrapper page-services__info-block-article-text">
            <?php the_field('services_block-4-text'); ?>
          </div>
          <a class="button button-arrow page-services__info-block-button" href="<?php the_field('services_block-4-btn-link'); ?>">
            <span class="button-arrow__text"><?php the_field('services_block-4-btn-text'); ?></span>
          </a>
        </div>
      </article>
    </div>
  </section>
  
  <section class="info-block page-services__info-block">
    <div class="info-block__container container">
      <figure class="info-block__item info-block__item-figure page-services__info-block-figure">
        <?php 
        $image = get_field('services_block-5-image');
        if( !empty( $image ) ): ?>
            <img class="info-block__item-figure-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </figure>
      <article class="about-us-info__item info-block__item-article page-services__info-block-article">
        <div class="page-services__info-block-article-container">
          <h2 class="info-block__item-article-title page-services__info-block-title">
          <?php the_field('services_block-5-title'); ?>
          </h2>
          <div class="info-block__item-article-wrapper page-services__info-block-article-text">
            <?php the_field('services_block-5-text'); ?>
          </div>
          <a class="button button-arrow page-services__info-block-button" href="<?php the_field('services_block-5-btn-link'); ?>">
            <span class="button-arrow__text"><?php the_field('services_block-5-btn-text'); ?></span>
          </a>
        </div>
      </article>
    </div>
  </section>

<?php get_footer(); ?>