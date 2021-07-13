<?php 
/**
 * Template name: Рефералка
 */

get_header('theme');
?>
<main class="page__main">
  <div class="page__promo">
    <div class="container">
      <h1 class="page__promo-title">Реферальная программа для Партнеров:</h1>
      <div class="page__promo-text">
        <p>
          Приглашайте друзей и пользователей ваших ресурсов на World-BTC и получайте пассивный доход в BTC, ETH и USDT в честном распределении вознаграждения 50% Вам и 50% Вашему другу или партнеру.
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="referral">
      <div class="referral__items">
        <article class="referral__item">
          <picture class="referral__item-picture">
            <img class="referral__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/referral-item-1.svg" alt="Сгенерируйте ссылку">
          </picture>
          <div class="referral__item-content">
            <h3 class="referral__item-title">Сгенерируйте<br> ссылку</h3>
            <p>
              Вы можете сгенерировать до 10 ссылок с уникальными ID. Каждой ссылке можно присвоить свое название (тег), чтобы удобно отслеживать эффективность каждого канала привлечения.
            </p>
            <p>
              Идентификатор в ссылке является инвайт-кодом, который можно указывать при регистрации через мобильное приложение для iOS/Android
            </p>
          </div>
        </article>
        <article class="referral__item">
          <picture class="referral__item-picture">
            <img class="referral__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/referral-item-2.svg" alt="Приглашайте пользователей">
          </picture>
          <div class="referral__item-content">
            <h3 class="referral__item-title">Приглашайте<br> пользователей</h3>
            <p>
              Распространяйте ссылки между друзьями или пользователями ваших ресурсов. Партнерская программа имеет 2 уровня рефералов - вы будете получать вознаграждение и от пользователей, которых пригласили ваши рефералы. Приглашать пользователей можно в любые продукты World-BTC: на WEB-версию или в Telegram-бота.
            </p>
          </div>
        </article>
        <article class="referral__item">
          <picture class="referral__item-picture">
            <img class="referral__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/referral-item-3.svg" alt="Получайте мгновенные выплаты:">
          </picture>
          <div class="referral__item-content">
            <h3 class="referral__item-title">Получайте мгновенные<br> выплаты:</h3>
            <p>
              Получайте мгновенные выплаты:<br>
              Размер максимального вознаграждения (100% на всех рефералов) определяется по следующей схеме:
            </p>
            <p>
              500-4999 USD — 0,05% от суммы обмена
              5000-9999 USD — 0,1% от суммы обмена
              10000-24999 USD — 0,15% от суммы обмена
              25000-49999 USD — 0,2% от суммы обмена
              свыше 50 000 USD — 0,25% от суммы обмена
            </p>
            <p>
              Если привлеченный партнером клиент совершает операцию на сервисе, не зарегистрировавшись, он все равно считается привлеченным клиентом до тех пор, пока существует техническая возможность однозначно установить связь данного клиента с партнером.
            </p>
          </div>
        </article>
      </div>
    </div>
    <?php get_template_part('template-parts/reviews'); ?>
  </div>
</main>
<?php get_footer('theme'); ?>