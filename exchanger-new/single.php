<?php 
if( !defined( 'ABSPATH')){ exit(); }
get_header('theme');
?>
<main class="page__main">
	<div class="container page__wrapper">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="page__title"><?php the_title(); ?></h1>
        <?php the_content(); ?>				
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer('theme'); ?>