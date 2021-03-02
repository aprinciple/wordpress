<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<?php get_template_part('template-parts/header-post'); ?>
  <main class="base-page container">
    <h1 class="base-page__title"><?php the_title(); ?></h1>
    <div class="base-page__content">
      <?php the_content(); ?>
    </div>
  </main>
<?php get_footer(); ?>