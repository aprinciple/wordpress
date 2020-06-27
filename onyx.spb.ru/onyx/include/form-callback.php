<?php 

/**
* Add form callback
*/

// Shortcode for callback
function short_form_callback() {
  $output = form_callback_fields();
  return $output;
}
add_shortcode('form_callback', 'short_form_callback');

// Markup for form_callback form
function form_callback_fields() {

  ob_start(); ?>
    <div class="b-callback">
      <button class="b-callback__button b-callback__button--opener" type="button" aria-label="Показать форму"></button>
      <button class="b-callback__close" type="button" aria-label="Скрыть форму"></button>
      <form class="b-callback__form form--post" action="" method="POST">
        <label class="b-callback__label">
          <span class="b-callback__label-text">Заказать звонок</span>
          <input type="tel" name="phone" class="b-callback__input" pattern="(\+?\d[- .]*){7,13}" placeholder="+7(___) ___ __ __" required>
        </label>
        <label class="b-callback__consent">
          <input class="b-callback__consent-chekbox" type="checkbox" name="consent" checked required>
          <span class="b-callback__consent-text">Я согласен на обработку персональных данных</span>
        </label>
        <button class="b-callback__button" type="submit" aria-label="Заказать звонок"></button>
        <input type="hidden" name="id_form_callback" value="id-form-callback">
        <input 
          type="hidden" 
          name="form_callback_nonce" 
          value="<?php echo wp_create_nonce('form-callback-nonce'); ?>">
        <!-- <input 
          type="hidden" 
          id="g-recaptcha-response-callback" 
          name="g-recaptcha-response-callback"> -->
      </form>
    </div>
    <!-- <script>
      grecaptcha.ready(function() {
        grecaptcha.execute('6LdYRuYUAAAAANPdfG2S96uadzQBfF9BThAHRxPO', {action: 'callback'})
          .then(function(token) {
            document.getElementById('g-recaptcha-response-callback').value=token;
          });
        });
    </script> -->
  
  <?php
  return ob_get_clean();
}

// Handler for form_callback form
function handler_form_callback() {

  if ( isset($_POST['id_form_callback']) && wp_verify_nonce($_POST['form_callback_nonce'], 'form-callback-nonce') ) {
    $phone  = htmlentities( trim( $_POST["phone"] ) );

    // define('SITE_KEY', '6LdYRuYUAAAAANPdfG2S96uadzQBfF9BThAHRxPO');
    // define('SECRET_KEY', '6LdYRuYUAAAAAOKvhjL3k7Uxw4nm3Y7SdMxSS0ho');

    // function getCaptcha2($secretKey) {
    //   $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LdYRuYUAAAAAOKvhjL3k7Uxw4nm3Y7SdMxSS0ho"."&response={$secretKey}");
    //   $return = json_decode($response);
    //   return $return;
    // }

    // $return = getCaptcha2($_POST['g-recaptcha-response-callback']);

    if(true) {
      // $return->success == true && $return->score > 0.5
      $to = 'avprinciple@gmail.com';
      $subject = 'Заказать звонок';
      $message .= "Телефон: ". $phone;
      $headers = array(
        'From: Оникс <info@onyx.spb.ru>',
      );
      $response_mail = wp_mail( $to, $subject, $message, $headers);
    }

  }

}
add_action('init', 'handler_form_callback');
?>