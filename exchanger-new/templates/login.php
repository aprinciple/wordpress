<?php 
if( !defined( 'ABSPATH')){ exit(); }

/*
  Template Name: Логин / регистрация
*/

get_header('theme');
?>
<main class="p-login__main">
	<div class="container">
    <div class="p-login__wrapper">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>				
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer('theme'); ?>