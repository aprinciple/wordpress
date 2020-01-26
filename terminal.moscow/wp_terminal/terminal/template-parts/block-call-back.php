<section class="callBack callBack-big">
  <div class="wrapper">
    <div class="callBack-info">
      <h2 class="page-title">
      <?php the_field('callback_title'); ?>
      </h2>
      <?php the_field('callback_text'); ?>
    </div>
    <div class="callBack-form">
      <?php echo do_shortcode( '[form_leave]' ) ?>
    </div>
  </div>
</section>
<div class="mob-link">
  <a href="#modal-form" class="button-modal main-btn">Заказать звонок</a>
</div>