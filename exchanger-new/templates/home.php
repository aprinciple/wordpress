<?php 
/**
 * Template name: Главная
 */

get_header('theme-home');
?>
<main class="page__main">
  <div class="form-exchange">
    <div class="container">
      <div class="form-exchange__wrapper">
        <?php if(function_exists('the_exchange_home')){ the_exchange_home(); }  ?>
      </div>
    </div>
  </div>
  <div class="what-it-is">
    <div class="container what-it-is__container">
      <h2 class="title what-it-is__title">Что такое 100 Bitcoins?</h2>
      <div class="what-it-is__items">
        <div class="what-it-is__item">
          <picture class="what-it-is__picture">
            <img class="what-it-is__image" src="<?= get_template_directory_uri(); ?>/assets/img/what-it-is-item-1.svg" alt="Среднее время обмена">
          </picture>
          <b class="what-it-is__number">5:48</b>
          <p class="what-it-is__text">Среднее время обмена</p>
        </div>
        <div class="what-it-is__item">
          <picture class="what-it-is__picture">
            <img class="what-it-is__image" src="<?= get_template_directory_uri(); ?>/assets/img/what-it-is-item-2.svg" alt="Человек нам доверяют">
          </picture>
          <b class="what-it-is__number">24.000+</b>
          <p class="what-it-is__text">Человек нам доверяют
          <p>
        </div>
        <div class="what-it-is__item">
          <picture class="what-it-is__picture">
            <img class="what-it-is__image" src="<?= get_template_directory_uri(); ?>/assets/img/what-it-is-item-3.svg" alt="Совершено обменов">
          </picture>
          <b class="what-it-is__number">44208</b>
          <p class="what-it-is__text">Совершено обменов</p>
        </div>
        <div class="what-it-is__item">
          <picture class="what-it-is__picture">
            <img class="what-it-is__image" src="<?= get_template_directory_uri(); ?>/assets/img/what-it-is-item-4.svg" alt="Сумма всех обменов">
          </picture>
          <b class="what-it-is__number">24.520.000 $</b>
          <p class="what-it-is__text">Сумма всех обменов</p>
        </div>
        <div class="what-it-is__item">
          <picture class="what-it-is__picture">
            <img class="what-it-is__image" src="<?= get_template_directory_uri(); ?>/assets/img/what-it-is-item-5.svg" alt="Сумма обменов за рубеж">
          </picture>
          <b class="what-it-is__number">8.839.000 $</b>
          <p class="what-it-is__text">Сумма обменов за рубеж</p>
        </div>
        <div class="what-it-is__item">
          <picture class="what-it-is__picture">
            <img class="what-it-is__image" src="<?= get_template_directory_uri(); ?>/assets/img/what-it-is-item-6.svg" alt="Выплачено партнерам">
          </picture>
          <b class="what-it-is__number">28.780$</b>
          <p class="what-it-is__text">Выплачено партнерам</p>
        </div>
      </div>
    </div>
  </div>
  <div class="reserve">
    <div class="container reserve__container">
      <h2 class="title reserve__title">Пополнение резерва</h2>
      <div class="reserve__items">
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/sber.svg" alt="Сбербанк">
          <div class="reserve__item-text">
            <p>Сбербанк</p>
            <p>1113977 RUB</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/tinkoff.svg" alt="Тинькофф">
          <div class="reserve__item-text">
            <p>Тинькофф</p>
            <p>495787 RUB</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/vtb.svg" alt="ВТБ24">
          <div class="reserve__item-text">
            <p>ВТБ24</p>
            <p>530944 RUB</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/alpha.svg" alt="Альфа Банк">
          <div class="reserve__item-text">
            <p>Альфа Банк</p>
            <p>454199 RUB</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/payeer.svg" alt="Payeer USD">
          <div class="reserve__item-text">
            <p>Payeer USD</p>
            <p>1411 USD</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/adv-cash.svg" alt="AdvCash USD">
          <div class="reserve__item-text">
            <p>AdvCash USD</p>
            <p>1265 USD</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/xrp.svg" alt="Ripple">
          <div class="reserve__item-text">
            <p>Ripple</p>
            <p>4034.712 XRP</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/eth.svg" alt="Ethereum">
          <div class="reserve__item-text">
            <p>Ethereum</p>
            <p>4.502 ETH</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/ltc.svg" alt="Litecoin">
          <div class="reserve__item-text">
            <p>Litecoin</p>
            <p>2.396 LTC</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/btc.svg" alt="Bitcoin">
          <div class="reserve__item-text">
            <p>Bitcoin</p>
            <p>15.973 BTC</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/nem.svg" alt="NEM">
          <div class="reserve__item-text">
            <p>NEM</p>
            <p>225.689 XEM</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/visa.svg" alt="Visa/MasterCard">
          <div class="reserve__item-text">
            <p>Visa/MasterCard</p>
            <p>300000 RUB</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/yfi.svg" alt="YFI">
          <div class="reserve__item-text">
            <p>YFI</p>
            <p>1 YFI</p>
          </div>
        </div>
        <div class="reserve__item">
          <img class="reserve__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/ada.svg" alt="Cardano">
          <div class="reserve__item-text">
            <p>Cardano</p>
            <p>399 ADA</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="advangtages">
    <div class="container advangtages__container">
      <h2 class="advangtages__title">Мы стремимся быть лучшими!</h2>
      <div class="advangtages__items">
        <div class="advangtages__item">
          <img class="advangtages__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/advangtages__item-1.svg" alt="Репутация">
          <div class="advangtages__item-text">
            <h3 class="advangtages__item-title">Репутация</h3>
            <p>
              Мы ценим ваши средства, время и стараемся создать для вас максимально комфортные и удобные условия. Работу нашего сервиса положительно оценили уже многие пользователи.
              Вы можете просмотреть или оставить свой отзыв на авторитетных мониторингах.
            </p>
          </div>
        </div>
        <div class="advangtages__item">
          <img class="advangtages__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/advangtages__item-2.svg" alt="Безопасность">
          <div class="advangtages__item-text">
            <h3 class="advangtages__item-title">Безопасность</h3>
            <p>
              Мы заботимся о конфиденциальности данных клиента. Личные данные, которые клиенты вводят на этапе оформления заявки, надежно шифруются с помощью SSL-сертификата. Любая обменная операция на сайте может выполняться без какой-либо регистрации
            </p>
          </div>
        </div>
        <div class="advangtages__item">
          <img class="advangtages__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/advangtages__item-3.svg" alt="Конфиденциальность">
          <div class="advangtages__item-text">
            <h3 class="advangtages__item-title">Конфиденциальность</h3>
            <p>
              Вы можете быть уверены, что каждый Ваш обмен конфиденциален и информация о нем не будет передана третьим лицам.
            </p>
          </div>
        </div>
        <div class="advangtages__item">
          <img class="advangtages__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/advangtages__item-4.svg" alt="Скорость">
          <div class="advangtages__item-text">
            <h3 class="advangtages__item-title">Скорость</h3>
            <p>
              Обмены проводятся операторами сайта World-BTC и занимаю до 29 минут. Среднее время обмена 5 минут.
            </p>
          </div>
        </div>
        <div class="advangtages__item">
          <img class="advangtages__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/advangtages__item-5.svg" alt="Бонусы">
          <div class="advangtages__item-text">
            <h3 class="advangtages__item-title">Бонусы</h3>
            <p>
              Нашим клиентам мы предлагаем стать нашими партнерами и зарабатывать вместе снами. Вы можете получать дополнительный пассивный заработок до 0.5% от суммы всех обменов которые будут проводить Ваши друзья, знакомые и все остальные, кому Вы посоветуете наш сервис обменов.
            </p>
            <p>
              Начните получать деньги прямо сейчас: для этого нужно всего лишь зарегистрироваться в партнерской программе и отправить свою реферальную ссылку на обмен Вашим друзьям и знакомым.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-home__reviews">
    <div class="container">
      <?php get_template_part('template-parts/reviews'); ?>
    </div>
  </div>
  <div class="p-home__telegram">
    <div class="container">
      <div class="telegram">
        <h1 class="telegram__title">Обмен криптовалют в Телеграм</h1>
        <p class="telegram__text">
          Добавьте к себе в мессенджер нашего бота и сделайте обмен еще проще и быстрее.
        </p>
        <a class="button telegram__link" href="tg://resolve?domain=" target="_blank">Добавить бота</a>
      </div>
    </div>
  </div>
  <div class="p-home__contacts">
    <div class="container">
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
  </div>
</main>
<?php get_footer('theme'); ?>