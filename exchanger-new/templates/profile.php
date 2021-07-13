<?php 
if( !defined( 'ABSPATH')){ exit(); }

/*
  Template Name: Личный кабинет
*/

get_header('theme');
?>
<main class="p-profile__main">
	<div class="container p-profile__wrapper">
    <div class="p-profile__item p-profile__item--form">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>				
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="p-profile__item p-profile__item--panel">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>