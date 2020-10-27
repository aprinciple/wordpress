<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div id="bonus" class="bonus">
  <a class="bonus__item bonus__item--our-project" href="https://travokosovv.ru" target="_blank">
    <span class="bonus__item-info">Наш проект</span>
    <span>Travokosovv — Благоустройство участка</span>
  </a>
  <button id="show-modal-bonus" class="bonus__item bonus__item--bonus" type="button">
    <span class="bonus__item-icon">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/gift.svg" alt="Бонус">
  </span>
    Вам доступны бонус и скидка
  </button>
  <button class="bonus__button" type="button" aria-label="Закрыть"></button>
</div>

<div id="modal-bonus" class="modal-bonus">
  <button class="modal-bonus__close" type="button" aria-label="Закрыть"></button>
  <figure class="modal-bonus__figure">
    <?php 
      $image = get_field('bonus_img', $frontpage_id);
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], '', false, array( 
          'class' => 'modal-bonus__image',
        ) );
      }
    ?>
  </figure>
  <div class="modal-bonus__content">
    <h2 class="modal-bonus__title">
      <?php the_field('bonus_title', $frontpage_id); ?>
    </h2>
    <p>
      <?php the_field('bonus_txt', $frontpage_id); ?>
    </p>
    <a 
      class="button modal-bonus__button" 
      href="tel:<?php the_field('phone_num_nf', $frontpage_id); ?>">
      <div class="button__wrapper button__wrapper--transparent">
        <span class="button__text">Узнать стоимость</span>
      </div>
    </a>
  </div>
</div>