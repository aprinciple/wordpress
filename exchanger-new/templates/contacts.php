<?php 
/**
 * Template name: Контакты
 */

get_header('theme');
?>
<main class="page__main">
  <div class="container p-contacts__container">
    <div class="p-contacts__contacts">
      <div class="contacts">
        <h2 class="title contacts__title">Контакты</h2>
        <div class="contacts__items">
          <div class="contacts__item contacts__item--time">
            <h6 class="contacts__item-title">График работы</h6>
            <p>Работаем 24/7</p>
          </div>
          <div class="contacts__item contacts__item--tm">
            <h6 class="contacts__item-title">Телеграмм канал</h6>
            <a href="tg://resolve?domain=" target="_blank">@World-BTC</a>
          </div>
          <div class="contacts__item contacts__item--mail">
            <h6 class="contacts__item-title">Рабочая почта</h6>
            <a href="mailto:help@100Bitcoins.ru">help@100Bitcoins.ru</a>
          </div>
          <div class="contacts__item contacts__item--share">
            <h6 class="contacts__item-title">Поделиться</h6>
            <div class="social contacts__social">
              <div class="social">
                <a class="social__item social__item--tm" href="tg://resolve?domain=" target="_blank"></a>
                <a class="social__item social__item--wp" href="https://wa.me/+7123123" target="_blank"></a>
                <a class="social__item social__item--vk" href="#" target="_blank"></a>
                <a class="social__item social__item--im" href="#" target="_blank"></a>
                <a class="social__item social__item--fb" href="#" target="_blank"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-contacts__telegram">
      <div class="telegram">
        <h1 class="telegram__title">Обмен криптовалют в Телеграм</h1>
        <p class="telegram__text">
          Добавьте к себе в мессенджер нашего бота и сделайте обмен еще проще и быстрее.
        </p>
        <a class="button telegram__link" href="tg://resolve?domain=" target="_blank">Добавить бота</a>
      </div>
    </div>
    <div class="p-contacts__reviews">
      <?php get_template_part('template-parts/reviews'); ?>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>