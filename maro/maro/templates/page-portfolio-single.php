<?php 
/*
Template name: Страница - Портфолио-пост
*/
?>
<?php get_header(); ?>
<div class="wrapper p-portfolio-single">
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
          <div class="subhead p-portfolio-single__tags">
            <?php global $post;
              if ( $post->post_parent ) { ?>
                <a href="<?php echo get_permalink( $post->post_parent ); ?>">
                <?php echo get_the_title( $post->post_parent ); ?>
                </a>
            <?php } ?>
            | <span><?php the_title(); ?></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
          <div class="more p-portfolio-single__content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_footer(); ?>