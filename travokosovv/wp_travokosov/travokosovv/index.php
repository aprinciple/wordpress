<?php get_header(); ?>
<div class="promo-slider">
  <div class="promo-slider__inner">
    <p class="promo-slider__inner-text">
      Компания «TravokosovV», занимаемся благоустройством и ландшафтным дизайном участков, предлагаем свою помощь в
      создании оазиса вашей мечты.
    </p>
    <!-- <button class="promo-slider__inner-button button">Подробнее</button> -->
  </div>
  <div class="promo-slider__items">
    <div class="promo-slider__item">
      <img class="promo-slider__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-slider-1.jpg" alt="Фото 1">
    </div>
    <div class="promo-slider__item">
      <img class="promo-slider__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-slider-2.jpg" alt="Фото 2">
    </div>
    <div class="promo-slider__item">
      <img class="promo-slider__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/header-slider-1.jpg" alt="Фото 2">
    </div>
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
        <a class="nav-services__link" href="#" target="_blank">Установка забора</a>
        <span class="nav-services__pointer nav-services__pointer--fence"></span>
      </div>
      <div class="nav-services__item nav-services__item--thuja">
        <a class="nav-services__link" href="#" target="_blank">Посадка туй</a>
        <span class="nav-services__pointer nav-services__pointer--thuja"></span>
      </div>
      <div class="nav-services__item nav-services__item--septic">
        <a class="nav-services__link" href="#" target="_blank">Установка септика</a>
        <span class="nav-services__pointer nav-services__pointer--septic"></span>
      </div>
      <div class="nav-services__item nav-services__item--sewerage">
        <a class="nav-services__link" href="#" target="_blank">Ливневая канализация</a>
        <span class="nav-services__pointer nav-services__pointer--sewerage"></span>
      </div>
      <div class="nav-services__item nav-services__item--playground">
        <a class="nav-services__link" href="#" target="_blank">Установка детских площадок</a>
        <span class="nav-services__pointer nav-services__pointer--playground"></span>
      </div>
      <div class="nav-services__item nav-services__item--paving">
        <a class="nav-services__link" href="#" target="_blank">Мощение</a>
        <span class="nav-services__pointer nav-services__pointer--paving"></span>
      </div>
      <div class="nav-services__item nav-services__item--drainage">
        <a class="nav-services__link" href="#" target="_blank">Дренаж участка</a>
        <span class="nav-services__pointer nav-services__pointer--drainage"></span>
      </div>
      <div class="nav-services__item nav-services__item--entry">
        <a class="nav-services__link" href="#" target="_blank">Монтаж вьезда</a>
        <span class="nav-services__pointer nav-services__pointer--entry"></span>
      </div>
      <div class="nav-services__item nav-services__item--lawn">
        <a class="nav-services__link" href="#" target="_blank">Укладка рулонного газона</a>
        <span class="nav-services__pointer nav-services__pointer--lawn"></span>
      </div>
    </div>
  </div>
</section>
<div class="promo-video">
  <div class="promo-video__container">
    <iframe class="promo-video__iframe" src="https://www.youtube.com/embed/r32X55DjWgM"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<section class="services">
  <div class="services__container container">
    <div class="services__item">
      <img class="services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-1.jpg" alt="Ландшафтное проектирование">
      <div class="services__info">
        <h3 class="services__title">Ландшафтное проектирование</h3>
        <a class="services__button button" href="" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <img class="services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-2.jpg" alt="Озеленение дачного участка">
      <div class="services__info">
        <h3 class="services__title">Озеленение дачного участка</h3>
        <a class="services__button button" href="" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <img class="services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-3.jpg" alt="Устройство дренажной системы">
      <div class="services__info">
        <h3 class="services__title">Устройство дренажной системы</h3>
        <a class="services__button button" href="" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <img class="services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-4.jpg" alt="Строительство домов и построек">
      <div class="services__info">
        <h3 class="services__title">Строительство домов и построек</h3>
        <a class="services__button button" href="" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <img class="services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-5.jpg" alt="Проектирование и установка бассейнов">
      <div class="services__info">
        <h3 class="services__title">Проектирование и установка бассейнов</h3>
        <a class="services__button button" href="" target="_blank">Подробнее</a>
      </div>
    </div>
    <div class="services__item">
      <img class="services__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/services-item-6.jpg" alt="Монтаж дорожного покрытия">
      <div class="services__info">
        <h3 class="services__title">Монтаж дорожного покрытия</h3>
        <a class="services__button button" href="" target="_blank">Подробнее</a>
      </div>
    </div>
  </div>
