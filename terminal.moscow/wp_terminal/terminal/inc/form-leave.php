<?php 

/**
* Add form leave
*/

// Shortcode for form_leave
function short_form_leave() {
  $output = form_leave_fields();
  return $output;
}
add_shortcode('form_leave', 'short_form_leave');

// Markup for form_leave form
function form_leave_fields() {

  ob_start(); ?>
    <form class="form form--post form-leave" action="" method="POST">
      <div class="input-block">
        <label for="i-1">Имя контактного лица</label>
        <input type="text" id="i-1" name="user_name">
      </div>
      <div class="input-block">
        <label for="i-2">Email</label>
        <input type="email" id="i-2" name="user_email">
      </div>
      <div class="input-block">
        <label for="i-3">Что необходимо?</label>
        <textarea name="user_text" id="i-3"></textarea>
      </div>
      <button class="main-btn" type="submit">Отправить</button>
      <input type="hidden" name="id_form_leave" value="id-form-leave">
      <input type="hidden" name="form_leave_nonce" value="<?php echo wp_create_nonce('form-leave-nonce'); ?>">
      <input type="hidden" id="g-recaptcha-response-leave" name="g-recaptcha-response-leave">
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7', {action: 'leave'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-leave').value=token;
        });
      });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_leave form
function handler_form_leave() {

  if ( isset($_POST['id_form_leave']) && wp_verify_nonce($_POST['form_leave_nonce'], 'form-leave-nonce') ) {
    $name   = $_POST["user_name"];
    $email   = $_POST["user_email"];
    $text   = $_POST["user_text"];
    define('SITE_KEY', '6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7');
    define('SECRET_KEY', '6LddE9IUAAAAAN5gNtmv27zHehrRqmxUhqfR5c4_');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LddE9IUAAAAAN5gNtmv27zHehrRqmxUhqfR5c4_"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-leave']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'info@terminal.moscow';
      $subject = 'Оставить заявку';
      $message = "Имя:\r\n". $name ."\r\n\r\n";
      $message .= "Почта:\r\n". $email ."\r\n\r\n";
      $message .= "Сообщение:\r\n". $text ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_leave');
?>