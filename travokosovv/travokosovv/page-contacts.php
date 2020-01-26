<?php get_header(); ?>
<div class="page-contacts__container container">
  <div class="page-contacts__item page-contacts__item--left">
    <div class="page-contacts__company">
      <div class="contact-company">
        <h3 class="contact-company__title">Компания <span>«TravokosovV»</span></h3>
        <p class="contact-company__text"><?php the_field('contact-address', '277'); ?></p>
        <p class="contact-company__text">
          Тел:
          <a class="contact-company__link" href="tel:<?php the_field('contact-phone', '277'); ?>"><?php the_field('contact-phone', '277'); ?></a>
        </p>
        <p class="contact-company__text">
          Почта:
          <a class="contact-company__link" href="mailto:<?php the_field('contact-mail', '277'); ?>"><?php the_field('contact-mail', '277'); ?></a>
        </p>
      </div>
    </div>
    <div class="page-contacts__form">
    <?php echo do_shortcode( '[form_questions]' ) ?>
    </div>
  </div>

  <div class="page-contacts__item">
    <div class="map">
      <div class="map__container">
        <iframe class="map__iframe"
          src="<?php the_field('map-google', '277'); ?>"></iframe>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>