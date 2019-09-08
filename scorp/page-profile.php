<?php get_header('profile'); ?>
  <main class="page-profile__main">
    <div class="container page-profile__container">
      <?php 
        if( current_user_can('manage_options') ){
          $link_admin = home_url('wp-admin/index.php');
          echo "<a class='link-admin' href='$link_admin' target='_blank'>Админка</a>";
        }
      ?>
      <?php echo do_shortcode( '[profile_form]' ) ?>
    </div>
  </main>
  <?php get_footer('profile'); ?>