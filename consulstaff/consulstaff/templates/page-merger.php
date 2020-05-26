<?php get_template_part('template-parts/header-post'); ?>
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
      <img class="page-merger__promo-post-item-picture-image" 
      src="<?php echo get_template_directory_uri(); ?>/assets/img/merger-promo-post.svg" alt="Alt">
    </div>
  </div>
</section>
<main class="page-merger__main container">
  <div class="advert-link page-merger__advert-link">
    <div class="page-merger__advert-link-wrapper">
      <h3 class="advert-link__title">
        <?php the_field('advert_link_text'); ?>
      </h3>
      <a class="advert-link__link page-merger__advert-link-link" 
        href="<?php the_field('advert_link_link'); ?>"
        target="_blank">
        <?php the_field('advert_link_link_txt'); ?>
      </a>
    </div>
    <a class="page-merger__advert-link-logo" 
      href="<?php the_field('advert_link_link'); ?>">
    </a>
  </div>
  <div class="page-merger__slogan">
    <h5 class="page-merger__slogan-title">
      <?php the_field('slogan_title'); ?>
    </h5>
    <?php the_field('slogan_text'); ?>
  </div>
  <div class="merger-items">
    <div class="merger-items__item">
      <div class="merger-items__item-picture">
        <?php 
          $image = get_field('merger_item_image-1');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'full', false, array( 
              'class' => 'merger-items__item-image',
            ) );
          }
        ?>
      </div>
      <div class="merger-items__item-content">
        <h5 class="merger-items__item-content-title">
        <?php the_field('merger_item_title-1'); ?>
        </h5>
        <div class="merger-items__item-content-text">
          <?php the_field('merger_item_text-1'); ?>
        </div>
      </div>
    </div>
    <div class="merger-items__item">
      <div class="merger-items__item-picture">
        <?php 
          $image = get_field('merger_item_image-2');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'full', false, array( 
              'class' => 'merger-items__item-image',
            ) );
          }
        ?>
      </div>
      <div class="merger-items__item-content">
        <h5 class="merger-items__item-content-title">
        <?php the_field('merger_item_title-1'); ?>
        </h5>
        <div class="merger-items__item-content-text">
          <?php the_field('merger_item_text-2'); ?>
        </div>
      </div>
    </div>
    <div class="merger-items__item">
      <div class="merger-items__item-picture">
        <?php 
          $image = get_field('merger_item_image-3');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'full', false, array( 
              'class' => 'merger-items__item-image',
            ) );
          }
        ?>
      </div>
      <div class="merger-items__item-content">
        <h5 class="merger-items__item-content-title">
        <?php the_field('merger_item_title-3'); ?>
        </h5>
        <div class="merger-items__item-content-text">
          <?php the_field('merger_item_text-3'); ?>
        </div>
      </div>
    </div>
    <div class="merger-items__item">
      <div class="merger-items__item-picture">
        <?php 
          $image = get_field('merger_item_image-4');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'full', false, array( 
              'class' => 'merger-items__item-image',
            ) );
          }
        ?>
      </div>
      <div class="merger-items__item-content">
        <h5 class="merger-items__item-content-title">
        <?php the_field('merger_item_title-4'); ?>
        </h5>
        <div class="merger-items__item-content-text">
          <?php the_field('merger_item_text-4'); ?>
        </div>
      </div>
    </div>
    <div class="merger-items__item">
      <div class="merger-items__item-picture">
        <?php 
          $image = get_field('merger_item_image-5');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], 'full', false, array( 
              'class' => 'merger-items__item-image',
            ) );
          }
        ?>
      </div>
      <div class="merger-items__item-content">
        <h5 class="merger-items__item-content-title">
        <?php the_field('merger_item_title-5'); ?>
        </h5>
        <div class="merger-items__item-content-text">
          <?php the_field('merger_item_text-5'); ?>
        </div>
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
<section class="page-merger__clauses-services container">
  <?php get_template_part('template-parts/block-clauses-services'); ?>
</section>
<?php get_footer(); ?>