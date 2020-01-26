<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
	<meta name="theme-color" content="#000">
	<meta name="msapplication-navbutton-color" content="#000">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
</head>
<body>
	<!-- start header -->
	<header class="header header-main">
		<div class="wrapper">
			<div class="header-logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Терминал">
				</a>
			</div>
			<div class="header-nav">
				<?php wp_nav_menu( ['theme_location' => 'header-menu'] ); ?>
				<ul class="header-info__social">
					<li>
						<a href="<?php the_field('footer_in'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-ico.svg" alt="Instagram">
						</a>
					</li>
					<li>
						<a href="<?php the_field('footer_fb'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-ico.svg" alt="Facebook">
						</a>
					</li>
					<li>
						<a href="<?php the_field('footer_vk'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk-ico.svg" alt="VK">
						</a>
					</li>
				</ul>
				<a href="tel:<?php the_field('footer_phone', $frontpage_id); ?>" class="header-phone"><?php the_field('footer_phone', $frontpage_id); ?></a>
			</div>
			<div class="header-bar"></div>
		</div>
		<div class="header-info">
			<div class="header-info__wrap">
				<div class="header-info__logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Терминал">
					</a>
				</div>
				<p>(ООО «Терминал») обеспечивает<br> нефтепродуктами компании по всей<br>России и осуществляет поставки на экспорт.</p>
				<a href="#modal-form" class="main-btn button-modal">Заказать звонок</a>
				<ul class="header-info__social">
					<li>
						<a href="<?php the_field('footer_in'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-ico.svg" alt="Instagram">
						</a>
					</li>
					<li>
						<a href="<?php the_field('footer_fb'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-ico.svg" alt="Facebook">
						</a>
					</li>
					<li>
						<a href="<?php the_field('footer_vk'); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk-ico.svg" alt="VK">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>