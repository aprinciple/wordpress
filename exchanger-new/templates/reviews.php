<?php 
if( !defined( 'ABSPATH')){ exit(); }

/*
  Template Name: Отзывы
*/

get_header('theme');
?>
<main class="page__main">
  <div class="page__promo p-reviews__promo">
    <div class="container p-reviews__promo-wrapper">
      <h1 class="title page__promo-title p-reviews__promo-title">Отзывы</h1>
      <a class="button" href="#post-review">Оставить отзыв</a>
    </div>
  </div>

  <div class="reviews p-reviews__reviews">
    <div class="container p-reviews__wrapper">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>				
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>