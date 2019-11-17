<footer class="footer">
	<div class="footer__container container">
		<div class="footer__item footer__item--logo">
			<a class="logo" href="<?php echo home_url(); ?>">
				<img class="logo__image" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="Травокосов">
				<div class="logo__text">
					<h3 class="logo__title">TravokosovV</h3>
					<h3 class="logo__sub-title">С заботой о Вашем доме</h3>
				</div>
			</a>
			<p class="footer__item-text">
				Мы оказываем полный спектр услуг по благоустройству территории дачного участка
			</p>
		</div>
		<div class="footer__item">
			<h6 class="footer__title">Адрес</h6>
			<ul class="footer__list">
				<li class="footer__list-item">
					<?php the_field('contact-address', '277'); ?>
				</li>
			</ul>
		</div>
		<div class="footer__item">
			<h6 class="footer__title">Контакты</h6>
			<ul class="footer__list">
				<li class="footer__list-item">
					<a class="footer__list-link" href="tel:<?php the_field('contact-phone', '277'); ?>">
					<?php the_field('contact-phone', '277'); ?>
					</a>
				</li>
				<li class="footer__list-item">
					<a class="footer__list-link" href="mailto:<?php the_field('contact-mail', '277'); ?>">
					<?php the_field('contact-mail', '277'); ?>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer__item footer__item--social">
			<div class="social">
				<h6 class="social__title">Соц-сети</h6>
				<ul class="social__list">
					<li class="social__item">
						<a class="social__link" href="<?php the_field('link-vkontakte', '277'); ?>" target="_blank">
							<svg class="social__link-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#vk"></use>
							</svg>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="<?php the_field('link-facebook', '277'); ?>" target="_blank">
							<svg class="social__link-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#facebook"></use>
							</svg>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="<?php the_field('link-instagram', '277'); ?>" target="_blank">
							<svg class="social__link-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#instagram"></use>
							</svg>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="<?php the_field('link-twitter', '277'); ?>" target="_blank">
							<svg class="social__link-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#twitter"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="alert">
	<span class="alert__icon"></span>
	<div class="alert__message"></div>
	<button class="alert__close">
		<svg class="alert__close-icon">
			<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/sprite.svg#icon-close"></use>
		</svg>
	</button>
</div>
<?php wp_footer(); ?>
</body>

</html>