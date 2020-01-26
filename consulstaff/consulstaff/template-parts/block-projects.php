<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<div class="projects">
  <div class="projects__container container">
    <h3 class="projects__title"><?php the_field('projects_title', $frontpage_id); ?></h3>
    <h5 class="projects__subtitle"><?php the_field('projects_subtitle', $frontpage_id); ?></h5>
  </div>
  <div class="page-home__projects-slider project__slider slider-projects">
    <div class="slider-projects__items">
    <?php
      $current_page;
      if( is_page('home') ) {
        $current_page = 'home';
      }
      if( is_page('corporate') ) {
        $current_page = 'corporate';
      }
      if( is_page('business') ) {
        $current_page = 'business';
      }
      if( is_page('investing') ) {
        $current_page = 'investing';
      }
      if( is_page('merger') ) {
        $current_page = 'merger';
      }
      if( is_page('design') ) {
        $current_page = 'design';
      }

      $args = array(
        'posts_per_page' => 4,
        'order'          => 'ASC',
        'post_type'      => 'post-project',
        'tax_query' => array(
          array(
            'taxonomy' => 'project',
            'field'    => 'slug',
            'terms'    => $current_page
            )
          ),
      );
      $loop = new WP_Query( $args );
    ?>
    <?php
      if( $loop->have_posts() ) {
        while( $loop->have_posts() ) {
          $loop->the_post();
          ?>
          <a class="slider-projects__item" href="<?php the_permalink(); ?>">
            <div class="slider-projects__inner">
              <span class="slider-projects__inner-number">01</span>
              <div class="slider-projects__inner-wrapper">
                <h4 class="slider-projects__inner-title">
                <?php the_title(); ?>
                </h4>
                <span class="slider-projects__inner-data">
                <?php echo get_the_date('Y'); ?>
                </span>
                <div class="slider-projects__inner-button button button-arrow">
                  <span class="button-arrow__text">
                    <?php the_field('projects_btn_more', $frontpage_id); ?>
                  </span>
                </div>
              </div>
            </div>
            <?php 
              $image = get_field('project_image');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                  'class' => 'slider-projects__item-image',
                ) );
              }
            ?>
          </a>
          <?php
        }
        wp_reset_postdata();
      } 
    ?>
    </div>
    <div class="slider-projects__nav">
      <button class="slider-projects__button slider-projects__button--left">
        <svg class="slider-projects__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1" viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
          <polygon points="476.21 223.11 57.426 223.11 91.819 188.71 70.606 167.5 0 238.11 70.606 308.71 91.819 287.5 57.426 253.11 476.21 253.11" />
        </svg>
      </button>
      <button class="slider-projects__button slider-projects__button--right">
        <svg class="slider-projects__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1" viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
          <polygon points="405.61 167.5 384.39 188.71 418.79 223.11 0 223.11 0 253.11 418.79 253.11 384.39 287.5 405.61 308.71 476.21 238.11" />
        </svg>
      </button>
      <div class="slider-projects__pointer">
        <span class="slider-projects__pointer-item">
      <i class="slider-projects__pointer-num">0</i>
    </span>
        <span class="slider-projects__pointer-item slider-projects__pointer-item--amount">
      /<i class="slider-projects__pointer-amount">0</i>
    </span>
      </div>
    </div>
  </div>
  <a class="projects__button button button-arrow" href="#">
    <span class="button-arrow__text"><?php the_field('projects_btn_all', $frontpage_id); ?></span>
  </a>
</div>