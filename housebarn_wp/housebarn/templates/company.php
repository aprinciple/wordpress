<?php 
/**
 * Template Name: О компании
 */
get_header();
?>
<main class="p-subpage__main">
  <div class="p-subpage__breadcrumb">
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <article class="p-post__intro">
    <div class="container p-post__intro-wrapper">
      <div class="p-post__intro-content">
        <h1 class="p-post__intro-title">
        <?php the_field('promo_title'); ?>
        </h1>
        <?php the_field('promo_txt'); ?>
      </div>
      <figure class="p-post__intro-figure">
        <?php 
          $image = get_field('promo_img');
          if( $image ) {
            echo wp_get_attachment_image( $image['id'], '', false, array( 
              'class' => 'p-post__intro-image',
            ) );
          }
        ?>
      </figure>
    </div>
  </article>
  <div class="p-post__content">
    <div class="container">
      <article class="p-post__article">
        <?php the_field('content'); ?>
      </article>
    </div>
  </div>
  <?php get_template_part('template-parts/gallery-long'); ?>
  <div class="talk p-post__talk">
    <div class="container">
      <?= do_shortcode('[contact-form-7 id="1236" title="Основная форма" html_class="form"]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>