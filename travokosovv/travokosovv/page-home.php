<?php get_header(); ?>
<div class="promo-slider">
  <div class="promo-slider__inner">
    <?php
      $content = get_field("slider-text");
      $content = str_replace('<p', '<p class="promo-slider__inner-text"', $content); 
    ?>
    <?php echo $content; ?>
    <!-- <a class="promo-slider__inner-button button" href="">Подробнее</a> -->
  </div>
  <div class="promo-slider__items">
    <?php 
      $counter = 1;
      while ($counter < 11):
        $slider_images = get_field('slider-images');
        $field_image = 'slider-image-' . $counter;
        $slider_image = $slider_images[$field_image];
      
        if ($slider_image): 
          echo '<div class="promo-slider__item">'; 
            echo '<img class="promo-slider__image" src="' . $slider_image['url'] . '" alt="' . $slider_image['alt'] . '">';
          echo '</div>';
        endif; 

        $counter++;
      endwhile;
    ?>
  </div>
  <div class="promo-slider__nav">
    <button class="promo-slider__button promo-slider__button--left">
      <svg class="promo-slider__button-icon">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-arrow-left"></use>
      </svg>
    </button>
    <button class="promo-slider__button promo-slider__button--right">
      <svg class="promo-slider__button-icon">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-arrow-right"></use>
      </svg>
    </button>
    <div class="promo-slider__pointer">
      <span class="promo-slider__pointer-num">1</span>
      /
      <span class="promo-slider__pointer-amount">0</span>
    </div>
  </div>
</div>
<section class="nav-services">
  <div class="nav-services__container container">
    <div class="nav-services__items">
      <img class="nav-services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-nav-services.jpg" alt="Навигация по услугам">
      <div class="nav-services__item nav-services__item--fence">
        <a class="nav-services__link" href="<?php the_field('nav-image-fence'); ?>" target="_blank">Установка забора</a>
        <span class="nav-services__pointer nav-services__pointer--fence"></span>
      </div>
      <div class="nav-services__item nav-services__item--thuja">
        <a class="nav-services__link" href="<?php the_field('nav-image-thuja'); ?>" target="_blank">Посадка растений</a>
        <span class="nav-services__pointer nav-services__pointer--thuja"></span>
      </div>
      <div class="nav-services__item nav-services__item--septic">
        <a class="nav-services__link" href="<?php the_field('nav-image-septic'); ?>" target="_blank">Установка септика</a>
        <span class="nav-services__pointer nav-services__pointer--septic"></span>
      </div>
      <div class="nav-services__item nav-services__item--sewerage">
        <a class="nav-services__link" href="<?php the_field('nav-image-sewerage'); ?>" target="_blank">Ливневая канализация</a>
        <span class="nav-services__pointer nav-services__pointer--sewerage"></span>
      </div>
      <div class="nav-services__item nav-services__item--playground">
        <a class="nav-services__link" href="<?php the_field('nav-image-playground'); ?>" target="_blank">Установка детских площадок</a>
        <span class="nav-services__pointer nav-services__pointer--playground"></span>
      </div>
      <div class="nav-services__item nav-services__item--paving">
        <a class="nav-services__link" href="<?php the_field('nav-image-paving'); ?>" target="_blank">Мощение</a>
        <span class="nav-services__pointer nav-services__pointer--paving"></span>
      </div>
      <div class="nav-services__item nav-services__item--drainage">
        <a class="nav-services__link" href="<?php the_field('nav-image-drainage'); ?>" target="_blank">Дренаж фундамента</a>
        <span class="nav-services__pointer nav-services__pointer--drainage"></span>
      </div>
      <div class="nav-services__item nav-services__item--entry">
        <a class="nav-services__link" href="<?php the_field('nav-image-entry'); ?>" target="_blank">Монтаж въезда</a>
        <span class="nav-services__pointer nav-services__pointer--entry"></span>
      </div>
      <div class="nav-services__item nav-services__item--lawn">
        <a class="nav-services__link" href="<?php the_field('nav-image-lawn'); ?>" target="_blank">Укладка рулонного газона</a>
        <span class="nav-services__pointer nav-services__pointer--lawn"></span>
      </div>
    </div>
  </div>
