<?php 
/**
 * Template name: Главная
 */
get_header();
?>
<div class="promo promo--active p-home__promo">
  <div class="promo__wrapper container">
    <h1 class="promo__title" data-san="animate__fadeInDown" data-san-delay="500">
      <?php the_field('promo_title'); ?>
    </h1>
    <p class="promo__subtitle" data-san="animate__fadeInUp" data-san-delay="800">
      <?php the_field('promo_subtitle'); ?>
    </p>
  </div>
  <div class="promo__layer promo__layer--one"></div>
  <div class="promo__layer promo__layer--two"></div>
  <div class="promo__layer promo__layer--three"></div>
  <div class="promo__layer promo__layer--four"></div>
  <div class="promo__layer promo__layer--five"></div>
  <div class="promo__layer promo__layer--six"></div>
</div>
<div class="about p-home__about" id="about">
  <div class="container">
    <div class="about__promo">
      <h2 class="title about__title" data-san="animate__fadeInDown">
        <?php the_field('about_title'); ?>
      </h2>
      <p class="about__text" data-san="animate__fadeInUp" data-san-delay="300">
        <?php the_field('about_subtitle'); ?>
      </p>
      <a class="about__more" href="#we-do">Подробнее</a>
      <p class="about__slogan" data-san="animate__fadeInUp">
        <?php the_field('about_slogan'); ?>
      </p>
    </div>
    <div class="about__content">
      <picture class="about__content-image" data-san="animate__zoomIn">
        <?php 
          $image = get_field('about_img_1');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array() );
          }
        ?>
      </picture>
      <picture class="about__content-image" data-san="animate__zoomIn" data-san-delay="200">
        <?php 
          $image = get_field('about_img_2');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array() );
          }
        ?>
      </picture>
      <picture class="about__content-image" data-san="animate__zoomIn" data-san-delay="400">
        <?php 
          $image = get_field('about_img_3');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array() );
          }
        ?>
      </picture>
      <picture class="about__content-image" data-san="animate__zoomIn" data-san-delay="600">
        <?php 
          $image = get_field('about_img_4');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array() );
          }
        ?>
      </picture>
      <picture class="about__content-image" data-san="animate__zoomIn" data-san-delay="800">
        <?php 
          $image = get_field('about_img_5');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array() );
          }
        ?>
      </picture>
      <picture class="about__content-image" data-san="animate__zoomIn" data-san-delay="1000">
        <?php 
          $image = get_field('about_img_6');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array() );
          }
        ?>
      </picture>
      <p class="about__content-slogan"><?php the_field('about_we_know'); ?></p>
      <div class="about__content-promo">
        <ul>
          <li data-san="animate__fadeInUp" data-san-delay="1000">Decorations</li>
          <li data-san="animate__fadeInUp" data-san-delay="1300">locations</li>
          <li data-san="animate__fadeInUp" data-san-delay="1400">party</li>
          <li data-san="animate__fadeInUp" data-san-delay="1700">musics</li>
        </ul>
        <p class="about__content-promo-text">Мы делаем</p>
      </div>
    </div>
  </div>
</div>
<div class="we-do p-home__we-do" id="we-do">
  <div class="container">
    <div class="we-do__promo">
      <h2 class="title we-do__title" data-san="animate__fadeInDown">
        <?php the_field('do_title'); ?>
      </h2>
      <p class="we-do__description" data-san="animate__fadeInUp" data-san-delay="300">
        <?php the_field('do_subtitle'); ?>
      </p>
    </div>
    <div class="we-do__items">
      <?php
        $args = array(
          'order'     => 'ASC',
          'post_type' => 'post-services',
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
      ?>
              <div class="we-do__item">
                <div class="we-do__item-info">
                  <span class="we-do__item-info-kind"><?php the_field('do_type'); ?></span>
                  <h3 class="we-do__item-info-title"><?php the_field('do_name'); ?></h3>
                  <span class="we-do__item-info-price">ОТ <?php the_field('do_price'); ?> P</span>
                </div>
                <picture 
                  class="we-do__item-image" 
                  <?= !(++$wp_query->current_post % 2) ? 'data-san="animate__fadeInRight"' : 'data-san="animate__fadeInLeft"' ?>
                >
                  <?php 
                    $image = get_field('do_img');
                    if( $image ) {
                      echo wp_get_attachment_image( $image['id'], '', false, array() );
                    }
                  ?>
                </picture>
                <div class="we-do__item-text"><?php the_field('do_text'); ?></div>
                <a class="button we-do__item-link" href="#contacts">Узнать цену</a>
              </div>
      <?php
          }
          wp_reset_postdata();
        } 
      ?>
    </div>
  </div>
