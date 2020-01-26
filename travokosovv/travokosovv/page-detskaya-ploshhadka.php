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

  <section class="post-table">
  <div class="post-table__container container">
  <?php 
    $table = get_field( 'table-page-1' );
    if ( ! empty ( $table ) ) {
      echo '<div class="table">';
        if ( ! empty( $table['caption'] ) ) {
          echo '<span class="table__caption">' . $table['caption'] . '</span>';
        }
        echo '<div class="table__wrapper">';
          if ( ! empty( $table['header'] ) ) {
            echo '<div class="table__row table__head">';
              foreach ( $table['header'] as $th ) {
                echo '<span class="table__header">';
                  echo $th['c'];
                echo '</span>';
              }
            echo '</div>';
          }
          foreach ( $table['body'] as $tr ) {
            echo '<div class="table__row">';
              foreach ( $tr as $td ) {
                echo '<span class="table__cell">';
                  echo $td['c'];
                echo '</span>';
              }
            echo '</div>';
          }
        echo '</div>';
      echo '</div>';
    }
  ?>

  <?php 
    $table = get_field( 'table-page-2' );
    if ( ! empty ( $table ) ) {
      echo '<div class="table">';
        if ( ! empty( $table['caption'] ) ) {
          echo '<span class="table__caption">' . $table['caption'] . '</span>';
        }
        echo '<div class="table__wrapper">';
          if ( ! empty( $table['header'] ) ) {
            echo '<div class="table__row table__head">';
              foreach ( $table['header'] as $th ) {
                echo '<span class="table__header">';
                  echo $th['c'];
                echo '</span>';
              }
            echo '</div>';
          }
          foreach ( $table['body'] as $tr ) {
            echo '<div class="table__row">';
              foreach ( $tr as $td ) {
                echo '<span class="table__cell">';
                  echo $td['c'];
                echo '</span>';
              }
            echo '</div>';
          }
        echo '</div>';
      echo '</div>';
    }
  ?>

  <?php 
    $table = get_field( 'table-page-3' );
    if ( ! empty ( $table ) ) {
      echo '<div class="table">';
        if ( ! empty( $table['caption'] ) ) {
          echo '<span class="table__caption">' . $table['caption'] . '</span>';
        }
        echo '<div class="table__wrapper">';
          if ( ! empty( $table['header'] ) ) {
            echo '<div class="table__row table__head">';
              foreach ( $table['header'] as $th ) {
                echo '<span class="table__header">';
                  echo $th['c'];
                echo '</span>';
              }
            echo '</div>';
          }
          foreach ( $table['body'] as $tr ) {
            echo '<div class="table__row">';
              foreach ( $tr as $td ) {
                echo '<span class="table__cell">';
                  echo $td['c'];
                echo '</span>';
              }
            echo '</div>';
          }
        echo '</div>';
      echo '</div>';
    }
  ?>  
  </div>
