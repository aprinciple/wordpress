<?php get_template_part('template-parts/header-contacts'); ?>
<main class="page-contacts__main container">
  <section class="contacts">
    <h4 class="contacts__title">
    <?php the_field('contacts_title'); ?>
    </h4>
    <h5 class="contacts__subtitle">
    <?php the_field('contacts_subtitle'); ?>
    </h5>
    <div class="contacts__item">
      <h6 class="contacts__item-title">
      <?php the_field('contacts_it_title'); ?>
      </h6>
      <?php the_field('contacts_it_text'); ?>
    </div>
    <div class="contacts__item">
      <h6 class="contacts__item-title"><?php the_field('contacts_ru_title'); ?></h6>
      <?php the_field('contacts_ru_title'); ?>
    </div>
    <a class="contacts__item contacts__email" href="mailto:<?php the_field('contacts_email'); ?>">
    <?php the_field('contacts_email'); ?>
    </a>
    <p class="contacts__item contacts__piva">
    <?php the_field('contacts_piva'); ?>
    </p>
  </section>
  <?php echo do_shortcode( '[form_contact]' ) ?>
</main>
<?php get_template_part('template-parts/block-alert'); ?>
<?php get_footer(); ?>