<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<!-- start main -->
<section class="main">
  <?php 
    $image = get_field('header_image');
    if( $image ) {
      echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
        'class' => 'main__image',
      ) );
    }
  ?>
  <div class="wrapper">
    <div class="main-wrap">
      <h1 class="main-title">
      <?php the_field('header_title'); ?>
      </h1>
      <div class="main-row">
        <span class="main-subtitle">ООО «ТЕРМИНАЛ»</span>
        <?php the_field('header_text'); ?>
      </div>
      <a href="#modal-form" class="button-modal main-btn">Заказать звонок</a>
    </div>
  </div>
  <div class="main-arrow"></div>
</section>
<!-- end main -->
<!-- start info -->
<section class="info">
  <div class="wrapper">
    <h2 class="section-title">Нефтепродукты высокого качества</h2>
    <p>Компания ООО «ТЕРМИНАЛ» создавалась для того, чтобы возрастающий спрос на качественную топливную продукцию в регионах был максимально удовлетворен. С настоящего момента мы с радостью предлагаем Вам доставку топлива объёмом от 1 тонны по любому адресу в Российской Федерации. Покупая наше топливо, Вы всегда можете быть уверены в его качестве. Мы поставляем:</p>
  </div>
</section>
<?php get_template_part('template-parts/block-nav-icon-colors'); ?>
<section class="supplier">
  <div class="supplier-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/supplier-bg.png);"></div>
  <div class="supplier-bg supplier-bg__mob" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/supplier-bg-mob.png);"></div>
  <div class="wrapper">
    <div class="supplier-row">
      <div class="supplier-call">
        <h2 class="section-title">О поставщике</h2>
        <a href="#modal-form" class="button-modal main-btn">Заказать звонок</a>
      </div>
      <div class="supplier-info">
        <h3 class="supplier-title">Ваш надежный поставщик нефтепродуктов Московская компания</h3>
        <p>ООО «Терминал» — современная, прогрессивно развивающаяся компания, основным направлением деятельности которой является реализация и доставка таких нефтепродуктов как бензин, дизель. Поставка нефтепродуктов производится в крупном объёме и мелкими партиями.</p>
      </div>
    </div>
  </div>
</section>
<!-- end supplier -->
<!-- start sale -->
<section class="sale">
  <div class="sale-top">
    <img class="sale-top__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/sale-bg.jpg" alt="Alt">
    <div class="wrapper">
      <div class="sale-top__row">
        <h2 class="section-title">Продажа и поставка нефтепродуктов </h2>
        <div class="sale-info">
          <p>Юридическим лицам мы предлагаем весь спектр услуг, включающий оптовую продажу бензина, дизельного топлива, доставку продукции собственными бензовозами и прочее.</p>
          <div class="sale-info__row">
            <a href="#modal-form" class="button-modal main-btn">Заявка на опт</a>
            <a href="#modal-form" class="button-modal main-btn">Заявка на розницу</a>
          </div>
        </div>
        <div style="display: none;" class="sale-play"></div>
      </div>
    </div>
  </div>
  <div class="sale-bottom">
    <div class="wrapper">
      <div class="sale-row">
        <div class="sale-col">
          <div class="sale-col__wrap">
            <h3 class="sale-col__title">Поставки оптом</h3>
            <ul>
              <li>В различных объемах</li>
              <li>Круглосуточно </li>
              <li>В любую точку мира</li>
            </ul>
            <a href="https://terminal.moscow/vybor-produkta-dlja-zakupki/benzin-ai-80-ai-92-ai-95-ai-98/" class="sale-col__link"><span>Подробнее</span></a>
          </div>
        </div><!-- col(1) -->
        <div class="sale-col">
          <div class="sale-col__wrap">
            <h3 class="sale-col__title">Продажа<br>в розницу</h3>
            <ul>
              <li>Отставляйте заявки</li>
              <li>Отставляйте заявки</li>
              <li>Отставляйте заявки</li>
            </ul>
            <a href="https://terminal.moscow/vybor-produkta-dlja-zakupki/neft/" class="sale-col__link"><span>Подробнее</span></a>
          </div>
        </div><!-- col(2) -->
        <div class="sale-col">
          <div class="sale-col__wrap">
            <h3 class="sale-col__title">Транспортные услуги</h3>
            <ul>
              <li>Во все регионах России</li>
              <li>Самые ценные грузы</li>
              <li>Высшая степень защиты</li>
            </ul>
            <a href="https://terminal.moscow/uslugi-po-perevozke/uslugi-po-perevozke/" class="sale-col__link"><span>Подробнее</span></a>
          </div>
        </div><!-- col(3) -->
        <div class="sale-col">
          <div class="sale-col__wrap">
            <h3 class="sale-col__title">Экспортное кредитование</h3>
            <ul>
              <li>Лучшие условия на рынке</li>
              <li>Надежность и легкость</li>
              <li>Гибкая система выплат</li>
            </ul>
            <a href="https://terminal.moscow/nashi-partnery/kreditovanie/" class="sale-col__link"><span>Подробнее</span></a>
          </div>
        </div><!-- col(4) -->
      </div>
    </div>
  </div>
