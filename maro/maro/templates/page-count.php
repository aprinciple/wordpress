<?php 
/*
Template name: Страница - Рассчитать стоимость
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content p-count">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
          <div class="subhead"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="p-count__promo">
            <div class="p-count__form">
              <?php echo do_shortcode( '[form_count]' ) ?>
            </div>
            <div class="p-count__promo-text">
              <?php the_field('count_text'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-count__text p-count__text--darkblue">
      <div class="container">
        <p>
        В силу этого наше производство не является серийным и наша продукция по индивидуальным заказам не имеет сертификата. Тем не менее, все изделия собраны вручную с должным вниманием к качеству и проведением соответсвующих проверок перед сдачей клиенту. Наши рекламные конструкции собираются только из сертифицированных материалов. Пhоверяются начальником производства на соответсвие подписанному техническому заданию и работоспособности.
        </p>
      </div>
    </div>

    <div class="p-count__text p-count__text--image">
      <div class="container p-count__text-col">
        <picture class="p-count__text-picture">
          <source srcset="<?= get_stylesheet_directory_uri(); ?>/assets/img/pic-count-1@1200px.jpg" media="(min-width: 1200px)">
          <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/pic-count-1.jpg" alt="Мы гарантируем">
        </picture>
        <h3 class="p-count__text-title">Какова гарантия на изделия?</h3>
        <div class="p-count__text-item p-count__text-item--one">
          <b>Мы гарантируем</b><br>
          <p>
          работоспособность рекламной конструкции, а так же несем гарантию на проведенные дополнительные работы, среди которых и монтажные - в течение 12 месяцев. 
          </p>
        </div>
        <div class="p-count__text-item p-count__text-item--two">
          <b>Наша компания предоставляет</b><br>
          <p>
          гарантию на изделия и виды выполняемых работ от 12 до 36 месяцев в зависимости от материалов из которых изготовлена рекламная конструкция. 
          </p>
        </div>
      </div>
    </div>

    <div class="p-count__text p-count__text--darkblue">
      <div class="container p-count__text-col">
        <div class="p-count__text-item p-count__text-item--three">
          <p>
            <b>Мы гарантируем</b>,<br>
            что подключение изделия к сети 220В будет осуществлено с использованием провода необходимого сечения без лишних “скруток”.
          </p>
        </div>
        <div class="p-count__text-item p-count__text-item--four">
          <p>
            <b>Мы гарантируем</b>,<br>
            что на монтаже будет присутствовать внимательный специалист с соответствующим опытом работы в нашей рекламной компании.
          </p>
        </div>
      </div>
    </div>

    <div class="p-count__text p-count__text--double">
      <div class="container p-count__text-col">
        <div class="p-count__text-item p-count__text-item--five">
          <p>
            <b>Мы гарантируем</b>,<br> что после установки изделий будут переданы все необходимые закрывающие документы.
          </p>
        </div>
        <div class="p-count__text-item p-count__text-item--six">
          <p>
          <b>Мы гарантируем</b>,<br> что ваша компания не будет иметь проблем, работая с нами, как с юрлицом, так как мы являемся проверенным контрагентом.
          </p>
        </div>
      </div>
    </div>

    <div class="p-count__text p-count__text--image">
      <div class="container">
        <picture class="p-count__text-picture">
          <source srcset="<?= get_stylesheet_directory_uri(); ?>/assets/img/pic-count-2@1200px.jpg" media="(min-width: 1200px)">
          <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/pic-count-2.jpg" alt="Мы гарантируем">
        </picture>
        <p>
        Мы гарантируем, что ваша конструкция будет в точности соответствовать двустороннему подписанному техническому заданию/договору/проекту. Например, в объемных световых буквах на лицевой части используется молочный акрил 3 мм, а не полистирол 1-2 мм. Светодиоды (светодиодные модули, а не лента) будут установлены таким образом, чтобы изделие имело максимально возможную засветку без затемнений и пересветов. 
        </p>
        <p>
        Наша компания внимательно следит за качеством работы персонала, поэтому в случае возникновения каких либо разногласий, вы всегда можете обратится к Руководителю по общей электронной почте info@maro-reklama.ru с пометкой “Контроль качества, для Михаила”!
        </p>
      </div>
    </div>

  </section>
<?php get_footer(); ?>