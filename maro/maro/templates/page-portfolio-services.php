<?php 
/*
Template name: Страница - портфолио - услуги - тег
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content p-portfolio">
    <?php 
      the_post();
      $current_page = get_the_ID();
      global $current_page;
    ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="head p-portfolio__title">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>

          <div class="portfolio-tabs">
            <div class="portfolio-tabs__tabs">
              <a 
                id="portfolio-tab-works"
                class="portfolio-tabs__tab"
                href="#">
                все работы
              </a>
              <a 
                id="portfolio-tab-services"
                class="portfolio-tabs__tab portfolio-tabs__tab--active"
                href="#">
                вид услуги
              </a>
            </div>

            <div class="portfolio-tabs__nav">
              <?php 
                $args = array(
                  'post_type'      => 'page',
                  'post_parent'    => 295,
                  'posts_per_page' => -1,
                );

                $parent = new WP_Query( $args );

                if ( $parent->have_posts() ) : ?>

                  <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                    <a 
                      class="portfolio-tabs__nav-link 
                      <?php 
                        if( $current_page === get_the_ID() ) {
                          echo 'portfolio-tabs__nav-link--active';
                        }
                      ?>" 
                      href="<?php the_permalink() ?>">
                      <?php the_title(); ?>
                    </a>
                  <?php endwhile; ?>

              <?php endif; wp_reset_query(); ?>
            </div>

            <div id="portfolio-tabs-items-works" class="portfolio-tabs__items">
              <?php 
                $args = array(
                  'post_type'      => 'page',
                  'post_parent'    => 293,
                  'posts_per_page' => -1,
                );

                $parent = new WP_Query( $args );

                if ( $parent->have_posts() ) : ?>

                  <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                    <div class="portfolio-tabs__item">
                      <?php 
                        $group = get_field('imgs');
                        $image = $group['img_1'];
                        if( $image ) {
                          echo wp_get_attachment_image( $image['id'], 'full', false, array() );
                        }
                      ?>
                      <span class="portfolio-tabs__item-title"><?php the_title(); ?></span>
                    </div>

                    <div class="slider-portfolio">
                      <button class="slider-portfolio__close"></button>
                      <div class="slider-portfolio__items">
                        <?php 
                          $counter = 1;
                          while ($counter < 5) :
                            $group = get_field('imgs');
                            $field_image = 'img_' . $counter;
                            $image = $group[$field_image];
                          
                            if ($image) {
                              ?>
                                <div class="slider-portfolio__item">
                                  <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                                </div>
                              <?php
                            } 
                            $counter++;
                          endwhile;
                        ?>
                      </div>
                      
                      <div class="slider-portfolio__controls">
                        <button class="slider-portfolio__button slider-portfolio__button--prev"></button>
                        <button class="slider-portfolio__button slider-portfolio__button--next"></button>

                        <ul class="slider-portfolio__thumbnails">
                          <?php 
                            $counter = 1;
                            while ($counter < 5) :
                              $group = get_field('imgs');
                              $field_image = 'img_' . $counter;
                              $image = $group[$field_image];
                            
                              if ($image) {
                                ?>
                                  <li class="slider-portfolio__thumbnails-item">
                                    <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                                  </li>
                                <?php
                              } 
                              $counter++;
                            endwhile;
                          ?>
                        </ul>

                      </div>

                      <div class="slider-portfolio__desc">
                        <h5 class="slider-portfolio__desc-title"><?php the_title(); ?></h5>
                        <?php the_field('desc'); ?>
                      </div>

                    </div>

                  <?php endwhile; ?>

              <?php endif; wp_reset_query(); ?>
            </div>

            <div id="portfolio-tabs-items-services" class="portfolio-tabs__items">
              <?php 
                $args = array(
                  'post_type'      => 'page',
                  'post_parent'    => get_the_ID(),
                  'posts_per_page' => -1,
                );

                $parent = new WP_Query( $args );

                if ( $parent->have_posts() ) : ?>

                  <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

                    <div class="portfolio-tabs__item">
                      <?php 
                        $group = get_field('imgs');
                        $image = $group['img_1'];
                        if( $image ) {
                          echo wp_get_attachment_image( $image['id'], 'full', false, array() );
                        }
                      ?>
                      <span class="portfolio-tabs__item-title"><?php the_title(); ?></span>
                    </div>

                    <div class="slider-portfolio">
                      <button class="slider-portfolio__close"></button>
                      <div class="slider-portfolio__items">
                        <?php 
                          $counter = 1;
                          while ($counter < 5) :
                            $group = get_field('imgs');
                            $field_image = 'img_' . $counter;
                            $image = $group[$field_image];
                          
                            if ($image) {
                              ?>
                                <div class="slider-portfolio__item">
                                  <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                                </div>
                              <?php
                            } 
                            $counter++;
                          endwhile;
                        ?>
                      </div>

                      <div class="slider-portfolio__controls">
                        <button class="slider-portfolio__button slider-portfolio__button--prev"></button>
                        <button class="slider-portfolio__button slider-portfolio__button--next"></button>

                        <ul class="slider-portfolio__thumbnails">
                          <?php 
                            $counter = 1;
                            while ($counter < 5) :
                              $group = get_field('imgs');
                              $field_image = 'img_' . $counter;
                              $image = $group[$field_image];
                            
                              if ($image) {
                                ?>
                                  <li class="slider-portfolio__thumbnails-item">
                                    <?= wp_get_attachment_image( $image['id'], 'full', false, array() ); ?>
                                  </li>
                                <?php
                              } 
                              $counter++;
                            endwhile;
                          ?>
                        </ul>

                      </div>

                      <div class="slider-portfolio__desc">
                        <h5 class="slider-portfolio__desc-title"><?php the_title(); ?></h5>
                        <?php the_field('desc'); ?>
                      </div>

                    </div>

                  <?php endwhile; ?>

              <?php endif; wp_reset_query(); ?>
            </div>
            
          </div>

        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>