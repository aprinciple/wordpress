<?php get_header(); ?>
  <main class="main-page__main">
    <div class="main-page__container container">
      <a class="main-page__item main-page__item--want" href="<?php echo home_url(); ?>/want">
        <h2 class="main-page__item-title">Хочу</h2>
        <p class="main-page__item-text">Список идей</p>
      </a>
      <a class="main-page__item main-page__item--can" href="<?php echo home_url(); ?>/can">
        <h2 class="main-page__item-title">Могу</h2>
        <p class="main-page__item-text">Список проектов</p>
      </a>
    </div>
  </main>
<?php get_footer(); ?>