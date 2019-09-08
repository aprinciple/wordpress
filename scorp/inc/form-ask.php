<?php 

  /**
  * Add ask form
  */

  // Shortcode for ask_form
  function short_ask_form() {
    $output = ask_form_fields();
    return $output;
  }
  add_shortcode('ask_form', 'short_ask_form');

  // Markup for ask_form form
  function ask_form_fields() {
  
    ob_start(); ?>
      <form class="form form-ask" action="" method="POST">
        <fieldset class="form__fieldset">
          <legend class="form__legend">Задать вопрос</legend>
          <div class="form__error">
            <?php custom_show_error_messages(); ?>
          </div>
          <label class="form__label">
            Имя
            <input class="form__input" type="text" name="user_name" placeholder="Иванов Иван Иванович" required>
          </label>
          <label class="form__label">
            E-mail
            <input class="form__input" type="email" name="user_email" placeholder="ivanovich@gmail.com" required>
          </label>
          <label class="form__label">
            Сообщение
            <textarea class="form__textarea" name="user_text"></textarea>
          </label>
          <div class="form__footer">
            <button class="form__button form-ask__button" name="action" value="ask" type="submit">Отправить</button>
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

  // Handler for ask_form form
  function handler_ask_form() {

    if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'ask' ) {
      $name   = $_POST["user_name"];
      $email  = $_POST["user_email"];
      $text   = $_POST["user_text"];
  
      if($name == '' || $name == ' ') {
        custom_errors()->add('name_empty', 'Введите имя');
      }
      if(!is_email($email)) {
        custom_errors()->add('email_invalid', 'Неверная почта');
      }
      if($text == '' || $text == ' ') {
        custom_errors()->add('text_empty', 'А вопрос какой?');
      }
  
      $errors = custom_errors()->get_error_messages();
  
      if(empty($errors)) {
        $to = 'avprinciple@gmail.com';
        $subject = 'Вопрос';
        $message = "Имя:\r\n". $name ."\r\n\r\n";
        $message .= "Почта:\r\n". $email ."\r\n\r\n";
        $message .= "Текст вопроса:\r\n". $text ."\r\n\r\n";
  
        wp_mail( $to, $subject, $message, $headers = '');
      }
    }

  }
  add_action('init', 'handler_ask_form');

?>