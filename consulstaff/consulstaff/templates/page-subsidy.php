<?php
/*
Template Name: Субсидия
*/
?>
<?php get_template_part('template-parts/header-post'); ?>
<main class="page-subsidy__main container">
  <div class="subsidy-promo">
    <h1 class="subsidy-promo__title">
      <?php the_field('promo_title'); ?>
    </h1>
    <div class="subsidy-promo__wrapper">
      <div class="subsidy-promo__slogan">
        <h3 class="subsidy-promo__slogan-title">
          <?php the_field('promo_slogan_title'); ?>
        </h3>
        <p class="subsidy-promo__slogan-text">
          <?php the_field('promo_slogan_text'); ?>
        </p>
      </div>
      <div class="subsidy-promo__description">
        <p class="subsidy-promo__description-text">
          <?php the_field('promo_desc_text'); ?>
        </p>
        <p class="subsidy-promo__description-price">
          <?php the_field('promo_desc_price'); ?>
        </p>
      </div>
    </div>
  </div>
  <section class="subsidy-services">
    <h3 class="subsidy-services__title">
      <?php the_field('services_title'); ?>
    </h3>
    <div class="subsidy-services__items">
      <div class="subsidy-services__item">
        <p class="subsidy-services__item-text">
          <?php the_field('services_item-1'); ?>
        </p>
      </div>
      <div class="subsidy-services__item">
        <p class="subsidy-services__item-text">
          <?php the_field('services_item-2'); ?>
        </p>
      </div>
      <div class="subsidy-services__item">
        <p class="subsidy-services__item-text">
          <?php the_field('services_item-3'); ?>
        </p>
      </div>
      <div class="subsidy-services__item">
        <p class="subsidy-services__item-text">
          <?php the_field('services_item-4'); ?>
        </p>
      </div>
    </div>
  </section>
  <section class="subsidy-projects">
    <h3 class="subsidy-projects__title">
      <?php the_field('grandee_title'); ?>
    </h3>
    <div class="subsidy-projects__description">
      <h4 class="subsidy-projects__description-title">
        <?php the_field('grandee_subtitle'); ?>
      </h4>
      <p class="subsidy-projects__description-text">
        <?php the_field('grandee_text'); ?>
      </p>
    </div>
    <div class="subsidy-projects__sliders">
      <div class="subsidy-projects__slider">
        <p class="subsidy-projects__slider-text">
          <?php the_field('grandee_item-1'); ?>
        </p>
        <span class="subsidy-projects__slider-percent">40%</span>
      </div>
      <div class="subsidy-projects__slider">
        <p class="subsidy-projects__slider-text">
          <?php the_field('grandee_item-2'); ?>
        </p>
        <span class="subsidy-projects__slider-percent">40%</span>
      </div>
      <div class="subsidy-projects__slider">
        <p class="subsidy-projects__slider-text">
          <?php the_field('grandee_item-3'); ?>
        </p>
        <span class="subsidy-projects__slider-percent">30%</span>
      </div>
      <div class="subsidy-projects__slider">
        <p class="subsidy-projects__slider-text">
          <?php the_field('grandee_item-4'); ?>
        </p>
        <span class="subsidy-projects__slider-percent">50%</span>
      </div>
    </div>
  </section>
  <section class="subsidy-criteria">
    <div class="subsidy-criteria__wrapper">
      <h3 class="subsidy-criteria__title">
        <?php the_field('criteria_title'); ?>
      </h3>
      <p class="subsidy-criteria__text">
        <?php the_field('criteria_text'); ?>
      </p>
    </div>
    <div class="subsidy-criteria__picture">
      <?php 
          $image = get_field('criteria_image');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'full', false, array( 
              'class' => 'subsidy-criteria__picture-image',
            ) );
          }
        ?>
    </div>
  </section>
  <div class="subsidy-about-us">
    <div class="subsidy-about-us__slogan">
      <?php the_field('veneto_text'); ?>
    </div>
    <div class="subsidy-about-us__items">
      <article class="subsidy-about-us__item">
        <picture class="subsidy-about-us__item-picture">
          <?php 
              $image = get_field('veneto_item_1_image');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'subsidy-about-us__item-picture-image',
                ) );
              }
            ?>
        </picture>
        <div class="subsidy-about-us__item-content">
          <h5 class="subsidy-about-us__item-title">
            <?php the_field('veneto_item_1_title'); ?>
          </h5>
          <div class="subsidy-about-us__item-text">
            <?php the_field('veneto_item_1_text'); ?>
          </div>
        </div>
      </article>
      <article class="subsidy-about-us__item">
        <picture class="subsidy-about-us__item-picture">
          <?php 
              $image = get_field('veneto_item_2_image');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'subsidy-about-us__item-picture-image',
                ) );
              }
            ?>
        </picture>
        <div class="subsidy-about-us__item-content">
          <h5 class="subsidy-about-us__item-title">
            <?php the_field('veneto_item_2_title'); ?>
          </h5>
          <div class="subsidy-about-us__item-text">
            <?php the_field('veneto_item_2_text'); ?>
          </div>
        </div>
      </article>
      <article class="subsidy-about-us__item">
        <picture class="subsidy-about-us__item-picture">
          <?php 
              $image = get_field('veneto_item_3_image');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], 'full', false, array( 
                  'class' => 'subsidy-about-us__item-picture-image',
                ) );
              }
            ?>
        </picture>
        <div class="subsidy-about-us__item-content">
          <h5 class="subsidy-about-us__item-title">
            <?php the_field('veneto_item_3_title'); ?>
          </h5>
          <div class="subsidy-about-us__item-text">
            <?php the_field('veneto_item_3_text'); ?>
          </div>
        </div>
      </article>
    </div>
  </div>
  <section class="subsidy-apply">
    <h3 class="subsidy-apply__title">
      <?php the_field('apply_title'); ?>
    </h3>
    <div class="subsidy-apply__promo">
      <h5 class="subsidy-apply__promo-title">
        <?php the_field('apply_subtitle'); ?>
      </h5>
      <p class="subsidy-apply__promo-text">
        <?php the_field('apply_text'); ?>
      </p>
    </div>

    <div class="subsidy-apply__items">
      <div class="subsidy-apply__item subsidy-apply__item-description">
        <span class="subsidy-apply__item-clause">Dotazione (euro)</span>
        <span class="subsidy-apply__item-clause">Periodo di compilazione delle domande</span>
        <span class="subsidy-apply__item-clause">Periodo di presentazione delle domande</span>
      </div>
      <div class="subsidy-apply__item">
        <h6 class="subsidy-apply__item-title">
          <?php the_field('apply_item_1_title'); ?>
        </h6>
        <span class="subsidy-apply__item-clause subsidy-apply__item-price">
          <b class="subsidy-apply__item-clause-title subsidy-apply__item-clause-title--black">
            Dotazione (euro)
          </b>
          <?php the_field('apply_item_1_budget'); ?>
        </span>
        <span class="subsidy-apply__item-clause">
          <b class="subsidy-apply__item-clause-title">
            Periodo di compilazione delle domande
          </b>
          <?php the_field('apply_item_1_draft'); ?>
        </span>
        <span class="subsidy-apply__item-clause">
          <b class="subsidy-apply__item-clause-title">
            Periodo di presentazione delle domande
          </b>
          <?php the_field('apply_item_1_inning'); ?>
        </span>
      </div>
      <div class="subsidy-apply__item">
        <h6 class="subsidy-apply__item-title">
          <?php the_field('apply_item_2_title'); ?>
        </h6>
        <span class="subsidy-apply__item-clause subsidy-apply__item-price">
          <b class="subsidy-apply__item-clause-title subsidy-apply__item-clause-title--black">
            Dotazione (euro)
          </b>
          <?php the_field('apply_item_2_budget'); ?>
        </span>
        <span class="subsidy-apply__item-clause">
          <b class="subsidy-apply__item-clause-title">
            Periodo di compilazione delle domande
          </b>
          <?php the_field('apply_item_2_draft'); ?>
        </span>
        <span class="subsidy-apply__item-clause">
          <b class="subsidy-apply__item-clause-title">
            Periodo di presentazione delle domande
          </b>
          <?php the_field('apply_item_2_inning'); ?>
        </span>
      </div>
      <div class="subsidy-apply__item">
        <h6 class="subsidy-apply__item-title">
          <?php the_field('apply_item_3_title'); ?>
        </h6>
        <span class="subsidy-apply__item-clause subsidy-apply__item-price">
          <b class="subsidy-apply__item-clause-title subsidy-apply__item-clause-title--black">
            Dotazione (euro)
          </b>
          <?php the_field('apply_item_3_budget'); ?>
        </span>
        <span class="subsidy-apply__item-clause">
          <b class="subsidy-apply__item-clause-title">
            Periodo di compilazione delle domande
          </b>
          <?php the_field('apply_item_3_draft'); ?>
        </span>
        <span class="subsidy-apply__item-clause">
          <b class="subsidy-apply__item-clause-title">
            Periodo di presentazione delle domande
          </b>
          <?php the_field('apply_item_3_inning'); ?>
        </span>
      </div>
    </div>

    <div class="subsidy-apply__footer">
      <div class="subsidy-apply__footer-list">
        <div class="subsidy-apply__footer-list-item">
          <?php the_field('apply_list_item-1'); ?>
        </div>
        <div class="subsidy-apply__footer-list-item">
          <?php the_field('apply_list_item-2'); ?>
        </div>
        <div class="subsidy-apply__footer-list-item">
          <?php the_field('apply_list_item-3'); ?>
        </div>
      </div>
      <div class="subsidy-apply__footer-aside">
        <div class="subsidy-apply__footer-aside-slogan">
          <p class="subsidy-apply__footer-aside-slogan-text">
            <?php the_field('apply_signature'); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="subsidy-our-services">
    <div class="clauses-services">
      <h3 class="clauses-services__title subsidy-our-services__title">
        I NOSTRI SERVIZI PER LA CRESCITA DEL VOSTRO BUSINESS IN ITALIA E ALL’ESTERO
      </h3>
      <div class="clauses-services__items">
        <div class="clauses-services__item">
          <h6 class="clauses-services__item-title">
            Internazionalizzazione Ingresso nei mercati esteri
          </h6>
          <a class="clauses-services__item-more" href="<?php echo home_url(); ?>/services/business">
            Maggiori dettagli
          </a>
        </div>
        <div class="clauses-services__item">
          <h6 class="clauses-services__item-title">
            Servizi amministrativie contabilità
          </h6>
          <a class="clauses-services__item-more" href="<?php echo home_url(); ?>/services/merger">
            Maggiori dettagli
          </a>
        </div>
        <div class="clauses-services__item">
          <h6 class="clauses-services__item-title">
            Intermediazione vendita e acquisizione delle società
          </h6>
          <a class="clauses-services__item-more" href="<?php echo home_url(); ?>/services/corporate">
            Maggiori dettagli
          </a>
        </div>
        <div class="clauses-services__item">
          <h6 class="clauses-services__item-title">
            Pianificazione aziendalee finanziamenti
          </h6>
          <a class="clauses-services__item-more" href="<?php echo home_url(); ?>/services/investing">
            Maggiori dettagli
          </a>
        </div>
        <div class="clauses-services__item">
          <h6 class="clauses-services__item-title">
            Marketing Branding Design
          </h6>
          <a class="clauses-services__item-more" href="<?php echo home_url(); ?>/services/design">
            Maggiori dettagli
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="subsidy-more-info">
    <div class="subsidy-more-info__text">
      <?php the_field('apply_add_info'); ?>
    </div>
    <span class="subsidy-more-info__author">
      <?php the_field('apply_add_info_author'); ?>
    </span>
  </div>
  <div class="subsidy-contacts">
    <div class="subsidy-contacts__item subsidy-contacts__info">
      <section class="contacts subsidy-contacts__contacts">
        <h4 class="contacts__title subsidy-contacts__contacts-title">
          Contatti
        </h4>
        <h5 class="contacts__subtitle">ConsulStaff s.r.l.</h5>
        <div class="contacts__item">
          <h6 class="contacts__item-title subsidy-contacts__contacts-item-title">
            <?php the_field('contacts_title'); ?>
          </h6>
          <div class="contacts__item-text">
            <?php the_field('contacts_text'); ?>
          </div>
          <div class="contacts__item-messenger">
            <span class="contacts__item-messenger-text">
              Telegram / WhatsApp
            </span>
            <div class="contacts__item-messenger-items">
              <a class="contacts__item-messenger-item contacts__item-messenger-item-telegram" href="tg://resolve?domain=<?php the_field('contacts_telegram'); ?>">
                <svg class="contacts__item-messenger-item-icon">
                  <use href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#telegram"></use>
                </svg>
              </a>
              <a class="contacts__item-messenger-item contacts__item-messenger-item-whatsapp" href="https://wa.me/<?php the_field('contacts_whatsapp'); ?>"
              target="_blank">
                <svg class="contacts__item-messenger-item-icon">
                  <use href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#whatsapp"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <a 
          class="contacts__item contacts__email subsidy-contacts__contacts-email" 
          href="fax:<?php the_field('contacts_phone'); ?>">
          Tel/Fax. <?php the_field('contacts_phone'); ?>
        </a>
        <a class="contacts__item contacts__email subsidy-contacts__contacts-email"
          href="mailto:<?php the_field('contacts_mail'); ?>">
          <?php the_field('contacts_mail'); ?>
        </a>
        <p class="contacts__item contacts__piva">
          <?php the_field('contacts_piva'); ?>
        </p>
      </section>
    </div>
    <div class="subsidy-contacts__item subsidy-contacts__form">
      <?php echo do_shortcode( '[form_subsidy]' ) ?>
      <div class="alert">
        <span class="alert__icon"></span>
        <div class="alert__message"></div>
        <button class="alert__close">
          <svg class="alert__close-icon" enable-background="new 0 0 60.963 60.842" version="1.1"
            viewBox="0 0 60.963 60.842" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path
              d="m59.595 52.861-22.501-22.502 22.379-22.379c1.825-1.826 1.825-4.786 0-6.611-1.826-1.825-4.785-1.825-6.611 0l-22.379 22.379-22.378-22.379c-1.826-1.825-4.785-1.825-6.611 0-1.826 1.826-1.826 4.786 0 6.611l22.378 22.379-22.503 22.502c-1.826 1.826-1.826 4.785 0 6.611 0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369l22.502-22.502 22.501 22.502c0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369c1.824-1.825 1.824-4.785-1e-3 -6.611z" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</main>
<?php get_template_part('template-parts/block-alert'); ?>
<?php get_template_part('template-parts/footer-subsidy'); ?>