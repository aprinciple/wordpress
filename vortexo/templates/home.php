<?php 
/**
 * Template name: Главная
 */
get_header();
?>
<main>
  <div class="container">
    <div class="about">
      <h2 class="about__title" data-san="animate__fadeInLeft">
        <?php the_field('about_title'); ?>
      </h2>
      <p class="about__subtitle" data-san="animate__fadeInUp" data-san-delay="300">
        <?php the_field('about_subtitle'); ?>
      </p>
      <div class="about__items">
        <div class="about__item" data-san="animate__fadeInLeft">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_1'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_1'); ?>
          </p>
        </div>
        <div class="about__item" data-san="animate__fadeInRight" data-san-delay="300">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_2'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_2'); ?>
          </p>
        </div>
        <div class="about__item" data-san="animate__fadeInLeft" data-san-delay="600">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_3'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_3'); ?>
          </p>
        </div>
        <div class="about__item" data-san="animate__fadeInRight" data-san-delay="900">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_4'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_4'); ?>
          </p>
        </div>
        <div class="about__item" data-san="animate__fadeInLeft" data-san-delay="1200">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_5'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_5'); ?>
          </p>
        </div>
        <div class="about__item" data-san="animate__fadeInRight" data-san-delay="1500">
          <h3 class="about__item-title">
            <?php the_field('about_i_title_6'); ?>
          </h3>
          <p class="about__item-text">
            <?php the_field('about_i_txt_6'); ?>
          </p>
        </div>
      </div>
      <div class="about__cards">
        <div class="about__card" data-san="animate__fadeInUp">
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
        <div class="about__card" data-san="animate__fadeInUp" data-san-delay="300">
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
        <div class="about__card" data-san="animate__fadeInUp" data-san-delay="600">
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
      <h2 class="crm__title" data-san="animate__fadeInLeft">
        <?php the_field('crm_title'); ?>
      </h2>
      <img class="crm__image" src="<?= get_template_directory_uri(); ?>/assets/img/diagram.svg" alt="CRM Vortexo" />
      <p class="crm__text" data-san="animate__fadeInUp" data-san-delay="300">
        <?php the_field('crm_txt'); ?>
      </p>
    </div>
    <div class="package">
      <h2 class="package__title" data-san="animate__fadeInLeft">
        <?php the_field('package_title'); ?>
      </h2>
      <p class="package__subtitle" data-san="animate__fadeInUp" data-san-delay="300">
        <?php the_field('package_txt'); ?>
      </p>
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
          <span class="package__nav-item package__nav-item--active" data-san="animate__fadeInRight">
            <?php the_field('package_i_title_1'); ?>
          </span>
          <span class="package__nav-item" data-san="animate__fadeInRight" data-san-delay="300">
            <?php the_field('package_i_title_2'); ?>
          </span>
          <span class="package__nav-item" data-san="animate__fadeInRight" data-san-delay="600">
            <?php the_field('package_i_title_3'); ?>
          </span>
          <span class="package__nav-item" data-san="animate__fadeInRight" data-san-delay="900">
            <?php the_field('package_i_title_4'); ?>
          </span>
        </div>
      </div>
    </div>
    <div id="contacts" class="contacts">
      <div class="contacts__info">
        <h2 class="contacts__title" data-san="animate__fadeInLeft">Есть предложения?</h2>
        <a 
          class="button contacts__button" 
          href="tel:<?= str_replace([' ', '(', ')', '-'], '', get_field('phone')); ?>" 
          data-san="animate__fadeInUp" 
          data-san-delay="300"
        >
          Забронировать пробный период
        </a>
        <p class="contacts__text" data-san="animate__fadeIn" data-san-delay="600">
          Есть вопросы, напишите нам, и мы вам перезвоним
        </p>
        <ul class="contacts__list">
          <li class="contacts__item" data-san="animate__fadeInUp" data-san-delay="600">
            <a class="contacts__link" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
          </li>
          <li class="contacts__item" data-san="animate__fadeInUp" data-san-delay="900">
            <a 
              class="contacts__link" 
              href="tel:<?= str_replace([' ', '(', ')', '-'], '', get_field('phone')); ?>"
            >
              <?php the_field('phone'); ?>
            </a>
          </li>
          <li class="contacts__item" data-san="animate__fadeInUp" data-san-delay="1200">
            <?php the_field('address'); ?>
          </li>
        </ul>
      </div>
      <div class="contacts__map map">
        <iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.9467565436264!2d30.460052416088615!3d59.91643098186809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46962e1454c4d1cd%3A0x89ea2259ad03eff6!2z0YPQuy4g0JrQvtC70LvQvtC90YLQsNC5LCAxNyDQutC-0YDQv9GD0YEgMywg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsINCg0L7RgdGB0LjRjywgMTkzMzEz!5e0!3m2!1sru!2sua!4v1623419331977!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>