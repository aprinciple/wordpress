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
      
      <form class="form form-registration" action="" method="POST" enctype="multipart/form-data">
          <fieldset class="form__fieldset">
            <legend class="form__legend form-registration__legend">Регистрация</legend>

            <div class="form-registration__login-social">
              <div class="login-social">
                <h6 class="login-social__title">Войти с помощью соц сетей:</h6>
                <?php echo do_shortcode('[miniorange_social_login]') ?>
              </div>

            </div>

            <div class="form-registration__photo">
              <div class="photo-profile">
                <h6 class="photo-profile__title">Загрузить фото профиля</h6>

                <div class="photo-profile__act">
                  <img class="photo-profile__photo" src="<?php echo get_template_directory_uri(); ?>/assets/img/user-photo.svg" width="40" height="40" alt="Фото пользователя">

                  <div class="photo-profile__label photo-profile__label--upload">
                    <input type="file" name="user_photo" class="photo-profile__input photo-profile__input--file">
                    <svg class="photo-profile__label-icon photo-profile__label-icon--upload">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-download"></use>
                    </svg>
                    <span class="photo-profile__label-file">Загрузить</span>
                  </div>

                  <div class="photo-profile__label photo-profile__label--delete">
                    Удалить
                    <svg class="photo-profile__label-icon photo-profile__label-icon--delete">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-delete"></use>
                    </svg>
                    <button class="photo-profile__input" type="button"></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="form__error">
              <?php custom_show_error_messages(); ?>
            </div>

            <label class="form__label form-registration__label">
              ФИО
              <input type="text" name="user_full_name" class="form__input" placeholder="Иванов Иван" required>
            </label>
            <label class="form__label form-registration__label">
              Логин
              <input type="text" name="user_login" class="form__input" placeholder="Ivan" readonly onfocus="this.removeAttribute('readonly');" required>
            </label>
            <label class="form__label form-registration__label">
              Пароль
              <input type="password" name="user_password" class="form__input" placeholder="*****" required>
            </label>
            <label class="form__label form-registration__label">
              Повторите пароль
              <input type="password" name="user_password_confirm" class="form__input" placeholder="*****" required>
            </label>
            <label class="form__label form-registration__label">
              Почта
              <input type="email" name="user_email" class="form__input" placeholder="mail@gmail.com" required>
            </label>

            <div class="form__footer form-registration__footer">
              <input type="hidden" name="custom_register_nonce" value="<?php echo wp_create_nonce('custom-register-nonce'); ?>"/>
              <button class="form__button form-registration__button" name="action" type="submit">Регистрация</button>
              <label class="form__check form__anti-spam">
                <input class="form__check-input form__anti-spam-checkbox" type="checkbox" name="no-robot" required>
                <span class="form__check-box"></span>
                Я не робот
              </label>
              <script src="https://www.google.com/recaptcha/api.js?render=6LcGCbgUAAAAAIlAfX9eVWlvRY-CvGVGP78Kf61O"></script>
              <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LcGCbgUAAAAAIlAfX9eVWlvRY-CvGVGP78Kf61O', {action: 'action'});
                });
              </script>
            </div>

          </fieldset>
        </form>
  
    <?php
    return ob_get_clean();
  }

  // Register a new user
  function custom_add_new_member() {
    if (isset( $_POST["user_login"] ) && isset($_POST['custom_register_nonce']) && wp_verify_nonce($_POST['custom_register_nonce'], 'custom-register-nonce')) {
      $user_full_name 	  = $_POST["user_full_name"];
      $user_login		      = $_POST["user_login"];	
      $user_pass		      = $_POST["user_password"];
      $pass_confirm 	    = $_POST["user_password_confirm"];
      $user_email		      = $_POST["user_email"];

      // this is required for username checks
      require_once(ABSPATH . WPINC . '/registration.php');

      if($user_full_name == '' || $user_full_name == ' ') {
        // empty username
        custom_errors()->add('full_name_empty', 'Введите имя и фамилию');
      }

      if(username_exists($user_login)) {
        // Username already registered
        custom_errors()->add('username_unavailable', 'Логин уже занят');
      }
      if(!validate_username($user_login)) {
        // invalid username
        custom_errors()->add('username_invalid', 'Неверный логин');
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
      if($user_pass != $pass_confirm) {
        // passwords do not match
        custom_errors()->add('password_mismatch', 'Пароли не совпадают');
      }

      if ( isset($_FILES['user_photo']['name']) && $_FILES['user_photo']['name'] != '' ) {
        if ($_FILES['user_photo']['error']) {
          custom_errors()->add('photo_error', 'Ошибка загрузки фото');
        }
        $type = $_FILES['user_photo']['type'];
        if (
          ($type != "image/jpg") && 
          ($type != "image/jpeg") && 
          ($type != "image/png")) {
            custom_errors()->add('photo_type_error', 'Формат файла может быть только jpg или png');
        }

        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );

        $attach_id_img = media_handle_upload('user_photo', 0);

        if ( is_wp_error($attach_id_img) ) {
          custom_errors()->add('photo_upload_error', 'Ошибка загрузки фото');
        }

        global $photo;
        $photo = array();
        $photo['media_id'] = $attach_id_img;
        $photo['url'] = wp_get_attachment_url($attach_id_img);
      }

      $errors = custom_errors()->get_error_messages();

    // only create the user in if there are no errors
      if(empty($errors)) {

        $new_user_id = wp_insert_user(array(
            'user_login'		  => $user_login,
            'user_pass'	 		  => $user_pass,
            'user_email'		  => $user_email,
            'display_name'		=> $user_full_name,
            'user_registered'	=> date('Y-m-d H:i:s'),
            'role'				    => 'subscriber'
          )
        );

        $user = get_user_by('login', $_POST['user_login']);

        if($new_user_id) {
          wp_new_user_notification($user->ID, 'both');
          update_user_meta($new_user_id, 'user_photo', $photo );

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