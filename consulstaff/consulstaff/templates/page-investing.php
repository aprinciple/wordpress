<?php get_template_part('template-parts/header-investing'); ?>
<section class="promo-post page-investing__promo-post">
  <div class="promo-post__container container">
    <div class="promo-post__item promo-post__item-text">
      <h1 class="promo-post__title page-investing__promo-post-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <h3 class="promo-post__subtitle">
      <?php the_field('promo_subtitle'); ?>
      </h3>
      <?php the_field('promo_text'); ?>
    </div>
    <div class="promo-post__item page-investing__promo-post-item-picture">
    <?php 
      $image = get_field('promo_image');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
          'class' => 'page-investing__promo-post-item-picture-image',
        ) );
      }
    ?>
    </div>
  </div>
</section>
<main class="page-investing__main container">
  <section class="page-investing__post page-investing__post-plan">
    <article class="page-investing__article page-investing__post-plan-article">
      <h3 class="page-investing__article-title">
      <?php the_field('plan_title'); ?>
      </h3>
      <div class="page-investing__article-content">
        <?php the_field('plan_text'); ?>
        <p class="page-investing__article-text">
        <?php the_field('plan_paragraph'); ?>
        </p>
      </div>
    </article>
    <div class="page-investing__post-picture page-investing__post-plan-picture">
    <?php 
      $image = get_field('plan_image');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
          'class' => 'page-investing__post-image',
        ) );
      }
    ?>
    </div>
  </section>
  <section class="page-investing__post page-investing__post-fund">
    <article class="page-investing__article page-investing__post-fund-article">
      <h3 class="page-investing__article-title">
      <?php the_field('fund_title'); ?>
      </h3>
      <?php the_field('fund_text'); ?>
    </article>
    <div class="page-investing__post-picture page-investing__post-fund-picture">
    <?php 
      $image = get_field('fund_image');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
          'class' => 'page-investing__post-image',
        ) );
      }
    ?>
    </div>
  </section>
  <section class="page-investing__post page-investing__post-flows">
    <article class="page-investing__article page-investing__article--bordered page-investing__post-flows-article">
      <h3 class="page-investing__article-title">
      <?php the_field('flows_title'); ?>
      </h3>
      <?php the_field('flows_text'); ?>
    </article>
    <div class="page-investing__post-picture page-investing__post-flows-picture">
    <?php 
      $image = get_field('flows_image');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
          'class' => 'page-investing__post-image',
        ) );
      }
    ?>
    </div>
  </section>
  <section class="page-investing__post page-investing__post-investments">
    <article class="page-investing__article page-investing__post-investments-article">
      <h3 class="page-investing__article-title page-investing__post-investments-title">
      <?php the_field('investments_title'); ?>
      </h3>
      <div class="page-investing__article-text page-investing__post-investments-text">
      <?php the_field('investments_text'); ?>
      </div>
    </article>
  </section>
  <section class="page-investing__post page-investing__post-search">
    <div class="page-investing__post-picture page-investing__post-search-picture">
      <?php 
        $image = get_field('search_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'page-investing__post-image',
          ) );
        }
      ?>
    </div>
    <article class="page-investing__article page-investing__article--bordered page-investing__post-search-article">
      <h3 class="page-investing__article-title">
      <?php the_field('search_title'); ?>
      </h3>
      <?php the_field('search_text'); ?>
      <?php the_field('search_list'); ?>
      <?php the_field('search_paragraph'); ?>
    </article>
  </section>
  <section class="page-investing__post page-investing__post-valuation">
    <div class="page-investing__post-picture page-investing__post-valuation-picture">
      <?php 
        $image = get_field('valuation_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'page-investing__post-image',
          ) );
        }
      ?>
    </div>
    <article class="page-investing__article page-investing__article--bordered page-investing__post-valuation-article">
      <h3 class="page-investing__article-title">
      <?php the_field('valuation_title'); ?>
      </h3>
      <?php the_field('valuation_text'); ?>
      <?php the_field('valuation_list'); ?>
      <?php the_field('valuation_paragraph'); ?>
    </article>
  </section>
  <section class="page-investing__post page-investing__post-tax">
    <div class="page-investing__post-picture page-investing__post-tax-picture">
      <?php 
        $image = get_field('tax_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'page-investing__post-image',
          ) );
        }
      ?>
    </div>
    <article class="page-investing__article page-investing__article--bordered page-investing__post-tax-article">
      <h3 class="page-investing__article-title">
      <?php the_field('tax_title'); ?>
      </h3>
      <?php the_field('tax_text'); ?>
    </article>
  </section>
</main>
<section class="page-investing__projects">
  <?php get_template_part('template-parts/block-projects'); ?>
</section>
<section class="team-referral page-investing__team-referral">
  <?php get_template_part('template-parts/block-team-referral'); ?>
</section>
<?php get_footer(); ?>