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
  $frontpage_id = get_option( 'page_on_front' );
  ob_start(); ?>
    <form 
      class="form form--post subscription__form" 
      action="" 
      method="POST" 
      data-san="animate__fadeIn" data-san-delay="600"
    >
      <input class="form__input subscription__form-input" type="email" name="email" placeholder="Электронная почта" required />
      <button class="button form__button subscription__form-button" type="submit">
        Подписаться
      </button>
      <input 
        type="hidden" 
        name="id_form_request" 
        value="id-form-request">
      <input 
        type="hidden" 
        name="form_request_nonce" 
        value="<?php echo wp_create_nonce('form-request-nonce'); ?>">
    </form>
  <?php
  return ob_get_clean();
}

// Handler for form_request form
function handler_form_request() {

  if ( isset($_POST['id_form_request']) && wp_verify_nonce($_POST['form_request_nonce'], 'form-request-nonce') ) {
    $email = $_POST["email"];

    $to = 'avprinciple@gmail.com';
    $subject = 'Подписка на рассылку';
    $message = "Почта:". $email ."\r\n\r\n";
    $response_mail = wp_mail( $to, $subject, $message, $headers = '');
  }

}
add_action('init', 'handler_form_request');
?>