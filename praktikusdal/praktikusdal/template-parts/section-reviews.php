<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div id="reviews" class="reviews">
  <div class="reviews__container container">
    <div class="reviews__header">
      <h3 class="reviews__title title-section">
        <?php the_field('reviews_title', $frontpage_id); ?>
      </h3>
      <div class="reviews__rating">
        <ul class="rating">
          <span class="rating__value">
            <?php the_field('reviews_rating_value', $frontpage_id); ?>
          </span>
          <li class="rating__item">
            <svg class="rating__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
            </svg>
          </li>
          <li class="rating__item">
            <svg class="rating__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
            </svg>
          </li>
          <li class="rating__item">
            <svg class="rating__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
            </svg>
          </li>
          <li class="rating__item">
            <svg class="rating__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
            </svg>
          </li>
          <li class="rating__item">
            <svg class="rating__icon">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
            </svg>
          </li>
        </ul>
        <span class="reviews__rating-text">
      Рейтинг <?php the_field('reviews_rating', $frontpage_id); ?> из 5
    </span>
      </div>
    </div>
    <div class="reviews__items">
      <div class="reviews__item">
        <article class="review">
          <header class="review__header">
            <div class="review__rating">
              <ul class="rating">
                <span class="rating__value">
                  <?php the_field('reviews_item_1_rate', $frontpage_id); ?>
                </span>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <div class="review__user-info">
              <div class="review__user-info__item review__user-info-user">
                <div class="review__user-info-photo">
                  <svg class="review__user-info-image">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#user-photo"></use>
                  </svg>
                </div>
                <span class="review__user-info-name">
                  <?php the_field('reviews_item_1_name', $frontpage_id); ?>
                </span>
              </div>
              <div class="review__user-info__item">
                <span class="review__user-info-years">
                  <?php the_field('reviews_item_1_years', $frontpage_id); ?>
                </span>
              </div>
            </div>
          </header>
          <div class="review__text">
            <p>
              <?php the_field('reviews_item_1_text', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
      <div class="reviews__item">
        <article class="review">
          <header class="review__header">
            <div class="review__rating">
              <ul class="rating">
                <span class="rating__value">
                  <?php the_field('reviews_item_2_rate', $frontpage_id); ?>
                </span>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <div class="review__user-info">
              <div class="review__user-info__item review__user-info-user">
                <div class="review__user-info-photo">
                  <svg class="review__user-info-image">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#user-photo"></use>
                  </svg>
                </div>
                <span class="review__user-info-name">
                  <?php the_field('reviews_item_2_name', $frontpage_id); ?>
                </span>
              </div>
              <div class="review__user-info__item">
                <span class="review__user-info-years">
                  <?php the_field('reviews_item_2_years', $frontpage_id); ?>
                </span>
              </div>
            </div>
          </header>
          <div class="review__text">
            <p>
              <?php the_field('reviews_item_2_text', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
      <div class="reviews__item">
        <article class="review">
          <header class="review__header">
            <div class="review__rating">
              <ul class="rating">
                <span class="rating__value">
                  <?php the_field('reviews_item_3_rate', $frontpage_id); ?>
                </span>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <div class="review__user-info">
              <div class="review__user-info__item review__user-info-user">
                <div class="review__user-info-photo">
                  <svg class="review__user-info-image">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#user-photo"></use>
                  </svg>
                </div>
                <span class="review__user-info-name">
                  <?php the_field('reviews_item_3_name', $frontpage_id); ?>
                </span>
              </div>
              <div class="review__user-info__item">
                <span class="review__user-info-years">
                  <?php the_field('reviews_item_3_years', $frontpage_id); ?>
                </span>
              </div>
            </div>
          </header>
          <div class="review__text">
            <p>
              <?php the_field('reviews_item_3_text', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
      <div class="reviews__item">
        <article class="review">
          <header class="review__header">
            <div class="review__rating">
              <ul class="rating">
                <span class="rating__value">
                  <?php the_field('reviews_item_4_rate', $frontpage_id); ?>
                </span>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <div class="review__user-info">
              <div class="review__user-info__item review__user-info-user">
                <div class="review__user-info-photo">
                  <svg class="review__user-info-image">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#user-photo"></use>
                  </svg>
                </div>
                <span class="review__user-info-name">
                  <?php the_field('reviews_item_4_name', $frontpage_id); ?>
                </span>
              </div>
              <div class="review__user-info__item">
                <span class="review__user-info-years">
                  <?php the_field('reviews_item_4_years', $frontpage_id); ?>
                </span>
              </div>
            </div>
          </header>
          <div class="review__text">
            <p>
              <?php the_field('reviews_item_4_text', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
      <div class="reviews__item">
        <article class="review">
          <header class="review__header">
            <div class="review__rating">
              <ul class="rating">
                <span class="rating__value">
                  <?php the_field('reviews_item_5_rate', $frontpage_id); ?>
                </span>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <div class="review__user-info">
              <div class="review__user-info__item review__user-info-user">
                <div class="review__user-info-photo">
                  <svg class="review__user-info-image">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#user-photo"></use>
                  </svg>
                </div>
                <span class="review__user-info-name">
                  <?php the_field('reviews_item_5_name', $frontpage_id); ?>
                </span>
              </div>
              <div class="review__user-info__item">
                <span class="review__user-info-years">
                  <?php the_field('reviews_item_5_years', $frontpage_id); ?>
                </span>
              </div>
            </div>
          </header>
          <div class="review__text">
            <p>
              <?php the_field('reviews_item_5_text', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
      <div class="reviews__item">
        <article class="review">
          <header class="review__header">
            <div class="review__rating">
              <ul class="rating">
                <span class="rating__value">
                  <?php the_field('reviews_item_6_rate', $frontpage_id); ?>
                </span>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
                <li class="rating__item review__rating-item">
                  <svg class="rating__icon review__rating-icon">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <div class="review__user-info">
              <div class="review__user-info__item review__user-info-user">
                <div class="review__user-info-photo">
                  <svg class="review__user-info-image">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#user-photo"></use>
                  </svg>
                </div>
                <span class="review__user-info-name">
                  <?php the_field('reviews_item_6_name', $frontpage_id); ?>
                </span>
              </div>
              <div class="review__user-info__item">
                <span class="review__user-info-years">
                  <?php the_field('reviews_item_6_years', $frontpage_id); ?>
                </span>
              </div>
            </div>
          </header>
          <div class="review__text">
            <p>
              <?php the_field('reviews_item_6_text', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
    </div>
    <div class="reviews__footer">
      <h5 class="reviews__footer-title">
        Довольных клиентов
      </h5>
      <div class="reviews__footer-count">
        <?php the_field('reviews_clients', $frontpage_id); ?>
      </div>
    </div>
  </div>
</div>