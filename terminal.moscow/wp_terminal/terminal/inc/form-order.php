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
  <form class="form--post form--popup form-order" action="" method="POST">
    <div class="input-block">
      <label for="g-1">Имя контактного лица</label>
      <input id="g-1" type="text" name="user_name">
    </div>
    <div class="input-block">
      <label for="g-2">Почта</label>
      <input id="g-2" type="email" name="user_email">
    </div>
    <div class="input-block">
      <label for="g-3">Что необходимо?</label>
      <textarea id="g-3" name="user_text"></textarea>
    </div>
    <button type="submit" class="main-btn">Отправить</button>

    <input type="hidden" name="id_form_order" value="id-form-order">
    <input type="hidden" name="form_order_nonce" value="<?php echo wp_create_nonce('form-order-nonce'); ?>">
    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7', {action: 'order'})
      .then(function(token) {
        document.getElementById('g-recaptcha-response').value=token;
      });
    });
    </script>
  </form>
  <?php
  return ob_get_clean();
}

// Handler for form_order form
function handler_form_order() {
  if ( isset($_POST['id_form_order']) && wp_verify_nonce($_POST['form_order_nonce'], 'form-order-nonce') ) {
    $name   = $_POST["user_name"];
    $email  = $_POST["user_email"];
    $text   = $_POST["user_text"];
    define('SITE_KEY', '6LddE9IUAAAAAMKuw6R1nQZgGY60Akg_Q0IZHma7');
    define('SECRET_KEY', '6LddE9IUAAAAAN5gNtmv27zHehrRqmxUhqfR5c4_');

    function getCaptcha($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LddE9IUAAAAAN5gNtmv27zHehrRqmxUhqfR5c4_"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha($_POST['g-recaptcha-response']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'info@terminal.moscow';
      $subject = 'Заказать звонок';
      $message = "Имя:\r\n". $name ."\r\n\r\n";
      $message .= "Почта:\r\n". $email ."\r\n\r\n";
      $message .= "Сообщение:\r\n". $text ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_order');
?>