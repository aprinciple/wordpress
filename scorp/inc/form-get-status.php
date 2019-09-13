<?php 

  /**
  * Get status form
  */

  // Shortcode for get-status form
  function short_get_status_form() {
    if ( is_user_logged_in() ) {
      $output = get_status_form_fields();  
    } else {
      $output = '<p style="text-align: center; color: #166529;">Сначала нужно войти :)</p>';
    }
    return $output;
  }
  add_shortcode('get_status_form', 'short_get_status_form');

  // Markup for get-status form
  function get_status_form_fields() {
  
    ob_start(); ?>
      <form class="form form-status" action="" method="POST" enctype="multipart/form-data">
        <div class="form__error form-status__error">
          <?php custom_show_error_messages(); ?>
        </div>
        <fieldset class="form__fieldset form-status__fieldset">
          <label class="form__label form-status__label">
            ФИО
            <input class="form__input" type="text" name="full_name" value="<?php if(isset($_POST['full_name'])) {
              echo $_POST['full_name'];
            } ?>" placeholder="Иванов Иван Иванович">
          </label>
          <label class="form__label form-status__label">
            О себе
            <textarea class="form__textarea form-status__textarea" name="about_me"><?php if(isset($_POST['about_me'])) {
              echo $_POST['about_me'];
            } ?></textarea>
          </label>
          <label class="form__label form-status__label">
            Расскажите о своем проекте
            <textarea class="form__textarea form-status__textarea" name="about_project"><?php if(isset($_POST['about_project'])) {
              echo $_POST['about_project'];
            } ?></textarea>
          </label>
        </fieldset>
        <fieldset class="form__fieldset form-status__fieldset">
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

              <div class="agreement">
                <h5 class="agreement__title">Соглашение о сотрудничестве<i class="icon-star">*</i></h5>
                <p class="agreement__tip">Скачайте и подпишите соглашение NDA, а затем загрузите его.</p>
                <a class="agreement__button agreement__button--download" href="<?php echo get_template_directory_uri() ?>/assets/documents/NDA.pdf" target="_blank">
                  <svg class="agreement__button-icon agreement__button-icon--download">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-download"></use>
                  </svg>
                  Скачать NDA
                </a>
                <div class="agreement__upload">
                  <span class="agreement__upload-name" data-name="NDA 12-03-2019.docx">NDA 12-03-2019.docx</span>
                  <button class="agreement__button agreement__upload-button" type="button">
                    <svg class="agreement__button-icon">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-download"></use>
                    </svg>
                    Загрузить NDA
                  </button>
                  <div class="agreement__upload-drop">
                    <svg class="agreement__upload-drop-icon">
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#icon-download"></use>
                    </svg>
                    Загрузить файл
                    <input class="agreement__upload-drop-input" type="file" name="document_nda">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form__footer form-status__footer">
          <input type="hidden" name="get_status_nonce" value="<?php echo wp_create_nonce('get-status-nonce'); ?>"/>
          <button class="form__button form-status__button" name="action" value="get_status" type="submit">Отправить</button>
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
      </form> 

    <?php
    return ob_get_clean();
  }

  // Handler for get-status form
  function handler_get_status_form() {
    $current_user = wp_get_current_user();

    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && isset( $_POST['action'] ) && isset($_POST['get_status_nonce']) && wp_verify_nonce($_POST['get_status_nonce'], 'get-status-nonce') ) {
      $full_name 	          = $_POST["full_name"];
      $email_user           = $current_user->user_email;
      $about_me		          = $_POST["about_me"];
      $about_project	      = $_POST["about_project"];
      $link_project	        = $_POST["link_project"];
      $drawing_project;
      $description_project;
      $file_project;
      $document_nda;

  
      if($full_name == '' || $full_name == ' ') {
        custom_errors()->add('full_name_empty', 'Введите имя и фамилию');
      }
      if($about_me == '' || $about_me == ' ') {
        custom_errors()->add('about_me_empty', 'Расскажите о себе');
      }
      if($about_project == '' || $about_project == ' ') {
        custom_errors()->add('about_project_empty', 'Что-то да напишите о проекте :)');
      }
  
      if ( isset($_FILES['drawing_project']['name']) && $_FILES['drawing_project']['name'] != '' ) 
      {

        if ($_FILES['drawing_project']['error']) {
          custom_errors()->add('drawing_project_error', 'Ошибка загрузки чертежа');
        }
        $type = $_FILES['drawing_project']['type'];
        if (
            ($type != 'application/pdf') && 
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
            ($type != 'application/msword') &&
            ($type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') && 
            ($type != 'application/pdf') && 
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
      
      if ( isset($_FILES['document_nda']['name']) && $_FILES['document_nda']['name'] != '' ) 
      {
        if ($_FILES['document_nda']['error']) {
          custom_errors()->add('document_nda_error', 'Ошибка загрузки файла');
        }
        $type = $_FILES['document_nda']['type'];
        if (
            ($type != 'application/pdf')
           ) 
        {
          custom_errors()->add('document_nda_type_error', 'Формат файла NDA может быть только PDF, DOC, DOCX');
        }
        
        if ( ! function_exists( 'wp_handle_upload' ) ) {
          require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }

        $file = $_FILES['document_nda'];

        $upload_overrides = array(
          'test_form' => false
        );

        $document_nda = wp_handle_upload( $file, $upload_overrides );

      } else {
        custom_errors()->add('document_nda_empty', 'Без соглашения нельзя!');
      }
  
      $errors = custom_errors()->get_error_messages();
  
      if(empty($errors)) {
        $to = 'info@scorp.ooo';
        $subject = 'Получение статуса';
        $message = "Имя: ". $full_name ."\r\n\r\n";
        $message .= "Почта: " . $email_user . "\r\n\r\n";
        $message .= "О себе:\r\n" . $about_me . "\r\n\r\n";
        $message .= "Описание проекта:\r\n" . $about_project . "\r\n\r\n";
        $message .= "Ссылка: " . $link_project . "\r\n\r\n";

        $headers = array(
          'Content-Type: application/octet-stream',
          'Content-Disposition: attachment',
          'From: скорп <info@scorp.ooo>'
        );

        $attachments = array(
          $drawing_project['file'], 
          $description_project['file'], 
          $file_project['file'],
          $document_nda['file']
        );
  
        $response_mail = wp_mail( $to, $subject, $message, $headers, $attachments);

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
  add_action('init', 'handler_get_status_form');

?>