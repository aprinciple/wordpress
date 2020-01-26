<?php 

/**
* Add form home
*/

// Shortcode for home
function short_form_home() {
  $output = form_home_fields();
  return $output;
}
add_shortcode('form_home', 'short_form_home');

// Markup for form_home form
function form_home_fields() {

  ob_start(); ?>
    <form class="form form--post form-home_contact" action="" method="POST">
      <h4 class="form__title"><?php the_field('home_contacts_form_title'); ?></h4>
      <p class="form__slogan"><?php the_field('home_home_contacts_form_subtitle'); ?></p>
      <div class="form__wrapper form-home_contact__wrapper">
        <label class="form__label form-home_contact__label">
          <span class="form__label-text"><?php the_field('home_contacts_form_name'); ?></span>
          <input class="form__input" type="text" name="user_name" placeholder="Alex" required>
        </label>
        <label class="form__label form-home_contact__label">
          <span class="form__label-text"><?php the_field('home_contacts_form_mail'); ?></span>
          <input class="form__input" type="email" name="user_email" placeholder="email@gmail.com" required>
        </label>
      </div>
      <label class="form__label">
        <span class="form__label-text"><?php the_field('home_contacts_form_message'); ?></span>
        <textarea class="form__textarea" name="user_text" required></textarea>
      </label>
      <button class="form__button form-home_contact__button button button--rounded" type="submit"><?php the_field('home_contacts_form_button'); ?></button>
      <input type="hidden" name="id_form_home" value="id-form-home">
      <input type="hidden" name="form_home_nonce" value="<?php echo wp_create_nonce('form-home-nonce'); ?>">
      <input type="hidden" id="g-recaptcha-response-home" name="g-recaptcha-response-home">
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU', {action: 'home'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-home').value=token;
        });
      });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_home form
function handler_form_home() {

  if ( isset($_POST['id_form_home']) && wp_verify_nonce($_POST['form_home_nonce'], 'form-home-nonce') ) {
    $name   = $_POST["user_name"];
    $email   = $_POST["user_email"];
    $text   = $_POST["user_text"];
    define('SITE_KEY', '6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU');
    define('SECRET_KEY', '6LfWx9IUAAAAALdH4Xm7HQ1DY9WclNaiYiWwARQ3');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LfWx9IUAAAAALdH4Xm7HQ1DY9WclNaiYiWwARQ3"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-home']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'avprinciple@gmail.com';
      $subject = 'Обратная связь';
      $message = "Имя:\r\n". $name ."\r\n\r\n";
      $message .= "Почта:\r\n". $email ."\r\n\r\n";
      $message .= "Сообщение:\r\n". $text ."\r\n\r\n";
      $response_mail = wp_mail( $to, $subject, $message, $headers = '');
    }

  }

}
add_action('init', 'handler_form_home');
?>