<div class="objects-sale">
  <div class="objects-sale__wrapper container">
    <h2 class="objects-sale__title">
      <?= wpm_translate_string('[:it]Oggetti in vendita[:en]Objects for sale[:ru]Объекты на продажу'); ?>
    </h2>
    <div class="objects-sale__items">
      <?php
        $args = array(
          'orderby'   => 'date',
          'post_type' => 'objects',
          'posts_per_page' => 4
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
              <div class="objects-sale__item">
                <?php 
                  $photos = get_field('photos');
                  $photo = 'photo-1';
                  $image = $photos[$photo];
                
                  if ($image): ?>

                    <?= 
                      wp_get_attachment_image( $image['id'], '', false, array( 
                        'class' => 'objects-sale__item-image',
                      ) );
                    ?>

                <?php endif; ?>
                <div class="objects-sale__item-content">
                  <h3 class="objects-sale__item-title">
                    <?php the_title(); ?>
                  </h3>
                  <div class="objects-sale__item-text">
                    <?php the_excerpt(); ?>
                  </div>
                  <a 
                    class="objects-sale__item-link" 
                    href="<?php the_permalink(); ?>"
                  >
                    <?= wpm_translate_string('[:it]Dettagli[:en]More[:ru]Подробнее'); ?>
                  </a>
                </div>
              </div>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
      <span class="objects-sale__gap"></span>
    </div>
    <a 
      class="button button-arrow objects-sale__link" 
      href="<?= home_url('objects-for-sale'); ?>"
    >
      <span class="button-arrow__text">
        <?= wpm_translate_string('[:it]Tutti gli oggetti[:en]All objects[:ru]Все объекты'); ?>
      </span>
    </a>
  </div>
</div>