</section>
<section class="beautification">
  <div class="beautification__container container">
    <h2 class="beautification__title">
      Благоустройство территории участка-Стоимость в Санкт-Петербурге.
    </h2>
    <div class="beautification__item">
      <img class="beautification__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beautification-item-1.jpg" alt="Благоустройство">
      <div class="beautification__text-wrapper">
        <p class="beautification__text">
          Красивый новый дом никогда не будет смотреться привлекательно, если он окружен неухоженный земельным участком
          с остатками строительного материала и мусора.
        </p>
        <p class="beautification__text">
          Спасти внешний вид окружающего пейзажа поможет озеленение и благоустройство придомовой территории. Это
          кропотливая работа, требующая творческого подхода, любви к зеленым насаждениям и немало свободного времени.
        </p>
        <p class="beautification__text">
          Для создания дизайна, радующего глаз цветущей зеленью, ароматом цветов и скульптурным оформлением, важно
          заранее продумать все до мелочей и детально разработать план действий.
        </p>
      </div>
    </div>
    <div class="beautification__item beautification__item--reverse">
      <img class="beautification__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/beautification-item-2.jpg" alt="Благоустройство">
      <div class="beautification__text-wrapper">
        <p class="beautification__text">
          Если заказчик заинтересован в квалифицированных услугах, то мы с радостью их реализуем, детально обсудим
          детали касающиеся условий договора, расценок и пожеланий в оформлении территории.
        </p>
        <p class="beautification__text">
          Взаимопонимание и доверие – это главные составляющие плодотворного и взаимовыгодного сотрудничества.
        </p>
        <p class="beautification__text">
          Мы показываем клиенту готовые проекты и стараемся посмотреть на мир его глазами. Большинство заказчиков хотят
          воплотить собственные идеи, ведь у каждого человека свое представление о прекрасном.
        </p>
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
      <form class="form form--post form-questions" action="" method="POST">
        <h4 class="form__title form-questions__title">Остались вопросы?</h4>
        <h6 class="form__sub-title form-questions__sub-title">Напишите нам и мы свяжемся с вами</h6>
        <label class="form__label form-questions__label">
          <span class="form__label-text">Ваше имя</span>
          <input class="form__input form-questions__input" type="text" placeholder="Иван Иванович" required>
        </label>
        <label class="form__label form-questions__label">
          <span class="form__label-text">Телефон</span>
          <input class="form__input form-questions__input" type="tel" placeholder="+7988 5553535" required>
        </label>
        <button class="form__button button form-questions__button" type="submit">Заказать звонок</button>
      </form>
    </div>
  </div>
