<?php 

  /**
  * Custom user profile form
  */

  // Shortcode for profile form
  function custom_personal_form() {
    if(is_user_logged_in()) {
      $output = custom_personal_form_fields();
    } else {
      $output = '<p style="text-align: center; color: #166529;">Сначала нужно войти :)</p>';
    }
    return $output;
  }
  add_shortcode('personal_form', 'custom_personal_form');

  // Markup for profile form
  function custom_personal_form_fields() {
  
    ob_start(); ?>
      <?php $current_user = wp_get_current_user(); ?>
        <form class="form p-personal__form" action="" method="POST" autocomplete="off">
          <fieldset class="form__fieldset p-personal__fieldset">
            <legend class="form__legend p-personal__legend">
              Для прохождения теста заполните личные данные
            </legend>

            <div class="form__error">
              <?php custom_show_error_messages(); ?>
            </div>

            <div class="p-personal__form-header">
              <label class="form__label">
                <span class="form__label-text">Фамилия:</span>
                <input class="form__input" type="text" name="user_surname" required />
              </label>
              <label class="form__label">
                <span class="form__label-text">Имя:</span>
                <input class="form__input" type="text" name="user_name" required />
              </label>
              <label class="form__label">
                <span class="form__label-text">Отчество:</span>
                <input class="form__input" type="text" name="user_patronymic" required />
              </label>
            </div>

            <div class="form__items p-personal__form-items">
              <div class="form__item p-personal__form-item">
                <div class="form__label">
                  <span class="form__label-text">Пол:</span>
                  <div class="form__radios p-personal__form-radios">
                    <div class="form__radio">
                      <label class="form__radio-label">
                        <input class="form__radio-input" type="radio" name="user_gender" value="man" checked />
                        Мужской
                        <span class="form__radio-check"></span>
                      </label>
                    </div>
                    <div class="form__radio">
                      <label class="form__radio-label">
                        <input class="form__radio-input" type="radio" name="user_gender" value="woman" />
                        Женский
                        <span class="form__radio-check"></span>
                      </label>
                    </div>
                  </div>
                </div>
                <label class="form__label">
                  <span class="form__label-text">Контактный телефон:</span>
                  <input 
                    class="form__input" 
                    type="tel" 
                    name="user_phone" 
                    pattern="[0-9]{10,11}"
                    placeholder="+7 (_ _ _) _ _ _ - _ _ - _ _ " 
                    required
                  >
                </label>
                <label class="form__label">
                  <span class="form__label-text">Укажите место работы:</span>
                  <input class="form__input" type="text" name="user_work" required />
                </label>
                <p class="form__item-remark">
                  Необходимо указать название организации полностью (к примеру: ООО «Ресурс», ИП Соловьева Александра Петровна). Если вы не работаете, укажите «не работаю», «студент», «школьник».
                </p>
              </div>
              <div class="form__item p-personal__form-item">
                <label class="form__label">
                  <span class="form__label-text">Дата рождения:</span>
                  <input class="form__input" type="date" name="user_dob" required />
                </label>
                <label class="form__label">
                  <span class="form__label-text">Целевая группа:</span>
                  <select class="form__input" name="user_group" required>
                    <option value="" label="Группа"></option>
                    <option 
                      value="group_1" 
                      label="действующие предприниматели">
                    </option>
                    <option 
                      value="group_2" 
                      label="школьники">
                    </option>
                    <option 
                      value="group_3" 
                      label="лица в возрасте до 30 лет, в том числе студенты">
                    </option>
                    <option 
                      value="group_4" 
                      label="инвалиды">
                    </option>
                    <option 
                      value="group_5" 
                      label="выпускники и воспитанники детских домов">
                    </option>
                    <option 
                      value="group_6" 
                      label="женщины">
                    </option>
                    <option 
                      value="group_7" 
                      label="военнослужащие, уволенные в запас">
                    </option>
                    <option 
                      value="group_8" 
                      label="лица старше 45 лет">
                    </option>
                    <option 
                      value="group_9" 
                      label="безработные">
                    </option>
                    <option 
                      value="group_10" 
                      label="иная">
                    </option>
                  </select>
                </label>
                <label class="form__label">
                  <span class="form__label-text">Укажите ИНН организации:</span>
                  <input class="form__input" type="text" name="user_inn" required />
                </label>
                <p class="form__item-remark">
                  Необходимо указать ИНН организации, в которой вы работаете или являетесь собственником. Если вы не работаете, укажите прочее
                </p>
              </div>
            </div>

            <p class="form__remark">Поля, обазательные для заполнения</p>
            <input 
                type="hidden" 
                name="custom_personal_nonce" 
                value="<?php echo wp_create_nonce('custom-personal-nonce'); ?>"
              >

            <button 
              class="button form__button" 
              type="submit" 
              name="action" 
              value="user_update"
            >
              Сохранить
            </button>
          </fieldset>
        </form>
    <?php
    return ob_get_clean();
  }

  // Update user profile
  function custom_update_personal_profile() {

    global $current_user;
    $current_user = wp_get_current_user();
    
    if ( 
        'POST' == $_SERVER['REQUEST_METHOD'] 
        && !empty( $_POST['action'] ) 
        && $_POST['action'] == 'user_update' 
        && isset($_POST['custom_personal_nonce']) 
        && wp_verify_nonce($_POST['custom_personal_nonce'], 'custom-personal-nonce') 
      ) {
      
      $user_surname    = esc_attr( trim( $_POST["user_surname"] ) );
      $user_name       = esc_attr( trim( $_POST["user_name"] ) );
      $user_patronymic = esc_attr( trim( $_POST["user_patronymic"] ) );
      $user_gender     = $_POST["user_gender"];
      $user_dob        = $_POST["user_dob"];
      $user_phone      = esc_attr( trim( $_POST["user_phone"] ) );
      $user_group      = $_POST["user_group"];
      $user_work       = esc_attr( trim( $_POST["user_work"] ) );
      $user_inn        = esc_attr( trim( $_POST["user_inn"] ) );

      if ( !empty($user_surname) ) {
        wp_update_user([
          'ID' => $current_user->ID,
          'last_name' => $user_surname,
        ]);
      }

      if ( !empty($user_name) ) {
        wp_update_user([
          'ID' => $current_user->ID,
          'first_name' => $user_name,
        ]);
      }

      if ( !empty($user_patronymic) ) {
        update_user_meta( $current_user->ID, 'c_patronymic', $user_patronymic );
      }

      if ( !empty($user_gender) ) {
        $gender = $user_gender === 'man' ? 'Мужской' : 'Женский';
        update_user_meta( $current_user->ID, 'c_gender', $gender );
      }

      if ( !empty($user_dob) ) {
        update_user_meta( $current_user->ID, 'c_dob', $user_dob );
      }

      if ( !empty($user_phone) ) {
        update_user_meta( $current_user->ID, 'c_phone', $user_phone );
      }

      if ( !empty($user_group) ) {
        $group;
        switch ($user_group) {
          case 'group_1':
            $group = 'действующие предприниматели';
            break;
          case 'group_2':
            $group = 'школьники';
            break;
          case 'group_3':
            $group = 'лица в возрасте до 30 лет, в том числе студенты';
            break;
          case 'group_4':
            $group = 'инвалиды';
            break;
          case 'group_5':
            $group = 'выпускники и воспитанники детских домов';
            break;
          case 'group_6':
            $group = 'женщины';
            break;
          case 'group_7':
            $group = 'военнослужащие, уволенные в запас';
            break;
          case 'group_8':
            $group = 'лица старше 45 лет';
            break;
          case 'group_9':
            $group = 'безработные';
            break;
          case 'group_10':
            $group = 'иная';
            break;
        }
        update_user_meta( $current_user->ID, 'c_group', $group );
      }

      if ( !empty($user_work) ) {
        update_user_meta( $current_user->ID, 'c_work', $user_work );
      }

      if ( !empty($user_inn) ) {
        update_user_meta( $current_user->ID, 'c_inn', $user_inn );
      }

      $errors = custom_errors()->get_error_messages();


    // only create the user in if there are no errors
      if(empty($errors)) {
        do_action('edit_user_profile_update', $current_user->ID);
        wp_redirect( home_url('/profile') ); exit;
      }
    }
  }
  add_action('init', 'custom_update_personal_profile');
?>