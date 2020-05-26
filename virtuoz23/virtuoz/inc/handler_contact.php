<?php

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
  
  if ( !empty( trim($_POST['email']) ) ) {
    $mail = htmlspecialchars( $_POST['email'] );
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

  $to = 'virtuoz-mebel.23@ya.ru';
  $headers = array(
    "From: $name <mail@virtuoz23.ru>",
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