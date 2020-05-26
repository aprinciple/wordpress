<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<div class="clauses-services">
  <h3 class="clauses-services__title">
    <?php the_field('clauses_services_title', $frontpage_id); ?>
  </h3>
  <div class="clauses-services__items">
    <div class="clauses-services__item">
      <h6 class="clauses-services__item-title">
        <?php the_field('clauses_services_item-1', $frontpage_id); ?>
      </h6>
      <a class="clauses-services__item-more" 
        href="<?php echo home_url(); ?>/services/business">
        <?php the_field('clauses_services_btn', $frontpage_id); ?>
      </a>
    </div>
    <div class="clauses-services__item">
      <h6 class="clauses-services__item-title">
        <?php the_field('clauses_services_item-2', $frontpage_id); ?>
      </h6>
      <a class="clauses-services__item-more" 
        href="<?php echo home_url(); ?>/services/merger">
        <?php the_field('clauses_services_btn', $frontpage_id); ?>
      </a>
    </div>
    <div class="clauses-services__item">
      <h6 class="clauses-services__item-title">
        <?php the_field('clauses_services_item-3', $frontpage_id); ?>
      </h6>
      <a class="clauses-services__item-more" 
        href="<?php echo home_url(); ?>/services/corporate">
        <?php the_field('clauses_services_btn', $frontpage_id); ?>
      </a>
    </div>
    <div class="clauses-services__item">
      <h6 class="clauses-services__item-title">
        <?php the_field('clauses_services_item-4', $frontpage_id); ?>
      </h6>
      <a class="clauses-services__item-more" 
        href="<?php echo home_url(); ?>/services/investing">
        <?php the_field('clauses_services_btn', $frontpage_id); ?>
      </a>
    </div>
    <div class="clauses-services__item">
      <h6 class="clauses-services__item-title">
        <?php the_field('clauses_services_item-5', $frontpage_id); ?>
      </h6>
      <a class="clauses-services__item-more" 
        href="<?php echo home_url(); ?>/services/design">
        <?php the_field('clauses_services_btn', $frontpage_id); ?>
      </a>
    </div>
  </div>
</div>