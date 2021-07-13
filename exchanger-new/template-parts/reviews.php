<div class="reviews">
  <div class="reviews__container">
    <h2 class="title reviews__title">Отзывы</h2>
    <a class="button reviews__button" href="<?= home_url('/reviews/#post-review') ?>">Оставить отзыв</a>
    <?= do_shortcode('[reviews_page]'); ?>
    <a class="button button--white reviews__all" href="<?= home_url('/reviews') ?>">Все отзывы</a>
  </div>
</div>