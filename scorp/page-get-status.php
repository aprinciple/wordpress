<?php get_header('get-status'); ?>
<main class="page-status__main">
    <div class="container page-status__container">
      <h3 class="page-status__title">Получить статус изобретателя</h3>
      <?php echo do_shortcode( '[get_status_form]' ) ?>
    </div>
  </main>
  <?php get_footer('get-status'); ?>