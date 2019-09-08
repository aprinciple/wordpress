<?php
/**
 * The template for displaying 404 pages (not found)
 */
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body class="page-not-found">
    <svg class="page-not-found__image" version="1.1" viewBox="0 0 837 1045" xmlns="http://www.w3.org/2000/svg">
      <g fill="none" fill-rule="evenodd" stroke-width="6">
      <path d="m353 9l273.66 161v317l-273.66 155-273.66-155v-317l273.66-161z" stroke="#007FB2"/>
      <path d="m78.5 529l68.5 40.186v79.125l-68.5 38.689-68.5-38.689v-79.125l68.5-40.186z" stroke="#EF4A5B"/>
      <path d="m773 186l54 31.539v62.098l-54 30.363-54-30.363v-62.098l54-31.539z" stroke="#795D9C"/>
      <path d="m639 529l134 78.847v155.24l-134 75.908-134-75.908v-155.24l134-78.847z" stroke="#F2773F"/>
      <path d="m281 801l102 60.025v118.19l-102 57.788-102-57.788v-118.19l102-60.025z" stroke="#36B455"/>
      </g>
    </svg>

  <div class="not-found">
    <h2 class="not-found__title">404</h2>
    <p class="not-found__text">Нет такой страницы :(</p>
    <div class="not-found__buttons">
      <a onclick="history.back(-1)" class="not-found__button">Вернуться назад</a>
      <a href="<?php echo home_url(); ?>" class="not-found__button">На главную</a>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
