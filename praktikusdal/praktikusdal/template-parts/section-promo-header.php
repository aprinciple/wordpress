<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div class="promo-header">
  <div class="promo-header__container container">
    <div class="promo-header__wrapper">
      <h1 class="promo-header__title">
        <?php the_field('header_promo_title', $frontpage_id); ?>
      </h1>
      <p class="promo-header__text">
        <?php the_field('header_promo_text', $frontpage_id); ?>
      </p>
      <div class="promo-header__form">
        <?php echo do_shortcode( '[form_request]' ) ?>
      </div>
    </div>
  </div>
</div>