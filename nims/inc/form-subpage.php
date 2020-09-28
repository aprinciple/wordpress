<?php 

/**
* Add form subpage
*/

// Shortcode for form_subpage
function short_form_subpage() {
  $output = form_subpage_fields();
  return $output;
}
add_shortcode('form_subpage', 'short_form_subpage');

// Markup for form_subpage form
function form_subpage_fields() {
  $frontpage_id = get_option( 'page_on_front' );
  ob_start(); ?>
    <form class="form form--post form-subpage" action="" method="POST">
      <div class="form__wrapper">
        <div class="form__text">
          <h3 
            class="form__title" 
            data-san="fade-in-right"
          >
            <?php the_field('form_title', $frontpage_id); ?>
          </h3>
          <p 
            class="form__subtitle" 
            data-san="fade-in-bottom" 
            data-san-delay="200"
          >
            <?php the_field('form_text', $frontpage_id); ?>
          </p>
        </div>
        <div class="form__fields">
          <input class="form__input" type="text" name="name" placeholder="Name or Company" required />
          <input class="form__input" type="tel" name="phone" pattern="[0-9]{7,11}" placeholder="Contact Phone Number" required />
          <textarea class="form__textarea" name="message" placeholder="Tell us a bit about your project..."></textarea>
        </div>
        <button 
          class="button form__button" 
          type="submit" 
          data-san="fade-in-top" 
          data-san-delay="400"
        >
          <span class="button__wrapper button__wrapper--transparent form__button-wrapper">
            <span class="button__text">
              Submit form
            </span>
          </span>
        </button>

        <input 
          type="hidden" 
          name="id_form_subpage" 
          value="id-form-subpage">
        <input 
          type="hidden" 
          name="form_subpage_nonce" 
          value="<?php echo wp_create_nonce('form-subpage-nonce'); ?>">
        <input 
          type="hidden" 
          id="g-recaptcha-response-subpage" 
          name="g-recaptcha-response-subpage">

      </div>
    </form>
    <!-- <script>
      grecaptcha.ready(function() {
        grecaptcha.execute('6LfK3uAUAAAAADkInJv9kTtSxSlW9VOk-Txt0uVq', {action: 'subpage'})
          .then(function(token) {
            document.getElementById('g-recaptcha-response-subpage').value=token;
          });
        });
    </script> -->
  <?php
  return ob_get_clean();
}

// Handler for form_subpage form
function handler_form_subpage() {

  if ( isset($_POST['id_form_subpage']) && wp_verify_nonce($_POST['form_subpage_nonce'], 'form-subpage-nonce') ) {
    
    $name    = $_POST["name"];
    $phone   = $_POST["phone"];
    $comment = $_POST["message"];
    // define('SITE_KEY', '6LfK3uAUAAAAADkInJv9kTtSxSlW9VOk-Txt0uVq');
    // define('SECRET_KEY', '6LfK3uAUAAAAAGJPSQl6ijQW1icOo_mrw6hzQeWr');

    // function getCaptcha2($secretKey) {
    //   $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LfK3uAUAAAAAGJPSQl6ijQW1icOo_mrw6hzQeWr"."&response={$secretKey}");
    //   $return = json_decode($response);
    //   return $return;
    // }

    // $return = getCaptcha2($_POST['g-recaptcha-response-subpage']);

    // if($return->success == true && $return->score > 0.5) {}
    $to = 'avprinciple@gmail.com';
    $subject = 'Feedback';
    $message = "Name: ". $name ."\r\n\r\n";
    $message .= "Phone: ". $phone ."\r\n\r\n";
    $message .= "Message: ". $comment ."\r\n\r\n";
    $response_mail = wp_mail( $to, $subject, $message, $headers = '');
  }

}
add_action('init', 'handler_form_subpage');
?>