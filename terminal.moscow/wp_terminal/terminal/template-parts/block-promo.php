<section class="pageInfo">
  <div class="wrapper">
    <div class="pageInfo-img">
      <?php 
        $image = get_field('promo_image');
        if( $image ) {
          echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
            'class' => 'pageInfo-img__image',
          ) );
        }
      ?>
    </div>
    <div class="pageInfo-descr">
      <h1 class="pageInfo-title">
      <?php the_field('promo_title'); ?>
      </h1>
      <?php the_field('promo_text'); ?>
    </div>
  </div>
</section>