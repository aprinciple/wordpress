<?php 
/**
 * Template name: FAQ
 */

get_header('theme');
?>
<main class="page__main">
  <div class="container p-faq__container">
    <div class="faq">
      <h1 class="title faq__title">Часто задаваемые вопросы</h1>
      <div class="faq__items">
      <?php
        $args = array(
          'order'     => 'ASC',
          'post_type' => 'post-faq',
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          $i = 0;
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
            <div class="faq__item<?= ($i === 1) ? ' faq__item--active' : ''; ?>">
              <h2 class="faq__item-title"><?php the_title(); ?></h2>
              <div class="faq__item-text"><?php the_content(); ?></div>
            </div>
            <?php
            $i++;
          }
          wp_reset_postdata();
        } 
      ?>
      </div>
      <div class="faq__ask">
        <p class="faq__ask-text">
          Если в данной статье Вы не нашли ответ на интересующий вопрос, напишите нашим операторам в онлайн чат – они подробно обо всем расскажут.
        </p>
        <a class="button faq__ask-button" href="<?= home_url('/feedback'); ?>">Написать нам</a>
      </div>
    </div>
    <div class="reviews p-faq__reviews">
      <div class="reviews__container p-faq__reviews-container">
        <h2 class="title reviews__title">Отзывы</h2>
        <a class="button reviews__button" href="<?= home_url('/reviews/#post-review') ?>">Оставить отзыв</a>
        <?= do_shortcode('[reviews_page]'); ?>
        <a class="button button--white reviews__all" href="<?= home_url('/reviews') ?>">Все отзывы</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>