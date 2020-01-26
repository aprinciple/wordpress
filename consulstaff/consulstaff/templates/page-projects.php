<?php get_template_part('template-parts/header-projects'); ?>
<section class="promo-post page-projects__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text page-projects__promo-post-item-text">
      <h1 class="promo-post__title page-projects__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <?php the_field('promo_text'); ?>
    </div>
  </div>
</section>
<main class="post-project__main container">
  <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'posts_per_page' => 10,
      'order'          => 'DESC',
      'post_type'      => 'post-project',
      'paged'          => $paged
    );
    $loop = new WP_Query( $args );
  ?>
  <?php
    if( $loop->have_posts() ) {
      while( $loop->have_posts() ) {
        $loop->the_post();
        ?>
        <div class="post-project">
          <div class="post-project__picture post-project__item-picture">
            <!-- <?php the_post_thumbnail('post-project'); ?> -->
            <img class="post-project__image" src="/" alt="Alt">
          </div>
          <article class="post-project__article post-project__item-article">
            <h3 class="post-project__article-title">
            <?php the_title(); ?>
            </h3>
            <div class="post-project__article-excerpt">
            <?php the_excerpt() ?>
            </div>
            <footer class="post-project__article-info">
              <span class="post-project__article-info-tag">Digital lighting</span>
              <span class="post-project__article-info-year">
              <?php echo get_the_date('Y'); ?>
              year
              </span>
              <a class="post-project__article-info-link-more" href="<?php the_permalink(); ?>">
              <?php the_field('projects_button_text'); ?>
              </a>
            </footer>
          </article>
        </div>
        <?php
      }
      wp_reset_postdata();
    } 
  ?>
</main>
<?php get_footer(); ?>