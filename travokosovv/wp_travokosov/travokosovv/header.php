<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class('page--bg'); ?>>
	<header class="header">
		<div class="header__container container">
			<div class="header__top">
				<div class="header__logo">
					<a class="logo" href="<?php echo home_url(); ?>">
						<img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Травокосов">
						<div class="logo__text">
							<h3 class="logo__title">TravokosovV</h3>
							<h3 class="logo__sub-title">С заботой о Вашем доме</h3>
						</div>
					</a>
				</div>
				<div class="header__contacts">
					<div class="contacts">
						<a class="contacts__item" href="<?php the_field('link-vkontakte', '277'); ?>" target="_blank">
							<svg class="contacts__item-icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use>
							</svg>
							travokosov
						</a>
						<a class="contacts__item" href="mailto:<?php the_field('contact-mail', '277'); ?>">
							<svg class="contacts__item-icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#email"></use>
							</svg>
							<?php the_field('contact-mail', '277'); ?>
						</a>
						<a class="contacts__item" href="tel:<?php the_field('contact-phone', '277'); ?>">
							<svg class="contacts__item-icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
							</svg>
							<?php the_field('contact-phone', '277'); ?>
						</a>
						<button class="contacts__button button make-request__button--order" type="button">
							Заказать звонок
						</button>
					</div>
				</div>
			</div>
			<div class="header__menu">
				<nav class="menu">
					<button class="menu__toggle" type="button">
						<svg class="menu__toggle-icon">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#toggle"></use>
						</svg>
					</button>
					<div class="menu__wrapper">
						<?php wp_nav_menu( [
							'theme_location' => 'header-menu'
						] ) ?>
						<div class="menu__contacts">
							<div class="contacts">
								<a class="contacts__item" href="<?php the_field('link-vkontakte', '277'); ?>" target="_blank">
									<svg class="contacts__item-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use>
									</svg>
									travokosov
								</a>
								<a class="contacts__item" href="mailto:<?php the_field('contact-mail', '277'); ?>">
									<svg class="contacts__item-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#email"></use>
									</svg>
									<?php the_field('contact-mail', '277'); ?>
								</a>
								<a class="contacts__item" href="tel:<?php the_field('contact-phone', '277'); ?>">
									<svg class="contacts__item-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
									</svg>
									<?php the_field('contact-phone', '277'); ?>
								</a>
								<button class="contacts__button button make-request__button--order" type="button">
									Заказать звонок
								</button>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>