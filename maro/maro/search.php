<?php get_header(); ?>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-12 page-search__content">
          <h1 class="page-search__title">Результаты поиска: <?php the_search_query(); ?></h1>
          <?php
              $search_query = mb_strtolower( get_search_query() );
              $page = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
              $args = array(
                'post_type' => 'page',
                'posts_per_page' => 4,
                'paged'          => $page,
                's' => $search_query
              );
              $loop = new WP_Query( $args );
            ?>
            <?php
              if( $loop->have_posts() ) {
                while( $loop->have_posts() ) {
                  $loop->the_post();
                ?>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 page-search__item">
                    <div class="page-search__post-title head">
                      <h2>
                        <?php the_title(); ?>
                      </h2>
                    </div>
                    <a class="page-search__item-figure" href="<?php the_permalink(); ?>">
                      <?php
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'full', array() );
                          } elseif ( get_field('post_img_light') ) {
                            $image = get_field('post_img_light');
                            if( $image ) {
                              echo wp_get_attachment_image( $image['id'], 'full', false, array() );
                            }
                          } else {
                            echo '<b>Нет картинки</b>';
                          }
                      ?>
                    </a>
                  </div>
                <?php
                }
                wp_reset_postdata();
              } else {
                echo 'Ничего не найдено.';
              }
            ?>

        </div>

      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer') ?>
<?php get_footer(); ?>