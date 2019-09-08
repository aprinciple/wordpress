<?php 

  /**
  * Custom user profile form
  */

  // Shortcode for profile form
  function custom_profile_form() {
    if(is_user_logged_in()) {
      $output = custom_profile_form_fields();
    } else {
      $output = '<p style="text-align: center; color: #166529;">Сначала нужно войти :)</p>';
    }
    return $output;
  }
  add_shortcode('profile_form', 'custom_profile_form');

  // Markup for profile form
  function custom_profile_form_fields() {
  
    ob_start(); ?>
      <form class="form form-profile" action="" method="POST" enctype="multipart/form-data">
        <section class="form-profile__fieldset">
          <h3 class="form-profile__title">Профиль</h3>

          <div class="form-profile__wrapper">

            <div class="photo-profile form-profile__photo">
            <?php
              $current_user = wp_get_current_user();
              $user_photo = get_the_author_meta('user_photo', $current_user->ID);
              if ($user_photo) {
                $url = $user_photo['url'];
                $user_img = '<img src=' . $url . ' width="95" height="95" alt="Фото пользователя">';
                echo $user_img; 
              } else {
                echo get_avatar($current_user->ID, 95);
              }
            ?>
              <div class="photo-profile__act form-profile__photo-act">

                <div class="form-profile__photo-info">
                  <span class="form-profile__photo-info-name">
                    <?php 
                      $current_user = wp_get_current_user();
                      echo $current_user->display_name;
                    ?>
                  </span>
                  <span class="form-profile__photo-info-status">
                    <?php get_current_user_role(); ?>
                  </span>
                </div>
                <div class="form-profile__photo-edit">
                  <h6 class="photo-profile__title form-profile__photo-title">Редактировать фото</h6>
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

            <label class="form__label form-profile__label">
              ФИО:
              <input type="text" name="user_full_name" class="form__input" 
              placeholder="<?php 
                $current_user = wp_get_current_user(); 
                echo $current_user->display_name; ?> 
              ">
            </label>
            <label class="form__label form-profile__label">
              Почта:
              <input type="email" name="user_email" class="form__input" 
              placeholder="<?php 
                $current_user = wp_get_current_user(); 
                echo $current_user->user_email; ?> 
              " readonly onfocus="this.removeAttribute('readonly');">
            </label>
            <label class="form__label form-profile__label">
              Новый пароль
              <input type="password" name="user_password" class="form__input" placeholder="*****">
            </label>
            <label class="form__label form-profile__label">
              Повторить пароль
              <input type="password" name="user_password_confirm" class="form__input" placeholder="*****">
            </label>

          </div>

          <!-- <div class="login-social form-profile__login-social">
            <h6 class="login-social__title">Привязка соц-сетей</h6>
          </div> -->

        </section>

        <div class="form__footer form-profile__footer">
          <input type="hidden" name="custom_profile_nonce" value="<?php echo wp_create_nonce('custom-profile-nonce'); ?>"/>
          <button class="form__button form-profile__button" name="action" type="submit" value="user_update">Сохранить</button>
        </div>

      </form>      

    <?php
    return ob_get_clean();
  }

  // Update user profile
  function custom_update_user_profile() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'user_update' && isset($_POST['custom_profile_nonce']) && wp_verify_nonce($_POST['custom_profile_nonce'], 'custom-profile-nonce') ) {
      
      require_once(ABSPATH . WPINC . '/registration.php');

      if ( !empty( $_POST["user_full_name"] ) ) {
        wp_update_user( array( 'ID' => $current_user->ID, 'display_name' => $_POST["user_full_name"] ) );
      }

      if ( !empty( $_POST["user_email"] ) ) {
        if(!email_exists( $_POST["user_email"] )) {
          wp_update_user( array( 'ID' => $current_user->ID, 'user_email' => $_POST["user_email"] ) );
        } else {
          custom_errors()->add('email_used', 'Почта уже занята');
        }
      }

      if ( !empty( $_POST["user_password"] ) && !empty( $_POST["user_password_confirm"] ) ) {
        if($_POST["user_password"] == $_POST["user_password_confirm"]) {
          wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => $_POST["user_password"] ) );
        } else {
          custom_errors()->add('password_mismatch', 'Пароли не совпадают');
        }
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

        $photo = array();
        $photo['media_id'] = $attach_id_img;
        $photo['url'] = wp_get_attachment_url($attach_id_img);

        update_user_meta($current_user->ID, 'user_photo', $photo );
      }

      $errors = custom_errors()->get_error_messages();


    // only create the user in if there are no errors
      if(empty($errors)) {

        do_action('edit_user_profile_update', $current_user->ID);
        wp_redirect( get_permalink().'?updated=true' ); exit;
      }
    }
  }
  add_action('init', 'custom_update_user_profile');

?>