</section>
<!-- end sale -->
<!-- start advantages -->
<section class="advantages">
  <div class="wrapper">
    <h2 class="section-title">Преимущества</h2>
    <div class="advantages-row">
      <div class="advantages-col">
        <div class="advantages-col__ico">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-ico-1.svg" alt="Alt">
        </div>
        <span class="advantages-col__title">Гарантия качества и<br> сроков</span>
      </div><!-- col(1)-->
      <div class="advantages-col">
        <div class="advantages-col__ico">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-ico-2.svg" alt="Alt">
        </div>
        <span class="advantages-col__title">Собственное производство и<br> вагоны для перевозки</span>
      </div><!-- col(2)-->
      <div class="advantages-col">
        <div class="advantages-col__ico">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-ico-3.svg" alt="Alt">
        </div>
        <span class="advantages-col__title">Поддержка и<br> обслуживание 24/7</span>
      </div><!-- col(3)-->
      <div class="advantages-col">
        <div class="advantages-col__ico">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-ico-4.svg" alt="Alt">
        </div>
        <span class="advantages-col__title">Индивидуальный подход<br>к каждому заказчику</span>
      </div><!-- col(4)-->
      <div class="advantages-col">
        <div class="advantages-col__ico">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-ico-5.svg" alt="Alt">
        </div>
        <span class="advantages-col__title">Работаем по всей России и<br>осуществляем поставки на экспорт</span>
      </div><!-- col(5)-->
      <div class="advantages-col">
        <div class="advantages-col__ico">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advantages-ico-6.svg" alt="Alt">
        </div>
        <span class="advantages-col__title">Лучшие цены и удобные<br> условия сотрудничества</span>
      </div><!-- col(6)-->
    </div>
  </div>
</section>
<!-- end advantages -->
<!-- start request -->
<section class="request">
  <div class="wrapper">
    <div class="request-img">
      <img class="request-img__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/request.jpg" alt="Alt">
    </div>
    <div class="request-info">
      <h2 class="request-title">Оставьте заявку</h2>
      <p>Звоните нам, если ваше предприятие нуждается в качественных нефтепродуктах и оперативных поставках. Информацию о продукции, ее цене и поставках вам предоставит менеджер. Наш успех базируется на профессионализме, оперативности решений и индивидуальном подходе к нуждам клиентов!</p>
      <?php echo do_shortcode( '[form_request]' ) ?>
    </div>
  </div>
</section>
<!-- end request -->
<!-- start working -->
<section class="working">
  <div class="wrapper">
    <div class="working-info">
      <h2 class="section-title">Мы работаем по всей России</h2>
      <div class="working-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Карта">
      </div>
      <ul>
        <li>Покупаем нефть</li>
        <li>Перерабатываем нефть в нефепродукты</li>
        <li>Организуем прокачку по трубе</li>
        <li>Организуем перевозку (вагоны, пароходы, бензовозы)</li>
      </ul>
    </div>
  </div>
</section>
<!-- end working -->
<!-- start principles -->
<section class="principles">
  <div class="wrapper">
    <div class="principles-info">
      <h2 class="section-title">Ключевые принципы нашей работы</h2>
      <div class="principles-row">
        <b>200</b>
        <div>
          <p><span>И БОЛЕЕ</span>довольных клиентов</p>
        </div>
      </div>
    </div>
    <div class="principles-step">
      <div class="principles-col">
        <b>01</b>
        <div class="principles-col__info">
          <span class="principles-col__title">Честность</span>
          <p>Всегда открыты в общении с клиентом</p>
        </div>
      </div>
      <div class="principles-col">
        <b>02</b>
        <div class="principles-col__info">
          <span class="principles-col__title">Ответственность</span>
          <p>Выполняем все поставленные обязательства</p>
        </div>
      </div>
      <div class="principles-col">
        <b>03</b>
        <div class="principles-col__info">
          <span class="principles-col__title">Оперативность</span>
          <p>Быстро реагируем на все ваши заявки</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end principles -->
<!-- start post -->
<section class="post">
  <div class="wrapper">
    <div class="post-row">
      <div class="post-col">
        <div class="post-col__wrap">
          <div class="post-col__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-1.jpg" alt="Alt">
          </div>
          <a href="https://terminal.moscow/nashi-partnery/nashi-partnery/" class="post-col__link"><span>Нам доверяют</span></a>
        </div>
      </div><!-- col(1) -->
      <div class="post-col">
        <div class="post-col__wrap">
          <div class="post-col__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-2.jpg" alt="Alt">
          </div>
          <a href="https://terminal.moscow/nashi-partnery/pisma-blagodarnosti/" class="post-col__link"><span>Письма благодарности</span></a>
        </div>
      </div><!-- col(2) -->
    </div>
  </div>
</section>
<!-- end post -->
<!-- start contacts -->
<section class="contacts">
  <div class="wrapper">
    <div class="contacts-info">
      <h2 class="section-title">ОСТАВЬТЕ ЗАЯВКУ</h2>
      <p>Мы подберем для вас наилучшие условия для нашего сотрудничества</p>
      <?php echo do_shortcode( '[form_leave]' ) ?>
    </div>
  </div>
  <div class="contacts-map">
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1122.8227269756526!2d37.582952311995086!3d55.747288998102285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQ0JzUwLjIiTiAzN8KwMzUnMDEuMSJF!5e0!3m2!1sru!2sua!4v1579683631453!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</section>
<!-- end contacts -->
<?php get_footer(); ?>