<?php get_header('can'); ?>
<main class="page-can__main page-post">
    <div class="container page-can__container">
      <div class="projects-can">
        <!-- <h4 class="projects-can__title">Проекты</h4> -->

        <div class="projects-can__search">
          <div class="projects__form">
            <?php get_search_form(); ?>
          </div>
          <a class="button projects__button" href="<?php echo home_url('add-project'); ?>">Добавить свой проект</a>
        </div>

        <div class="projects-can__items">
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'posts_per_page' => 4,
              'order'          => 'ASC',
              'post_type'      => 'post-can',
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
              wp_reset_postdata();
            } 
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
  <?php get_footer('can'); ?>