<?php get_header('get-status'); ?>
<main class="page-status__main">
  <div class="container page-status__container">
    <h3 class="page-status__title">Получить статус изобретателя</h3>
    <?php echo do_shortcode( '[get_status_form]' ) ?>
  </div>
  <div class="alert">
    <span class="alert__icon"></span>
    <p class="alert__message"></p>
    <button class="alert__close">
      <svg class="alert__close-icon">
        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-cancel"></use>
      </svg>
    </button>
  </div>
</main>
<?php show_response_mail(); ?>
<?php get_footer('get-status'); ?>