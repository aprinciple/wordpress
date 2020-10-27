<?php get_header('no-menu'); ?>
<main class="p-result__main">
  <div class="container">
    <div class="p-result__promo">
      <h1 class="page-title p-result__title">
        <?php the_title(); ?>
      </h1>
      <div class="p-result__picture">
        <?php 
          if( has_post_thumbnail() ) {
            the_post_thumbnail('', array(
              'class' => "p-result__image",
            ));
          }
        ?>
      </div>
      <div class="p-result__figure">
        <div class="p-result__figure-wrapper">
          <svg class="p-result__figure-icon">
            <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#right-arrow"></use>
          </svg>
        </div>
      </div>
    </div>
    <article class="p-result__article">
      <?php the_content(); ?>
    </article>
    <div class="p-result__share">
      <span class="p-result__share-title">Поделиться в соцсетях:</span>
      <script src="https://yastatic.net/share2/share.js"></script>
      <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki"></div>
    </div>
    <a class="button p-result__button" href="<?= home_url(); ?>">
      Вернуться на главную
    </a>
  </div>
</main>
<?php get_footer('empty'); ?>