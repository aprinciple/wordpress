<?php get_header(); ?>
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark">
    <div class="container">
      <h1 class="breadcrumbs-custom-title"><?php the_title(); ?></h1>
      <div class="breadcrumbs-custom-path">
        <?php the_breadcrumb(); ?>
      </div>
    </div>
    <div
      class="box-position"
      style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/images/bg-breadcrumbs.jpg');"
    ></div>
  </div>
</section>

<section class="section section-xl bg-default text-center">
  <div class="container">
    <?php the_content(); ?>
    <h1>DEFAULT!</h1>
  </div>
</section>

<?php get_footer(); ?>