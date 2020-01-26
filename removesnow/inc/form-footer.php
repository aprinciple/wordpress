<?php 

/**
* Add form footer
*/

// Shortcode for form_footer
function short_form_footer() {
  $output = form_footer_fields();
  return $output;
}
add_shortcode('form_footer', 'short_form_footer');

// Markup for form_footer form
function form_footer_fields() {

  ob_start(); ?>
  <form class="form form--post form-contact" action="" method="POST">
    <h5 class="form__title">Обратный звонок</h5>
    <input class="form__input" type="tel" name="phone" placeholder="Номер телефона" required>
    <input type="hidden" name="id_form_footer" value="id-form-footer">
    <input type="hidden" name="form_footer_nonce" value="<?php echo wp_create_nonce('form-footer-nonce'); ?>">
    <input type="hidden" id="g-recaptcha-response-footer" name="g-recaptcha-response-footer">
    <button class="form__button form-cost__button button" type="submit">Перезвоните мне</button>
  </form>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC', {action: 'footer'})
      .then(function(token) {
        document.getElementById('g-recaptcha-response-footer').value=token;
      });
    });
  </script>
  <?php
  return ob_get_clean();
}

// Handler for form_footer form
function handler_form_footer() {

  if ( isset($_POST['id_form_footer']) && wp_verify_nonce($_POST['form_footer_nonce'], 'form-footer-nonce') ) {
    $phone   = $_POST["phone"];
    define('SITE_KEY', '6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC');
    define('SECRET_KEY', '6Ldqp8YUAAAAADg0vtIAZp-h2PSIobmutLuRV4l8');

    function getCaptcha($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6Ldqp8YUAAAAADg0vtIAZp-h2PSIobmutLuRV4l8"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha($_POST['g-recaptcha-response-footer']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'travokosov@yandex.ru';
      $subject = 'Обратный звонок';
      $message .= "Телефон: ". $phone ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $footers = '');
    }

  }

}
add_action('init', 'handler_form_footer');
?>