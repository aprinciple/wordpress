<?php 
/*
Template name: Страница - каталог
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg">
    <img class="mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content small-page">
    <div class="container">
      <?php the_post(); ?>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
          <div class="subhead"></div>
        </div>
      </div>
      <div class="row">
        <?php 
          $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'order'          => 'DESC',
          );

          $parent = new WP_Query( $args );

          if ( $parent->have_posts() ) : ?>

            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="catalog-preview">
                <a class="catalog-preview__wrapper" href="<?php the_permalink() ?>">
                  <?php 
                    $image = get_field('post_img_light');
                  ?>
                    <?php 
                      if ( $image ):
                        ?>

                        <img 
                          class="catalog-preview__image"
                          src="<?php echo $image['url']; ?>"
                          onmouseover="darkImage(this)" onmouseleave="lightImage(this)"
                          alt="Alt">
                          
                        <?php
                        endif;
                      ?>
                </a>
                <p>
                  <?php the_title(); ?>
                </p>
              </div>
            </div>
            <?php endwhile; ?>

          <?php endif; wp_reset_query(); ?>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_template_part('template-parts/footer-page-catalog'); ?>