<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<div class="team-referral">
  <div class="team-referral__container container">
    <h2 class="team-referral__title"><?php the_field('referral_team_title', $frontpage_id); ?></h2>
    <div class="team-referral__items">
    <?php
      $current_page;
      if( is_page('corporate') ) {
        $current_page = 'corporate';
      }
      if( is_page('business') ) {
        $current_page = 'business';
      }
      if( is_page('investing') ) {
        $current_page = 'investing';
      }
      if( is_page('merger') ) {
        $current_page = 'merger';
      }
      if( is_page('design') ) {
        $current_page = 'design';
      }

      $args = array(
        'order'          => 'ASC',
        'post_type'      => 'post-referral',
        'tax_query' => array(
          array(
            'taxonomy' => 'referral',
            'field'    => 'slug',
            'terms'    => $current_page
            )
          ),
      );
      $loop = new WP_Query( $args );
    ?>
    <?php
      if( $loop->have_posts() ) {
        while( $loop->have_posts() ) {
          $loop->the_post();
          ?>
          <article class="team-referral__item">
            <h4 class="team-referral__item-title">
              <?php the_field('referral_name'); ?>
            </h4>
            <div class="team-referral__item-text">
            <?php the_field('referral_position'); ?>
            </div>
            <span class="team-referral__item-agency">
            <?php the_field('referral_location'); ?>
            </span>
          </article>
          <?php
        }
        wp_reset_postdata();
      } 
    ?>
    </div>
  </div>
</div>