</section>

  <div class="game-complexes page-playgrounds__game-complexes">

    <div class="game-complexes__items">
      <h3 class="game-complexes__items-title">Игровые комплексы</h3>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-1');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
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
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
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
        <?php 
        $image = get_field('playgrounds_card-2');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.8</h5>
            <span class="game-complexe__price">62 079 руб.</span>
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
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 26м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-3');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.5</h5>
            <span class="game-complexe__price">78 353 руб.</span>
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
                <li class="game-complexe__details-list-item">Общая высота: 2400мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 27м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-4');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.9</h5>
            <span class="game-complexe__price">89 396 руб.</span>
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
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 32,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-5');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.2</h5>
            <span class="game-complexe__price">104 565 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              Материалы
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1800мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 33м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-6');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.1</h5>
            <span class="game-complexe__price">106 689 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 36м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-7');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.15</h5>
            <span class="game-complexe__price">106 689 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2500мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 29м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-8');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.16</h5>
            <span class="game-complexe__price">106 689 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); пластиковая горка тоннельного типа; пластиковые эргономичные ручки; оцинкованные цепи d=6мм
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 77,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-9');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.17</h5>
            <span class="game-complexe__price">106 689 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена; покрытые порошковыми красками металлические элементы; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 61м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-10');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.12</h5>
            <span class="game-complexe__price">115 420 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 36,7м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-11');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.3</h5>
            <span class="game-complexe__price">122 123 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 35м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-12');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.4</h5>
            <span class="game-complexe__price">131 998 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-7 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1800мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 38м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-13');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.6</h5>
            <span class="game-complexe__price">148 940 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2400мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 35м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-14');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.13</h5>
            <span class="game-complexe__price">177 106 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 2-5 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 41м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-15');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.7</h5>
            <span class="game-complexe__price">178 976 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-7 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 43м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-16');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ДИКС-1.11</h5>
            <span class="game-complexe__price">184 502 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-7 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2050мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 48,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- Игровые комплексы ИКС (3-12 лет) -->

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-17');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
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
        <?php 
        $image = get_field('playgrounds_card-18');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.17</h5>
            <span class="game-complexe__price">66 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
                влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 29м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-19');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.37</h5>
            <span class="game-complexe__price">67 477 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1800мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 29,7м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-20');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.37.1</h5>
            <span class="game-complexe__price">72 410 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2250мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 29,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-21');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.37.а</h5>
            <span class="game-complexe__price">72 410 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1800мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,9м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-22');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.9</h5>
            <span class="game-complexe__price">81 333 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 29м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-23');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.9.а</h5>
            <span class="game-complexe__price">81 333 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 28,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-24');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.20</h5>
            <span class="game-complexe__price">84 456 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 1800мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 33,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- Игровые комплексы МГН -->

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-25');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.45</h5>
            <span class="game-complexe__price">84 547 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
              <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2100мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 30,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-26');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.1</h5>
            <span class="game-complexe__price">115 304 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; сиденье резиновое со спинкой; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 51,2м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-27');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.2</h5>
            <span class="game-complexe__price">115 304 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; сиденье резиновое со спинкой
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 51,2м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-28');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.14</h5>
            <span class="game-complexe__price">116 268 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2100мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 39,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-29');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.12</h5>
            <span class="game-complexe__price">130 547 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 35,7м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-30');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.12.а</h5>
            <span class="game-complexe__price">130 547 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 35м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-31');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.7</h5>
            <span class="game-complexe__price">135 680 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 36м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-32');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.15</h5>
            <span class="game-complexe__price">135 680 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 39м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-33');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.40</h5>
            <span class="game-complexe__price">135 680 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2100мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 42,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-34');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.66</h5>
            <span class="game-complexe__price">135 693 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 40,8м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-35');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.0</h5>
            <span class="game-complexe__price">140 843 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 62м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-36');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.6</h5>
            <span class="game-complexe__price">145 647 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 53м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-37');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.13</h5>
            <span class="game-complexe__price">152 601 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 40,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-38');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.3</h5>
            <span class="game-complexe__price">163 019 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; сиденье резиновое со спинкой
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 67,7м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-39');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.8</h5>
            <span class="game-complexe__price">169 221 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 42,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-40');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.16</h5>
            <span class="game-complexe__price">170 641 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3500мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 43,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-41');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.50</h5>
            <span class="game-complexe__price">175 767 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); сиденье резиновое со спинкой
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 63,9м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-42');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.56</h5>
            <span class="game-complexe__price">183 154 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 51,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-43');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.3</h5>
            <span class="game-complexe__price">188 367 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 46,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-44');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.31</h5>
            <span class="game-complexe__price">203 469 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 52,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-45');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.44</h5>
            <span class="game-complexe__price">204 644 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 49,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-46');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.1</h5>
            <span class="game-complexe__price">204 655 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 50,9м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-47');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.51</h5>
            <span class="game-complexe__price">205 545 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 58,9м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-48');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.11</h5>
            <span class="game-complexe__price">209 351 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3400мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 56,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-49');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.2</h5>
            <span class="game-complexe__price">228 329 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 66,4м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-50');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.9</h5>
            <span class="game-complexe__price">239 387 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3500мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 43,1м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-51');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.34</h5>
            <span class="game-complexe__price">242 978 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 48,4м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-52');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.18</h5>
            <span class="game-complexe__price">246 515 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 49,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-53');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.48</h5>
            <span class="game-complexe__price">249 768 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые развивающие элементы (счеты); сиденье резиновое со спинкой
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 68,9м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-54');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.5</h5>
            <span class="game-complexe__price">257 823 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; сиденье резиновое со спинкой; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 69м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-55');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.47</h5>
            <span class="game-complexe__price">264 733 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 63,9м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-56');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.65</h5>
            <span class="game-complexe__price">266 379 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3600мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 37,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-57');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.63</h5>
            <span class="game-complexe__price">278 212 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; пластиковые эргономичные ручки; канат из полипропилена; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 47м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-58');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.46</h5>
            <span class="game-complexe__price">279 442 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 56,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-59');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.39</h5>
            <span class="game-complexe__price">283 770 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната; листовая нержавеющая сталь толщиной 1.5 мм
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 47,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-60');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.10</h5>
            <span class="game-complexe__price">292 060 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 51,4м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-61');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.4</h5>
            <span class="game-complexe__price">293 020 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 58,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-62');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.38</h5>
            <span class="game-complexe__price">298 407 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 53,2м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-63');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.23</h5>
            <span class="game-complexe__price">303 095 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 44м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-64');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.49</h5>
            <span class="game-complexe__price">311 432 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3500мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 55,1м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-65');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.55</h5>
            <span class="game-complexe__price">320 427 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; сиденье резиновое со спинкой; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3100мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 93,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-66');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.62</h5>
            <span class="game-complexe__price">320 564 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 71м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-67');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.52</h5>
            <span class="game-complexe__price">328 788 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 66,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-68');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.4</h5>
            <span class="game-complexe__price">348 342 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 79м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-69');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.32</h5>
            <span class="game-complexe__price">358 476 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 68,6м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-70');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.18</h5>
            <span class="game-complexe__price">360 186 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 73,4м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-71');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.61</h5>
            <span class="game-complexe__price">363 463 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3400мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 66,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-72');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.19</h5>
            <span class="game-complexe__price">375 866 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 90м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-73');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.8</h5>
            <span class="game-complexe__price">405 899 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена; листовая нержавеющая сталь толщиной 1.5 мм; покрытые порошковыми красками металлические элементы; пластиковые эргономичные ручки
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2800мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 94м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-74');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.24</h5>
            <span class="game-complexe__price">406 730 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 81,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-75');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.21</h5>
            <span class="game-complexe__price">428 737 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 72,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-76');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.58</h5>
            <span class="game-complexe__price">442 203 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 79,6м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-77');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.22</h5>
            <span class="game-complexe__price">443 583 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 87,8м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-78');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.5</h5>
            <span class="game-complexe__price">488 820 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 82,2м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-79');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.16</h5>
            <span class="game-complexe__price">495 756 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 103м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-80');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.28</h5>
            <span class="game-complexe__price">531 230 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 81,7м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-81');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.25</h5>
            <span class="game-complexe__price">540 439 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 109,2м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-82');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.14</h5>
            <span class="game-complexe__price">542 596 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 102,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-83');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.7</h5>
            <span class="game-complexe__price">567 150 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 105м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-84');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.59</h5>
            <span class="game-complexe__price">606 681 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 101,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-85');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.30</h5>
            <span class="game-complexe__price">648 026 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 91,3м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-86');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.57.4</h5>
            <span class="game-complexe__price">648 816 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 89,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-87');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.26</h5>
            <span class="game-complexe__price">650 561 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 111м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-88');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-БИО-1.6</h5>
            <span class="game-complexe__price">658 045 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 134,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-89');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.60</h5>
            <span class="game-complexe__price">744 308 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3300мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 112,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-90');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.33</h5>
            <span class="game-complexe__price">761 855 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 109,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-91');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.27</h5>
            <span class="game-complexe__price">868 709 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 120,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-92');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.42</h5>
            <span class="game-complexe__price">1 007 992 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3600мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 117м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-93');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.64</h5>
            <span class="game-complexe__price">1 079 181 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 107м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-94');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.29</h5>
            <span class="game-complexe__price">1 119 593 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 2000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4200мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 179,8м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-95');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.54</h5>
            <span class="game-complexe__price">1 215 842 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 6000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 110м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-96');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.41</h5>
            <span class="game-complexe__price">1 648 792 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3700мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 179,2м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-97');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.53</h5>
            <span class="game-complexe__price">1 758 496 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 7000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 166м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-98');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.54.3</h5>
            <span class="game-complexe__price">1 789 205 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; покрытые порошковыми красками металлические элементы; клееный брус 100х100 мм; оцинкованный крепеж; листовая нержавеющая сталь толщиной 1.5 мм; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 2000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 7000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 174м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-99');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс ИКС-1.57</h5>
            <span class="game-complexe__price">1 898 022 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; сетка из шестипрядного комбинированного армированного каната d=16мм; оцинкованные цепи d=6мм; пластиковые эргономичные ручки; пластиковые развивающие элементы (счеты); канат из полипропилена; пластиковая горка тоннельного типа
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 6-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 4000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 169м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- Игровые комплексы МГН -->

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-100');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс СПЕЦ-МФ-1.2</h5>
            <span class="game-complexe__price">20 795 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
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
        <?php 
        $image = get_field('playgrounds_card-101');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс СПЕЦ-МФ-1.3</h5>
            <span class="game-complexe__price">67 823 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; иллюминатор из прозрачного поликарбоната
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-7 лет</li>
                <li class="game-complexe__details-list-item">Высота подстолья: 660мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 820мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 25,7м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-102');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс СПЕЦ-МФ-1.1</h5>
            <span class="game-complexe__price">107 020 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Угол наклона пандуса: 9°</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 40м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-103');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс МГН-1.1</h5>
            <span class="game-complexe__price">248 927 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2400мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 86,4м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-104');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс МГН-1.5</h5>
            <span class="game-complexe__price">308 093 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые эргономичные ручки
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 500мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 94м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-105');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс МГН-1.4</h5>
            <span class="game-complexe__price">497 853 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; пластиковые развивающие элементы (счеты)
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 500мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 3000мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 132,5м2</li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <div class="game-complexe game-complexes__item">
        <?php 
        $image = get_field('playgrounds_card-106');
        if( !empty( $image ) ): ?>
            <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <div class="game-complexe__info">
          <div class="game-complexe__info-header">
            <h5 class="game-complexe__title">Детский игровой комплекс МГН-1.2</h5>
            <span class="game-complexe__price">512 183 руб.</span>
          </div>
          <div class="game-complexe__details">
            <h6 class="game-complexe__details-title game-complexe__details-toggle">
              Материалы и характеристики
            </h6>
            <div class="game-complexe__details-wrapper">
              <p class="game-complexe__details-text">
              влагостойкая ламинированная ФСФ фанера; влагостойкая ФСФ фанера; клееный брус 100х100 мм; оцинкованный крепеж; пластиковые заглушки на места резьбовых соединений; двухкомпонентная краска для деревянных элементов; оцинкованные цепи d=6мм; канат из полипропилена
              </p>
              <h6 class="game-complexe__details-title">Характеристики</h6>
              <ul class="game-complexe__details-list">
                <li class="game-complexe__details-list-item">Возрастная группа: 3-12 лет</li>
                <li class="game-complexe__details-list-item">Высота пола: 1000мм</li>
                <li class="game-complexe__details-list-item">Высота горки: 1000мм</li>
                <li class="game-complexe__details-list-item">Общая высота: 2900мм</li>
                <li class="game-complexe__details-list-item">Площадь зоны безопасности: 132,6м2</li>
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