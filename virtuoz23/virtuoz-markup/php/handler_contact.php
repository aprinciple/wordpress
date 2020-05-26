<!-- <?php

require_once( dirname(__FILE__) . '/../../../../wp-load.php' );

function success() {
  // wp_redirect( add_query_arg('status', 'success', site_url('contacts')) );
  exit;
}

function error($str) {
  // wp_redirect( add_query_arg('status', 'error', site_url('contacts')) );
  exit;
}

function fail() {
  // wp_redirect( add_query_arg('status', 'fail', site_url('contacts')) );
  exit;
}

if ( isset($_POST['id_form_contact']) && wp_verify_nonce($_POST['form_contact_nonce'], 'form-contact-nonce') ) {  
  if ( !empty( trim($_POST['name']) ) ) {
    $name = htmlspecialchars( $_POST['name'] );
  } else {
    error('Имя');
  }
  
  if ( !empty( trim($_POST['mail']) ) ) {
    $mail = htmlspecialchars( $_POST['mail'] );
  } else {
    error('Почта');
  }
  
  if ( !empty( trim($_POST['phone']) ) ) {
    $phone = htmlspecialchars( $_POST['phone'] );
  } else {
    error('Телефон');
  }
  
  if ( !empty( trim($_POST['message']) ) ) {
    $message = htmlspecialchars( $_POST['message'] );
  } else {
    error('Сообщение');
  }

  $to = 'avprinciple@gmail.com';
  $headers = array(
    "From: $name <no-reply@mail.com>",
    "Reply-To: $name <$mail>",
  );
  $theme   = 'Обратная связь';
  $letter  = "Имя: ". $name ."\r\n";
  $letter .= "Почта: ". $mail ."\r\n";
  $letter .= "Телефон: ". $phone ."\r\n";
  $letter .= "Сообщение:\r\n". $message;
  $response_mail = wp_mail( $to, $theme, $letter, $headers );

  if ( $response_mail ) {
    success();
  } else {
    fail();
  }
} else {
  fail();
}

?> -->

<?php 
  if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
    $name     = htmlspecialchars( $_POST["name"] );
    $email    = htmlspecialchars( $_POST["email"] );
    $phone  = htmlspecialchars( $_POST["phone"] );
    $message = htmlspecialchars( $_POST["message"] );
    // define('SITE_KEY', '6LdseuEUAAAAALw4N6MPyKyYlZLfl9R7FH9DR84T');
    // define('SECRET_KEY', '6LdseuEUAAAAAE-4s0FIvMe7bpcqUr4GDMvitwij');

    // function getCaptcha($secretKey) {
    //   $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LdseuEUAAAAAE-4s0FIvMe7bpcqUr4GDMvitwij"."&response={$secretKey}");
    //   $return = json_decode($response);
    //   return $return;
    // }

    // $return = getCaptcha($_POST['g-recaptcha-response-ask']);

    if(true) {
      // $return->success == true && $return->score > 0.5
      $to = 'avprinciple@gmail.com';
      $subject = 'Обратная связь';
      $letter = "Имя: ". $name ."\r\n\r\n";
      $letter .= "Почта: ". $email ."\r\n\r\n";
      $letter .= "Телефон: ". $phone ."\r\n\r\n";
      $letter .= "Сообщение:\r\n". $message ."\r\n\r\n";
      $headers = array(
        'From' => 'avprinciple@gmail.com',
        'Reply-To' => 'avprinciple@gmail.com'
      );

      mail( $to, $subject, $letter, $headers );
    }

  }
?>