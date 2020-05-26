<?php 
/*
Template name: Страница - Портфолио-каталог
*/
?>
<?php get_header(); ?>
<div class="wrapper p-portfolio">
  <div class="bg">
    <img class="mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container page-portfolio">
      <div class="row">
        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
          <div class="head">
            <h2>
              <?php if ( 0 == $post->post_parent ) {
                the_title();
              } else {
                  $parents = get_ancestors( $post->ID, 'page', 'post_type' );
                  echo esc_html( get_the_title( end($parents) ) );
              } ?>
            </h2>
            <a 
              href="<?php echo esc_url( home_url( '/companies' ) ); ?>">
              компании
            </a> | 
            <a 
              href="<?php echo esc_url( home_url( '/services' ) ); ?>">
              услуги
            </a>
          </div>
          <div class="subhead">
            <?php the_title(); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="service">
            <?php 
              $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'DESC',
                // 'orderby'        => 'menu_order'
              );

              $parent = new WP_Query( $args );

              if ( $parent->have_posts() ) : ?>

                <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                  <div class="portfolio-work">
                    <a href="<?php the_permalink() ?>">
                      <?php the_post_thumbnail(); ?>
                    </a>
                    <p>
                      <?php the_title(); ?>
                    </p>
                  </div>
                <?php endwhile; ?>

            <?php endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_footer(); ?>