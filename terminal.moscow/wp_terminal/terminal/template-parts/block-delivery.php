<section class="delivery">
  <div class="wrapper">
    <div class="delivery-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery.jpg" alt="Доставка">
    </div>
    <div class="delivery-descr">
      <h2 class="page-title">
      <?php the_field('delivery_title'); ?>
      </h2>
      <h4 class="delivery-subtitle">
      <?php the_field('delivery_subtitle'); ?>
      </h4>
      <?php the_field('delivery_text'); ?>
      <a href="#modal-form" class="button-modal main-btn">Заказать доставку</a>
    </div>
  </div>
</section>