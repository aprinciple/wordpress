<?php 
/**
* Template Name: Проекты
*/
  get_template_part('template-parts/header-post');
?>
<section class="page-library__promo">
  <div class="page-library__promo-inner">
    <div class="container page-library__promo-content">
      <h1 class="page-library__promo-title"><?php the_title(); ?></h1>
      <p class="page-library__promo-text"><?php the_field('slogan'); ?></p>
    </div>
  </div>
</section>
<main class="page-library__main">
  <div class="container">
    <div class="page-library__items">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'posts_per_page' => 7,
          'post_type'      => 'post-library',
          'paged'          => $paged
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
            <article class="page-library__item">
              <div class="page-library__item-inner">
                <div class="page-library__item-content">
                  <h2 class="page-library__item-title">
                    <?php the_title(); ?>
                  </h2>
                  <div class="page-library__item-text">
                    <?php the_field('text'); ?>
                  </div>
                </div>
                <figure class="page-library__item-image">
                  <?php 
                    $image = get_field('img');
                    if( $image ) {
                      echo wp_get_attachment_image( $image['id'], 'full', false, array() );
                    }
                  ?>
                  <span class="page-library__item-date">
                    <?php the_field('years'); ?> 
                    <?= wpm_translate_string('[:it]year[:en]year[:ru]год'); ?>
                  </span>
                </figure>
              </div>

              <footer class="page-library__item-footer">
                <div class="page-library__item-features">
                  <div class="page-library__item-features-item">
                  <b>
                    <?= wpm_translate_string('[:it]Settore[:en]Sector[:ru]Сектор[:]'); ?>:
                  </b> 
                    <?php the_field('sector'); ?>
                  </div>
                  <div class="page-library__item-features-item">
                    <b>
                      <?= wpm_translate_string('[:it]Risultato[:en]Result[:ru]Результат[:]'); ?>:
                    </b> 
                    <?php the_field('result'); ?>
                  </div>
                </div>

                <div class="page-library__item-info">
                  <div class="page-library__item-info-item">
                    <svg class="page-library__item-info-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#money"></use>
                    </svg>
                    <span class="page-library__item-info-num">
                      <?php the_field('money'); ?> <?= wpm_translate_string('[:it]milioni[:en]million[:ru]млн[:]'); ?>
                    </span>
                    <span class="page-library__item-info-text">
                    <?= wpm_translate_string('[:it]mercato[:en]budget[:ru]бюджета[:]'); ?>
                    </span>
                  </div>
                  <div class="page-library__item-info-item">
                    <svg class="page-library__item-info-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#growth"></use>
                    </svg>
                    <span class="page-library__item-info-num">
                    <?php the_field('growth'); ?>%
                    </span>
                    <span class="page-library__item-info-text">
                      <?= wpm_translate_string('[:it]crescita[:en]growth[:ru]роста[:]'); ?>
                    </span>
                  </div>
                  <div class="page-library__item-info-item">
                    <svg class="page-library__item-info-icon">
                      <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#pie-chart"></use>
                    </svg>
                    <span class="page-library__item-info-num"><?php the_field('chart'); ?>%&nbsp;<?= wpm_translate_string('[:it]quota[:en]share[:ru]доля[:]'); ?>
                    </span>
                    <span class="page-library__item-info-text">
                      <?= wpm_translate_string('[:it]marchi italiani[:en]italian brands[:ru]итальянских брендов[:]'); ?>
                    </span>
                  </div>
                </div>

                <div class="page-library__item-more">
                  <div class="page-library__item-more-item">
                    <span class="page-library__item-more-title">
                      <b class="page-library__item-more-title-number">01</b>
                      <span class="page-library__item-more-title-text">
                        <?= 
                          wpm_translate_string('[:it]Situazione del cliente[:en]Client Situation[:ru]Ситуация клиента[:]'); 
                        ?>
                      </span>
                    </span>
                    <p class="page-library__item-more-text">
                      <?php the_field('more_situation'); ?>
                    </p>
                  </div>
                  <div class="page-library__item-more-item">
                    <span class="page-library__item-more-title">
                      <b class="page-library__item-more-title-number">02</b>
                      <span class="page-library__item-more-title-text">
                        <?= 
                          wpm_translate_string('[:it]Decisione[:en]Decision[:ru]Решение[:]'); 
                        ?>
                      </span>
                    </span>
                    <p class="page-library__item-more-text">
                      <?php the_field('more_decision'); ?>
                    </p>
                  </div>
                  <div class="page-library__item-more-item">
                    <span class="page-library__item-more-title">
                      <b class="page-library__item-more-title-number">03</b>
                      <span class="page-library__item-more-title-text">
                        <?= 
                          wpm_translate_string('[:it]Risultato[:en]Result[:ru]Результат[:]'); 
                        ?>
                      </span>
                    </span>
                    <p class="page-library__item-more-text">
                      <?php the_field('more_result'); ?>
                    </p>
                  </div>
                </div>
              </footer>
              <span class="page-library__item-number">0<?= $loop->current_post + 1; ?></span>
            </article>
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
  </div>
</main>
  <?php get_template_part('template-parts/block-alert'); ?>
<?php get_footer(); ?>