<?php get_template_part('template-parts/header-post'); ?>
<section class="promo-post page-news__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text page-news__promo-post-item-text">
      <h1 class="promo-post__title page-news__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <?php the_field('promo_text'); ?>
    </div>
  </div>
</section>
<main class="page-news__main container">
  <div class="page-news__cards">
    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'posts_per_page' => 6,
        'order'          => 'DESC',
        'post_type'      => 'post-news',
        'paged'          => $paged
      );
      $loop = new WP_Query( $args );
    ?>
    <?php
      if( $loop->have_posts() ) {
        while( $loop->have_posts() ) {
          $loop->the_post();
          ?>
          <a class="page-news__card" href="<?php the_permalink(); ?>">
            <article class="card">
              <div class="card__picture page-news__card-picture">
                <?php 
                  $image = get_field('promo_image');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
                      'class' => 'card__image page-news__card-image',
                    ) );
                  }
                ?>
              </div>
              <div class="card__content page-news__card-content">
                <h4 class="card__title page-news__card-title">
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
  <!-- <button class="page-news__button">Еще новости</button> -->
</main>
<?php get_footer(); ?>