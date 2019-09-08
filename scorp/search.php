<?php get_header(); ?>
  <main class="page-can__main page-post page-search">
    <div class="container page-can__container">
      <div class="projects-can">
        <h1 class="page-search__title">
          <?php 
            echo 'Результат поиска: ' . get_search_query(); 
          ?>
        </h1>
        <div class="projects-can__items">
          <?php
            $search_query = mb_strtolower(get_search_query());

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'posts_per_page' => 4,
              'order'          => 'ASC',
              // 'post_type'      => 'post',
              's'              => $search_query,
              'paged'          => $paged
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                <a class="projects-can__item page-post__item" href="<?php the_permalink(); ?>">
                  <picture class="projects-can__item-image">
                    <?php the_post_thumbnail('post-project'); ?>
                  </picture>
                  <div class="projects-can__item-info">
                    <h5 class="projects-can__item-title"><?php the_title(); ?></h5>
                    <div class="projects-can__item-text">
                      <?php the_excerpt() ?>
                    </div>
                  </div>
                </a>
                <?php
              } 
            } else {
              echo 'Ничего не найдено :(';
            }
            wp_reset_postdata();
          ?>
        </div>
        <nav class="pagination">
          <?php
            $big = 99999;
            echo paginate_links( array(
              'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $loop->max_num_pages,
              'prev_text' => '&laquo;',
              'next_text' => '&raquo;'
            ) );
          ?>
        </nav>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>