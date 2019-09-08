<?php get_header('single-post-want'); ?>
<main class="page-project-want__main">
    <div class="container page-project-want__container">
      <?php the_post(); ?>
      <article class="project">
        <header class="project__header">
          <h3 class="project__title"><?php the_title(); ?></h3>
          <div class="project__identifier">
            id
            <span class="project__identifier-code"><?php the_ID() ?></span>
          </div>
        </header>
        <div class="project__wrapper">
          <div class="project__item">
            <div class="project__slider">
              <div class="slider">
                <div class="slider__items">
                <?php
                  $counter = 1; 

                  while ($counter < 11):
                    $acf_field = 'slider-image-' . $counter; 
                    if (get_field($acf_field)): 
                      echo '<div class="slider__item">'; 
                      echo '<img class="slider__image" src="' . get_field($acf_field) . '" alt="Проект">';
                      echo '</div>';
                    endif; 
                  $counter++;
                  endwhile;
                ?>
                </div>
                <div class="slider__nav">
                  <button class="slider__button slider__button--left">
                    <svg class="slider__button-icon">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-arrow-left"></use>
                    </svg>
                  </button>
                  <button class="slider__button slider__button--right">
                    <svg class="slider__button-icon">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-arrow-right"></use>
                    </svg>
                  </button>
                  <div class="slider__pointer">
                    <span class="slider__pointer-num">1</span>
                    /
                    <span class="slider__pointer-amount">7</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="project__donation">
              <div class="donation" data-required="" data-collected="">
                <span class="donation__percent"></span>
                <div class="donation__progress">
                  <div class="donation__progress-bar"></div>
                </div>
              </div>
            </div>

            <div class="project__item-social">
              <div class="social">
                <h6 class="social__title">Нравится / Поделиться</h6>
                <?php echo do_shortcode('[miniorange_social_sharing]') ?>
              </div>
            </div>
          </div>
          <div class="project__item">
            <div class="project__description">
              <?php the_content(); ?>
            </div>
            <div class="project__buttons">
              <a class="button project__button project__button--gold" href="#">Хочу!</a>
              <a class="button project__button project__button--green" href="#">Инвестировать в проект</a>
            </div>
          </div>
        </div>
      </article>
    </div>
  </main>
  <?php get_footer('single-post-want'); ?>