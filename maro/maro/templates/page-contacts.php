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
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.png" 
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.9277412051188!2d38.97248351534137!3d45.046688179098105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f04f786136cd81%3A0x99e6d683d92ee510!2z0YPQuy4g0JHQsNCx0YPRiNC60LjQvdCwLCAyNTIsINCa0YDQsNGB0L3QvtC00LDRgCwg0JrRgNCw0YHQvdC-0LTQsNGA0YHQutC40Lkg0LrRgNCw0LksINCg0L7RgdGB0LjRjywgMzUwMDIw!5e0!3m2!1sru!2sua!4v1591357002759!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>