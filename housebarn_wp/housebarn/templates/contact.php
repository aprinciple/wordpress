<?php 
/**
 * Template Name: Контакты
 */
get_header();
?>
<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
  <main class="p-subpage__main">
    <div class="p-subpage__breadcrumb">
      <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>
    <div class="container p-contacts__inner">
      <div class="p-contacts__info">
        <div class="p-contacts__info-wrapper">
          <h1 class="main-title p-contacts__info-title"><?php the_title(); ?></h1>
          <div class="p-contacts__info-item">
            <?php the_field('address'); ?>
          </div>
          <p class="p-contacts__info-item">
            <b>По всем вопросам — звоните, на звонки отвечаем круглосуточно!</b>
          </p>
          <div class="p-contacts__info-item">
            <a 
              class="p-contacts__info-link" 
              href="tel:<?php the_field('phone_nf'); ?>"><?php the_field('phone'); ?></a>
            <a 
              class="p-contacts__info-link" 
              href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a>
          </div>
        </div>
        <p class="p-contacts__area">
          <b>Выставочная площадка:</b> <?php the_field('playground'); ?>
        </p>
        <div class="p-contacts__social">
          <h2 class="p-contacts__social-title">Housebarn в соц. сетях:</h2>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_vk'); ?>" 
            target="_blank">
            <?php the_field('soc_vk'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_fb'); ?>" 
            target="_blank">
            <?php the_field('soc_fb'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_im'); ?>" 
            target="_blank">
            <?php the_field('soc_im'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_gg'); ?>" 
            target="_blank">
            <?php the_field('soc_gg'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_ok'); ?>"
            target="_blank">
            <?php the_field('soc_ok'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_tw'); ?>" 
            target="_blank">
            <?php the_field('soc_tw'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_tr'); ?>" 
            target="_blank">
            <?php the_field('soc_tr'); ?>
          </a>
          <a 
            class="p-contacts__social-link" 
            href="https://<?php the_field('soc_fp'); ?>" 
            target="_blank">
            <?php the_field('soc_fp'); ?>
          </a>
        </div>
      </div>
      <div class="p-contacts__form">
        <?= do_shortcode('[contact-form-7 id="1237" title="Контактная форма" html_class="form"]'); ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>