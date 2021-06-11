<?php 
/**
 * Template name: Главная
 */
get_header();
?>
<main>
  <div class="container">
    <div class="about">
      <h2 class="about__title">
        <?php the_field('about_title'); ?>
      </h2>
      <p class="about__subtitle">
        <?php the_field('about_subtitle'); ?>
      </p>
      <div class="about__items">
        <div class="about__item">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_1'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_1'); ?>
          </p>
        </div>
        <div class="about__item">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_2'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_2'); ?>
          </p>
        </div>
        <div class="about__item">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_3'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_3'); ?>
          </p>
        </div>
        <div class="about__item">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_4'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_4'); ?>
          </p>
        </div>
        <div class="about__item">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_5'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_5'); ?>
          </p>
        </div>
        <div class="about__item">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_6'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_6'); ?>
          </p>
        </div>
      </div>
      <div class="about__cards">
        <div class="about__card">
          <?php 
            $image = get_field('about_c_img_1');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], '', false, array( 
                'class' => 'about__card-image',
              ) );
            }
          ?>
          <h3 class="about__card-title"><?php the_field('about_c_title_1'); ?></h3>
          <p class="about__card-text"><?php the_field('about_c_txt_1'); ?></p>
        </div>
        <div class="about__card">
          <?php 
            $image = get_field('about_c_img_2');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], '', false, array( 
                'class' => 'about__card-image',
              ) );
            }
          ?>
          <h3 class="about__card-title"><?php the_field('about_c_title_2'); ?></h3>
          <p class="about__card-text"><?php the_field('about_c_txt_2'); ?></p>
          <!-- <a class="about__card-link" href="#">Ссылка на видео на сайте</a> -->
        </div>
        <div class="about__card">
          <?php 
            $image = get_field('about_c_img_3');
            if( $image ) {
              echo wp_get_attachment_image( $image['id'], '', false, array( 
                'class' => 'about__card-image',
              ) );
            }
          ?>
          <h3 class="about__card-title"><?php the_field('about_c_title_3'); ?></h3>
          <p class="about__card-text"><?php the_field('about_c_txt_3'); ?></p>
        </div>
      </div>
    </div>
    <div class="crm">
      <h2 class="crm__title">
        <?php the_field('crm_title'); ?>
      </h2>
      <img class="crm__image" src="<?= get_template_directory_uri(); ?>/assets/img/diagram.svg" alt="CRM Vortexo" />
      <p class="crm__text"><?php the_field('crm_txt'); ?></p>
    </div>
    <div class="package">
      <h2 class="package__title"><?php the_field('package_title'); ?></h2>
      <p class="package__subtitle"><?php the_field('package_txt'); ?></p>
      <div class="package__slider">
        <div class="package__items">
          <div class="package__item">
            <h4 class="package__item-title"><?php the_field('package_i_title_1'); ?></h4>
            <?php 
              $image = get_field('package_i_img_1');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], '', false, array( 
                  'class' => 'package__image',
                ) );
              }
            ?>
          </div>
          <div class="package__item">
            <h4 class="package__item-title"><?php the_field('package_i_title_2'); ?></h4>
            <?php 
              $image = get_field('package_i_img_2');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], '', false, array( 
                  'class' => 'package__image',
                ) );
              }
            ?>
          </div>
          <div class="package__item">
            <h4 class="package__item-title"><?php the_field('package_i_title_3'); ?></h4>
            <?php 
              $image = get_field('package_i_img_3');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], '', false, array( 
                  'class' => 'package__image',
                ) );
              }
            ?>
          </div>
          <div class="package__item">
            <h4 class="package__item-title"><?php the_field('package_i_title_4'); ?></h4>
            <?php 
              $image = get_field('package_i_img_4');
              if( $image ) {
                echo wp_get_attachment_image( $image['id'], '', false, array( 
                  'class' => 'package__image',
                ) );
              }
            ?>
          </div>
          <span class="package__item-cap"></span>
        </div>
        <div class="package__nav">
          <span class="package__nav-item package__nav-item--active">
            <?php the_field('package_i_title_1'); ?>
            </span>
          <span class="package__nav-item">
            <?php the_field('package_i_title_2'); ?>
          </span>
          <span class="package__nav-item">
            <?php the_field('package_i_title_3'); ?>
          </span>
          <span class="package__nav-item">
            <?php the_field('package_i_title_4'); ?>
          </span>
        </div>
      </div>
    </div>
    <div id="contacts" class="contacts">
      <div class="contacts__info">
        <h2 class="contacts__title">Есть предложения?</h2>
        <a class="button contacts__button" href="tel:<?= str_replace([' ', '(', ')', '-'], '', get_field('phone')); ?>">
          Забронировать пробный период
        </a>
        <p class="contacts__text">
          Есть вопросы, напишите нам, и мы вам перезвоним
        </p>
        <ul class="contacts__list">
          <li class="contacts__item">
            <a class="contacts__link" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
          </li>
          <li class="contacts__item">
            <a 
              class="contacts__link" 
              href="tel:<?= str_replace([' ', '(', ')', '-'], '', get_field('phone')); ?>"
            >
              <?php the_field('phone'); ?>
            </a>
          </li>
          <li class="contacts__item"><?php the_field('address'); ?></li>
        </ul>
      </div>
      <div class="contacts__map map"><?php the_field('map'); ?></div>
    </div>
  </div>
</main>
<?php get_footer(); ?>