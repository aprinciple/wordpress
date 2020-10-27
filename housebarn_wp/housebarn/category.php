<?php 
get_header();
?>
<main class="p-subpage__main">
  <div class="p-subpage__breadcrumb">
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <div class="p-post__content p-subpage__content">
    <div class="container">
      <h1 
        class="title-section p-subpage__title" 
        data-san="fade-in-left"
      >
        <?php single_cat_title(); ?>
      </h1>
      <div class="houses__cards">
        <?php
          if( have_posts() ) {
            while( have_posts() ) {
              the_post();
        ?>
          <a
            class="card houses__card"
            data-san="fade-in-bottom"
            data-san-delay="100"
            href="<?php the_permalink(); ?>"
          >
            <article class="card__article">
              <figure class="card__figure">
                <?php 
                  $image = get_field('promo_img');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], '', false, array( 
                      'class' => 'card__image',
                    ) );
                  }
                ?>
              </figure>
              <div class="card__content">
                <h6 class="card__title"><?php the_title(); ?></h6>
                <!-- <p class="card__text"></p> -->
              </div>
            </article>
          </a>

        <?php } ?>

        <?php
          }
          else {
            echo "<h3>Записей нет.</h3>";
          }
        ?>
        <span class="houses__cap"></span>
      </div>
    </div>
  </div>
  <div class="talk p-subpage__talk">
    <div class="container">
      <form class="form form--post" action="/" method="POST">
        <div class="form__wrapper">
          <div class="form__text">
            <h3 class="form__title" data-san="fade-in-right">Нужен дом?</h3>
            <p
              class="form__subtitle"
              data-san="fade-in-bottom"
              data-san-delay="200"
            >
              Напишите нам и один из наших менеджеров свяжемся с вами в
              ближайшее время!
            </p>
          </div>
          <div class="form__fields">
            <input
              class="form__input"
              type="text"
              name="name"
              placeholder="Имя"
              required
            />
            <input
              class="form__input"
              type="tel"
              name="phone"
              pattern="[0-9]{7,11}"
              placeholder="7 988 555 3535"
              required
            />
            <textarea
              class="form__textarea"
              name="message"
              placeholder="Расскажите нам немного о своём проекте..."
              required
            ></textarea>
          </div>
          <button
            class="button form__button"
            type="submit"
            data-san="fade-in-top"
            data-san-delay="400"
          >
            <span
              class="button__wrapper button__wrapper--transparent form__button-wrapper"
            >
              <span class="button__text">Отправить</span>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</main>
<?php get_footer(); ?>