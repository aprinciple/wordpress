<?php 

/**
* Add form contact
*/

// Shortcode for form_contact
function short_form_contact() {
  $output = form_contact_fields();
  return $output;
}
add_shortcode('form_contact', 'short_form_contact');

// Markup for form_contact form
function form_contact_fields() {

  ob_start(); ?>
    <form class="form form--post form-contact page-contacts__form" action="" method="POST">
      <h4 class="form__title page-contacts__form-title">
      <?php the_field('form_title'); ?>
      </h4>
      <p class="form__slogan page-contacts__form-slogan">
      <?php the_field('form_subtitle'); ?>
      </p>
      <div class="form__wrapper form-contact__wrapper">
        <label class="form__label form-contact__label">
          <span class="form__label-text"><?php the_field('form_name'); ?></span>
          <input class="form__input page-contacts__form-input" type="text" name="user_name" placeholder="Alex" required>
        </label>
        <label class="form__label form-contact__label">
          <span class="form__label-text"><?php the_field('form_email'); ?></span>
          <input class="form__input page-contacts__form-input" type="email" name="user_email" placeholder="email@gmail.com" required>
        </label>
      </div>
      <label class="form__label">
        <span class="form__label-text"><?php the_field('form_message'); ?></span>
        <textarea class="form__textarea page-contacts__form-textarea" name="user_text" required></textarea>
      </label>
      <button class="form__button form-contact__button button button--rounded" type="submit">
      <?php the_field('form_btn'); ?>
      </button>
      <input type="hidden" name="id_form_contact" value="id-form-contact">
      <input type="hidden" name="form_contact_nonce" value="<?php echo wp_create_nonce('form-contact-nonce'); ?>">
      <input type="hidden" id="g-recaptcha-response-contact" name="g-recaptcha-response-contact">
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LfWx9IUAAAAAEhy2MbEGZ5c0ScWhM9yHkE8_QNU', {action: 'contact'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-contact').value=token;
        });
      });
    </script>
  <?php
  return ob_get_clean();
}

// Handler for form_contact form
function handler_form_contact() {

  if ( isset($_POST['id_form_contact']) && wp_verify_nonce($_POST['form_contact_nonce'], 'form-contact-nonce') ) {
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

    $return = getCaptcha2($_POST['g-recaptcha-response-contact']);

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
add_action('init', 'handler_form_contact');
?>