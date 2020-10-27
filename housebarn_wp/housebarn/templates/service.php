<?php 
/**
 * Template Name: Услуга
 */
get_header();
?>
<main class="p-subpage__main">
  <div class="p-subpage__breadcrumb">
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <div class="p-post__content p-subpage__content">
    <div class="container">
      <h2 class="title-section p-subpage__title" data-san="fade-in-left"><?php the_title(); ?></h2>
      <div class="houses__cards">
        <a
          class="card houses__card"
          data-san="fade-in-bottom"
          data-san-delay="100"
          href="#"
        >
          <article class="card__article">
            <figure class="card__figure">
              <img
                class="card__image"
                src="img/pic-services-1.jpg"
                alt="Alt"
              />
            </figure>
            <div class="card__content">
              <h6 class="card__title">Модульный дом М30 в BARN стиле</h6>
              <p class="card__text">
                <span>Площадь: 72,3 м<sup>3</sup></span>
                <span>Чистовая отделка</span>
              </p>
            </div>
          </article>
        </a>
        <span class="houses__cap"></span>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/talk'); ?>
</main>
<?php get_footer(); ?>