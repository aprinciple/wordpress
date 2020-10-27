<?php 

  /**
  * Custom user registration form
  */

  // Shortcode for registration form
  function custom_registration_form() {
    $registration_enabled = get_option('users_can_register');

    if(!is_user_logged_in()) {
      $output = custom_registration_form_fields();
    } else {
      $output = '<p style="text-align: center; color: #166529;">Одной регистрации хватит :)</p>';
    }

    // only show the registration form if allowed
    if(!$registration_enabled) {
      $output = '<p style="text-align: center; color: #166529;">Регистрация запрещена</p>';
    } 

    return $output;
  }
  add_shortcode('register_form', 'custom_registration_form');


  // Markup for registration form

  function custom_registration_form_fields() {

    ob_start(); ?>

      <form class="form" action="" method="POST" autocomplete="off">
        <fieldset class="form__fieldset">
          <legend class="form__legend">Регистрация</legend>

          <div class="form__error">
            <?php custom_show_error_messages(); ?>
          </div>

          <label class="form__label">
            <span class="form__label-text">Логин:</span>
            <input 
              class="form__input" 
              type="text" 
              name="user_login" 
              maxlength="10" 
              placeholder="Alex"
              required>
          </label>
          <label class="form__label">
            <span class="form__label-text">Электронная почта:</span>
            <input 
              class="form__input" 
              type="email" 
              name="user_email" 
              placeholder="alex@gmail.com"
              required>
          </label>
          <label class="form__label">
            <span class="form__label-text">Пароль:</span>
            <input 
              class="form__input" 
              type="password" 
              name="user_password"
              placeholder="*****" 
              required
              autocomplete="new-password"
              >
          </label>
          <label class="form__label">
            <span class="form__label-text">Повторите пароль:</span>
            <input 
              class="form__input" 
              type="password" 
              name="user_password_confirm" 
              placeholder="*****" 
              required>
          </label>
          <p class="form__remark">Поля, обазательные для заполнения</p>

          <input 
            type="hidden" 
            name="custom_register_nonce" 
            value="<?php echo wp_create_nonce('custom-register-nonce'); ?>"
          >

          <button class="button form__button" type="submit">Зарегистрироваться</button>
        </fieldset>
      </form>
      
    <?php
    return ob_get_clean();
  }

  // Register a new user
  function custom_add_new_member() {
    if (isset( $_POST["user_login"] ) && isset($_POST['custom_register_nonce']) && wp_verify_nonce($_POST['custom_register_nonce'], 'custom-register-nonce')) {
      $user_login		      = $_POST["user_login"];	
      $user_pass		      = $_POST["user_password"];
      $pass_confirm 	    = $_POST["user_password_confirm"];
      $user_email		      = $_POST["user_email"];

      $uppercase = preg_match('@[A-Z]@', $user_pass);
      $lowercase = preg_match('@[a-z]@', $user_pass);
      $number    = preg_match('@[0-9]@', $user_pass);

      // this is required for username checks
      // require_once(ABSPATH . WPINC . '/registration.php');

      if(strlen($user_login) > 10) {
        custom_errors()->add('username_maxlength', 'Маскимум 10 символов');
      }
      if(username_exists($user_login)) {
        // Username already registered
        custom_errors()->add('username_unavailable', 'Логин уже занят');
      }
      if(!validate_username($user_login)) {
        // invalid username
        custom_errors()->add('username_invalid', 'Логин может содержать только латинские символы и/или цифры');
      }
      if($user_login == '') {
        // empty username
        custom_errors()->add('username_empty', 'Введите имя');
      }
      if(!is_email($user_email)) {
        //invalid email
        custom_errors()->add('email_invalid', 'Неверная почта');
      }
      if(email_exists($user_email)) {
        //Email address already registered
        custom_errors()->add('email_used', 'Почта уже занята');
      }
      if($user_pass == '') {
        // passwords do not match
        custom_errors()->add('password_empty', 'Введите пароль');
      }

      if( !$lowercase || !$number || strlen($password) > 6 ) {
        // passwords do not match
        custom_errors()->add(
          'password_empty', 
          'Длина пароля должна быть не менее 6. <br> 
          Пароль должен состоять из букв латинского алфавита (A-z), <br> цифр (0-9)'
        );
      }
      if($user_pass != $pass_confirm) {
        // passwords do not match
        custom_errors()->add('password_mismatch', 'Пароли не совпадают');
      }

      $errors = custom_errors()->get_error_messages();

    // only create the user in if there are no errors
      if(empty($errors)) {

        $new_user_id = wp_insert_user(array(
            'user_login'		  => $user_login,
            'user_pass'	 		  => $user_pass,
            'user_email'		  => $user_email,
            'user_registered'	=> date('Y-m-d H:i:s'),
            'role'				    => 'subscriber'
          )
        );

        $user = get_user_by('login', $_POST['user_login']);

        if($new_user_id) {
          wp_new_user_notification($user->ID, 'both');

          nocache_headers();
          wp_clear_auth_cookie();
          wp_set_auth_cookie( $user->ID, true );
          wp_set_current_user($user->ID, sanitize_user($_POST['user_login']));	
          do_action('wp_login', sanitize_user($_POST['user_login']), $user);

          wp_redirect(home_url()); exit;
        }
      }
    }
  }
  add_action('init', 'custom_add_new_member');

?>