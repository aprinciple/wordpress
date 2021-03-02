<?php get_template_part('template-parts/header-post'); ?>
<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<?php the_post(); ?>
<div class="post-project-promo">
  <div class="post-project-promo__wrapper container">
    <div class="post-project-promo__content">
      <h1 class="post-project-promo__title">
        <?php the_title(); ?>
      </h1>
      <div class="post-project-promo__text">
        <?php the_content(); ?>
      </div>
    </div>
    <picture class="post-project-promo__picture">
      <?php if ( has_post_thumbnail()) { ?>
        <?php the_post_thumbnail('post-project', 
          array(
            'class' => "post-project-promo__image",
          )); ?>
      <?php } ?>
    </picture>
  </div>
</div>

<main class="page-post-project__main container">
  <div class="post-project-info">
    <div class="post-project-info__item">
      <h6 class="post-project-info__title">
        <?php the_field('post_project_result', $frontpage_id); ?>
      </h6>
      <p class="post-project-info__text">
        <?php the_field('post_info_result'); ?>
      </p>
    </div>
    <div class="post-project-info__item">
      <h6 class="post-project-info__title">
        <?php the_field('post_project_client', $frontpage_id); ?>
      </h6>
      <p class="post-project-info__text">
        <?php the_field('post_info_client'); ?>
      </p>
    </div>
    <div class="post-project-info__item">
      <h6 class="post-project-info__title">
        <?php the_field('post_project_industry', $frontpage_id); ?>
      </h6>
      <p class="post-project-info__text">
        <?php the_field('post_info_industry'); ?>
      </p>
    </div>
  </div>
  <article class="post-project-article">
    <ul class="post-project-article__nav">
      <li class="post-project-article__nav-item">
        <span class="post-project-article__nav-num">01</span>
        <a class="post-project-article__nav-link" href="#situation">
          <?php the_field('post_project_situation', $frontpage_id); ?>
        </a>
      </li>
      <li class="post-project-article__nav-item">
        <span class="post-project-article__nav-num">02</span>
        <a class="post-project-article__nav-link" href="#solution">
          <?php the_field('post_project_solution', $frontpage_id); ?>
        </a>
      </li>
      <li class="post-project-article__nav-item">
        <span class="post-project-article__nav-num">03</span>
        <a class="post-project-article__nav-link" href="#result">
          <?php the_field('post_project_result', $frontpage_id); ?>
        </a>
      </li>
    </ul>

    <div class="post-project-article__sections">
      <section class="post-project-article__section">
        <span id="situation" class="post-project-article__id"></span>
        <h2 class="post-project-article__section-title">
          <span class="post-project-article__section-num">01</span>
          <?php the_field('post_project_situation', $frontpage_id); ?>
        </h2>
        <div class="post-project-article__section-text">
          <?php the_field('post_situation'); ?>
        </div>
      </section>
      <section class="post-project-article__section">
        <span id="solution" class="post-project-article__id"></span>
        <h2 class="post-project-article__section-title">
          <span class="post-project-article__section-num">02</span>
          <?php the_field('post_project_solution', $frontpage_id); ?>
        </h2>
        <div class="post-project-article__section-text">
          <?php the_field('post_solution'); ?>
        </div>
      </section>
      <section class="post-project-article__section">
        <span id="result" class="post-project-article__id"></span>
        <h2 class="post-project-article__section-title">
          <span class="post-project-article__section-num">03</span>
          <?php the_field('post_project_result', $frontpage_id); ?>
        </h2>
        <div class="post-project-article__section-text">
          <?php the_field('post_result'); ?>
        </div>
      </section>
    </div>
  </article>
  <div class="post-project-tags">
    <?php if( get_field('post_tag_1_text') ): ?>
      <a class="post-project-tags__item" 
        href="<?php echo home_url(); ?>/services/<?php the_field('post_tag_1_link'); ?>">
        <?php the_field('post_tag_1_text'); ?>
      </a>
    <?php endif; ?>
    <?php if( get_field('post_tag_2_text') ): ?>
      <a class="post-project-tags__item" 
        href="<?php echo home_url(); ?>/services/<?php the_field('post_tag_2_link'); ?>">
        <?php the_field('post_tag_2_text'); ?>
      </a>
    <?php endif; ?>
    <?php if( get_field('post_tag_3_text') ): ?>
      <a class="post-project-tags__item" 
        href="<?php echo home_url(); ?>/services/<?php the_field('post_tag_3_link'); ?>">
        <?php the_field('post_tag_3_text'); ?>
      </a>
    <?php endif; ?>
    <?php if( get_field('post_tag_4_text') ): ?>
      <a class="post-project-tags__item" 
        href="<?php echo home_url(); ?>/services/<?php the_field('post_tag_4_link'); ?>">
        <?php the_field('post_tag_4_text'); ?>
      </a>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>