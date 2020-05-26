<?php get_header(); ?>
<div class="promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text">
      <h1 class="promo-post__title"><?php the_title(); ?></h1>
      <div class="promo-post__text">
        <?php the_field("promo_text"); ?>
      </div>
      <div class="promo-post__info">
        <span class="promo-post__info-item">
          Срок выполнения: 
          <?php the_field('promo_info_deadline'); ?>
        </span>
        <span class="promo-post__info-item">
          Выполнено: 
          <?php the_field('promo_info_performed'); ?>
        </span>
        <span class="promo-post__info-item">
          Средний балл: 
          <?php the_field('promo_info_point'); ?>
        </span>
        <span class="promo-post__info-item">
          <?php the_field('promo_info_reviews'); ?> 
          отзывов
        </span>
      </div>
    </div>
    <div class="promo-post__item promo-post__item-picture">
      <?php 
        $image = get_field('promo_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'full', false, array( 
            'class' => 'promo-post__image',
          ) );
        }
      ?>
    </div>
  </div>
</div>

<main class="post-blog">
  <div class="post-blog__container container">
    <div class="post-blog__content">
      <?php the_field('post_content_text'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>