<div class="best-projects">
  <div class="best-projects__container container">
    <?php 
      $image = get_field('projects_image');
      if( $image ) {
        echo wp_get_attachment_image( $image['id'], 'full', false, array( 
          'class' => 'best-projects__image',
        ) );
      }
    ?>
    <h3 class="best-projects__title">
      <?php the_field('projects_title'); ?>
    </h3>
    <div class="best-projects__text">
      <?php the_field('projects_text'); ?>
    </div>
    <a 
      class="best-projects__button button button-arrow" 
      href="<?php echo home_url(); ?>/projects">
      <span class="button-arrow__text">
      <?php echo wpm_translate_string('[:it]Maggiori dettagli[:en]To learn more[:ru]Узнать больше'); ?>
      </span>
    </a>
  </div>
</div>

