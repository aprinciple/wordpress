<?php get_header(); ?>
<section id="services" class="services">
  <h2 class="services__title"><?php the_field('services_title'); ?></h2>
  <div class="services__container container">
    <div class="services__items">
      <div class="services__item">
        <?php 
        $image = get_field('services_item_image-1');
        if( !empty( $image ) ): ?>
        <img class="services__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="services__item-text">
          <h5 class="services__item-title"><?php the_field('services_item_title-1'); ?></h5>
          <a class="services__item-link button" href="#">Узнать стоимость</a>
        </div>
      </div>
      <div class="services__item">
        <?php 
        $image = get_field('services_item_image-2');
        if( !empty( $image ) ): ?>
        <img class="services__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="services__item-text">
          <h5 class="services__item-title"><?php the_field('services_item_title-2'); ?></h5>
          <a class="services__item-link button" href="#">Узнать стоимость</a>
        </div>
      </div>
      <div class="services__item">
        <?php 
        $image = get_field('services_item_image-3');
        if( !empty( $image ) ): ?>
        <img class="services__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="services__item-text">
          <h5 class="services__item-title"><?php the_field('services_item_title-3'); ?></h5>
          <a class="services__item-link button" href="#">Узнать стоимость</a>
        </div>
      </div>
      <div class="services__item">
        <?php 
        $image = get_field('services_item_image-4');
        if( !empty( $image ) ): ?>
        <img class="services__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="services__item-text">
          <h5 class="services__item-title"><?php the_field('services_item_title-4'); ?></h5>
          <a class="services__item-link button" href="#">Узнать стоимость</a>
        </div>
      </div>
      <div class="services__item">
        <?php 
        $image = get_field('services_item_image-5');
        if( !empty( $image ) ): ?>
        <img class="services__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="services__item-text">
          <h5 class="services__item-title"><?php the_field('services_item_title-5'); ?></h5>
          <a class="services__item-link button" href="#">Узнать стоимость</a>
        </div>
      </div>
      <div class="services__item">
        <?php 
        $image = get_field('services_item_image-6');
        if( !empty( $image ) ): ?>
        <img class="services__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="services__item-text">
          <h5 class="services__item-title"><?php the_field('services_item_title-6'); ?></h5>
          <a class="services__item-link button" href="#">Узнать стоимость</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="advantages">
  <span id="advantages"></span>
  <div class="advantages__container container">
    <h2 class="advantages__title"><span>наши</span> преимущества</h2>
    <div class="advantages__items">
      <div class="advantages__item advantages__item--one">
        <h5 class="advantages__item-title">Будем у вас<br><span>в течении 1 часа</span></h5>
      </div>
      <div class="advantages__item advantages__item--two">
        <h5 class="advantages__item-title">Квалифицированные<br><span>специалисты</span></h5>
      </div>
      <div class="advantages__item advantages__item--three">
        <h5 class="advantages__item-title">цены ниже<br><span>чем у конкурентов</span></h5>
      </div>
    </div>
  </div>
</section>
<section class="our-works">
  <span id="our-works"></span>
  <h2 class="our-works__title"><?php the_field('our_works_title') ?></h2>
  <div class="our-works__container container">
    <div class="our-works__items">
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-1');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-2');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-3');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-4');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-5');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-6');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-7');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-8');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="our-works__item">
        <?php 
        $image = get_field('our_works_image-9');
        if( !empty( $image ) ): ?>
        <img class="our-works__item-image" src="<?php echo esc_url($image['url']); ?>"
          alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="choose-us">
  <div class="choose-us__container container">
    <h2 class="choose-us__title"><span>Почему</span> выбирают нас?</h2>
    <div class="choose-us__items">
      <div class="choose-us__item choose-us__item--one">
        <div class="choose-us__item-icon"></div>
        <h5 class="choose-us__item-title">Более 2500<br><span>довыльних клиентов</span></h5>
      </div>
      <div class="choose-us__item choose-us__item--two">
        <div class="choose-us__item-icon"></div>
        <h5 class="choose-us__item-title">Официальные договора<br><span>с компаниями</span></h5>
      </div>
      <div class="choose-us__item choose-us__item--three">
        <div class="choose-us__item-icon"></div>
        <h5 class="choose-us__item-title">расчет производится<br><span>по факту работ</span></h5>
      </div>
    </div>
  </div>
</section>
<section class="export-cost">
  <span id="export-cost"></span>
  <h2 class="export-cost__title"><?php the_field('export_cost_title') ?></h2>
  <div class="export-cost__table">
      <section class="post-table">
        <div class="post-table__container container">
          <?php 
      $table = get_field( 'export_cost_table-1' );
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
      $table = get_field( 'export_cost_table-2' );
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
  </div>
</section>
<section class="about-us">
  <div class="about-us__container container">
    <h2 class="about-us__title"><span>О нашей</span> компании</h2>
    <div class="about-us__info">
      <button class="about-us__info-button" type="button"></button>
      <h5 class="about-us__info-title">информация о компании</h5>
      <div class="about-us__info-text">
        <?php the_field('about_us_info'); ?>
      </div>
    </div>
  </div>
</section>
<section class="feedback">
  <h2 class="feedback__title"><?php the_field('feedback_title'); ?></h2>
  <div class="feedback__container container">
    <div class="slider-feedback">
      <div class="slider-feedback__items">
        <div class="slider-feedback__item">
          <?php 
          $image = get_field('feedback_image-1');
          if( !empty( $image ) ): ?>
          <img class="slider-feedback__image" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <div class="slider-feedback__text">
            <?php the_field('feedback_text-1'); ?>
          </div>
        </div>
        <div class="slider-feedback__item">
          <?php 
          $image = get_field('feedback_image-2');
          if( !empty( $image ) ): ?>
          <img class="slider-feedback__image" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <div class="slider-feedback__text">
            <?php the_field('feedback_text-2'); ?>
          </div>
        </div>
        <div class="slider-feedback__item">
          <?php 
          $image = get_field('feedback_image-3');
          if( !empty( $image ) ): ?>
          <img class="slider-feedback__image" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <div class="slider-feedback__text">
            <?php the_field('feedback_text-3'); ?>
          </div>
        </div>
        <div class="slider-feedback__item">
          <?php 
          $image = get_field('feedback_image-4');
          if( !empty( $image ) ): ?>
          <img class="slider-feedback__image" src="<?php echo esc_url($image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <div class="slider-feedback__text">
            <?php the_field('feedback_text-4'); ?>
          </div>
        </div>
      </div>
      <div class="slider-feedback__nav">
        <button class="slider-feedback__button slider-feedback__button--left"></button>
        <button class="slider-feedback__button slider-feedback__button--right"></button>
      </div>
      <div class="slider-feedback__dots"></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>