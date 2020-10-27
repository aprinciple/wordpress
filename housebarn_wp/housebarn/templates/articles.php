<?php 
/**
 * Template Name: Статьи
 */
get_header();
?>
<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<main class="p-subpage__main">
  <div class="p-subpage__breadcrumb">
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <div class="p-news__inner container">
    <h1 class="p-news__title main-title"><?php the_title(); ?></h1>
    <div class="p-news__cards">
    <?php
      $args = array(
        'posts_per_page' => -1,
        'category_name' => 'stati',
      );
      $loop = new WP_Query( $args );
    ?>
    <?php
      if( $loop->have_posts() ) {
        while( $loop->have_posts() ) {
          $loop->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="p-news__card">
            <article class="p-news__card-article">
              <figure class="p-news__card-figure">
                <?php 
                  $image = get_field('promo_img');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], '', false, array( 
                      'class' => 'p-news__card-image',
                    ) );
                  }
                ?>
              </figure>
              <h2 class="p-news__card-title"><?php the_title(); ?></h2>
            </article>
          </a>
          <?php
        }
        wp_reset_postdata();
      } 
    ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>