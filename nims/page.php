<?php 
  get_header();
  the_post();
?>
  <?php get_template_part('template-parts/header-page'); ?>
  <main>
    <div class="p-post__intro">
      <div class="container p-post__intro-wrapper">
        <div class="p-post__intro-content">
          <h2 class="p-post__intro-title"><?php the_field('intro_title'); ?></h2>
          <?php the_field('intro_text'); ?>
        </div>
        <figure class="p-post__intro-figure">
          <?php 
              $image = get_field('intro_img');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], '', false, array( 
                  'class' => 'p-post__intro-image',
                ) );
              }
            ?>
        </figure>
      </div>
    </div>
    <div class="p-post__content">
      <div class="container">
        <article class="p-post__article">
          <?php the_field('post_text'); ?>
        </article>
      </div>
    </div>
    <?php get_template_part('template-parts/talk-subpage'); ?>
  </main>
<?php get_footer(); ?>