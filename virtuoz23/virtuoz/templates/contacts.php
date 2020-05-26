<?php 
/**
 * Template Name: Контакты
 */
get_header();
$frontpage_id = get_option( 'page_on_front' );
?>
<section class="section section-map">
  <iframe
    src="<?php the_field('c_map'); ?>"
    width="100%"
    height="100%"
    frameborder="0"
    style="border: 0;"
    allowfullscreen=""
    aria-hidden="false"
    tabindex="0"
  ></iframe>
</section>

<!-- Contact information-->
<section
  class="section section-sm section-first bg-default section-contacts-data"
>
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div
              class="box-contacts-icon fl-bigmug-line-cellphone55"
            ></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link">
              <a href="tel:<?php the_field('phone', $frontpage_id); ?>">
                <?php the_field('phone', $frontpage_id); ?>
              </a>
            </p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-up104"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link">
              <?php the_field('address', $frontpage_id); ?>
            </p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link">
              <a href="mailto:<?php the_field('email', $frontpage_id); ?>">
              <?php the_field('email', $frontpage_id); ?>
              </a>
            </p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form-->
<section class="section section-sm section-last bg-default text-left">
  <div class="container">
    <article class="title-classic">
      <div class="title-classic-title">
        <h3>Связаться с нами</h3>
      </div>
      <div class="title-classic-text">
        <p>
          Задайте свой вопрос или просто оставьте контактные данные, а мы
          ответим в ближайшее время.
        </p>
      </div>
    </article>
    <form
      class="rd-form rd-form-variant-2 rd-mailform"
      data-form-output="form-output-global"
      data-form-type="contact"
      method="POST"
      action="<?= get_stylesheet_directory_uri() ?>/inc/handler_contact.php" 
      novalidate="novalidate"
    >
      <div class="row row-14 gutters-14">
        <div class="col-md-4">
          <div class="form-wrap">
            <input
              class="form-input"
              id="contact-name"
              type="text"
              name="name"
              data-constraints="@Required"
            />
            <label class="form-label" for="contact-name">Ваше имя</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-wrap">
            <input
              class="form-input"
              id="contact-email"
              type="email"
              name="email"
              data-constraints="@Email @Required"
            />
            <label class="form-label" for="contact-email">Почта</label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-wrap">
            <input
              class="form-input"
              id="contact-phone2"
              type="text"
              name="phone"
              data-constraints="@Numeric"
            />
            <label class="form-label" for="contact-phone2">Телефон</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-wrap">
            <label class="form-label" for="contact-message"
              >Сообщение</label
            >
            <textarea
              class="form-input textarea-lg"
              id="contact-message"
              name="message"
              data-constraints="@Required"
            ></textarea>
          </div>
        </div>
      </div>
      <input 
        type="hidden" 
        name="id_form_contact" 
        value="id-form-contact">
      <input 
        type="hidden" 
        name="form_contact_nonce" 
        value="<?php echo wp_create_nonce('form-contact-nonce'); ?>">
      <button
        class="button button-secondary button-pipaluk"
        type="submit"
      >
        Отправить
      </button>
    </form>
  </div>
</section>
<?php get_footer(); ?>