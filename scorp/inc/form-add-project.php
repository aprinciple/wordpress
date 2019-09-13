<?php 

  /**
  * Add project form
  */

  // Shortcode for add_project_form
  function short_add_project_form() {
    $output = add_project_form_fields();
    return $output;
  }
  add_shortcode('add_project_form', 'short_add_project_form');

  // Markup for add-project form
  function add_project_form_fields() {
  
    ob_start(); ?>
      <form class="form form-add-project" action="" method="POST" enctype="multipart/form-data">

        <div class="form__error">
          <?php custom_show_error_messages(); ?>
        </div>
      
        <div class="form__fieldset form-add-project__no-logged">
          <label class="form__label form-add-project__label">
            ФИО
            <input class="form__input form-add-project__input" type="text" name="full_name" value="<?php 
              if ( is_user_logged_in() ) {
                $current_user = wp_get_current_user();
                echo $current_user->display_name;
              } else {
                if(isset($_POST['full_name'])) {
                  echo $_POST['full_name'];
                }
              }
            ?>" placeholder="Иванов Иван Иванович">
          </label>
          <label class="form__label form-add-project__label">
            Телефон
            <input class="form__input form-add-project__input" type="tel" name="phone" value="<?php if(isset($_POST['phone'])) {
              echo $_POST['phone'];
            } ?>" placeholder="8 8000 555 35 35">
          </label>
          <label class="form__label form-add-project__label">
            E-mail
            <input class="form__input form-add-project__input" type="text" name="email" value="<?php 
              if ( is_user_logged_in() ) {
                $current_user = wp_get_current_user();
                echo $current_user->user_email;
              } else {
                if(isset($_POST['email'])) {
                  echo $_POST['email'];
                }
              }
            ?>" placeholder="scorp@gmail.com">
          </label>
        </div>

        <div class="form-add-project__wrapper">

          <fieldset class="form__fieldset form-add-project__fieldset">
            <label class="form__label form-add-project__label">
              Название
              <input class="form__input form-add-project__input" type="text" name="title_project" value="<?php if(isset($_POST['title_project'])) {
                echo $_POST['title_project'];
              } ?>" placeholder="Проект рэйплэйс">
            </label>
            <label class="form__label form-add-project__label">
              Описание
              <textarea class="form__textarea form-add-project__textarea" name="text_project" placeholder="Добрый день, хочу велосипед"><?php if(isset($_POST['text_project'])) {
                echo $_POST['text_project'];
              } ?></textarea>
            </label>
          </fieldset>

          <fieldset class="form__fieldset form-add-project__upload">
            <div class="upload" id="upload">
              <h5 class="upload__title">Прикрепить файл или ссылку</h5>
              <div class="upload__container">
                <p class="upload__info">PDF, DOC, DOCX, JPG, PNG</p>

                <div class="upload__item">
                  <div class="upload__file upload__file--upload">
                    <input class="upload__file-input" type="file" name="drawing_project">
                    <span class="upload__file-text upload__file-name" data-name='Прикрепить чертеж<i class="icon-star">*</i>'>Прикрепить чертеж<i class="icon-star">*</i></span>
                  </div>

                  <div class="upload__file upload__file--delete">
                    <svg class="upload__file-icon upload__file-icon--delete">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-delete"></use>
                    </svg>
                    <span class="upload__file-text upload__file-text--delete">Удалить</span>
                  </div>
                </div>

                <div class="upload__item">
                  <div class="upload__file upload__file--upload">
                    <input class="upload__file-input" type="file" name="description_project">
                    <span class="upload__file-text upload__file-name" data-name='Прикрепить описание<i class="icon-star">*</i>'>Прикрепить описание<i class="icon-star">*</i></span>
                  </div>

                  <div class="upload__file upload__file--delete">
                    <svg class="upload__file-icon upload__file-icon--delete">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-delete"></use>
                    </svg>
                    <span class="upload__file-text upload__file-text--delete">Удалить</span>
                  </div>
                </div>

                <div class="upload__item upload__item--single">
                  <div class="upload__file upload__file--upload">
                    <input class="upload__file-input" type="file" name="file_project">
                    <svg class="upload__file-icon upload__file-icon--plus">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                    </svg>
                    <span class="upload__file-text upload__file-text--plus upload__file-name" data-name="Добавить файл">Добавить файл</span>
                  </div>

                  <div class="upload__file upload__file--upload upload__file--link">
                    <div class="upload__link">
                      <input class="upload__file-input upload__link-input" type="text" name="link_project" value="<?php if(isset($_POST['link_project'])) {
                        echo $_POST['link_project'];
                      } ?>">
                      <button class="upload__link-button" type="button">Ок</button>
                    </div>
                    <svg class="upload__file-icon upload__file-icon--plus">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-plus"></use>
                    </svg>
                    <span class="upload__file-text upload__file-text--plus upload__file-name" data-name="Добавить ссылку">Добавить ссылку</span>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>

          <div class="form__footer form-add-project__footer">
            <button class="form__button form-status__button" name="action" value="add_project" type="submit">Хочу проект</button>
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

        </div>
      </form>    

    <?php
    return ob_get_clean();
  }

  // Handler for add-project form
  function handler_add_project_form() {

    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'add_project' ) {
      $full_name 	          = $_POST["full_name"];
      $phone		            = $_POST["phone"];
      $email		            = $_POST["email"];
      $title_project	      = $_POST["title_project"];
      $text_project	        = $_POST["text_project"];
      $link_project	        = $_POST["link_project"];
      $drawing_project;
      $description_project;
      $file_project;
  
      if($full_name == '' || $full_name == ' ') {
        custom_errors()->add('full_name_empty', 'Введите имя и фамилию');
      }
      if(!is_email($email)) {
        custom_errors()->add('email_invalid', 'Неверная почта');
      }
      if($title_project == '' || $title_project == ' ') {
        custom_errors()->add('title_project_empty', 'Введите название проекта');
      }
      if($text_project == '' || $text_project == ' ') {
        custom_errors()->add('text_project_empty', 'Что-то да напишите о проекте :)');
      }
  
      if ( isset($_FILES['drawing_project']['name']) && $_FILES['drawing_project']['name'] != '' ) 
      {
        if ($_FILES['drawing_project']['error']) {
          custom_errors()->add('drawing_project_error', 'Ошибка загрузки чертежа');
        }
        $type = $_FILES['drawing_project']['type'];
        if (
            ($type != 'application/pdf') && 
            ($type != 'application/msword') &&
            ($type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') &&
            ($type != 'image/jpeg') &&
            ($type != 'image/png')
           ) 
        {
          custom_errors()->add('drawing_project_type_error', 'Формат файла чертежа может быть только PDF, DOC, DOCX, JPG, PNG');
        }

        if ( ! function_exists( 'wp_handle_upload' ) ) {
          require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }

        $file = $_FILES['drawing_project'];

        $upload_overrides = array(
          'test_form' => false
        );

        $drawing_project = wp_handle_upload( $file, $upload_overrides );

      } else {
        custom_errors()->add('drawing_project_empty', 'Без чертежа никак!');
      }
  
      if ( isset($_FILES['description_project']['name']) && $_FILES['description_project']['name'] != '' ) 
      {
        if ($_FILES['description_project']['error']) {
          custom_errors()->add('description_project_error', 'Ошибка загрузки описания');
        }
        $type = $_FILES['description_project']['type'];
        if (
            ($type != 'text/plain') && 
            ($type != 'application/pdf') && 
            ($type != 'application/msword') &&
            ($type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')
           ) 
        {
          custom_errors()->add('description_project_type_error', 'Формат файла описания может быть только TXT, PDF, DOC, DOCX');
        }

        if ( ! function_exists( 'wp_handle_upload' ) ) {
          require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }

        $file = $_FILES['description_project'];

        $upload_overrides = array(
          'test_form' => false
        );

        $description_project = wp_handle_upload( $file, $upload_overrides );

      } else {
        custom_errors()->add('description_project_empty', 'Без описания нельзя!');
      }
  
      if ( isset($_FILES['file_project']['name']) && $_FILES['file_project']['name'] != '' ) 
      {
        if ($_FILES['file_project']['error']) {
          custom_errors()->add('file_project_error', 'Ошибка загрузки файла');
        }
        $type = $_FILES['file_project']['type'];
        if (
            ($type != 'text/plain') && 
            ($type != 'application/pdf') && 
            ($type != 'application/msword') &&
            ($type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') &&
            ($type != 'image/jpeg') &&
            ($type != 'image/png')
           ) 
        {
          custom_errors()->add('file_project_type_error', 'Формат файла может быть только TXT, PDF, DOC, DOCX, JPG, PNG');
        }
        
        if ( ! function_exists( 'wp_handle_upload' ) ) {
          require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }

        $file = $_FILES['file_project'];

        $upload_overrides = array(
          'test_form' => false
        );

        $file_project = wp_handle_upload( $file, $upload_overrides );

      }
  
      $errors = custom_errors()->get_error_messages();
  
      if(empty($errors)) {
        $to = 'info@scorp.ooo';
        $subject = 'Новый проект';
        $message = "Имя: ". $full_name ."\r\n\r\n";
        $message .= "Контактный номер: ". $phone ."\r\n\r\n";
        $message .= "Почта: ". $email ."\r\n\r\n";
        $message .= "Название проекта: ". $title_project ."\r\n\r\n";
        $message .= "Описание проекта:\r\n". $text_project ."\r\n\r\n";
        $message .= "Ссылка: ". $link_project ."\r\n\r\n";

        $headers = array(
          'Content-Type: application/octet-stream',
          'Content-Disposition: attachment',
          'From: скорп <info@scorp.ooo>'
        );

        $attachments = array(
          $drawing_project['file'],
          $description_project['file'],
          $file_project['file']
        );
        
  
        $response_mail = wp_mail( $to, $subject, $message, $headers = '', $attachments);

        if( $response_mail ) {
          func_response_mail()->add('success', 'success');
        } else {
          func_response_mail()->add('failure', 'failure');
        }

        foreach ( (array)$attachments AS $file ) {
          if( file_exists($file) ) {
            unlink($file);
          }
        }

      }
    }

  }
  add_action('init', 'handler_add_project_form');

?>