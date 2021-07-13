<?php if( !defined( 'ABSPATH')){ exit(); } 

$ui = wp_get_current_user();
$user_id = intval($ui->ID);

global $premiumbox, $or_template_directory;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header page__header">
    <div class="header__bar">
      <div class="container header__bar-container">
        <a class="logo header__logo" href="<?= home_url(); ?>"></a>
        <div class="language-switcher"><?= do_shortcode('[gtranslate]'); ?></div>
        <nav class="menu header__menu" id="menu">
          <button class="menu__button" type="button" aria-expanded="false" aria-controls="menu__list"></button>
          <?php wp_nav_menu( ['theme_location' => 'header_menu'] ); ?>
        </nav>
      </div>
    </div>
  </header>