<?php 
/**
 * Template name: Home
 */
get_header();
?>
<?php get_template_part('template-parts/header-index'); ?>
<main>
  <div class="services">
    <div class="container">
      <div class="services__inner">
        <h2 
          class="services__title"
          data-san="fade-in-left"
        >
          <?php the_field('part_title'); ?>
        </h2>
        <div
          data-san="fade-in-bottom"
          data-san-delay="200"
        >
          <?php the_field('part_text'); ?>
        </div>
      </div>
      <div class="services__cards">
      <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 6,
        );
        $loop = new WP_Query( $args );
      ?>
      <?php
        if( $loop->have_posts() ) {
          while( $loop->have_posts() ) {
            $loop->the_post();
            ?>
            <a 
              class="card services__card" 
              data-san="fade-in-bottom"
              data-san-delay="100"
              href="<?php the_permalink(); ?>"
            >
              <figure class="card__figure">
                <?php 
                  $image = get_field('intro_img');
                  if( $image ) {
                    echo wp_get_attachment_image( $image['id'], '', false, array( 
                      'class' => 'card__image',
                    ) );
                  }
                ?>
              </figure>
              <div class="card__content">
                <h6 class="card__title"><?php the_title(); ?></h6>
                <div class="card__text">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </a>
            <?php
          }
          wp_reset_postdata();
        } 
      ?>
        <span class="services__cap"></span>
      </div>
    </div>
  </div>
  <div class="customers">
    <div class="container">
      <h2 class="customers__title" data-san="fade-in-left">
        <?php the_field('cust_title'); ?>
      </h2>
      <div class="customers__items">
        <?php 
          $counter = 1;
          while ($counter < 9):
            $logos = get_field('cust_logos');
            $field_logo = 'cust_logo_' . $counter;
            $logo = $logos[$field_logo];
          
            if ($logo) : ?>
              <div class="customers__item">
                <?= 
                  wp_get_attachment_image( $logo['id'], 'medium', false, array( 
                    'class' => 'customers__item-image',
                  ) );
                ?>
              </div>
        <?php
            endif; 
            $counter++;
          endwhile;
        ?>
      </div>
      <div class="customers__buttons">
        <a 
          class="button" 
          data-san="fade-in-bottom"
          href="<?php the_field('cust_btn_link'); ?>"
        >
          <div class="button__wrapper button__wrapper--transparent">
            <span class="button__text"><?php the_field('cust_btn_txt'); ?></span>
          </div>
        </a>
        <a 
          class="button" 
          data-san="fade-in-top"
          data-san-delay="200" 
          href="<?php the_field('cust_btn_link_2'); ?>"
        >
          <div class="button__wrapper button__wrapper--transparent">
            <span class="button__text"><?php the_field('cust_btn_txt_2'); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="standards">
    <div class="container">
      <div class="standards__content">
        <h2 class="standards__title" data-san="fade-in-left">
          <?php the_field('asme_title'); ?>
        </h2>
        <div
          data-san="fade-in-bottom"
          data-san-delay="200"
        >
          <?php the_field('asme_text'); ?>
        </div>
      </div>
      <div class="standards__items">
        <?php 
          $counter = 1;
          while ($counter < 6):
            $logos = get_field('asme_logos');
            $field_logo = 'asme_logo_' . $counter;
            $logo = $logos[$field_logo];
        ?>
        <?php if ($logo) : ?>
            <?= 
              wp_get_attachment_image( $logo['id'], 'medium', false, array( 
                'class' => 'standards__item',
              ) );
            ?>
        <?php endif; ?>
        <?php
            $counter++;
          endwhile;
        ?>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/talk'); ?>
</main>
<?php get_footer(); ?>