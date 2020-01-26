<?php
/*
Template Name: Услуги по перевозке
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<section class="transport">
  <div class="wrapper">
    <div class="transport-info">
      <h1 class="transport-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <?php the_field('promo_text'); ?>
    </div>
  </div>
  <div class="transport-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/dot-map-bg.png);"></div>
  <div class="transport-img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car-big.png" alt="">
  </div>
</section>
<section class="shipping">
  <div class="wrapper">
    <h2 class="page-title">ДОСТАВКА</h2>
    <p>Это машины с высокой степенью проходимости, способные перевозить топливо даже в труднодоступные места. Спецтранспорт круглосуточно находится в состоянии готовности, благодаря чему доставка топлива может осуществляться на большие расстояния и в любое время суток.</p>
  </div>
</section>
<section class="kinds">
  <div class="wrapper">
    <div class="kinds-row">
      <div class="kinds-descr">
        <h2 class="page-title">ВИДЫ <br>ТРАНСПОРТА</h2>
        <a href="#" class="kinds-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-y.svg" alt=""></a>
      </div>
      <div class="kinds-info">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trb-b.png" alt="">
      </div>
    </div>
    <div class="kinds-mob">
      <div class="kinds-col">
        <div class="kinds-col__wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport-ico-1.svg" alt="">
        </div>
        <h3 class="kinds-col__title">ВАГОНЫ</h3>
      </div>
      <div class="kinds-col">
        <div class="kinds-col__wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport-ico-2.svg" alt="">
        </div>
        <h3 class="kinds-col__title">ПАРОХОДЫ</h3>
      </div>
      <div class="kinds-col">
        <div class="kinds-col__wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport-ico-3.png" alt="">
        </div>
        <h3 class="kinds-col__title">БЕНЗОВОЗЫ</h3>
      </div>
    </div>
  </div>
</section>
<section class="cistern">
  <div class="wrapper">
    <div class="cistern-info">
      <h2 class="page-title">Объем цистерн</h2>
      <p>У нас имеется собственный действующий автопарк с современными бензовозами</p>
      <p>(большинство из них — иномарки), имеющими следующую вместимость:</p>
      <div class="cistern-info__wrap">
        <span>Объем цистерны, (м.куб)</span>
        <ul>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>8</li>
          <li>10</li>
          <li>14</li>
          <li>16</li>
          <li>18</li>
          <li>20</li>
          <li>22</li>
          <li>24</li>
          <li>28</li>
          <li>32</li>
          <li>38</li>
          <li>42</li>
        </ul>
      </div>
    </div>
    <div class="cistern-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport-img-1.png" alt="">
    </div>
  </div>
</section>
<section class="company">
  <div class="wrapper">
    <div class="company-row">
      <div class="company-row__wrap">
        <div class="company-col">
          <div class="company-col__wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport-img-2.png" alt="">
            <p>кратчайшие сроки</p>
          </div>
        </div>
        <div class="company-col">
          <div class="company-col__wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/transport-img-3.png" alt="">
            <p>НАДЕЖНОСТЬ</p>
          </div>
        </div>
      </div>
      <div class="company-info">
        <h4 class="company-info__subtitle">Компания «ТЕРМИНАЛ» серьезно подходит к решению своих вопросов и внимательно относится к любому клиенту.</h4>
        <p>Наши спецавтомобили соответствуют всем требованиям, необходимым для перевозок нефтепродуктов, они оборудованы приспособлениями для заездов на нефтебазы и снабжены пакетом сопроводительной документации.</p>
        <p>Наши специалисты – высококвалифицированные, организованные и исполнительные водители, имеющие огромный опыт работы и хорошую репутацию. Маршруты движения нашего автотранспорта отслеживаются диспетчерами-операторами, сопровождающими водителей по пути следования.</p>
        <p>Операторы находятся в режиме онлайн связи с водителями.</p>
      </div>
    </div>
  </div>
</section>
<section class="world">
  <div class="world-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-bg-2.png" alt="">
  </div>
  <div class="world-img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-bg-1.png" alt="">
  </div>
  <div class="wrapper">
    <div class="world-info">
      <h2 class="world-title">В ЛЮБУЮ<br>ТОЧКУ России</h2>
      <div class="world-mob">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-bg-1.png" alt="">
      </div>
      <p>Мы понимаем важность доставки <br>по всему миру, организуем ее правильно. <br>Нам доверяют самые ценные грузы</p>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>