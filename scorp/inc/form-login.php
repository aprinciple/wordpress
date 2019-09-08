<?php 

  /**
  * Custom user login form
  */

  // Shortcode for login form
  function custom_login_form() {

    if(!is_user_logged_in()) {
      $output = custom_login_form_fields();
    } else {
      $output = '<p style="text-align: center; color: #166529;">Вы как бы уже вошли :)</p>';
    }
    return $output;
  }
  add_shortcode('login_form', 'custom_login_form');

  // Markup for login form
  function custom_login_form_fields() {

    ob_start(); ?>

      <form class="form form-login" action="" method="POST">
        <fieldset class="form__fieldset">
          <legend class="form__legend form-login__legend">Вход</legend>
          <div class="form-login__login-social">
            <div class="login-social">
              <h6 class="login-social__title">Войти с помощью соц сетей:</h6>
              <?php echo do_shortcode('[miniorange_social_login]') ?>
            </div>

          </div>

          <div class="form__error">
            <?php custom_show_error_messages(); ?>
          </div>

          <label class="form__label form-login__label">
            Логин
            <input type="text" name="user_name" class="form__input" data-error="" placeholder="Alex" required>
          </label>
          <label class="form__label form-login__label">
            Пароль
            <input type="password" name="user_password" class="form__input" data-error="" placeholder="*****" required>
          </label>

          <p class="form-login__hint">Забыли пароль?
            <a class="form-login__hint-link" href="<?php echo wp_lostpassword_url( ); ?>">Восстановить!</a>
          </p>

          <div class="form__footer form-login__footer">
            <input type="hidden" name="custom_login_nonce" value="<?php echo wp_create_nonce('custom-login-nonce'); ?>"/>
            <button class="form__button form-login__button" name="signup" type="submit">Вход</button>
            
            <label class="form__check form__anti-spam">
              <input class="form__check-input form__anti-spam-checkbox" type="checkbox" name="no-robot" required>
              <span class="form__check-box"></span>
              Я не робот
            </label>
          </div>
        </fieldset>
      </form>
    <?php
    return ob_get_clean();
  }

  // Logs a member in after submitting a login form
  function custom_login_member() {

    if(isset($_POST['user_name']) && isset($_POST['custom_login_nonce']) && wp_verify_nonce($_POST['custom_login_nonce'], 'custom-login-nonce')) {

      // this returns the user ID and other info from the user name
      $user = get_user_by('login', $_POST['user_name']);

      if(!$user) {
        // if the user name doesn't exist
        custom_errors()->add('empty_username', 'Неверный логин');
      }

      if(!isset($_POST['user_password']) || $_POST['user_password'] == '') {
        // if no password was entered
        custom_errors()->add('empty_password', 'Введите пароль');
      }

      // check the user's login with their password
      if(!wp_check_password($_POST['user_password'], $user->user_pass, $user->ID)) {
        // if the password is incorrect for the specified user
        custom_errors()->add('empty_password', 'Неверный пароль');
      }

      // retrieve all error messages
      $errors = custom_errors()->get_error_messages();

      // only log the user in if there are no errors
      if(empty($errors)) {

        nocache_headers();
        wp_clear_auth_cookie();
        wp_set_auth_cookie( $user->ID, true );
        wp_set_current_user( $user->ID, sanitize_user($_POST['user_name']) );	
        do_action('wp_login', sanitize_user($_POST['user_name']), $user);

        wp_redirect(home_url()); exit;
      }
    }
  }
  add_action('init', 'custom_login_member');

?>