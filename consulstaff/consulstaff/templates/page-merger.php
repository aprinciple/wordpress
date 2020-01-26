<?php get_template_part('template-parts/header-merger'); ?>
<section class="promo-post page-merger__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text">
      <h1 class="promo-post__title page-merger__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <h3 class="promo-post__subtitle">
      <?php the_field('promo_subtitle'); ?>
      </h3>
      <?php the_field('promo_text'); ?>
    </div>
    <div class="promo-post__item page-merger__promo-post-item-picture">
      <img class="page-merger__promo-post-item-picture-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/merger-promo-post.svg" alt="Alt">
    </div>
  </div>
</section>
<main class="page-merger__main container">
  <div class="page-merger__slogan">
    <h5 class="page-merger__slogan-title">
    <?php the_field('slogan_title'); ?>
    </h5>
    <?php the_field('slogan_text'); ?>
  </div>
  <div class="merger-slider">
    <div class="merger-slider__item">
      <div class="merger-slider__item-picture"></div>
      <div class="merger-slider__item-content">
        <h5 class="merger-slider__item-content-title">
        <?php the_field('merger_slide_title-1'); ?>
        </h5>
        <?php the_field('merger_slide_text-1'); ?>
      </div>
    </div>
    <div class="merger-slider__item">
      <div class="merger-slider__item-picture">

      </div>
      <div class="merger-slider__item-content">
        <h5 class="merger-slider__item-content-title">
        <?php the_field('merger_slide_title-2'); ?>
        </h5>
        <?php the_field('merger_slide_text-2'); ?>
      </div>
    </div>
    <div class="merger-slider__item">
      <div class="merger-slider__item-picture">

      </div>
      <div class="merger-slider__item-content">
        <h5 class="merger-slider__item-content-title">
        <?php the_field('merger_slide_title-3'); ?>
        </h5>
        <?php the_field('merger_slide_text-3'); ?>
      </div>
    </div>
    <div class="merger-slider__item">
      <div class="merger-slider__item-picture">

      </div>
      <div class="merger-slider__item-content">
        <h5 class="merger-slider__item-content-title">
        <?php the_field('merger_slide_title-4'); ?>
        </h5>
        <?php the_field('merger_slide_text-4'); ?>
      </div>
    </div>
    <div class="merger-slider__item">
      <div class="merger-slider__item-picture">

      </div>
      <div class="merger-slider__item-content">
        <h5 class="merger-slider__item-content-title">
        <?php the_field('merger_slide_title-5'); ?>
        </h5>
        <?php the_field('merger_slide_text-5'); ?>
      </div>
    </div>
  </div>
</main>
<section class="page-merger__projects">
  <?php get_template_part('template-parts/block-projects'); ?>
</section>
<section class="team-referral page-merger__team-referral">
  <?php get_template_part('template-parts/block-team-referral'); ?>
</section>
<?php get_footer(); ?>