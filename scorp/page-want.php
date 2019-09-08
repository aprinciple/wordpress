<?php get_header('want') ?>
<main class="page-want__main page-post">
    <div class="container page-want__container">
      <div class="projects">

        <div class="projects__search">
          <div class="projects__form">
            <?php get_search_form(); ?>
          </div>
          <a class="button projects__button" href="<?php echo home_url('add-project'); ?>">Добавить свой проект</a>
        </div>
        <div class="projects__items">
          <div class="projects__items-list">
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'posts_per_page' => 6,
              'order'          => 'ASC',
              'post_type'      => 'post-want',
              'paged'          => $paged
            );
            $loop = new WP_Query( $args );
          ?>
          <?php
            if( $loop->have_posts() ) {
              while( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                <a class="projects__item page-post__item" href="<?php the_permalink(); ?>">
                  <picture class="projects__item-image">
                    <?php the_post_thumbnail('post-project'); ?>
                  </picture>
                  <div class="projects__item-info">
                    <h5 class="projects__item-title"><?php the_title(); ?></h5>
                    <div class="projects__item-text">
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
  <?php get_footer('want'); ?>