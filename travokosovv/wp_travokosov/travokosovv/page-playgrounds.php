<?php get_header(); ?>
<div class="promo-post page-playgrounds__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item--text">
      <h1 class="promo-post__title"><?php the_field("promo-title"); ?></h1>
      <?php
        $content = get_field("promo-text");
        $content = str_replace('<p', '<p class="promo-post__text"', $content); 
      ?>
      <?php echo $content; ?>
    </div>
    <div class="promo-post__item promo-post__item--slider page-playgrounds__slider">
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
              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-arrow-left"></use>
            </svg>
          </button>
          <button class="slider-post__button slider-post__button--right">
            <svg class="slider-post__button-icon">
              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-arrow-right"></use>
            </svg>
          </button>
        </div>
        <div class="slider-post__dots"></div>
      </div>
    </div>
  </div>
</div>

<div class="page-playgrounds__container container">

  <div class="page-playgrounds__details">
    <h3 class="page-playgrounds__details-title"><?php the_field('playgrounds-title') ?></h3>
    <div class="page-playgrounds__details-item">
      <?php
        $content = get_field("playgrounds-text-1");
        $content = str_replace('<p', '<p class="page-playgrounds__details-text"', $content); 
      ?>
      <?php echo $content; ?>
    </div>
    <div class="page-playgrounds__details-item page-playgrounds__details-item--gray">
      <?php
        $content = get_field("playgrounds-text-2");
        $content = str_replace('<p', '<p class="page-playgrounds__details-text"', $content); 
      ?>
      <?php echo $content; ?>
    </div>
  </div>

  <div class="game-complexes page-playgrounds__game-complexes">

    <div class="game-complexes__items">
      <h3 class="game-complexes__items-title">Игровые комплексы</h3>

      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.10</h5>
            <span class="game-complexe__price">55 953 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 25м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- Игровые комплексы ИКС (3-12 лет) -->

      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- Игровые комплексы МГН -->

      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс МФ-1.2</h5>
            <span class="game-complexe__price">20 795 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места
                резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-7 лет</li>
                <li class="game-complexe__details-list-item">Высота подстолья: 660мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 820мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 17,4м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <img class="game-complexe__image" src="<?php echo get_template_directory_uri() ?>/assets/img/playgrounds-item-1.jpg" alt="Игровой комплекс">
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17.а</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками
                металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь
                толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для
                деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
    <button class="game-complexes__button button" type="button">Показать ещё</button>
  </div>
</div>
<?php get_footer(); ?>