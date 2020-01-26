<section class="selling block-padding">
  <div class="wrapper">
    <div class="selling-info">
      <h2 class="page-title">
      <?php the_field('sale_title'); ?>
      </h2>
      <?php the_field('sale_text'); ?>
    </div>
    <div class="selling-img">
      <?php 
        $image = get_field('sale_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false);
        }
      ?>
    </div>
  </div>
</section>