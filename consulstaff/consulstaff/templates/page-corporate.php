<?php get_template_part('template-parts/header-corporate'); ?>
<section class="promo-post page-corporate__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text page-corporate__promo-post-item-text">
      <h1 class="promo-post__title">
      <?php the_field('promo_title'); ?>
      </h1>
      <h3 class="promo-post__subtitle">
      <?php the_field('promo_subtitle'); ?>
      </h3>
      <?php the_field('promo_text'); ?>
    </div>
    <div class="promo-post__item page-corporate__promo-post-item-image"></div>
  </div>
</section>
<section class="page-corporate__corporate-structure corporate-structure">
  <div class="corporate-structure__container container">
    <div class="corporate-structure__header">
      <article class="corporate-structure__item corporate-structure__content">
        <h4 class="corporate-structure__content-title">
        <?php the_field('structure_title'); ?>
        </h4>
        <?php the_field('structure_text'); ?>
      </article>
      <div class="corporate-structure__item corporate-structure__item-picture">
      <?php 
        $image = get_field('structure_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'corporate-structure__item-picture-image',
          ) );
        }
      ?>
      </div>
    </div>

    <div class="corporate-structure__footer">
      <article class="corporate-structure__services">
        <h4 class="corporate-structure__services-title">
        <?php the_field('support_title'); ?>
        </h4>
        <?php the_field('support_text'); ?>
      </article>

      <div class="corporate-structure__footer-picture">
      <?php 
        $image = get_field('support_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'corporate-structure__footer-picture-image',
          ) );
        }
      ?>
      </div>

      <div class="corporate-structure__footer-items">
        <div class="corporate-structure__footer-item">
          <h5 class="corporate-structure__footer-item-title">
          <?php the_field('counseling_title'); ?>
          </h5>
          <?php the_field('counseling_text'); ?>
        </div>
        <div class="corporate-structure__footer-item">
          <h5 class="corporate-structure__footer-item-title">
          <?php the_field('accounting_title'); ?>
          </h5>
          <?php the_field('accounting_text'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-corporate__projects">
  <?php get_template_part('template-parts/block-projects'); ?>
</section>
<section class="team-referral page-corporate__team-referral">
  <?php get_template_part('template-parts/block-team-referral'); ?>
</section>
<?php get_footer(); ?>