<?php 
if( !defined( 'ABSPATH')){ exit(); }

/**
 * Template name: Обмен
 */

get_header('theme');
?>
  <main>
    <div class="container">
      <div class="p-exchange__wrapper">
        <div class="p-exchange__form">
          <?php 
            if (have_posts()) : ?>
              <?php while (have_posts()) : the_post();  ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="reviews p-faq__reviews p-exchange__reviews">
          <div class="reviews__container p-faq__reviews-container">
            <h2 class="title reviews__title">Отзывы</h2>
            <a class="button reviews__button" href="<?= home_url('/reviews/#post-review') ?>">Оставить отзыв</a>
            <?= do_shortcode('[reviews_page]'); ?>
            <a class="button button--white reviews__all" href="<?= home_url('/reviews') ?>">Все отзывы</a>
          </div>
        </div>
      </div>
    </div>
  </main>
		
<?php get_footer('theme'); ?>