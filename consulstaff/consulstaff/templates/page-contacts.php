<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>

<?php get_template_part('template-parts/header-post'); ?>
<main class="page-contacts__main container">
  <div class="page-contacts__contacts">
    <section class="contacts">
      <h4 class="contacts__title">
        <?php the_field('contacts_title', $frontpage_id); ?>
      </h4>
      <h5 class="contacts__subtitle">
        ConsulStaff s.r.l.
      </h5>
      <div class="contacts__item">
        <h6 class="contacts__item-title">
          <?php the_field('contacts_item_it_title', $frontpage_id); ?>
        </h6>
        <?php the_field('contacts_item_it_text', $frontpage_id); ?>
        <div class="contacts__item-messenger">
          <span class="contacts__item-messenger-text">
            Telegram / WhatsApp
          </span>
          <div class="contacts__item-messenger-items">
            <a 
              class="contacts__item-messenger-item contacts__item-messenger-item-telegram" 
              href="tg://resolve?domain=<?php the_field('contacts_item_it_tm', $frontpage_id); ?>">
              <svg class="contacts__item-messenger-item-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
              </svg>
            </a>
            <a 
              class="contacts__item-messenger-item contacts__item-messenger-item-whatsapp" 
              href="https://wa.me/<?php the_field('contacts_item_it_wp', $frontpage_id); ?>"
              target="_blank">
              <svg class="contacts__item-messenger-item-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#whatsapp"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="contacts__item">
        <h6 class="contacts__item-title">
          <?php the_field('contacts_item_ru_title', $frontpage_id); ?>
        </h6>
        <?php the_field('contacts_item_ru_text', $frontpage_id); ?>
        <div class="contacts__item-messenger">
          <span class="contacts__item-messenger-text">
            Telegram / WhatsApp
          </span>
          <div class="contacts__item-messenger-items">
            <a 
              class="contacts__item-messenger-item contacts__item-messenger-item-telegram" 
              href="tg://resolve?domain=<?php the_field('contacts_item_ru_tm', $frontpage_id); ?>">
              <svg class="contacts__item-messenger-item-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
              </svg>
            </a>
            <a 
              class="contacts__item-messenger-item contacts__item-messenger-item-whatsapp" 
              href="https://wa.me/<?php the_field('contacts_item_ru_wp', $frontpage_id); ?>"
              target="_blank">
              <svg class="contacts__item-messenger-item-icon">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#whatsapp"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <a 
        class="contacts__item contacts__email" 
        href="mailto:<?php the_field('contacts_mail', $frontpage_id); ?>">
        <?php the_field('contacts_mail', $frontpage_id); ?>
      </a>
      <p class="contacts__item contacts__piva">
        <?php the_field('contacts_piva', $frontpage_id); ?>
      </p>
    </section>
  </div>
  <div class="page-contacts__form">
    <?php echo do_shortcode( '[form_contact]' ) ?>
  </div>
</main>
<?php get_template_part('template-parts/block-alert'); ?>
<?php get_footer(); ?>