</section>
<section class="next-stage">
  <div class="next-stage__container container">
    <h2 class="next-stage__title">
      Следующим этапом разрабатывается основной проект, в который входят:
    </h2>
    <div class="next-stage__wrapper">
      <div class="next-stage__item">
        <ul class="next-stage__list">
          <li class="next-stage__list-item">генеральный план и дендроплан участка;</li>
          <li class="next-stage__list-item">разбивочные чертежи мощения и посадки;</li>
          <li class="next-stage__list-item">схемы устройства освещения, дренажа и автоматического полива;</li>
          <li class="next-stage__list-item">ведомости озеленения с наименованием и количеством растений;</li>
          <li class="next-stage__list-item">схемы отдельных композиционных групп;</li>
          <li class="next-stage__list-item">визуализация и пояснительные записки.</li>
        </ul>
        <img class="next-stage__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/next-stage.svg" alt="Следующий этап">
      </div>
      <div class="next-stage__item">
        <p class="next-stage__item-text">
          Как только проект готов и утвержден заказчиком, строители, озеленители и другие специалисты приступают к его
          реализации под авторским надзором ландшафтного дизайнера.Чтобы заказать благоустройство участка в
          Санкт-Петербурге и Ленинградской области, достаточно оставить заявку на сайте или связаться с нашими
          консультантами по телефону, указанному на странице.
        </p>
        <p class="next-stage__item-text">
          Мы также оказываем услуги по строительству частных домов и хозяйственных построек «под ключ». Более подробно
          ознакомиться с условиями и технологиями возведения объектов можно в соответствующем разделе сайта.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="our-works">
  <div class="our-works__container container">
    <h2 class="our-works__title">Наши работы</h2>
    <div class="our-works__items">
      <a class="our-works__item" href="#">
        <img class="our-works__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-works-item-1.jpg" alt="Наша работа">
      </a>
      <a class="our-works__item" href="#">
        <img class="our-works__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-works-item-1.jpg" alt="Наша работа">
      </a>
      <a class="our-works__item" href="#">
        <img class="our-works__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-works-item-1.jpg" alt="Наша работа">
      </a>
      <a class="our-works__item" href="#">
        <img class="our-works__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-works-item-1.jpg" alt="Наша работа">
      </a>
      <a class="our-works__item" href="#">
        <img class="our-works__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-works-item-1.jpg" alt="Наша работа">
      </a>
      <a class="our-works__item" href="#">
        <img class="our-works__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-works-item-1.jpg" alt="Наша работа">
      </a>
    </div>
  </div>
</section>
<section class="price-beautification">
  <div class="price-beautification__container container">
    <div class="price-beautification__wrapper">
      <h2 class="price-beautification__title">
        Цена благоустройства и озеленения участка
      </h2>
      <p class="price-beautification__text">
        Наша компания, в которой работает команда профессиональных строителей, ландшафтных дизайнеров и флористов,
        любящих свое дело, предлагает следующие виды услуг:
      </p>
      <ol class="price-beautification__list">
        <li class="price-beautification__list-item">
          Бесплатную консультацию в офисе или с выездом на участок заказчика;
        </li>
        <li class="price-beautification__list-item">
          Подготовку проекта по благоустройству земельного надела с учетом пожеланий владельца и особенностей рельефа;
        </li>
        <li class="price-beautification__list-item">
          Благоустройство территории, включая:
        </li>
      </ol>
      <ul class="price-beautification__list">
        <li class="price-beautification__list-item">
          Общестроительные работы с планировкой участка, демонтажем старых построек, вывозом мусора, выкорчевкой пней и
          засохшей древесно-кустарниковой растительности;
        </li>
        <li class="price-beautification__list-item">
          Устройство газонов, садовых дорожек, подпорных стенок и зон отдыха;
        </li>
        <li class="price-beautification__list-item">
          Монтаж освещения, дренажной системы и ливневой канализации;
        </li>
        <li class="price-beautification__list-item">
          Строительство искусственных водоёмов, фонтанов, беседок и бассейнов;
        </li>
        <li class="price-beautification__list-item">
          Художественно-архитектурное оформление;
        </li>
        <li class="price-beautification__list-item">
          Монтаж дорожного покрытия, заборов и ворот.
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="materials">
  <div class="materials__container container">
    <h2 class="materials__title">Материалы</h2>
    <div class="materials__items">
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-1.jpg" alt="Бетон">
        <h5 class="materials__item-title">Бетон</h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-2.jpg" alt="Трубы softrock">
        <h5 class="materials__item-title">Трубы softrock</h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-3.jpg" alt="Дренажные системы ">
        <h5 class="materials__item-title">Дренажные системы </h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-4.jpg" alt="Газонные травы">
        <h5 class="materials__item-title">Газонные травы</h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-5.jpg" alt="Рулонный газон">
        <h5 class="materials__item-title">Рулонный газон</h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-6.jpg" alt="Туи">
        <h5 class="materials__item-title">Туи</h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-7.jpg" alt="Септики">
        <h5 class="materials__item-title">Септики</h5>
      </a>
      <a class="materials__item" href="#">
        <img class="materials__item-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/materials-item-8.jpg" alt="Детские площадки">
        <h5 class="materials__item-title">Детские площадки</h5>
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>