<?php
/*
Template Name: Объекты на продажу
*/
?>
<?php get_template_part('template-parts/header-post'); ?>
<main class="p-objects__main container">
  <div class="p-objects__promo">
    <h1 class="p-objects__title">
      <?php the_title(); ?>
    </h1>
    <p class="p-objects__text">
      <?php the_field('desc'); ?>
    </p>
  </div>
  <div class="p-objects__nav">
    <a 
      class="p-objects__nav-link p-objects__nav-link--wine" 
      href="<?php echo get_term_link( 'wine', $taxonomy = 'objects-direction' ); ?>"
    >
      <?= wpm_translate_string('[:it]Cantine[:en]Wineries[:ru]Винодельни'); ?>
    </a>
    <a 
      class="p-objects__nav-link p-objects__nav-link--hotel" 
      href="<?php echo get_term_link( 'hotel', $taxonomy = 'objects-direction' ); ?>"
    >
      <?= wpm_translate_string('[:it]Hotel[:en]Hotels[:ru]Гостиницы'); ?>
    </a>
    <a 
      class="p-objects__nav-link p-objects__nav-link--map" 
      href="<?php echo get_term_link( 'other', $taxonomy = 'objects-direction' ); ?>"
    >
      <?= wpm_translate_string('[:it]Altri oggetti[:en]Other objects[:ru]Другие объекты'); ?>
    </a>
  </div>
  <div class="p-objects__items main-content">
    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'posts_per_page' => 10,
        // 'order'          => 'DESC',
        'post_type'      => 'objects',
        'paged'          => $paged
      );
      $loop = new WP_Query( $args );
    ?>
    <?php
      if( $loop->have_posts() ) {
        while( $loop->have_posts() ) {
          $loop->the_post();
          ?>
            <?php
              $slug;
              $terms = get_the_terms( get_the_ID(), 'objects-direction' );
              if ( !empty( $terms ) ) {
                $term = array_shift( $terms );
                $slug = ($term->slug) ? $term->slug : 'other';
              }
            ?>
            <div class="p-objects__item main-content__item">
              <div class="p-objects__item-content">
                <h2 class="p-objects__item-title p-objects__item-title--<?= $slug; ?>">
                  <?php the_title(); ?>
                </h2>
                <div class="p-objects__item-text">
                  <?php the_content(); ?>
                </div>
                <?php the_field('list_1_item'); ?>
                <div class="p-objects__item-info">
                  <div class="p-objects__item-info-item">
                    <span class="p-objects__item-info-tagline p-objects__item-info-tagline--region">
                      <?= wpm_translate_string('[:it]Regione[:en]Region[:ru]Регион'); ?>:
                    </span>
                    <span class="p-objects__item-info-text">
                      <?php the_field('region'); ?>
                    </span>
                  </div>
                  <div class="p-objects__item-info-item">
                    <span class="p-objects__item-info-tagline p-objects__item-info-tagline--price">
                      <?= 
                        wpm_translate_string('[:it]Prezzo originale[:en]Original price[:ru]Первоначальная цена'); 
                      ?>:
                    </span>
                    <span class="p-objects__item-info-text">
                      <?php the_field('price'); ?>
                    </span>
                  </div>
                </div>
              </div>
              <div class="p-objects__item-slider">
                <div class="p-objects__item-slider-items">
                  <?php 
                    $counter = 1;
                    while ($counter < 6):
                      $photos = get_field('photos');
                      $photo = 'photo-' . $counter;
                      $image = $photos[$photo];
                  
                  if ($image): ?>

                    <div class="p-objects__item-slider-item">
                      <?= 
                        wp_get_attachment_image( $image['id'], '', false, array( 
                          'class' => 'p-objects__item-slider-image',
                        ) );
                      ?>
                    </div>

                  <?php endif; 
                      $counter++;
                    endwhile;
                  ?>
                </div>
                <div class="p-objects__item-slider-nav">
                  <button 
                    class="p-objects__item-slider-button p-objects__item-slider-button--prev" type="button"
                  >
                  </button>
                  <div class="p-objects__item-slider-nav-index">
                    <span class="p-objects__item-slider-nav-current">1</span>
                    /
                    <div class="p-objects__item-slider-nav-total"></div>
                  </div>
                  <button 
                    class="p-objects__item-slider-button p-objects__item-slider-button--next" type="button"
                  >
                  </button>
                </div>
              </div>
              <a class="p-objects__item-link" href="<?php the_permalink(); ?>">
                <?= wpm_translate_string('[:it]Dettagli[:en]More[:ru]Подробнее'); ?>
              </a>
            </div>
          <?php
        }
        wp_reset_postdata();
      } 
    ?>
    <nav class="pagination">
      <?php
        $big = 99999;
        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $loop->max_num_pages,
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
        ) );
      ?>
    </nav>
  </div>
</main>
<?php get_footer(); ?>