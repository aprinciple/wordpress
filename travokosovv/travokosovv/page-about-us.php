<?php get_header(); ?>
<div class="promo-post page-about-us__promo-post">
    <div class="promo-post__container container">
      <div class="promo-post__item promo-post__item--text">
        <h1 class="promo-post__title"><?php the_field('promo-title') ?></h1>
        <?php
          $content = get_field("promo-text");
          $content = str_replace('<p', '<p class="promo-post__text"', $content); 
        ?>
        <?php echo $content; ?>       
      </div>
      <div class="promo-post__item promo-post__item--slider page-about-us__slider">
        <div class="slider-post">
          <div class="slider-post__items">
            <?php 
              $counter = 1;
              while ($counter < 11):
                $slider_images = get_field('slider-images');
                $field_image = 'slider-image-' . $counter;
                $slider_image = $slider_images[$field_image];
              
                if ($slider_image): 
                  echo '<div class="slider-post__item">'; 
                    echo '<img class="slider-post__image" src="' . $slider_image['url'] . '" alt="' . $slider_image['alt'] . '">';
                  echo '</div>';
                endif; 

                $counter++;
              endwhile;
            ?>
          </div>
          <div class="slider-post__nav">
            <button class="slider-post__button slider-post__button--left">
              <svg class="slider-post__button-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-arrow-left"></use>
              </svg>
            </button>
            <button class="slider-post__button slider-post__button--right">
              <svg class="slider-post__button-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-arrow-right"></use>
              </svg>
            </button>
          </div>
          <div class="slider-post__dots"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-about-us__work">
    <div class="container">
      <h2 class="page-about-us__work-title">Работа в сфере благоустройства территории участков</h2>
    </div>
    <div class="page-about-us__work-wrapper">
      <div class="page-about-us__work-container container">
        <div class="page-about-us__work-service-offerings service-offerings">
          <p class="service-offerings__text">
            Благодаря большому автопарку специализированной техники и штату славянских сотрудников от ландшафтных
            дизайнеров, строителей, агротехников и водителей до разнорабочих мы предлагаем заказчикам:
          </p>
          <ul class="service-offerings__list">
            <li class="service-offerings__item">
              Вспашку земли мотоблоком или трактором с плугом;
            </li>
            <li class="service-offerings__item">
              Расчистку участков от старых построек, мелколесья и растительности;
            </li>
            <li class="service-offerings__item">
              Услуги по озеленению и ландшафтному дизайну;
            </li>
            <li class="service-offerings__item">
              Устройство эффективной дренажной системы;
            </li>
            <li class="service-offerings__item">
              Мощение дорожек, тротуаров и площадок;
            </li>
            <li class="service-offerings__item">
              Монтаж дорожного покрытия, заборов и ворот;
            </li>
            <li class="service-offerings__item">
              Проектирование и установку бассейнов.
            </li>
          </ul>
          <button class="service-offerings__button button make-request__button--order button">Заказать звонок</button>
        </div>
      </div>
    </div>
  </div>

  <div class="five-reasons page-about-us__five-reasons">
    <div class="five-reasons__container container">
      <h2 class="five-reasons__title">
        Пять причин, чтобы заказать благоустройство территории в «travokosovv»
      </h2>
      <p class="five-reasons__text">
        В нашей компании по озеленению и благоустройству можно заказать как одну из вышеперечисленных услуг, так и
        комплекс мероприятий. В любом случае мы гарантируем:
      </p>
      <div class="five-reasons__items">
        <div class="five-reasons__item">
          <svg class="five-reasons__item-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-reasons-1"></use>
          </svg>
          <p class="five-reasons__item-text">
            Грамотный ландшафтный дизайн – разрабатывается архитектором-дизайнером после гидрогеологических исследований,
            изучения особенностей грунта, рельефа местности и пожеланий заказчика;
          </p>
        </div>
        <div class="five-reasons__item">
          <svg class="five-reasons__item-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-reasons-2"></use>
          </svg>
          <p class="five-reasons__item-text">
            Максимально сжатые сроки – благодаря опыту и слаженной работе сотрудников мы всегда стараемся укладываться в
            сроки, указанные в договоре. Единственное обстоятельство, которое может сорвать сроки – плохая погода.
          </p>
        </div>
        <div class="five-reasons__item">
          <svg class="five-reasons__item-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-reasons-3"></use>
          </svg>
          <p class="five-reasons__item-text">
            Качество работ на европейском уровне – контроль качества услуг осуществляет инженер по Технадзору, поэтому
            вероятность ошибок в технологии производства работ полностью исключена;
          </p>
        </div>
        <div class="five-reasons__item">
          <svg class="five-reasons__item-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-reasons-4"></use>
          </svg>
          <p class="five-reasons__item-text">
            Качественный сервис и индивидуальный подход – мы стремимся создать персонализированный уровень обслуживания.
            Наши специалисты подробно и доступно объяснят каждому заказчику, что входит в ту или иную услугу. Помогут
            подобрать оптимальный вариант, учитывая его потребности и финансовые возможности;
          </p>
        </div>
        <div class="five-reasons__item">
          <svg class="five-reasons__item-icon">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-reasons-5"></use>
          </svg>
          <p class="five-reasons__item-text">
            Выгодные условия оплаты – для удобства заказчиков мы предусмотрели несколько вариантов оплаты (наличный
            расчет, перечисление для юридических лиц и банковские карты). Для постоянных клиентов действует система скидок
            и индивидуальных предложений;
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="additional-works page-about-us__additional-works">
    <div class="additional-works__container container">
      <div class="additional-works__wrapper">
        <div class="additional-works__item">
          <h2 class="additional-works__title">Дополнительные работы по благоустройству участка</h2>
          <ul class="additional-works__list">
            <li class="additional-works__list-item">Ухаживать за садом, клумбами и другой древесно-кустарниковой
              растительностью;</li>
            <li class="additional-works__list-item">Подстригать и поливать газоны;</li>
            <li class="additional-works__list-item">Обслуживать инженерные коммуникации, искусственные
              водоёмы и бассейны.</li>
          </ul>
        </div>
      </div>
      <p class="additional-works__text">
        Наша компания готова взять на себя и эти проблемы, чтобы ваш участок всегда выглядел ухоженным, цветущим и
        красивым.
      </p>
      <button class="additional-works__button button make-request__button--order" type="button">Заказать звонок</button>
    </div>
  </div>

  <div class="page-about-us__contract">
    <div class="contract">
      <div class="contract__container container">
        <h2 class="contract__title">Посмотреть договор</h2>
        <div class="contract__page">
          <h3 class="contract__page-title">ДОГОВОР ОКАЗАНИЯ УСЛУГ №__</h3>
          <span class="contract__page-sub-title"><b>г. Санкт-Петербург</b> <b>17.08.2017</b></span>
          <p class="contract__page-text">Индивидуальный предприниматель ___________, действующий на
            основаниисвидетельства о
            государственной регистрации, именуемый в дальнейшем Исполнитель, с одной стороны _________________,
            именуемый в дальнейшем Заказчик, с другой стороны, вместе именуемые Стороны, заключили настоящий договор о
            нижеследующем:</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">ПРЕДМЕТ ДОГОВОРА</li>
          </ol>
          <p class="contract__page-text">1.1. Исполнитель обязуется по заданию Заказчика оказать услуги по созданию газона
            (далее по тексту — Услуги), а
            Заказчик обязуется оплатить услуги в порядке, предусмотренном настоящим договором.</p>
          <p class="contract__page-text">1.2. Исполнитель обязуется оказать услуги на территории Заказчика расположенной в
            Санкт-Петербурге и
            Ленинградской
            области (далее по тексту — Объект) с периодичностью один раз в месяц.</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">СРОК ОКАЗАНИЯ УСЛУГ</li>
          </ol>
          <p class="contract__page-text">2.1. Срок оказания услуг – с ______ до________</p>
          <p class="contract__page-text">2.2. В случае неблагоприятных погодных условий Исполнитель вправе в одностороннем
            порядке перенести срок
            окончания
            оказания услуг на более поздние даты, о чем уведомляет Заказчика. Срок считается измененным с момента получения
            Заказчиком уведомления.</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">ПРАВА И ОБЯЗАННОСТИ СТОРОН</li>
          </ol>
          <p class="contract__page-text">3.1. Исполнитель обязуется:</p>
          <p class="contract__page-text">3.1.1. Оказатьуслуги качественно, в полном объеме и в срок, предусмотренный
            договором.</p>
          <p class="contract__page-text">3.1.2. Предоставлять Заказчику по его требованию всю необходимую информацию и
            документацию.</p>
          <p class="contract__page-text">3.2. Исполнитель имеет право:</p>
          <p class="contract__page-text">3.2.1. Требовать и получать от Заказчика все необходимые документы,</p>
          <p class="contract__page-text">3.2.2. Привлекать к оказанию услуг третьих лиц.</p>
          <p class="contract__page-text">3.2.3. В одностороннем порядке изменить срок оказания услуг при условии
            неблагоприятных погодных условий.</p>
          <p class="contract__page-text">3.3. Заказчик обязуется:</p>
          <p class="contract__page-text">3.3.1. Подписать акт оказания услуг и оплатить услуги в порядке, в сроки и размере,
            предусмотренных настоящим
            договором. </p>
          <p class="contract__page-text">3.3.2. Предоставить Исполнителю беспрепятственный доступ на Объект.</p>
          <p class="contract__page-text">3.3.3. Предоставить Исполнителю все имеющиеся у него сведения и документы,
            необходимые для исполнения
            настоящего
            договора.</p>
          <p class="contract__page-text">3.3.4. Предоставить Исполнителю задания в письменном и устном виде, необходимые для
            оказания услуг.</p>
          <p class="contract__page-text">3.3.5. Своевременно, не менее чем за два дня, предупреждать Исполнителя о времени
            проведения работ,
            предусмотренных
            настоящим договором.</p>
          <p class="contract__page-text">3.4. Заказчик имеет право:</p>
          <p class="contract__page-text">3.4.1. Требовать у Исполнителя сведения о ходе исполнения договора, копии
            документов, подтверждающих
            проделанную
            Исполнителем работу.</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">СТОИМОСТЬ УСЛУГ И ПОРЯДОК РАСЧЕТОВ</li>
          </ol>
          <p class="contract__page-text">4.1. Стоимость Услуг по настоящему Договору (стоимость Договора) определяется из
            совокупности оказанных услуг
            указанных в дополнительными соглашениями к Договору, являющимися неотъемлемой частью договора. В случае
            возникновения
            необходимости в оказании дополнительных услуг, которые не могли быть предвидены заранее, Сторонами отдельно
            согласовываются сроки и стоимость оказания этих услуг, о чем заключается дополнительное соглашение, являющееся
            неотъемлемой частью договора.</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">Исполнитель предоставляет Заказчику выполненную работу с сопроводительными
              документами (акт выполненных
              работ).
              Заказчик в течение пяти рабочих дней со дня получения вышеуказанных документов производит на
              оплату, а
              один экземпляр утвержденного Заказчиком акта выполненных работ возвращает Исполнителю.</li>
          </ol>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">ОТВЕТСТВЕННОСТЬ СТОРОН</li>
          </ol>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">Исполнитель несет ответственность в случае неисполнения или ненадлежащего
              исполнения договора, допущенного
              по
              своей вине. Размер ответственности исполнителя ограничивается суммами, фактически полученными им от Заказчика
              на
              момент, когда было допущено нарушение договора.</li>
            <li class="contract__page-list-item">Исполнитель не несет ответственности за отсутствие всхода и(или) роста
              травы, которые возникли в связи с
              несоблюдением Заказчиком или иными лицами необходимых для этого условий.</li>
            <li class="contract__page-list-item">За просрочку оплаты Заказчик возмещает исполнителю убытки в полном объеме и
              уплачивает неустойку в размере
              0,1 %
              от полной стоимости услуг за каждый день просрочки.</li>
            <li class="contract__page-list-item">За нарушение срока оказания услуг по своей вине Исполнитель уплачивает
              Заказчику неустойку в размере 0,1 %
              от
              суммы предоплаты за каждый день просрочки.</li>
            <li class="contract__page-list-item">Уплата неустойки и возмещение убытков не освобождает Стороны от выполнения
              принятых на себя обязательств.
            </li>
          </ol>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">ИЗМЕНЕНИЕ И ПРЕКРАЩЕНИЕ ДОГОВОРА</li>
          </ol>
          <p class="contract__page-text">6.1. Стороны вправе в любое время изменить или расторгнуть договор по взаимному
            соглашению. Соглашение об
            изменении
            или расторжении договора оформляется в виде единого документа, подписанного обеими Сторонами.</p>
          <p class="contract__page-text">6.2. Заказчик вправе отказаться от исполнения договора при условии оплаты
            Исполнителю фактически понесенных им
            расходов.</p>
          <p class="contract__page-text">6.3. Исполнитель вправе отказаться от исполнения обязательств по настоящему
            договору лишь при условии полного
            возмещения Заказчику убытков.</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">ФОРС-МАЖОР</li>
          </ol>
          <p class="contract__page-text">7.1. При наступлении обстоятельств невозможности полного или
            частичного
            исполнения любой из сторон обязательств по договору, а именно: землетрясения, стихийного бедствия или
            других
            обстоятельств непреодолимой силы, срок исполнения обязательств по договору отодвигается соразмерно времени, в
            течение
            которого будут действовать такие обстоятельства или их последствия.</p>
          <p class="contract__page-text">7.2. Сторона, для которой создалась невозможность исполнения
            обязательств
            по договору, должна незамедлительно известить другую Сторону о наступлении обстоятельств, препятствующих
            исполнению.
          </p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">ПРОЧИЕ УСЛОВИЯ</li>
          </ol>
          <p class="contract__page-text">8.1. Настоящий договор вступает в силу с момента подписания и действует до
            выполнения сторонами своих
            обязательств.
          </p>
          <p class="contract__page-text">8.2. Настоящий договор составлен в двух экземплярах, имеющих равную юридическую
            силу, по одному для каждой из
            Сторон.
          </p>
          <p class="contract__page-text">8.3. Все споры и разногласия, возникающие в процессе исполнения настоящего
            договора, Стороны будут разрешать
            путем
            переговоров.</p>
          <p class="contract__page-text">8.4. В случае если Стороны не придут к соглашению по спорным вопросам, споры будут
            переданы на рассмотрение в
            суд в
            порядке, предусмотренном действующим законодательством РФ.</p>
          <p class="contract__page-text">8.5. Во всем остальном, не предусмотренном настоящим договором, Стороны
            руководствуются действующим
            законодательством
            РФ.</p>
          <ol class="contract__page-list">
            <li class="contract__page-list-item">9.АДРЕСА И РЕКВИЗИТЫ СТОРОН</li>
          </ol>
          <div class="contract__page-signature">
            <span class="contract__page-signature-name">Заказчик:</span>
            <span class="contract__page-signature-name">Исполнитель:</span>
          </div>
        </div>
        <button class="contract__toggle" type="button">Развернуть</button>
      </div>
    </div>
  </div>
<?php get_footer(); ?>