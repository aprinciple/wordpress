<?php get_template_part('template-parts/header-post'); ?>
<section class="promo-post page-design__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text page-design__promo-post-item-text">
      <h1 class="promo-post__title page-design__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <h3 class="promo-post__subtitle">
      <?php the_field('promo_subtitle'); ?>
      </h3>
      <?php the_field('promo_text'); ?>
    </div>
    <div class="promo-post__item page-design__promo-post-item-picture">
      <?php 
        $image = get_field('promo_image-1');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'lg', false, array( 
            'class' => 'page-design__promo-post-item-image page-design__promo-post-item-image--left',
          ) );
        }
      ?>
      <?php 
        $image = get_field('promo_image-2');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'lg', false, array( 
            'class' => 'page-design__promo-post-item-image page-design__promo-post-item-image--right',
          ) );
        }
      ?>
    </div>
  </div>
</section>
<main class="page-design__main container">
  <section class="design-work">
    <h2 class="design-work__title">
      Mavericks
    </h2>
    <?php the_field('we_work_list'); ?>
    <div class="design-work__info">
      <h6 class="design-work__info-title">
        we work
      </h6>
      <?php the_field('we_work_text'); ?>
    </div>
  </section>
  <section class="design-services">
    <div class="design-services__items">
      <div class="design-services__item design-services__item--blue">
        <?php the_field('services_list-1'); ?>
      </div>
      <div class="design-services__item design-services__item--green">
        <?php the_field('services_list-2'); ?>
      </div>
    </div>
    <div class="design-services__lists">
      <div class="design-services__lists-item">
        <h4 class="design-services__lists-item-title">
          <?php the_field('services_list-1-title'); ?>
        </h4>
        <?php the_field('services_list-1-list'); ?>
      </div>
      <div class="design-services__lists-item">
        <h4 class="design-services__lists-item-title">
          <?php the_field('services_list-2-title'); ?>
        </h4>
        <?php the_field('services_list-2-list'); ?>
      </div>
      <div class="design-services__lists-item">
        <h4 class="design-services__lists-item-title">
          <?php the_field('services_list-3-title'); ?>
        </h4>
        <?php the_field('services_list-3-list'); ?>
      </div>
    </div>
  </section>
</main>
<section class="page-design__projects">
  <?php get_template_part('template-parts/block-projects'); ?>
</section>
<section class="design-mission container">
  <h5 class="design-mission__title">
  <?php the_field('mission_title'); ?>
  </h5>
  <blockquote class="design-mission__blockquote">
    <?php the_field('mission_text'); ?>
    <footer class="design-mission__blockquote-footer">
      <span class="blockquote__footer-author">
      <?php the_field('mission_author'); ?>
      </span>
    </footer>
  </blockquote>
</section>
<section class="team-referral page-design__team-referral">
  <?php get_template_part('template-parts/block-team-referral'); ?>
</section>
<section class="page-design__clauses-services container">
  <?php get_template_part('template-parts/block-clauses-services'); ?>
</section>
<?php get_footer(); ?>