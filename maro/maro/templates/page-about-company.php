<?php 
/*
Template name: Страница - О компании
*/
?>
<?php get_header(); ?>
<div class="wrapper">
  <div class="bg">
    <img class="mask" src="<?php echo get_template_directory_uri(); ?>/assets/img/backgrounds/bg-wave.svg" alt="Wave">
  </div>
  <?php get_template_part('template-parts/block-header-post') ?>
  <?php get_template_part('template-parts/catalog-nav') ?>
  <section class="content">
    <?php the_post(); ?>
    <div class="container">
      <div class="about">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>
              <?php the_field('about_title'); ?>
            </h3>
            <?php the_field('about_subtitle'); ?>
          </div>
        </div>
      </div>
      <div class="advantages">
        <div class="row">
          <div class="advantage">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/img/content/rab.png" 
              class="img_contain_width" 
              alt="Собственные монтажные бригады">
            <p>
              <?php the_field('about_benefit-1'); ?>
            </p>
          </div>
          <div class="advantage">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/img/content/calc.png" 
              class="img_contain_width" 
              alt="Рассчет вывески">
            <p>
              <?php the_field('about_benefit-2'); ?>
            </p>
          </div>
          <div class="advantage">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/img/content/clock.png" 
              class="img_contain_width" 
              alt="Срок изготовления">
            <p>
              <?php the_field('about_benefit-3'); ?>
            </p>
          </div>
          <div class="advantage">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/img/content/gear.png" 
              class="img_contain_width" 
              alt="Собственное производство">
            <p>
              <?php the_field('about_benefit-4'); ?>
            </p>
          </div>
          <div class="advantage">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/img/content/design.png" 
              class="img_contain_width" 
              alt="Дизайн макет в стиле unique">
            <p>
              <?php the_field('about_benefit-5'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="reviews">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h3>
              <?php the_field('thanks_title'); ?>
            </h3>
          </div>
        </div>
        <div class="row">
          <?php 
            $counter = 1;
            while ($counter < 11):
              $thanks_images = get_field('thanks_photo');
              $field_image = 'thanks_photo-' . $counter;
              $thanks_image = $thanks_images[$field_image];
            
              if ($thanks_image): 
                echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">'; 
                  echo wp_get_attachment_image( $thanks_image['id'], 'full', false, array( 
                      'class' => 'img_contain',
                    ) );
                echo '</div>';
              endif; 

              $counter++;
            endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/block-footer'); ?>
</div>
<?php get_footer(); ?>