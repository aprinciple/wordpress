<?php 
/*
Template name: Страница - Контакты
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg bg-with-map">
    <iframe class="map"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1369.347499498107!2d38.97327896757327!3d45.046340625311785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f04f786136cd81%3A0x99e6d683d92ee510!2z0YPQuy4g0JHQsNCx0YPRiNC60LjQvdCwLCAyNTIsINCa0YDQsNGB0L3QvtC00LDRgCwg0JrRgNCw0YHQvdC-0LTQsNGA0YHQutC40Lkg0LrRgNCw0LksIDM1MDAyMA!5e0!3m2!1sru!2sru!4v1581308244813!5m2!1sru!2sru"
      frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <img 
      class="mask deep-blue mask-with-map" 
      src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" 
      alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content content-with-map small-page">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
            <br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
          <iframe class="map-mob"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1369.347499498107!2d38.97327896757327!3d45.046340625311785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f04f786136cd81%3A0x99e6d683d92ee510!2z0YPQuy4g0JHQsNCx0YPRiNC60LjQvdCwLCAyNTIsINCa0YDQsNGB0L3QvtC00LDRgCwg0JrRgNCw0YHQvdC-0LTQsNGA0YHQutC40Lkg0LrRgNCw0LksIDM1MDAyMA!5e0!3m2!1sru!2sru!4v1581308244813!5m2!1sru!2sru"
            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_template_part('template-parts/footer-page-contacts'); ?>