<?php 

/**
* Add form count
*/

// Shortcode for count
function short_form_count() {
  $output = form_count_fields();
  return $output;
}
add_shortcode('form_count', 'short_form_count');

// Markup for form_count form
function form_count_fields() {

  ob_start(); ?>

    <form 
      id="count-form" 
      class="count-form form--post" 
      name="count-form" 
      action=""
      method="POST" 
      enctype="multipart/form-data">

      <div class="step1">
        <b>выберете интересующую категорию:</b>
        <select name="category" id="category">
          <option></option>
          <option>вывеска</option>
          <option>световой короб</option>
          <option selected>объемные буквы</option>
          <option>плоские буквы</option>
          <option>входная группа</option>
          <option>крышная установка</option>
          <option>рекламная стела</option>
          <option>бегущая строка</option>
          <option>комплексное оформление</option>
          <option>панель-кронштейны</option>
          <option>информационный стенд</option>
          <option>табличка или штендер</option>
          <option>согласование вывесок</option>
          <option>фрезерная и лазерная резка</option>
          <option>дизайн и полиграфия</option>
          <option>плоттерная резка и печать</option>
        </select>
      </div>
      
      <div class="step2">
        <b>какие сроки?</b>
        <p>
          <label for="termChoice1" class="radio-container">
            "Вчера"
            <input type="radio" id="termChoice1" name="term" value="yesterday">
            <span class="radiomark"></span>
          </label>
        </p>
        <p>
          <label for="termChoice2" class="radio-container">
            1-3 дня
            <input type="radio" id="termChoice2" name="term" value="three">
            <span class="radiomark"></span>
          </label>
        </p>
        <p>
          <label for="termChoice3" class="radio-container">
            1-2 недели
            <input type="radio" id="termChoice3" name="term" value="week">
            <span class="radiomark"></span>
          </label>
        </p>
        <p>
          <label for="termChoice4" class="radio-container">
            Не тороплюсь
            <input type="radio" id="termChoice4" name="term" value="nohurry">
            <span class="radiomark"></span>
          </label>
        </p>
      </div>

      <div class="step3">
        <b>какие услуги будут нужны?</b>
        <p>
          <label for="serviceChoise1" class="check-container">
            Монтаж
            <input type="checkbox" name="service" id="serviceChoise1" value="service_mount">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <label for="serviceChoise2" class="check-container">
            Дизайн
            <input type="checkbox" name="service" id="serviceChoise2" value="service_design">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <label for="serviceChoise3" class="check-container">
            Согласование
            <input type="checkbox" name="service" id="serviceChoise3" value="service_match">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <label for="serviceChoise4" class="check-container">
            Замеры
            <input type="checkbox" name="service" id="serviceChoise4" value="service_measure">
            <span class="checkmark"></span>
          </label>
        </p>
      </div>

      <div class="step4">
        <b>укажите адрес размещения вывески</b>
        <input type="text" name="address" id="address" placeholder="например: ул. Красная 186">
      </div>

      <div class="step5">
        <b>есть макет? загрузите. или жмите далее</b>
        <p>файл</p>
        <button type="button" id="file-upload" class="file-upload"></button>
        <input type="file" name="file" id="file" class="d-none">
      </div>

      <div class="step6">
        <b>укажите телефон для связи:</b>
        <input type="text" name="phone" id="phone" placeholder="Номер телефона *" required>
      </div>
      <button type="button" class="btn prev-step">назад</button>
      <button type="button" class="btn next-step">далее</button>
      <button type="submit" class="btn count-btn">✓ узнать стоимость</button>

      <p class="rules-check">
        <label for="rules" class="check-container">
          даю согласие на 
          <a href="#">обработку персональных данных</a>
          <input type="checkbox" name="consent" id="rules" value="Да">
          <span class="checkmark"></span>
        </label>
      </p>

      <!-- Recaptcha -->
      <input type="hidden" name="id_form_count" value="id-form-count">
      <input 
        type="hidden" 
        name="form_count_nonce" 
        value="<?php echo wp_create_nonce('form-count-nonce'); ?>">
      <input 
        type="hidden" 
        id="g-recaptcha-response-count" 
        name="g-recaptcha-response-count">
    </form>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LdYRuYUAAAAANPdfG2S96uadzQBfF9BThAHRxPO', {action: 'count'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response-count').value=token;
        });
      });
    </script>
  
  <?php
  return ob_get_clean();
}

// Handler for form_count form
function handler_form_count() {

  if ( isset($_POST['id_form_count']) && wp_verify_nonce($_POST['form_count_nonce'], 'form-count-nonce') ) {
    $category = $_POST["category"];

    $isTerm   = $_POST["term"];
    $term = 'Не указано.';
    if ($isTerm == 'yesterday') {
      $term = 'Вчера';
    } elseif ($isTerm == 'three') {
      $term = '1-3 дня';
    } elseif ($isTerm == 'week') {
      $term = '1-2 недели';
    } elseif ($isTerm == 'noharry') {
      $term = 'Не тороплюсь';
    }

    $isService = $_POST["service"];
    $service = 'Не указано.';
    if ($isService == 'service_mount') {
      $service = 'Монтаж';
    } elseif ($isService == 'service_design') {
      $service = 'Дизайн';
    } elseif ($isService == 'service_match') {
      $service = 'Согласование';
    } elseif ($isService == 'service_measure') {
      $service = 'Замеры';
    }

    $address = $_POST["address"];
    $phone   = $_POST["phone"];

    if ( isset($_FILES['file']['name']) && $_FILES['file']['name'] != '' ) {

      if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
      }

      $file = $_FILES['file'];

      $upload_overrides = array(
        'test_form' => false
      );

      $movefile = wp_handle_upload( $file, $upload_overrides );

      }

      $attachment = $movefile['file'];

      // $attachments = array(
      //   $movefile['file'], 
      // );

    define('SITE_KEY', '6LdYRuYUAAAAANPdfG2S96uadzQBfF9BThAHRxPO');
    define('SECRET_KEY', '6LdYRuYUAAAAAOKvhjL3k7Uxw4nm3Y7SdMxSS0ho');

    function getCaptcha2($secretKey) {
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="."6LdYRuYUAAAAAOKvhjL3k7Uxw4nm3Y7SdMxSS0ho"."&response={$secretKey}");
      $return = json_decode($response);
      return $return;
    }

    $return = getCaptcha2($_POST['g-recaptcha-response-count']);

    if($return->success == true && $return->score > 0.5) {
      $to = 'info@maro-reklama.ru';
      $subject = 'Рассчёт стоимости';
      $message = "Категория: ". $category ."\r\n\r\n";
      $message .= "Срок: ". $term ."\r\n\r\n";
      $message .= "Услуга: ". $service ."\r\n\r\n";
      $message .= "Адрес: ". $address ."\r\n\r\n";
      $message .= "Телефон: ". $phone ."\r\n\r\n";
      $headers = array(
        'From: Maro <info@maro-reklama.ru>',
      );
      $response_mail = wp_mail( $to, $subject, $message, $headers, $attachment);
    }

    unlink($attachment);

  }

}
add_action('init', 'handler_form_count');
?>