</div>
<div class="portfolio p-home__portfolio" id="portfolio">
  <div class="container">
    <h2 class="title portfolio__title" data-san="animate__fadeInDown">
      <?php the_field('portfolio_title'); ?>
    </h2>
    <div class="portfolio__wrapper">
      <?php
        $args = array(
          'order'          => 'ASC',
          'post_type'      => 'post-portfolio',
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
              <div class="portfolio__slider">
                <div class="portfolio__slider-wrapper">
                  <h3 class="portfolio__slider-title" data-san="animate__fadeInDown">
                    <?php the_field('title'); ?>
                  </h3>
                  <p class="portfolio__slider-text" data-san="animate__fadeInUp" data-san-delay="300">
                    <?php the_field('text'); ?>
                  </p>
                  <div class="portfolio__slider-items">
                    <?php 
                      $counter = 1;
                      while ($counter < 11):
                        $slider_images = get_field('photos');
                        $field_image = 'photo_' . $counter;
                        $slider_image = $slider_images[$field_image];
                      
                        if ($slider_image): 
                          echo '<div class="portfolio__slider-item">'; 
                            echo wp_get_attachment_image( $slider_image['id'], '', false, array( 
                                'class' => 'portfolio__slider-image',
                              ) );
                          echo '</div>';
                        endif; 

                        $counter++;
                      endwhile;
                    ?>
                  </div>
                  <span class="portfolio__slider-current">
                    <span class="portfolio__slider-count-current">1</span>
                    /
                    <span class="portfolio__slider-count-total">2</span>
                  </span>
                  <button
                    class="portfolio__slider-button portfolio__slider-button--prev"
                    type="button"
                  >
                    <svg class="portfolio__slider-button-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-prev"></use>
                    </svg>
                  </button>
                  <button
                    class="portfolio__slider-button portfolio__slider-button--next"
                    type="button"
                  >
                    <svg class="portfolio__slider-button-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-next"></use>
                    </svg>
                  </button>
                  <button
                    class="portfolio__slider-close"
                    type="button"
                    aria-label="Закрыть"
                  ></button>
                </div>
              </div>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
      <div class="portfolio__nav">
        <?php
          $args = array(
            'order'          => 'ASC',
            'post_type'      => 'post-portfolio',
          );
          $loop = new WP_Query( $args );
        ?>
        <?php
          if( $loop->have_posts() ) {
            while( $loop->have_posts() ) {
              $loop->the_post();
              ?>
                <div class="portfolio__nav-item">
                  <?php 
                    $slider_images = get_field('photos');
                    $image = $slider_images['photo_1'];
                    if( $image ) {
                      echo wp_get_attachment_image( $image['id'], '', false, array( 
                        'class' => 'portfolio__nav-image',
                      ) );
                    }
                  ?>
                  <div class="portfolio__nav-info">
                    <h4 class="portfolio__nav-title"><?php the_field('title'); ?></h4>
                    <button class="portfolio__nav-link" type="button">
                      Смотреть
                    </button>
                  </div>
                </div>
              <?php
            }
            wp_reset_postdata();
          } 
        ?>
      </div>
    </div>
  </div>
</div>
<div class="its p-home__its">
  <div class="its__wrapper container">
    <h2 class="its__title" data-san="animate__fadeInDown">Mosfiesta - its</h2>
    <ul class="its__list">
      <li class="its__item" data-san="animate__zoomIn" data-san-delay="300">
        <span class="its__item-count"><?php the_field('its_count_1'); ?></span>
        <?php the_field('its_text_1'); ?>
      </li>
      <li class="its__item" data-san="animate__zoomIn" data-san-delay="900">
        <span class="its__item-count"><?php the_field('its_count_2'); ?></span>
        <?php the_field('its_text_2'); ?>
      </li>
      <li class="its__item" data-san="animate__zoomIn" data-san-delay="1200">
        <span class="its__item-count"><?php the_field('its_count_3'); ?></span>
        <?php the_field('its_text_3'); ?>
      </li>
      <li class="its__item" data-san="animate__zoomIn" data-san-delay="600">
        <span class="its__item-count"><?php the_field('its_count_4'); ?></span>
        <?php the_field('its_text_4'); ?>
      </li>
    </ul>
  </div>
</div>
<div class="secret p-home__secret">
  <div class="secret__wrapper container">
    <h2 class="title secret__title" data-san="animate__fadeInDown">
      <?php the_field('know_title'); ?>
    </h2>
    <ul class="secret__list">
      <li class="secret__item secret__item--one">
        <span class="secret__item-title" data-san="animate__fadeInDown" data-san-delay="200">
          <?php the_field('know_item_title_1'); ?>
        </span>
        <p class="secret__item-text" data-san="animate__fadeInUp" data-san-delay="400">
          <?php the_field('know_item_text_1'); ?>
        </p>
      </li>
      <li class="secret__item secret__item--two">
        <span class="secret__item-title" data-san="animate__fadeInDown" data-san-delay="300">
          <?php the_field('know_item_title_2'); ?>
        </span>
        <p class="secret__item-text" data-san="animate__fadeInUp" data-san-delay="500">
          <?php the_field('know_item_text_2'); ?>
        </p>
      </li>
      <li class="secret__item secret__item--three">
        <span class="secret__item-title" data-san="animate__fadeInDown" data-san-delay="400">
          <?php the_field('know_item_title_3'); ?>
        </span>
        <p class="secret__item-text" data-san="animate__fadeInUp" data-san-delay="600">
          <?php the_field('know_item_text_3'); ?>
        </p>
      </li>
    </ul>
    <span class="secret__line"></span>
  </div>
</div>
<div class="reviews p-home__reviews" id="reviews">
  <div class="reviews__wrapper container">
    <h2 class="title reviews__title" data-san="animate__fadeInDown">
      <?php the_field('reviews_title'); ?>
    </h2>
    <div class="reviews__items">
      <?php
        $args = array(
          // 'order'          => 'ASC',
          'post_type'      => 'post-reviews',
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
              <div>
                <div class="reviews__item">
                  <div class="reviews__item-info">
                    <h6 class="reviews__item-title">
                      <?php the_field('title'); ?>
                    </h6>
                    <span class="reviews__item-kind"><?php the_field('type'); ?></span>
                    <span class="reviews__item-date"><?php the_field('date'); ?></span>
                  </div>
                  <div class="reviews__item-content">
                    <span class="reviews__item-name"><?php the_field('name'); ?></span>
                      <?php 
                        $image = get_field('photo');
                        if( $image ) {
                          echo wp_get_attachment_image( $image['id'], '', false, array( 
                            'class' => 'reviews__item-image',
                          ) );
                        }
                      ?>
                    <p class="reviews__item-text"><?php the_field('text'); ?></p>
                  </div>
                </div>
              </div>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
    </div>
    <div class="reviews__nav">
      <button class="reviews__button reviews__button--prev" type="button">
        Предыдущий
      </button>
      <button class="reviews__button reviews__button--next" type="button">
        Следующий
      </button>
    </div>
  </div>
</div>
<div class="contacts" id="contacts">
  <div class="contacts__wrapper container">
    <h2 class="contacts__title" data-san="animate__fadeIn">
      <?php the_field('c_title'); ?>
    </h2>
    <ul class="contacts__list">
      <li class="contacts__item" data-san="animate__fadeInDown" data-san-delay="300">
        <?php the_field('c_address'); ?>
      </li>
      <li class="contacts__item" data-san="animate__fadeInUp" data-san-delay="600">
        <a 
          class="contacts__link" 
          href="tel:<?= str_replace(' ', '', get_field('c_phone_1')); ?>"
        >
          <?php the_field('c_phone_1'); ?>
        </a>
        <a 
          class="contacts__link" 
          href="tel:<?= str_replace(' ', '', get_field('c_phone_2')); ?>"
        >
          <?php the_field('c_phone_2'); ?>
        </a>
      </li>
    </ul>
    <?php echo do_shortcode('[contact-form-7 id="106" title="Форма" html_class="form contacts__form"]'); ?>
  </div>
</div>
<?php get_footer(); ?>