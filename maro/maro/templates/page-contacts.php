<?php 
/*
Template name: Страница - Контакты
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content content-with-map p-contacts">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 p-contacts__wrapper">
          <div class="contacts">
            <div>
              <p>
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/address.svg" 
                  alt="Адрес">
                <?php the_field('contacts_adrs'); ?>
              </p>
              <div class="contacts__phone">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg" 
                  alt="Номер">
                <?php the_field('contacts_phone'); ?>
              </div>
              <p>
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg" 
                  alt="Почта">
                <a 
                  href="mailto:<?php the_field('contacts_email'); ?>">
                  <?php the_field('contacts_email'); ?>
                </a>
              </p>
            </div>
            <div>
              <?php the_field('contacts_org'); ?>
            </div>
            <div>
              <?php the_field('contacts_mode_work'); ?>
            </div>
            <div class="contacts__rights">
              ВСЕ ПРАВА ЗАЩИЩЕНЫ
            </div>
          </div>
          <div class="p-contacts__map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5264357957d826917a34cf90429b9adbbedbdae5305de82e1bc8193654ff5ef6&amp;source=constructor" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>