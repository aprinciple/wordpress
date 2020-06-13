<?php 
/*
Template name: Страница - каталог
*/
get_header();
?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <?= do_shortcode( '[form_callback]' ); ?>
  <section class="content">
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
              <div class="catalog-preview">
                <a class="catalog-preview__wrapper" href="<?php the_permalink() ?>">
                  <?php 
                    $image = get_field('post_img_light');
                    if ($image) {
                      ?>
                        <?= wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'catalog-preview__image catalog-preview__image--light',
                            ) ); 
                        ?>
                      <?php
                    }
                  ?>

                  <?php 
                    $image = get_field('post_img_dark');
                    if ($image) {
                      ?>
                        <?= wp_get_attachment_image( $image['id'], '', false, array( 
                              'class' => 'catalog-preview__image catalog-preview__image--dark',
                            ) ); 
                        ?>
                      <?php
                    }
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
<?php get_footer(); ?>