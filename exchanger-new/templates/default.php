<?php 
if( !defined( 'ABSPATH')){ exit(); }

/*
  Template Name: Страница
*/

get_header('theme');
?>
<main class="page__main">
  <div class="container">
    <div class="p-default__wrapper">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>				
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="p-default__reviews">
      <?php get_template_part('template-parts/reviews'); ?>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>