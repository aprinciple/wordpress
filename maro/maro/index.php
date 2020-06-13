<?php get_header(); ?>
  <?php get_template_part('template-parts/block-header') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <div class="home-promo">
      <div class="container">
        <h1 class="home-promo__title">
        <?php the_field('home_title'); ?>
        </h1>
        <p class="home-promo__subtitle">
        <?php the_field('home_subtitile'); ?>
        </p>
        <a href="<?php the_field('home_link'); ?>" class="home-promo__link">Заказать вывеску</a>
      </div>
    </div>

    <div class="home-projects">
      <div class="container">
        <h2 class="home-projects__title p-title">
        <?php the_field('h_projects_title'); ?>
        </h2>
        <div class="home-projects__items">

          <a 
            class="home-projects__item" 
            href="<?php the_field('h_project_link_1'); ?>">
            <?php 
              $image = get_field('h_project_img_1');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_1'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item home-projects__item--no-image" 
            href="<?php the_field('h_project_link_2'); ?>">
            <?php 
              $image = get_field('h_project_img_2');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_2'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item home-projects__item--white" 
            href="<?php the_field('h_project_link_3'); ?>">
            <?php 
              $image = get_field('h_project_img_3');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_3'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item home-projects__item--no-image" 
            href="<?php the_field('h_project_link_4'); ?>">
            <?php 
              $image = get_field('h_project_img_4');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_4'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item home-projects__item--white" 
            href="<?php the_field('h_project_link_5'); ?>">
            <?php 
              $image = get_field('h_project_img_5');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_5'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item" 
            href="<?php the_field('h_project_link_6'); ?>">
            <?php 
              $image = get_field('h_project_img_6');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_6'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item home-projects__item--no-image" 
            href="<?php the_field('h_project_link_7'); ?>">
            <?php 
              $image = get_field('h_project_img_7');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_7'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item" 
            href="<?php the_field('h_project_link_8'); ?>">
            <?php 
              $image = get_field('h_project_img_8');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_8'); ?>
            </h6>
          </a>

          <a 
            class="home-projects__item home-projects__item--white" 
            href="<?php the_field('h_project_link_9'); ?>">
            <?php 
              $image = get_field('h_project_img_9');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'home-projects__item-image',
                ) );
              }
            ?>
            <h6 class="home-projects__item-title">
            <?php the_field('h_project_title_9'); ?>
            </h6>
          </a>

        </div>
      </div>
    </div>

    <div class="home-advantages">
      <div class="container">
        <h2 class="advantages__title p-title">
        <?php the_field('h_adv_title'); ?>
        </h2>
        <div class="advantages__items">
          <div class="advantages__item">
            <p class="advantages__text">
            <?php the_field('h_adv_1'); ?>
            </p>
          </div>
          <div class="advantages__item">
            <p class="advantages__text">
            <?php the_field('h_adv_2'); ?>
            </p>
          </div>
          <div class="advantages__item">
            <p class="advantages__text">
            <?php the_field('h_adv_3'); ?>
            </p>
          </div>
          <div class="advantages__item">
            <p class="advantages__text">
            <?php the_field('h_adv_4'); ?>
            </p>
          </div>
          <div class="advantages__item">
            <p class="advantages__text">
            <?php the_field('h_adv_5'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="home-clients">
      <div class="container">
        <h2 class="home-clients__title p-title">
          <?php the_field('clients_title'); ?>
        </h2>
        <div class="home-clients__wrapper">
          <button class="home-clients__button home-clients__button--prev"></button>
          <button class="home-clients__button home-clients__button--next"></button>
          <div class="home-clients__items">
            <?php 
              $counter = 1;
              while ($counter < 11) :
                $client_images = get_field('clients_photo');
                $field_image = 'clients_photo-' . $counter;
                $client_image = $client_images[$field_image];
              
                if ($client_image) {
                  ?>
                    <div class="home-clients__item">
                      <?= wp_get_attachment_image( $client_image['id'], 'full', false, array() ); ?>
                    </div>
                  <?php
                } 
                $counter++;
              endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="home-reviews">
      <div class="container">
        <h3 class="home-reviews__title p-title">
          <?php the_field('thanks_title'); ?>
        </h3>
        <div class="home-reviews__wrapper">
          <button class="home-reviews__button home-reviews__button--prev"></button>
          <button class="home-reviews__button home-reviews__button--next"></button>
          <div class="home-reviews__items">
            <?php 
              $counter = 1;
              while ($counter < 11) :
                $thanks_images = get_field('thanks_photo');
                $field_image = 'thanks_photo-' . $counter;
                $thanks_image = $thanks_images[$field_image];
              
                if ($thanks_image) {
                  ?>
                    <div class="home-reviews__item">
                      <a data-fancybox="gallery" href="<?= $thanks_image['url']; ?>">
                        <?= wp_get_attachment_image( $thanks_image['id'], 'full', false, array() ); ?>
                      </a>
                    </div>
                  <?php
                } 
                $counter++;
              endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer') ?>
</div>
<?php get_footer(); ?>