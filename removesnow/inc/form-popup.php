<?php 

/**
* Add form popup
*/

// Shortcode for form_popup
function short_form_popup() {
  $output = form_popup_fields();
  return $output;
}
add_shortcode('form_popup', 'short_form_popup');

// Markup for form_popup form
function form_popup_fields() {

  ob_start(); ?>
  <form class="form form--post form--popup form-popup" action="" method="POST">
    <button class="form-popup__close">
      <svg class="form-popup__close-icon" enable-background="new 0 0 60.963 60.842" version="1.1"
        viewBox="0 0 60.963 60.842" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <path
          d="m59.595 52.861-22.501-22.502 22.379-22.379c1.825-1.826 1.825-4.786 0-6.611-1.826-1.825-4.785-1.825-6.611 0l-22.379 22.379-22.378-22.379c-1.826-1.825-4.785-1.825-6.611 0-1.826 1.826-1.826 4.786 0 6.611l22.378 22.379-22.503 22.502c-1.826 1.826-1.826 4.785 0 6.611 0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369l22.502-22.502 22.501 22.502c0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369c1.824-1.825 1.824-4.785-1e-3 -6.611z"
          fill="#231F20" />
      </svg>
    </button>
    <h5 class="form__title">Узнать стоимость</h5>
    <input class="form__input" type="tel" name="phone" placeholder="Номер телефона" required>
    <input type="hidden" name="id_form_popup" value="id-form-popup">
    <input type="hidden" name="form_popup_nonce" value="<?php echo wp_create_nonce('form-popup-nonce'); ?>">
    <input type="hidden" id="g-recaptcha-response-popup" name="g-recaptcha-response-popup">
    <button class="form__button form-cost__button button" type="submit">Отправить заявку</button>
  </form>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC', {action: 'popup'})
      .then(function(token) {
        document.getElementById('g-recaptcha-response-popup').value=token;
      });
    });
  </script>
  <?php
  return ob_get_clean();
}

// Handler for form_popup form
function handler_form_popup() {

  if ( isset($_POST['id_form_popup']) && wp_verify_nonce($_POST['form_popup_nonce'], 'form-popup-nonce') ) {
    $phone   = $_POST["phone"];
    define('SITE_KEY', '6Ldqp8YUAAAAANXsK2DghNh22VnNQ1v5yU53guuC');
    define('SECRET_KEY', '6Ldqp8YUAAAAADg0vtIAZp-h2PSIobmutLuRV4l8');

    function getCaptcha($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6Ldqp8YUAAAAADg0vtIAZp-h2PSIobmutLuRV4l8"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha($_POST['g-recaptcha-response-popup']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'travokosov@yandex.ru';
      $subject = 'Узнать стоимость';
      $message .= "Телефон: ". $phone ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $popups = '');
    }
  }

}
add_action('init', 'handler_form_popup');
?>