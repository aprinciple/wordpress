<?php 

/**
* Add form header
*/

// Shortcode for form_header
function short_form_header() {
  $output = form_header_fields();
  return $output;
}
add_shortcode('form_header', 'short_form_header');

// Markup for form_header form
function form_header_fields() {

  ob_start(); ?>
  <form class="form form--post form-cost" action="" method="POST">
    <h5 class="form__title">Узнать стоимость</h5>
    <input class="form__input" type="tel" name="phone" placeholder="Номер телефона" required>
    <input type="hidden" name="id_form_header" value="id-form-header">
    <input type="hidden" name="form_header_nonce" value="<?php echo wp_create_nonce('form-header-nonce'); ?>">
    <input type="hidden" id="g-recaptcha-response-header" name="g-recaptcha-response-header">
    <button class="form__button form-cost__button button" type="submit">Отправить заявку</button>
  </form>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC', {action: 'header'})
      .then(function(token) {
        document.getElementById('g-recaptcha-response-header').value=token;
      });
    });
  </script>
  <?php
  return ob_get_clean();
}

// Handler for form_header form
function handler_form_header() {

  if ( isset($_POST['id_form_header']) && wp_verify_nonce($_POST['form_header_nonce'], 'form-header-nonce') ) {
    $phone   = $_POST["phone"];
    define('SITE_KEY', '6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC');
    define('SECRET_KEY', '6Ldqp8YUAAAAADg0vtIAZp-h2PSIobmutLuRV4l8');

    function getCaptcha($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6Ldqp8YUAAAAADg0vtIAZp-h2PSIobmutLuRV4l8"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha($_POST['g-recaptcha-response-header']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'travokosov@yandex.ru';
      $subject = 'Узнать стоимость';
      $message .= "Телефон: ". $phone ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_header');
?>