<?php 
/*
Template name: Страница - Портфолио-услуги
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg">
    <img class="mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
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
          <div class="subhead"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="services">
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
                  <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                  </a>
                <?php endwhile; ?>

            <?php endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_footer(); ?>