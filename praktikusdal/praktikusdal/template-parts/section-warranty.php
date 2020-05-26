<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div id="warranty" class="warranty">
  <div class="warranty__container container">
    <h3 class="warranty__title title-section">
      <?php the_field('warranty_title', $frontpage_id); ?>
    </h3>
    <ul class="warranty__list">
      <li class="warranty__list-item">
        <?php the_field('warranty_list_item-1', $frontpage_id); ?>
      </li>
      <li class="warranty__list-item">
        <?php the_field('warranty_list_item-2', $frontpage_id); ?>
      </li>
      <li class="warranty__list-item">
        <?php the_field('warranty_list_item-3', $frontpage_id); ?>
      </li>
      <li class="warranty__list-item">
        <?php the_field('warranty_list_item-4', $frontpage_id); ?>
      </li>
      <li class="warranty__list-item">
        <?php the_field('warranty_list_item-5', $frontpage_id); ?>
      </li>
      <li class="warranty__list-item">
        <?php the_field('warranty_list_item-6', $frontpage_id); ?>
      </li>
    </ul>
    <div class="warranty__text">
      <?php the_field('warranty_text', $frontpage_id); ?>
    </div>
    <div class="warranty__footer">
      <div class="warranty__footer-item">
        <h5 class="warranty__footer-title">
          Гарантия возврата денежных средств
        </h5>
        <img 
          class="warranty__footer-image" 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/medal.svg" 
          width="148" height="207" 
          alt="Гарантия возврата денежных средств">
      </div>
      <div class="warranty__footer-item">
        <h5 class="warranty__footer-title">
          Доверие
        </h5>
        <img 
          class="warranty__footer-image" 
          src="<?php echo get_template_directory_uri(); ?>/assets/img/trust.svg" 
          width="162" height="142" 
          alt="Доверие">
      </div>
    </div>
  </div>
</div>