<?php 
/**
 * Template Name: Услуги
 */
get_header();
?>
<?php the_post(); ?>
<div class="promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item--text">
      <h1 class="promo-post__title"><?php the_title(); ?></h1>
      <?php
        the_content();
      ?>
    </div>
    <div class="promo-post__item promo-post__item--slider">
      <div class="slider-post">
        <div class="slider-post__items">
          <?php 
            $counter = 1;
            while ($counter < 6):
              $slider_images = get_field('slides');
              $field_image = 'slide_' . $counter;
              $slider_image = $slider_images[$field_image];
            
              if ($slider_image): 
                ?>
                  <div class="slider-post__item">
                    <?= wp_get_attachment_image($slider_image['id'], 'full', '', array(
                      'class' => 'slider-post__image'
                    )) ?>
                  </div>
                <?php
              endif; 

              $counter++;
            endwhile;
          ?>
        </div>
        <div class="slider-post__nav">
          <button class="slider-post__button slider-post__button--prev"></button>
          <button class="slider-post__button slider-post__button--next"></button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if( get_field('table_1') ) : ?>
  <section class="post-table">
    <div class="post-table__container container">
      <?php 
        $table = get_field( 'table_1' );
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
        $table = get_field( 'table_2' );
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
        $table = get_field( 'table_3' );
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
<?php endif; ?>

<section class="p-home__services p-home__offer">
  <h2 class="b-title">
    <strong>Подробнее</strong>
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

<?php get_template_part('template-parts/make-request'); ?>
<?php get_footer(); ?>