</section>
<div class="promo-video">
  <div class="promo-video__container">
    <iframe class="promo-video__iframe" src="<?php the_field('link-youtube'); ?>"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<section class="services">
  <div class="services__container container">
    <div class="services__item">
      <?php  
        $image = get_field('example-service-1');
      ?>
      <img class="services__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="services__info">
        <h3 class="services__title">Ландшафтное проектирование</h3>
        <a class="services__button button" href="<?php the_field('example-service-link-1'); ?>" target="_blank">Подробнее</a>
      </div>
    </div>
    
    <div class="services__item">
      <?php  
        $image = get_field('example-service-2');
      ?>
      <img class="services__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="services__info">
        <h3 class="services__title">Озеленение дачного участка</h3>
        <a class="services__button button" href="<?php the_field('example-service-link-2'); ?>" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <?php  
        $image = get_field('example-service-3');
      ?>
      <img class="services__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="services__info">
        <h3 class="services__title">Устройство дренажной системы</h3>
        <a class="services__button button" href="<?php the_field('example-service-link-3'); ?>" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <?php  
        $image = get_field('example-service-4');
      ?>
      <img class="services__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="services__info">
        <h3 class="services__title">Строительство домов и построек</h3>
        <a class="services__button button" href="<?php the_field('example-service-link-4'); ?>" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <?php  
        $image = get_field('example-service-5');
      ?>
      <img class="services__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="services__info">
        <h3 class="services__title">Проектирование и установка бассейнов</h3>
        <a class="services__button button" href="<?php the_field('example-service-link-5'); ?>" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <?php  
        $image = get_field('example-service-6');
      ?>
      <img class="services__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="services__info">
        <h3 class="services__title">Монтаж дорожного покрытия</h3>
        <a class="services__button button" href="<?php the_field('example-service-link-6'); ?>" target="_blank">Подробнее</a>
      </div>
    </div>
  </div>
</section>
<section class="beautification">
  <div class="beautification__container container">
    <h1 class="beautification__title">
      <?php the_field('beautification-title') ?>
    </h1>
    <div class="beautification__item">
      <?php  
        $image = get_field('beautification-image-1');
      ?>
      <img class="beautification__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="beautification__text-wrapper">
        <?php
          $content = get_field("beautification-text-1");
          $content = str_replace('<p', '<p class="beautification__text"', $content); 
        ?>
        <?php echo $content; ?>
      </div>
    </div>
    <div class="beautification__item beautification__item--reverse">
      <?php  
        $image = get_field('beautification-image-2');
      ?>
      <img class="beautification__image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      <div class="beautification__text-wrapper">
        <?php
          $content = get_field("beautification-text-2");
          $content = str_replace('<p', '<p class="beautification__text"', $content); 
        ?>
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
<section class="how-working">
  <div class="how-working__container container">
    <div class="how-working__item">
      <h4 class="how-working__item-title">Как мы работаем</h4>
      <p class="how-working__item-text">
        После подписания договора на участок заказчика выезжает не один дизайнер, а целая группа специалистов. Они
        проводят осмотр местности, оценивают объём работ и изучают особенности грунта. Выполняют соответствующие замеры
        и фотофиксацию объекта.
      </p>
      <p class="how-working__item-text">
        Эти мероприятия необходимы для разработки концепции по озеленению, архитектурному оформлению и благоустройству
        дачного участка или придомовой территории. Важно оценить объект с позиции разных людей. Поэтому каждый
        специалист к дальнейшей встречи подготавливает независимый эскизный проект с учетом рекомендаций и потребностей
        заказчика. Тот вариант, который понравится ему больше всего и принимается за основу.
      </p>
    </div>
    <div class="how-working__item how-working__item--contacts">
      <?php echo do_shortcode( '[form_questions]' ) ?>
    </div>
  </div>
