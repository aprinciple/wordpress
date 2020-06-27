<?php 
/**
 * Template Name: Контакты
 */
get_header();
?>
<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div class="page-contacts">
  <div class="page-contacts__company">
    <div class="contact-company">
      <h3 class="contact-company__title">Компания <span>«Оникс»</span></h3>
      <p class="contact-company__text">
        Адрес: <span><?php the_field('c_address', $frontpage_id); ?></span>
      </p>
      <p class="contact-company__text">
        Тел:
        <a 
          class="contact-company__link" 
          href="tel:<?php the_field('c_phone_1', $frontpage_id); ?>">
          <?php the_field('c_phone_1', $frontpage_id); ?>
        </a>
      </p>
      <p class="contact-company__text">
        Почта:
        <a 
          class="contact-company__link" 
          href="mailto:<?php the_field('c_mail', $frontpage_id); ?>">
        <?php the_field('c_mail', $frontpage_id); ?>
        </a>
      </p>
    </div>
  </div>

  <div class="page-contacts__wrapper">
    <div class="page-contacts__item page-contacts__item--form">
      <?= do_shortcode( '[form_questions]' ); ?>
    </div>
  
    <div class="page-contacts__item page-contacts__item--map map">
      <div class="map__container">
        <iframe class="map__iframe" src="<?php the_field('c_map', $frontpage_id); ?>"></iframe>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>