<?php get_header(); ?>
  <section class="home-about-us">
    <div class="home-about-us__container container">
      <h2 class="home-about-us__headline">Consulstaff</h2>
      <span class="home-about-us__caption"><?php the_field('home_about_us_caption'); ?></span>
      <div class="home-about-us__wrapper">
        <div class="home-about-us__item home-about-us__item-text">
          <h3 class="home-about-us__title">
            <?php the_field('home_about_us_title'); ?>
          </h3>
          <div class="home-about-us__photo">
          <?php 
            $image = get_field('home_about_us_image');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                'class' => 'home-about-us__photo-image',
              ) );
            }
          ?>
          </div>
          <?php the_field('home_about_us_text'); ?>
          <a class="home-about-us__button button button-arrow" href="<?php echo home_url(); ?>/about-us">
          <span class="button-arrow__text"><?php the_field('home_about-us_button'); ?></span>
        </a>
        </div>
        <div class="home-about-us__item home-about-us__item-list">
          <ul class="home-about-us__info">
            <li class="home-about-us__info-item">
              <span class="home-about-us__info-amount">
                <?php the_field('home_about_us_info_one_years'); ?>
              </span>
              <span class="home-about-us__info-text">
                <?php the_field('home_about_us_info_one_text'); ?>
              </span>
            </li>
            <li class="home-about-us__info-item">
              <span class="home-about-us__info-amount">
                <?php the_field('home_about_us_info_two_years'); ?>
              </span>
              <span class="home-about-us__info-text">
                <?php the_field('home_about_us_info_two_text'); ?>
              </span>
            </li>
            <li class="home-about-us__info-item">
              <span class="home-about-us__info-amount">
                <?php the_field('home_about_us_info_three_years'); ?>
              </span>
              <span class="home-about-us__info-text">
                <?php the_field('home_about_us_info_three_text'); ?>
              </span>
            </li>
            <li class="home-about-us__info-item">
              <span class="home-about-us__info-amount">
                <?php the_field('home_about_us_info_four_years'); ?>
              </span>
              <span class="home-about-us__info-text">
                <?php the_field('home_about_us_info_four_text'); ?>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="home-services">
    <div class="home-services__container container">
      <div class="home-services__item home-services__item--text">
        <h3 class="home-services__title"><?php the_field('home_services_title'); ?></h3>
        <?php the_field('home_services_text'); ?>
        <a class="home-services__button button button-arrow" href="<?php echo home_url(); ?>/services">
          <span class="button-arrow__text"><?php the_field('home_services_button'); ?></span>
        </a>
      </div>
      <div class="home-services__item home-services__item--list">
        <ul class="home-services__list">
          <li class="home-services__list-item">
            <a class="home-services__list-link" href="<?php echo home_url(); ?>/business" data-image="<?php echo get_template_directory_uri(); ?>/assets/img/bg-home-services.jpg">
            <?php the_field('home_services_menu_item-1'); ?>
            </a>
          </li>
          <li class="home-services__list-item">
            <a class="home-services__list-link" href="<?php echo home_url(); ?>/corporate" data-image="<?php echo get_template_directory_uri(); ?>/assets/img/bg-home-services-2.jpg">
            <?php the_field('home_services_menu_item-2'); ?>
            </a>
          </li>
          <li class="home-services__list-item">
            <a class="home-services__list-link" href="<?php echo home_url(); ?>/merger" data-image="<?php echo get_template_directory_uri(); ?>/assets/img/bg-home-services-3.jpg">
            <?php the_field('home_services_menu_item-3'); ?>
            </a>
          </li>
          <li class="home-services__list-item">
            <a class="home-services__list-link" href="<?php echo home_url(); ?>/investing" data-image="<?php echo get_template_directory_uri(); ?>/assets/img/bg-home-services-4.jpg">
            <?php the_field('home_services_menu_item-4'); ?>
            </a>
          </li>
          <li class="home-services__list-item">
            <a class="home-services__list-link" href="<?php echo home_url(); ?>/design" data-image="<?php echo get_template_directory_uri(); ?>/assets/img/bg-home-services-5.jpg">
            <?php the_field('home_services_menu_item-5'); ?>
            </a>
          </li>
          <li class="home-services__list-photo">
            <img class="home-services__list-photo-image" src="" alt="Services">
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- <section class="page-home__projects">
    <?php get_template_part('template-parts/block-projects'); ?>
  </section> -->

  <section class="page-home__news-advert news-advert">
    <div class="news-advert__container container">
      <div class="news-advert__aside">
        <h3 class="news-advert__title"><?php the_field('home_news_title'); ?></h3>
        <p class="news-advert__text"><?php the_field('home_news_subtitle'); ?></p>
      </div>
      <div class="news-advert__wrapper news-advert__cards">
      <?php
        $args = array(
          'order'          => 'DESC',
          'post_type'      => 'post-news',
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
            <a class="news-advert__card" href="<?php the_permalink(); ?>">
              <article class="card">
                <div class="card__picture">
                  <?php 
                    $image = get_field('promo_image');
                    if( $image ) {
                      echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                        'class' => 'card__image',
                      ) );
                    }
                  ?>
                </div>
                <div class="card__content">
                  <h4 class="card__title">
                    <?php the_title(); ?>
                  </h4>
                  <div class="card__text">
                    <?php the_excerpt() ?>
                  </div>
                </div>
              </article>
            </a>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
      </div>
    </div>
    <a 
      class="news-advert__button button button-arrow" 
      href="<?php echo home_url(); ?>/news">
      <span class="button-arrow__text"><?php the_field('home_news_button'); ?></span>
    </a>
  </section>

  <section class="home-contacts">
    <div class="home-contacts__container container">
      <div class="home-contacts__item home-contacts__item--contacts contacts">
        <h4 class="home-contacts__title contacts__title">
          <?php the_field('contacts_title'); ?>
        </h4>
        <h5 class="home-contacts__subtitle contacts__subtitle">ConsulStaff s.r.l.</h5>
        <div class="contacts__item">
          <h6 class="contacts__item-title">
            <?php the_field('contacts_item_it_title'); ?>
          </h6>
          <?php the_field('contacts_item_it_text'); ?>
          <div class="contacts__item-messenger">
            <span class="contacts__item-messenger-text">
              Telegram / WhatsApp
            </span>
            <div class="contacts__item-messenger-items">
              <a class="contacts__item-messenger-item contacts__item-messenger-item-telegram" href="tg://resolve?domain=<?php the_field('contacts_item_it_tm'); ?>">
                <svg class="contacts__item-messenger-item-icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
                </svg>
              </a>
              <a 
                class="contacts__item-messenger-item contacts__item-messenger-item-whatsapp" href="https://wa.me/<?php the_field('contacts_item_it_wp'); ?>"
                target="_blank">
                <svg class="contacts__item-messenger-item-icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#whatsapp"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="contacts__item">
          <h6 class="contacts__item-title">
            <?php the_field('contacts_item_ru_title'); ?>
          </h6>
          <?php the_field('contacts_item_ru_text'); ?>
          <div class="contacts__item-messenger">
            <span class="contacts__item-messenger-text">
              Telegram / WhatsApp
            </span>
            <div class="contacts__item-messenger-items">
              <a 
                class="contacts__item-messenger-item contacts__item-messenger-item-telegram" href="tg://resolve?domain=<?php the_field('contacts_item_ru_tm'); ?>">
                <svg class="contacts__item-messenger-item-icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
                </svg>
              </a>
              <a 
                class="contacts__item-messenger-item contacts__item-messenger-item-whatsapp" href="https://wa.me/<?php the_field('contacts_item_ru_wp'); ?>"
                target="_blank">
                <svg class="contacts__item-messenger-item-icon">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#whatsapp"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <a 
          class="contacts__item contacts__email" 
          href="mailto:<?php the_field('contacts_mail'); ?>">
          <?php the_field('contacts_mail'); ?>
        </a>
        <p class="contacts__item contacts__piva">
          <?php the_field('contacts_piva'); ?>
        </p>
      </div>
      <div class="home-contacts__item home-contacts__item--form">
        <div class="home-contacts__form">
          <?php echo do_shortcode( '[form_home]' ) ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-alert'); ?>
<?php get_footer(); ?>