<?php 

/**
* Add form request
*/

// Shortcode for form_request
function short_form_request() {
  $output = form_request_fields();
  return $output;
}
add_shortcode('form_request', 'short_form_request');

// Markup for form_request form
function form_request_fields() {

  ob_start(); ?>
    <form class="form form--post form-request" action="" method="POST">
      <div class="request-form">
        <input type="tel" name="phone" placeholder="Ваш номер телефона" required>
        <button type="submit" class="main-btn">Отправить</button>
      </div>
      <input type="hidden" name="id_form_request" value="id-form-request">
      <input type="hidden" name="form_request_nonce" value="<?php echo wp_create_nonce('form-request-nonce'); ?>">
      <input type="hidden" id="g-recaptcha-response-request" name="g-recaptcha-response-request">
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7', {action: 'request'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-request').value=token;
        });
      });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_request form
function handler_form_request() {

  if ( isset($_POST['id_form_request']) && wp_verify_nonce($_POST['form_request_nonce'], 'form-request-nonce') ) {
    $phone   = $_POST["phone"];
    define('SITE_KEY', '6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7');
    define('SECRET_KEY', '6LddE9IUAAAAAN5gNtmv27zHehrRqmxUhqfR5c4_');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LddE9IUAAAAAN5gNtmv27zHehrRqmxUhqfR5c4_"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-request']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'info@terminal.moscow';
      $subject = 'Заявка';
      $message = "Телефон:\r\n". $phone ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_request');
?>