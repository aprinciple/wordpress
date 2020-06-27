<?php 

/**
* Add form order
*/

// Shortcode for form_order
function short_form_order() {
  $output = form_order_fields();
  return $output;
}
add_shortcode('form_order', 'short_form_order');

// Markup for form_order form
function form_order_fields() {

  ob_start(); ?>
  <form class="form form--post form--popup form-order" action="" method="POST">
    <button class="form-order__close" type="button" aria-label="Закрыть форму"></button>
    <h3 class="form__title">Оформить заявку</h3>
    <label class="form__label">
      <input class="form__input" type="text" name="user_name" placeholder="Александр Владимирович" required>
    </label>
    <label class="form__label">
      <input class="form__input" type="email" name="user_email" placeholder="email@yandex.ru" required>
    </label>
    <label class="form__label">
      <input class="form__input" type="tel" name="user_phone" placeholder="+79885553535" required>
    </label>
    <input type="hidden" name="id_form_order" value="id-form-order">
    <input type="hidden" name="form_order_nonce" value="<?php echo wp_create_nonce('form-order-nonce'); ?>">
    <!-- <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response"> -->
    <button class="form__button button" type="submit">Отправить</button>
  </form>
  <!-- <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LcRE8IUAAAAAKUgSwOlfnrfLEwJN1cqbApfanxl', {action: 'order'})
      .then(function(token) {
        document.getElementById('g-recaptcha-response').value=token;
      });
    });
  </script> -->
  <?php
  return ob_get_clean();
}

// Handler for form_order form
function handler_form_order() {

  if ( isset($_POST['id_form_order']) && wp_verify_nonce($_POST['form_order_nonce'], 'form-order-nonce') ) {
    $name  = htmlentities( trim( $_POST["user_name"] ) );
    $phone = htmlentities( trim( $_POST["user_phone"] ) );
    $email = htmlentities( trim( $_POST["user_email"] ) );
    // define('SITE_KEY', '6LcRE8IUAAAAAKUgSwOlfnrfLEwJN1cqbApfanxl');
    // define('SECRET_KEY', '6LcRE8IUAAAAADqsDST0kcb43hMQ2p2pTI_8G_V2');

    // function getCaptcha($secretKey) {
    //   $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LcRE8IUAAAAADqsDST0kcb43hMQ2p2pTI_8G_V2"."&response={$secretKey}");
    //   $return = json_decode($response);
    //   return $return;
    // }

    // $return = getCaptcha($_POST['g-recaptcha-response']);

    // $return->success == true && $return->score > 0.5
    if(true) {
      $to = 'avprinciple@gmail.com';
      $subject = 'Заказ';
      $headers = array(
        'From: Оникс <info@onyx.spb.ru>',
      );
      $message = "Имя:\r\n". $name ."\r\n\r\n";
      $message .= "Телефон:\r\n". $phone ."\r\n\r\n";
      $message .= "Почта:\r\n". $email ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers);
    }

  }

}
add_action('init', 'handler_form_order');
?>