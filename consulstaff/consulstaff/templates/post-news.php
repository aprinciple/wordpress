<?php get_template_part('template-parts/header-post'); ?>
<section class="promo-post page-post-news__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text">
      <h1 class="promo-post__title page-post-news__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <?php the_field('promo_text'); ?>
    </div>
    <div class="promo-post__item page-post-news__promo-post-item-picture">
      <?php 
        $image = get_field('promo_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'page-post-news__promo-post-item-picture-image',
          ) );
        }
      ?>
    </div>
  </div>
</section>
<main class="page-post-news__main container">
  <article class="post-blog">
    <h3 class="post-blog__title">
    <?php the_field('post_news_title'); ?>
    </h3>
    <div class="post-blog__content post-blog__content--columnar">
    <?php the_field('post_news_text_column'); ?>
    </div>
    <div class="post-blog__content">
      <?php the_field('post_news_text'); ?>
      <div class="post-blog__content-picture">
        <?php 
          $image = get_field('post_news_image');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
              'class' => 'post-blog__content-image',
            ) );
          }
        ?>
      </div>
    </div>
  </article>
</main>
<?php get_footer(); ?>