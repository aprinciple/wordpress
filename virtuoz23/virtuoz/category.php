<?php get_header(); ?>
<?php get_template_part( '/template-parts/breadcrumbs' ); ?>

<section class="section section-xl bg-default text-center">
  <div class="container">
    <div class="isotope-filters isotope-filters-horizontal">
    <button 
      class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" 
      data-custom-toggle="#isotope-1" 
      data-custom-toggle-hide-on-blur="true">
      <span class="icon fa fa-caret-down"></span>
      Фильтр
    </button>
      <ul class="isotope-filters-list" id="isotope-1">
        <?php 
          $this_cat = get_category( get_query_var( 'cat' ) );
          $cat_id = $this_cat->cat_ID;
          $parent = $this_cat->category_parent;

          if ( $parent == 0 ) {
            wp_list_categories(
              array(
                'show_option_none' => '',
                'child_of' => $cat_id,
                'title_li' => '',
                'order' => 'ASC',
                'hide_empty' => '0'
              )
            );
          } else {
              $link_parent = get_category_link( $parent );
              $name_parent = get_category( $parent );
              echo '<li><a href="'. $link_parent .'">'. $name_parent->name .'</a></li>';
              wp_list_categories(
                array(
                  'show_option_none' => '',
                  'child_of' => $parent,
                  'title_li' => '',
                  'order' => 'ASC',
                  'hide_empty' => '0'
                )
              );
          }
        ?>
      </ul>
    </div>
    <div class="row row-50 main-content" data-lightgallery="group">
      <?php if( have_posts() ) : ?> 
        <?php while( have_posts() ) : the_post(); ?>
          <div class="col-md-6 col-lg-4 main-content__item">
            <article class="thumbnail thumbnail-modern thumbnail-sm">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php 
                $thumbnail = wp_get_attachment_image_url( get_post_thumbnail_id(), 'post-thumbnail' );
                $thumbnail_full = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );
                $alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
              ?>
              <a
                class="thumbnail-modern-figure"
                href="<?= $thumbnail_full; ?>"
                data-lightgallery="item"
                ><img
                  src="<?= $thumbnail; ?>"
                  alt="<?= $alt ?>"
                  width="350"
                  height="290"
              /></a>
            <?php endif; ?>
              <div class="thumbnail-modern-caption">
                <h5 class="thumbnail-modern-title">
                  <a href=""><?php the_title(); ?></a>
                </h5>
                <!-- <p class="thumbnail-modern-subtitle"></p> -->
              </div>
            </article>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <nav class="pagination">
          <?php 
            echo paginate_links(
              array(
                'prev_next' => true,
              )
            );
          ?>
        </nav>

      <?php else : ?>
        <p>Нет примеров...</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>