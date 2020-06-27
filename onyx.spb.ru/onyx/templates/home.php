<?php 
/**
 * Template Name: Главная
 */
get_header();
?>
  <div class="p-home">
    <div class="p-home__slider">
      <div class="nav-slider p-home__nav-slider">
        <div class="nav-slider__items">
          <div class="nav-slider__item">
            <div class="nav-slider__container">
              <div class="nav-slider__inner">
                <a href="#">
                  <h1 class="nav-slider__item-title"><?php the_field('slide_title_1'); ?></h1>
                </a>
                <a href="#">
                  <p class="nav-slider__item-text"><?php the_field('slide_txt_1'); ?></p>
                </a>
                <span class="nav-slider__item-years">10 лет на рынке</span>
                <a class="nav-slider__item-link" href="<?php the_field('slide_link_1'); ?>">Подробнее</a>
              </div>
            </div>
            <?php 
              $image = get_field('slide_img_1');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'nav-slider__item-image',
                ) );
              }
            ?>
          </div>
          <div class="nav-slider__item">
            <div class="nav-slider__container">
              <div class="nav-slider__inner">
                <a href="#">
                  <h1 class="nav-slider__item-title"><?php the_field('slide_title_2'); ?></h1>
                </a>
                <a href="#">
                  <p class="nav-slider__item-text"><?php the_field('slide_txt_2'); ?></p>
                </a>
                <span class="nav-slider__item-years">10 лет на рынке</span>
                <a class="nav-slider__item-link" href="<?php the_field('slide_link_2'); ?>">Подробнее</a>
              </div>
            </div>
            <?php 
              $image = get_field('slide_img_2');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'nav-slider__item-image',
                ) );
              }
            ?>
          </div>
          <div class="nav-slider__item">
            <div class="nav-slider__container">
              <div class="nav-slider__inner">
                <a href="#">
                  <h1 class="nav-slider__item-title"><?php the_field('slide_title_3'); ?></h1>
                </a>
                <a href="#">
                  <p class="nav-slider__item-text"><?php the_field('slide_txt_3'); ?></p>
                </a>
                <span class="nav-slider__item-years">10 лет на рынке</span>
                <a class="nav-slider__item-link" href="<?php the_field('slide_link_3'); ?>">Подробнее</a>
              </div>
            </div>
            <?php 
              $image = get_field('slide_img_3');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'nav-slider__item-image',
                ) );
              }
            ?>
          </div>
          <div class="nav-slider__item">
            <div class="nav-slider__container">
              <div class="nav-slider__inner">
                <a href="#">
                  <h1 class="nav-slider__item-title"><?php the_field('slide_title_4'); ?></h1>
                </a>
                <a href="#">
                  <p class="nav-slider__item-text"><?php the_field('slide_txt_4'); ?></p>
                </a>
                <span class="nav-slider__item-years">10 лет на рынке</span>
                <a class="nav-slider__item-link" href="<?php the_field('slide_link_4'); ?>">Подробнее</a>
              </div>
            </div>
            <?php 
              $image = get_field('slide_img_4');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'nav-slider__item-image',
                ) );
              }
            ?>
          </div>
          <div class="nav-slider__item">
            <div class="nav-slider__container">
              <div class="nav-slider__inner">
                <a href="#">
                  <h1 class="nav-slider__item-title"><?php the_field('slide_title_5'); ?></h1>
                </a>
                <a href="#">
                  <p class="nav-slider__item-text"><?php the_field('slide_txt_5'); ?></p>
                </a>
                <span class="nav-slider__item-years">10 лет на рынке</span>
                <a class="nav-slider__item-link" href="<?php the_field('slide_link_5'); ?>">Подробнее</a>
              </div>
            </div>
            <?php 
              $image = get_field('slide_img_5');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'nav-slider__item-image',
                ) );
              }
            ?>
          </div>
        </div>
        <div class="nav-slider__nav"></div>
      </div>
    </div>

    <section class="p-home__advantages">
      <h2 class="b-title">
        <strong>Наши преимущества</strong>
      </h2>
      <?php get_template_part('template-parts/our-advantages'); ?>
    </section>

    <section class="p-home__services p-home__offer">
      <h2 class="b-title">
        <strong>Наши услуги</strong>
      </h2>
      <div class="cards-offer cards-offer--services">
        <button class="cards-offer__button cards-offer__button--prev"></button>
        <button class="cards-offer__button cards-offer__button--next"></button>
        <div class="cards-offer__items cards-offer__items--services">
          <?php 
            $args = array(
              'post_type'      => 'page',
              'post_parent'    => 21,
              'posts_per_page' => -1,
              'orderby'       => 'menu_order',
            );
      
            $query = new WP_Query( $args) ;
          ?>
          <?php if( $query->have_posts() ) : ?>
      
            <?php while( $query->have_posts() ) : $query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <article class="cards-offer__item">
                  <?php 
                    if( has_post_thumbnail() ) {
                      the_post_thumbnail( 'full', array(
                        'class' => 'cards-offer__item-image'
                      ) );
                    }
                  ?>
                    <div class="cards-offer__item-content">
                      <h5 class="cards-offer__item-title">
                        <?php the_title(); ?>
                      </h5>
                    </div>
                </article>
              </a>
      
          <?php endwhile; ?>
      
          <?php wp_reset_postdata(); ?>
      
          <?php endif; ?>
        </div>
      </div>
    </section>
  
    <section class="p-home__products p-home__offer">
      <h2 class="b-title">
        <strong>Наши товары</strong>
      </h2>

      <div class="cards-offer cards-offer--products">
        <button class="cards-offer__button cards-offer__button--prev"></button>
        <button class="cards-offer__button cards-offer__button--next"></button>
        <div class="cards-offer__items cards-offer__items--products">
          <?php 
          $prod_cat_args = array(
            'taxonomy'    => 'product_cat',
            'hide_empty'  => true,
            'parent'      => 0
          );
          $woo_categories = get_categories( $prod_cat_args );
          foreach ( $woo_categories as $woo_cat ) {
            $woo_cat_id   = $woo_cat->term_id;
            $woo_cat_name = $woo_cat->name;
            $woo_cat_slug = $woo_cat->slug;
            $category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
            ?>
              <a href="<?= get_term_link( $woo_cat_id, 'product_cat' ); ?>">
                <article class="cards-offer__item">
                  <?= wp_get_attachment_image( 
                    $category_thumbnail_id, 
                    'full',
                    '', 
                    array(
                      'class' => 'cards-offer__item-image'
                    ) ); 
                  ?>
                  <div class="cards-offer__item-content">
                    <h5 class="cards-offer__item-title">
                      <?= $woo_cat_name; ?>
                    </h5>
                  </div>
                </article>
              </a>
            <?php
          }
          ?>
        </div>
      </div>
    </section>
    <?php get_template_part('template-parts/make-request'); ?>
  </div>
<?php get_footer(); ?>