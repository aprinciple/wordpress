<?php 

/**
* Add form subsidy
*/

// Shortcode for subsidy
function short_form_subsidy() {
  $output = form_subsidy_fields();
  return $output;
}
add_shortcode('form_subsidy', 'short_form_subsidy');

// Markup for form_subsidy form
function form_subsidy_fields() {

  ob_start(); ?>
    <form 
      class="form form--post form-contact subsidy-contacts__form-contact" 
      action="" 
      method="POST">
      <h4 class="form__title">Scrivici</h4>
      <p class="form__slogan">
        Parlaci del tuo compito, ti richiameremo e ti offriremo una soluzione.
      </p>
      <div class="form__wrapper form-contact__wrapper">
        <label class="form__label form-contact__label">
          <span class="form__label-text subsidy-contacts__form-contact-label-text">
            Nome
          </span>
          <input class="form__input" type="text" name="user_name" placeholder="Alex" required>
        </label>
        <label class="form__label form-contact__label">
          <span class="form__label-text subsidy-contacts__form-contact-label-text">
            E-mail
          </span>
          <input class="form__input" type="email" name="user_email" placeholder="email@gmail.com" required>
        </label>
      </div>
      <label class="form__label">
        <span class="form__label-text subsidy-contacts__form-contact-label-text">
          Messaggio
        </span>
        <textarea class="form__textarea" name="user_text" required></textarea>
      </label>
      <button 
        class="form__button form-contact__button button button--rounded subsidy-contacts__form-contact-button" 
        type="submit">
        Per scrivere
      </button>
      <input type="hidden" name="id_form_subsidy" value="id-form-subsidy">
      <input 
        type="hidden" 
        name="form_subsidy_nonce" 
        value="<?php echo wp_create_nonce('form-subsidy-nonce'); ?>">
      <input 
        type="hidden" 
        id="g-recaptcha-response-subsidy" 
        name="g-recaptcha-response-subsidy">
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU', {action: 'subsidy'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-subsidy').value=token;
        });
      });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_subsidy form
function handler_form_subsidy() {

  if ( isset($_POST['id_form_subsidy']) && wp_verify_nonce($_POST['form_subsidy_nonce'], 'form-subsidy-nonce') ) {
    $name  = htmlentities( trim( $_POST["user_name"] ) );
    $email = htmlentities( trim( $_POST["user_email"] ) );
    $text  = htmlentities( trim( $_POST["user_text"] ) );
    $headers = 'From: Consulstaff <bando.veneto@consulstaff.com>';
    define('SITE_KEY', '6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU');
    define('SECRET_KEY', '6LfWx9IUAAAAALdH4Xm7HQ1DY9WclNaiYiWwARQ3');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LfWx9IUAAAAALdH4Xm7HQ1DY9WclNaiYiWwARQ3"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-subsidy']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'bando.veneto@consulstaff.com';
      $subject = 'Обратная связь';
      $message = "Имя:\r\n". $name ."\r\n\r\n";
      $message .= "Почта:\r\n". $email ."\r\n\r\n";
      $message .= "Сообщение:\r\n". $text ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers);
    }

  }

}
add_action('init', 'handler_form_subsidy');
?>