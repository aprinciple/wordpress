<?php 

/**
* Add form questions
*/

// Shortcode for form_questions
function short_form_questions() {
  $output = form_questions_fields();
  return $output;
}
add_shortcode('form_questions', 'short_form_questions');

// Markup for form_questions form
function form_questions_fields() {

  ob_start(); ?>
    <form class="form form--post form-questions" action="" method="POST">
      <h4 class="form__title form-questions__title">Остались вопросы?</h4>
      <h6 class="form__sub-title form-questions__sub-title">Напишите нам и мы свяжемся с вами</h6>
      <label class="form__label form-questions__label">
        <span class="form__label-text">Ваше имя</span>
        <input class="form__input form-questions__input" name="user_name" type="text" placeholder="Иван Иванович" required>
      </label>
      <label class="form__label form-questions__label">
        <span class="form__label-text">Телефон</span>
        <input class="form__input form-questions__input" name="user_phone" type="tel" placeholder="+7988 5553535" required>
      </label>
      <input type="hidden" name="id_form_questions" value="id-form-questions">
      <input type="hidden" name="form_questions_nonce" value="<?php echo wp_create_nonce('form-questions-nonce'); ?>">
      <input type="hidden" id="g-recaptcha-response-questions" name="g-recaptcha-response-questions">
      <button class="form__button button form-questions__button" type="submit">Заказать звонок</button>
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LcRE8IUAAAAAKUgSwOlfnrfLEwJN1cqbApfanxl', {action: 'questions'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-questions').value=token;
        });
      });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_questions form
function handler_form_questions() {

  if ( isset($_POST['id_form_questions']) && wp_verify_nonce($_POST['form_questions_nonce'], 'form-questions-nonce') ) {
    $name   = $_POST["user_name"];
    $phone   = $_POST["user_phone"];
    define('SITE_KEY', '6LcRE8IUAAAAAKUgSwOlfnrfLEwJN1cqbApfanxl');
    define('SECRET_KEY', '6LcRE8IUAAAAADqsDST0kcb43hMQ2p2pTI_8G_V2');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LcRE8IUAAAAADqsDST0kcb43hMQ2p2pTI_8G_V2"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-questions']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'travokosov@yandex.ru';
      $subject = 'Остались вопросы';
      $message = "Имя:\r\n". $name ."\r\n\r\n";
      $message .= "Телефон:\r\n". $phone ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_questions');
?>