</section>
<section class="next-stage">
  <div class="next-stage__container container">
    <h2 class="next-stage__title">
    Стоимость благоустройства участка
    </h2>
    <div class="next-stage__wrapper">
      <div class="next-stage__item">
        <p class="next-stage__item-text">
        При заключении договора с компанией TravokosovV продажа материалов осуществляется по выгодным ценам, а весь комплекс работ выполняется без оплаты услуг посредников. Это позволяет провести благоустройство дачного участка в СПБ недорого и с гарантией качества. Комплекс услуг, предоставляемых каждому заказчику, включает:
        </p>
        <ul class="next-stage__list">
          <li class="next-stage__list-item">предварительную консультацию по телефону и бесплатный выезд специалиста для оценки объекта;</li>
          <li class="next-stage__list-item">выполнение проекта, включающего благоустройство и озеленение участка с учетом финансовой составляющей и пожеланий домовладельца;</li>
          <li class="next-stage__list-item">демонтаж старых построек, сезонную уборку территории, обрезку сухих деревьев, вывоз мусора;</li>
          <li class="next-stage__list-item">обустройство зон отдыха, строительство беседок;</li>
          <li class="next-stage__list-item">устройство и обслуживание дренажной системы;</li>
          <li class="next-stage__list-item">художественное оформление: мощение дорожек, въезда для транспорта;</li>
          <li class="next-stage__list-item">cтроительство детских площадок с использованием разных игровых конструкций;</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="our-works">
  <div class="our-works__container container">
    <h2 class="our-works__title"><?php the_field('our-works-title'); ?></h2>
    <div class="our-works__items">
      <a class="our-works__item" href="<?php the_field('our-works-link-1'); ?>">
        <?php  
          $image = get_field('our-works-image-1');
        ?>
        <img class="our-works__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      </a>
      <a class="our-works__item" href="<?php the_field('our-works-link-2'); ?>">
        <?php  
          $image = get_field('our-works-image-2');
        ?>
        <img class="our-works__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      </a>
      <a class="our-works__item" href="<?php the_field('our-works-link-3'); ?>">
        <?php  
          $image = get_field('our-works-image-3');
        ?>
        <img class="our-works__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      </a>
      <a class="our-works__item" href="<?php the_field('our-works-link-4'); ?>">
        <?php  
          $image = get_field('our-works-image-4');
        ?>
        <img class="our-works__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      </a>
      <a class="our-works__item" href="<?php the_field('our-works-link-5'); ?>">
        <?php  
          $image = get_field('our-works-image-5');
        ?>
        <img class="our-works__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      </a>
      <a class="our-works__item" href="<?php the_field('our-works-link-6'); ?>">
        <?php  
          $image = get_field('our-works-image-6');
        ?>
        <img class="our-works__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
      </a>
    </div>
  </div>
</section>
<section class="price-beautification">
  <div class="price-beautification__container container">
    <div class="price-beautification__wrapper">
      <h3 class="price-beautification__title">
      Заказать благоустройство участка в Санкт-Петербурге
      </h3>
      <p class="price-beautification__text">
        В зависимости от пожеланий заказчика благоустройство территории участка включает посадку плодовых деревьев и кустарников, а также декоративной растительности, живой изгороди, бордюров из низкорослых кустарников. Особое внимание уделяется высадке цветников и оформлению многоуровневых композиций, которые украшают придомовую территорию и создают неповторимый дизайн частного дома или дачи в СПБ.
      </p>
    </div>
  </div>
</section>
<section class="materials">
  <div class="materials__container container">
    <h2 class="materials__title"><?php the_field('materials-title'); ?></h2>
    <div class="materials__items">
      <a class="materials__item" href="<?php the_field('materials-link-1'); ?>">
        <?php  
          $image = get_field('materials-image-1');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Бетон</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-2'); ?>">
        <?php  
          $image = get_field('materials-image-2');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Трубы softrock</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-3'); ?>">
        <?php  
          $image = get_field('materials-image-3');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Дренажные системы</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-4'); ?>">
        <?php  
          $image = get_field('materials-image-4');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Газонные травы</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-5'); ?>">
        <?php  
          $image = get_field('materials-image-5');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Рулонный газон</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-6'); ?>">
        <?php  
          $image = get_field('materials-image-6');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Туи</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-7'); ?>">
        <?php  
          $image = get_field('materials-image-7');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Септики</h5>
      </a>
      <a class="materials__item" href="<?php the_field('materials-link-8'); ?>">
        <?php  
          $image = get_field('materials-image-8');
        ?>
        <img class="materials__item-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
        <h5 class="materials__item-title">Детские площадки</h5>
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>