<?php get_header(); ?>
  <!-- Swiper-->
  <section
    class="section swiper-container swiper-slider swiper-slider-modern"
    data-loop="true"
    data-autoplay="5000"
    data-simulate-touch="true"
    data-nav="true"
    data-slide-effect="fade"
  >
    <div class="swiper-wrapper text-left">
      <div class="swiper-slide" data-slide-bg="
        <?php 
          $image = get_field('main_sdr_image_1');
          if( $image ) {
            echo $image;
          }
        ?>"
      >
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row">
              <div
                class="col-11 col-sm-9 col-md-8 col-lg-7 col-xl-6 col-xxl-5"
              >
                <div class="slider-modern-box">
                  <h2 class="oh slider-modern-title">
                    <span
                      data-caption-animate="slideInDown"
                      data-caption-delay="0"
                      ><?php the_field('main_sdr_title_1'); ?></span
                    >
                  </h2>
                  <p
                    data-caption-animate="fadeInRight"
                    data-caption-delay="400"
                  >
                    <?php the_field('main_sdr_text_1'); ?>
                  </p>
                  <div class="oh button-wrap">
                    <a
                      class="button button-default-outline-2 button-ujarak"
                      href="#popup:marquiz_5ec11d867dde000044a57bc2"
                      data-caption-animate="slideInLeft"
                      data-caption-delay="400"
                      >Рассчитать</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide" data-slide-bg="
        <?php 
          $image = get_field('main_sdr_image_2');
          if( $image ) {
            echo $image;
          }
        ?>
      ">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row">
              <div
                class="col-10 col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4"
              >
                <div class="slider-modern-box">
                  <h2 class="oh slider-modern-title">
                    <span
                      data-caption-animate="slideInLeft"
                      data-caption-delay="0"
                      ><?php the_field('main_sdr_title_2'); ?></span
                    >
                  </h2>
                  <p
                    data-caption-animate="fadeInRight"
                    data-caption-delay="400"
                  >
                    <?php the_field('main_sdr_text_2'); ?>
                  </p>
                  <div class="oh button-wrap">
                    <a
                      class="button button-default-outline-2 button-ujarak"
                      href="#popup:marquiz_5ec11d867dde000044a57bc2"
                      data-caption-animate="slideInLeft"
                      data-caption-delay="400"
                      >Рассчитать</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide" data-slide-bg="
        <?php 
          $image = get_field('main_sdr_image_3');
          if( $image ) {
            echo $image;
          }
        ?>
      ">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="row">
              <div class="col-11 col-sm-8 col-md-7 col-lg-5 col-xxl-4">
                <div class="slider-modern-box">
                  <h2 class="oh slider-modern-title">
                    <span
                      data-caption-animate="slideInDown"
                      data-caption-delay="0"
                      ><?php the_field('main_sdr_title_3'); ?></span
                    >
                  </h2>
                  <p
                    data-caption-animate="fadeInRight"
                    data-caption-delay="400"
                  >
                    <?php the_field('main_sdr_text_3'); ?>
                  </p>
                  <div class="oh button-wrap">
                    <a
                      class="button button-default-outline-2 button-ujarak"
                      href="#popup:marquiz_5ec11d867dde000044a57bc2"
                      data-caption-animate="slideInLeft"
                      data-caption-delay="400"
                      >Рассчитать</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination swiper-pagination-style-2"></div>
  </section>
  <!-- In the spotlight-->
  <section class="section section-sm section-first bg-default">
    <div class="container">
      <div class="oh">
        <div
          class="title-decoration-lines wow slideInUp"
          data-wow-delay="0s"
        >
          <h6 class="title-decoration-lines-content"><?php the_field('offer_title'); ?></h6>
        </div>
      </div>
      <div class="row row-30 justify-content-center">
        <div class="col-md-12 col-lg-8">
          <div class="oh">
            <!-- box Spotlight-->
            <article
              class="box-sportlight wow slideInDown"
              data-wow-delay="0s"
            >
              <a class="box-sportlight-figure" href="<?php the_field('offer_link_1'); ?>">
                <?php 
                  $image = get_field('offer_img_1');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], array(770, 330), false );
                  }
                ?>
              </a>
              <div class="box-sportlight-caption">
                <h5 class="box-sportlight-title">
                  <a href="<?php the_field('offer_link_1'); ?>">
                    <?php the_field('offer_title_1'); ?>
                  </a>
                </h5>
                <div class="box-sportlight-arrow"></div>
              </div>
              <div class="box-sportlight-badge box-sportlight-new">
                Новинка
              </div>
            </article>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="oh-desktop">
            <!-- box Spotlight-->
            <article
              class="box-sportlight box-sportlight-sm wow slideInRight"
              data-wow-delay=".1s"
            >
              <a class="box-sportlight-figure" href="<?php the_field('offer_link_2'); ?>">
                <?php 
                  $image = get_field('offer_img_2');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], array(370, 330), false );
                  }
                ?>
              </a>
              <div class="box-sportlight-caption">
                <h5 class="box-sportlight-title">
                  <a href="<?php the_field('offer_link_2'); ?>">
                    <?php the_field('offer_title_2'); ?>
                  </a>
                </h5>
                <div class="box-sportlight-arrow"></div>
              </div>
              <div class="box-sportlight-badge box-sportlight-sale">
                -<?php the_field('offer_disc'); ?>%
              </div>
            </article>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="oh-desktop">
            <!-- box Spotlight-->
            <article
              class="box-sportlight box-sportlight-sm wow slideInLeft"
              data-wow-delay="0s"
            >
              <a class="box-sportlight-figure" href="<?php the_field('offer_link_3'); ?>">
                <?php 
                  $image = get_field('offer_img_3');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], array(370, 330), false );
                  }
                ?>
              </a>
              <div class="box-sportlight-caption">
                <h5 class="box-sportlight-title">
                  <a href="<?php the_field('offer_link_3'); ?>">
                    <?php the_field('offer_title_3'); ?>
                  </a>
                </h5>
                <div class="box-sportlight-arrow"></div>
              </div>
            </article>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="oh">
            <!-- box Spotlight-->
            <article
              class="box-sportlight wow slideInUp"
              data-wow-delay=".1s"
            >
              <a class="box-sportlight-figure" href="<?php the_field('offer_link_4'); ?>">
                <?php 
                  $image = get_field('offer_img_4');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], array(370, 330), false );
                  }
                ?>
              </a>
              <div class="box-sportlight-caption">
                <h5 class="box-sportlight-title">
                  <a href="<?php the_field('offer_link_4'); ?>">
                    <?php the_field('offer_title_4'); ?>
                  </a>
                </h5>
                <div class="box-sportlight-arrow"></div>
              </div>
            </article>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="oh-desktop">
            <!-- box Spotlight-->
            <article
              class="box-sportlight box-sportlight-sm wow slideInRight"
              data-wow-delay=".1s"
            >
              <a class="box-sportlight-figure" href="<?php the_field('offer_link_5'); ?>">
                <?php 
                  $image = get_field('offer_img_5');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], array(370, 330), false );
                  }
                ?>
              </a>
              <div class="box-sportlight-caption">
                <h5 class="box-sportlight-title">
                  <a href="<?php the_field('offer_link_5'); ?>">
                    <?php the_field('offer_title_5'); ?>
                  </a>
                </h5>
                <div class="box-sportlight-arrow"></div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Icons Ruby-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="row row-30 justify-content-center">
        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
          <article class="box-icon-ruby">
            <div
              class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left"
            >
              <div class="unit-left">
                <div
                  class="box-icon-ruby-icon fl-bigmug-line-airplane86"
                ></div>
              </div>
              <div class="unit-body">
                <h5 class="box-icon-ruby-title">
                  <?php the_field('advantage_title_1'); ?>
                </h5>
                <p class="box-icon-ruby-text">
                  <?php the_field('advantage_text_1'); ?>
                </p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
          <article class="box-icon-ruby">
            <div
              class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left"
            >
              <div class="unit-left">
                <div
                  class="box-icon-ruby-icon fl-bigmug-line-circular220"
                ></div>
              </div>
              <div class="unit-body">
                <h5 class="box-icon-ruby-title">
                  <?php the_field('advantage_title_2'); ?>
                </h5>
                <p class="box-icon-ruby-text">
                  <?php the_field('advantage_text_2'); ?>
                </p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
          <article class="box-icon-ruby">
            <div
              class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left"
            >
              <div class="unit-left">
                <div class="box-icon-ruby-icon fl-bigmug-line-hot67"></div>
              </div>
              <div class="unit-body">
                <h5 class="box-icon-ruby-title">
                  <?php the_field('advantage_title_3'); ?>
                </h5>
                <p class="box-icon-ruby-text">
                  <?php the_field('advantage_text_3'); ?>
                </p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Improve your interior with deco-->
  <section class="section section-sm bg-default section-projects">
    <div class="container">
      <div class="oh">
        <div
          class="title-decoration-lines wow slideInUp"
          data-wow-delay="0s"
        >
          <h6 class="title-decoration-lines-content">
            <?php the_field('our_work_title'); ?>
          </h6>
        </div>
      </div>
      <div class="row row-30" data-lightgallery="group">
        <?php 
          $image = get_field('our_work_img_1');
          if( $image ) {
            ?>

            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article
                  class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft"
                  data-wow-delay="0s"
                >
                  <div class="thumbnail-mary-figure">
                    <?php 
                      echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                    ?>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a
                      class="icon fl-bigmug-line-zoom60"
                      href="<?= $image['url']; ?>"
                      data-lightgallery="item"
                      >
                      <?php 
                        echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                      ?>
                    </a>
                    <h5 class="thumbnail-mary-title">
                      <a href="#">Проект №1</a>
                    </h5>
                  </div>
                </article>
              </div>
            </div>

            <?php
          }
        ?>
        <?php 
          $image = get_field('our_work_img_2');
          if( $image ) {
            ?>

            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article
                  class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft"
                  data-wow-delay="0s"
                >
                  <div class="thumbnail-mary-figure">
                    <?php 
                      echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                    ?>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a
                      class="icon fl-bigmug-line-zoom60"
                      href="<?= $image['url']; ?>"
                      data-lightgallery="item"
                      >
                      <?php 
                        echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                      ?>
                    </a>
                    <h5 class="thumbnail-mary-title">
                      <a href="#">Проект №2</a>
                    </h5>
                  </div>
                </article>
              </div>
            </div>

            <?php
          }
        ?>
        <?php 
          $image = get_field('our_work_img_3');
          if( $image ) {
            ?>

            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article
                  class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft"
                  data-wow-delay="0s"
                >
                  <div class="thumbnail-mary-figure">
                    <?php 
                      echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                    ?>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a
                      class="icon fl-bigmug-line-zoom60"
                      href="<?= $image['url']; ?>"
                      data-lightgallery="item"
                      >
                      <?php 
                        echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                      ?>
                    </a>
                    <h5 class="thumbnail-mary-title">
                      <a href="#">Проект №3</a>
                    </h5>
                  </div>
                </article>
              </div>
            </div>

            <?php
          }
        ?>
        <?php 
          $image = get_field('our_work_img_4');
          if( $image ) {
            ?>

            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article
                  class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft"
                  data-wow-delay="0s"
                >
                  <div class="thumbnail-mary-figure">
                    <?php 
                      echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                    ?>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a
                      class="icon fl-bigmug-line-zoom60"
                      href="<?= $image['url']; ?>"
                      data-lightgallery="item"
                      >
                      <?php 
                        echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                      ?>
                    </a>
                    <h5 class="thumbnail-mary-title">
                      <a href="#">Проект №4</a>
                    </h5>
                  </div>
                </article>
              </div>
            </div>

            <?php
          }
        ?>
        <?php 
          $image = get_field('our_work_img_5');
          if( $image ) {
            ?>

            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article
                  class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft"
                  data-wow-delay="0s"
                >
                  <div class="thumbnail-mary-figure">
                    <?php 
                      echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                    ?>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a
                      class="icon fl-bigmug-line-zoom60"
                      href="<?= $image['url']; ?>"
                      data-lightgallery="item"
                      >
                      <?php 
                        echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                      ?>
                    </a>
                    <h5 class="thumbnail-mary-title">
                      <a href="#">Проект №5</a>
                    </h5>
                  </div>
                </article>
              </div>
            </div>

            <?php
          }
        ?>
        <?php 
          $image = get_field('our_work_img_6');
          if( $image ) {
            ?>

            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Thumbnail Classic-->
                <article
                  class="thumbnail thumbnail-mary thumbnail-sm wow slideInLeft"
                  data-wow-delay="0s"
                >
                  <div class="thumbnail-mary-figure">
                    <?php 
                      echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                    ?>
                  </div>
                  <div class="thumbnail-mary-caption">
                    <a
                      class="icon fl-bigmug-line-zoom60"
                      href="<?= $image['url']; ?>"
                      data-lightgallery="item"
                      >
                      <?php 
                        echo wp_get_attachment_image( $image['id'], array(370, 300), false );
                      ?>
                    </a>
                    <h5 class="thumbnail-mary-title">
                      <a href="#">Проект №6</a>
                    </h5>
                  </div>
                </article>
              </div>
            </div>

            <?php
          }
        ?>
      </div>
    </div>
  </section>

  <!-- Section CTA-->
  <section class="section section-sm bg-default text-md-center">
    <div 
      class="parallax-container" 
      data-parallax-img="<?=get_stylesheet_directory_uri(); ?>/assets/images/bg-cta-2.jpg">
      <div
        class="parallax-content section-xl section-inset-custom-2 context-dark"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
              <h3 class="oh font-weight-normal">
                <span
                  class="d-inline-block wow slideInDown"
                  data-wow-delay="0s"
                  ><?php the_field('record_title'); ?></span
                >
              </h3>
              <p
                class="text-spacing-75 wow fadeInRight"
                data-wow-delay=".1s"
              >
                <?php the_field('record_subtitle'); ?>
              </p>
              <form
                class="rd-form rd-form-variant-2 rd-mailform"
                style="text-align: center;"
                data-form-output="form-output-global"
                data-form-type="contact"
                method="post"
                action="<?= get_stylesheet_directory_uri() ?>/inc/handler_measure.php"
              >
                <div class="row row-14 gutters-14">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input
                        class="form-input"
                        id="contact-your-name-2"
                        type="text"
                        name="name"
                        data-constraints="@Required"
                      />
                      <label class="form-label" for="contact-your-name-2"
                        >Имя</label
                      >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input
                        class="form-input"
                        id="contact-phone-2"
                        type="text"
                        name="phone"
                        data-constraints="@Numeric"
                      />
                      <label class="form-label" for="contact-phone-2"
                        >Телефон</label
                      >
                    </div>
                  </div>
                </div>
                <input 
                  type="hidden" 
                  name="id_form_measure" 
                  value="id-form-measure">
                <input 
                  type="hidden" 
                  name="form_measure_nonce" 
                  value="<?php echo wp_create_nonce('form-measure-nonce'); ?>">
                <button
                  class="button button-secondary button-pipaluk"
                  type="submit"
                >
                  Записаться
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About us-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="oh">
        <div
          class="title-decoration-lines wow slideInUp"
          data-wow-delay="0s"
        >
          <h6 class="title-decoration-lines-content">
            <?php the_field('about_us_title'); ?>
          </h6>
        </div>
      </div>
      <div
        class="row row-lg row-50 justify-content-center border-classic border-classic-2"
      >
        <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0s">
          <div class="counter-creative">
            <div class="counter-creative-number">
              <span class="counter"><?php the_field('about_us_work'); ?></span
              ><span
                class="icon counter-creative-icon fl-bigmug-line-trophy55"
              ></span>
            </div>
            <h6 class="counter-creative-title">Лет работы</h6>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay=".1s">
          <div class="counter-creative">
            <div class="counter-creative-number">
              <span class="counter"><?php the_field('about_us_project'); ?></span
              ><span
                class="icon counter-creative-icon fl-bigmug-line-cube29"
              ></span>
            </div>
            <h6 class="counter-creative-title">Проектов</h6>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay=".2s">
          <div class="counter-creative">
            <div class="counter-creative-number">
              <span class="counter"><?php the_field('about_us_client'); ?></span
              ><span
                class="icon counter-creative-icon fl-bigmug-line-sun81"
              ></span>
            </div>
            <h6 class="counter-creative-title">Клиентов</h6>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay=".3s">
          <div class="counter-creative">
            <div class="counter-creative-number">
              <span class="counter"><?php the_field('about_us_back_client'); ?></span
              ><span
                class="icon counter-creative-icon fl-bigmug-line-user143"
              ></span>
            </div>
            <h6 class="counter-creative-title">Вернувшихся клиентов</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What people say-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="oh">
        <div
          class="title-decoration-lines wow slideInUp"
          data-wow-delay="0s"
        >
          <h6 class="title-decoration-lines-content">
            Что говорят о нас люди
          </h6>
        </div>
      </div>
      <!-- Owl Carousel-->
      <div
        class="owl-carousel owl-modern"
        data-items="1"
        data-stage-padding="15"
        data-margin="30"
        data-dots="true"
        data-animation-in="fadeIn"
        data-animation-out="fadeOut"
        data-autoplay="true"
      >
        <!-- Quote Lisa-->
        <article class="quote-lisa">
          <div class="quote-lisa-body">
            <div class="quote-lisa-figure">
              <?php 
                $image = get_field('review_img_1');
                if( $image ) {
                  echo wp_get_attachment_image( $image['id'], array(100, 100), false, array( 
                    'class' => 'img-circles',
                  ) );
                }
              ?>
            </div>
            <div class="quote-lisa-text">
              <p class="q">
              <?php the_field('review_text_1'); ?>
              </p>
            </div>
            <h5 class="quote-lisa-cite">
            <?php the_field('review_name_1'); ?>
            </h5>
            <p class="quote-lisa-status">Клиент</p>
          </div>
        </article>
        <!-- Quote Lisa-->
        <article class="quote-lisa">
          <div class="quote-lisa-body">
            <div class="quote-lisa-figure">
              <?php 
                $image = get_field('review_img_2');
                if( $image ) {
                  echo wp_get_attachment_image( $image['id'], array(100, 100), false, array( 
                    'class' => 'img-circles',
                  ) );
                }
              ?>
            </div>
            <div class="quote-lisa-text">
              <p class="q">
              <?php the_field('review_text_2'); ?>
              </p>
            </div>
            <h5 class="quote-lisa-cite">
            <?php the_field('review_name_2'); ?>
            </h5>
            <p class="quote-lisa-status">Клиент</p>
          </div>
        </article>
        <!-- Quote Lisa-->
        <article class="quote-lisa">
          <div class="quote-lisa-body">
            <div class="quote-lisa-figure">
              <?php 
                $image = get_field('review_img_3');
                if( $image ) {
                  echo wp_get_attachment_image( $image['id'], array(100, 100), false, array( 
                    'class' => 'img-circles',
                  ) );
                }
              ?>
            </div>
            <div class="quote-lisa-text">
              <p class="q">
              <?php the_field('review_text_3'); ?>
              </p>
            </div>
            <h5 class="quote-lisa-cite">
            <?php the_field('review_name_3'); ?>
            </h5>
            <p class="quote-lisa-status">Клиент</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Latest posts-->
  <section class="section section-sm bg-default">
    <div class="container">
      <div class="oh">
        <div
          class="title-decoration-lines wow slideInUp"
          data-wow-delay="0s"
        >
          <h6 class="title-decoration-lines-content">Новости</h6>
        </div>
      </div>
      <div class="row row-50 justify-content-center">
        <?php
          $args = array(
            'post_type'      => 'post-news',
            'posts_per_page' => 3,
          );
          $loop = new WP_Query( $args );
        ?>
        <?php
          if( $loop->have_posts() ) {
            while( $loop->have_posts() ) {
              $loop->the_post();
              ?>
                <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 wow fadeInLeft" data-wow-delay="0.3s">
                  <article class="post post-creative">
                    <div class="post-creative-header">
                      <div class="group-md">
                        <div>
                          <div
                            class="unit flex-column flex-sm-row unit-spacing-sm align-items-center"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <?php if ( has_post_thumbnail() ) : ?>
                      <a class="post-creative-figure" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( array(370, 270) ); ?>
                      </a>
                    <?php endif; ?>
                    <div class="post-creative-footer">
                      <h5 class="post-creative-title">
                        <a href="<?php the_permalink(); ?>"
                          ><?php the_title(); ?></a
                        >
                      </h5>
                    </div>
                  </article>
                </div>
              <?php
            }
            wp_reset_postdata();
          } 
        ?>
      </div>
    </div>
  </section>

  <!-- Section CTA 2-->
  <section class="section section-sm bg-default text-center">
    <div 
      class="parallax-container" 
      data-parallax-img="<?=get_stylesheet_directory_uri(); ?>/assets/images/bg-cta-3.jpg">
      <div
        class="parallax-content section-xl section-inset-custom-1 context-dark"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-6">
              <h3 class="oh">
                <span
                  class="d-inline-block wow slideInDown"
                  data-wow-delay="0s"
                  ><?php the_field('ready_order_title'); ?></span
                >
              </h3>
              <p class="oh">
                <span
                  class="d-inline-block wow slideInUp"
                  data-wow-delay=".2s"
                  >
                  <?php the_field('ready_order_text'); ?>
                  </span>
              </p>
              <a
                class="button button-secondary button-ujarak wow fadeInUp"
                href="#popup:marquiz_5ec11d867dde000044a57bc2"
                data-wow-delay=".1s"
                >Рассчитать</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-sm section-last bg-default">
    <div class="container">
      <!-- Owl Carousel-->
      <div
        class="owl-carousel owl-clients"
        data-items="1"
        data-sm-items="2"
        data-md-items="3"
        data-lg-items="4"
        data-margin="30"
        data-dots="true"
        data-animation-in="fadeIn"
        data-animation-out="fadeOut"
        data-autoplay="true"
      >
        <a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-1-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-2-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-3-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-4-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-5-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-6-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-7-270x145.png"
            alt=""
            width="270"
            height="145" /></a
        ><a class="clients-modern" href="#"
          ><img
            src="<?=get_stylesheet_directory_uri(); ?>/assets/images/clients-8-270x145.png"
            alt=""
            width="270"
            height="145"
        /></a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>