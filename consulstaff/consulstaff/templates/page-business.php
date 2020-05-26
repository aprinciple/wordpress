<?php get_template_part('template-parts/header-post'); ?>
<section class="promo-post page-business__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text page-business__promo-post-item-text">
      <h1 class="promo-post__title page-business__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <h3 class="promo-post__subtitle">
      <?php the_field('promo_subtitle'); ?>
      </h3>
      <?php the_field('promo_text'); ?>
    </div>
    <div class="promo-post__item page-business__promo-post-item-picture">
      <?php 
        $image = get_field('promo_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'page-business__promo-post-image',
          ) );
        }
      ?>
      <?php the_field('promo_list'); ?>
    </div>
  </div>
</section>
<main class="page-business__main container">
  <section class="business-schedule">
    <div class="business-schedule__items">
      <div class="business-schedule__item">
        <h5 class="business-schedule__item-title business-schedule__item-title--green">
        <?php the_field('schedule_title-1'); ?>
        </h5>
        <?php the_field('schedule_list-1'); ?>
      </div>
      <div class="business-schedule__item">
        <h5 class="business-schedule__item-title business-schedule__item-title--red">
        <?php the_field('schedule_title-2'); ?>
        </h5>
        <?php the_field('schedule_list-2'); ?>
      </div>
      <div class="business-schedule__item">
        <h5 class="business-schedule__item-title business-schedule__item-title--orange">
        <?php the_field('schedule_title-3'); ?>
        </h5>
        <?php the_field('schedule_list-3'); ?>
      </div>
      <div class="business-schedule__item">
        <h5 class="business-schedule__item-title business-schedule__item-title--blue">
        <?php the_field('schedule_title-4'); ?>
        </h5>
        <?php the_field('schedule_list-4'); ?>
      </div>
    </div>
  </section>
  <section class="business-services">
    <div class="business-services__item business-services__item--gray">
      <div class="business-services__item-content business-services__item-content--bordered">
      <?php the_field('services_text-1'); ?>
      </div>
    </div>
    <div class="business-services__item business-services__item--list">
      <h4 class="business-services__item-title">
      <?php the_field('services_title'); ?>
      </h4>
      <div class="business-services__item-content business-services__item-content--bordered">
      <?php the_field('services_text-2'); ?>
      </div>
    </div>
    <div class="business-services__item business-services__item--picture">
      <?php 
        $image = get_field('services_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'business-services__item-image',
          ) );
        }
      ?>
    </div>
    <div class="business-services__item business-services__item--bottom">
      <div class="business-services__item-content business-services__item-content--bordered">
      <?php the_field('services_text-3'); ?>
      </div>
    </div>
  </section>
  <section class="business-analysis">
    <div class="business-analysis__item business-analysis__item-list">
      <h3 class="business-analysis__title">
      <?php the_field('analysis_title'); ?>
      </h3>
      <div class="business-analysis__item-list-wrapper">
        <span class="business-analysis__item-list-subtitle">
        <?php the_field('analysis_subtitle'); ?>
        </span>
        <?php the_field('analysis_list-1'); ?>
        <?php the_field('analysis_list-2'); ?>
        <?php the_field('analysis_list-3'); ?>
        <?php the_field('analysis_list-4'); ?>
        <?php the_field('analysis_list-5'); ?>
        <?php the_field('analysis_list-6'); ?>
      </div>
    </div>
    <div class="business-analysis__item business-analysis__item-picture"></div>
  </section>
  <section class="business-elaboration">
    <div class="business-elaboration__item business-elaboration__item-list">
      <h3 class="business-elaboration__title">
      <?php the_field('elaboration_title'); ?>
      </h3>
      <div class="business-elaboration__item-list-description">
      <?php the_field('elaboration_text'); ?>
      </div>
      <?php the_field('elaboration_list'); ?>
    </div>
    <div class="business-elaboration__item business-elaboration__item-picture"></div>
  </section>
  <section class="business-sales">
    <div class="business-sales__wrapper">
      <div class="business-sales__item business-sales__item-description">
        <h3 class="business-sales__title">
        <?php the_field('sales_title'); ?>
        </h3>
        <div class="business-sales__item-description-content">
        <?php the_field('sales_text'); ?>
        </div>
      </div>
      <div class="business-sales__item business-sales__item-picture"></div>
    </div>
    <div class="business-sales__lists">
      <div class="business-sales__lists-item">
        <h3 class="business-sales__lists-item-title">
        <?php the_field('sales_list-1-title'); ?>
        </h3>
        <?php the_field('sales_list-1-text'); ?>
      </div>
      <div class="business-sales__lists-item">
        <h3 class="business-sales__lists-item-title">
        <?php the_field('sales_list-2-title'); ?>
        </h3>
        <?php the_field('sales_list-2-text'); ?>
        <span class="business-sales__lists-item-details">
        <?php the_field('sales_list-2-details'); ?>
        </span>
      </div>
    </div>
  </section>
  <section class="business-administrative">
    <div class="business-administrative__wrapper">
      <div class="business-administrative__description">
        <h3 class="business-administrative__title">
        <?php the_field('administrative_title'); ?>
        </h3>
        <div class="business-administrative__description-content">
        <?php the_field('administrative_text'); ?>
        </div>
      </div>
      <div class="business-administrative__list">
        <h6 class="business-administrative__list-title">
        <?php the_field('administrative_list-1-title'); ?>
        </h6>
        <?php the_field('administrative_list-1'); ?>
      </div>
      <div class="business-administrative__list business-administrative__list--blue">
        <h6 class="business-administrative__list-title">
        <?php the_field('administrative_list-2-title'); ?>
        </h6>
        <?php the_field('administrative_list-2'); ?>
      </div>
    </div>
  </section>
</main>
<section class="page-business__projects">
  <?php get_template_part('template-parts/block-projects'); ?>
</section>
<section class="team-referral page-business__team-referral">
  <?php get_template_part('template-parts/block-team-referral'); ?>
</section>
<section class="page-business__clauses-services container">
  <?php get_template_part('template-parts/block-clauses-services'); ?>
</section>
<?php get_footer(); ?>