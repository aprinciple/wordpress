<?php get_header('add-project'); ?>
<main class="page-add-project__main">
  <div class="container page-add-project__container">
    <?php echo do_shortcode( '[add_project_form]' ) ?>
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
<?php get_footer('add-project'); ?>