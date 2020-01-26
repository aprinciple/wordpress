<?php the_post(); ?>
<div class="game-complexe game-complexes__item">
  <?php 
  $image = get_field('card_image');
  if( !empty( $image ) ): ?>
  <img class="game-complexe__image" src="<?php echo esc_url($image['url']); ?>"
    alt="<?php echo esc_attr($image['alt']); ?>" />
  <?php endif; ?>
  <div class="game-complexe__info">
    <div class="game-complexe__info-header">
      <h5 class="game-complexe__title"><?php the_field('card_title'); ?></h5>
      <span class="game-complexe__price"><?php the_field('card_price'); ?> руб.</span>
    </div>
    <div class="game-complexe__details">
      <h6 class="game-complexe__details-title game-complexe__details-toggle">
        Материалы и характеристики
      </h6>
      <div class="game-complexe__details-wrapper">
        <p class="game-complexe__details-text">
          <?php the_field('card_materials'); ?>
        </p>
        <h6 class="game-complexe__details-title">Характеристики</h6>
        <div class="card__features">
          <?php the_field('card_features'); ?>
        </div>
      </div>
    </div>
  </div>
</div>