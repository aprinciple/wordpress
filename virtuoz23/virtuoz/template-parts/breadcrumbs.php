<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark">
    <div class="container">
      <h1 class="breadcrumbs-custom-title">
      <?php 
        if( is_category() ) {
          if( single_cat_title() ) echo single_cat_title();
        }
        if( is_page() ) {
          the_title();
        }
        if( is_tax() ) {
          $current_tax_name = get_queried_object()->name;
          echo $current_tax_name;
        }
      ?>
      </h1>
      <div class="breadcrumbs-custom-path">
        <?php the_breadcrumb(); ?>
      </div>
    </div>
    <div
      class="box-position"
      style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/images/bg-breadcrumbs.jpg');"
    ></div>
  </div>
</section>