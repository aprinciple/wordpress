<footer class="footer">
	<span id="footer"></span>
	<div class="footer__container container">
		<h3 class="footer__title"><span>Снег</span>Утиль</h3>
		<div class="footer__contacts">
			<ul class="footer__contacts-list">
				<li class="footer__contacts-list-item">
					<h6 class="footer__contacts-list-item-title">адрес</h6>
					<p class="footer__contacts-list-item-text footer__contacts-list-item-text--adress">
						<?php the_field('contacts_address'); ?>
					</p>
				</li>
				<li class="footer__contacts-list-item">
					<h6 class="footer__contacts-list-item-title">телефон</h6>
					<a class="footer__contacts-list-item-text footer__contacts-list-item-text--phone" href="tel:<?php the_field('contacts_phone'); ?>"><?php the_field('contacts_phone'); ?>
					</a>
				</li>
				<li class="footer__contacts-list-item">
					<h6 class="footer__contacts-list-item-title">email</h6>
					<a class="footer__contacts-list-item-text footer__contacts-list-item-text--email"
						href="mailto:<?php the_field('contacts_email'); ?>"><?php the_field('contacts_email'); ?></a>
				</li>
			</ul>
			<div class="footer__form">
				<?php echo do_shortcode( '[form_footer]' ) ?>
			</div>
		</div>
	</div>
</footer>
<?php echo do_shortcode( '[form_popup]' ) ?>
<div class="alert">
	<span class="alert__icon"></span>
	<div class="alert__message"></div>
	<button class="alert__close">
		<svg class="alert__close-icon" enable-background="new 0 0 60.963 60.842" version="1.1" viewBox="0 0 60.963 60.842"
			xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
			<path
				d="m59.595 52.861-22.501-22.502 22.379-22.379c1.825-1.826 1.825-4.786 0-6.611-1.826-1.825-4.785-1.825-6.611 0l-22.379 22.379-22.378-22.379c-1.826-1.825-4.785-1.825-6.611 0-1.826 1.826-1.826 4.786 0 6.611l22.378 22.379-22.503 22.502c-1.826 1.826-1.826 4.785 0 6.611 0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369l22.502-22.502 22.501 22.502c0.913 0.913 2.109 1.369 3.306 1.369s2.393-0.456 3.306-1.369c1.824-1.825 1.824-4.785-1e-3 -6.611z"
				fill="#231F20" />
		</svg>
	</button>
</div>
<?php wp_footer(); ?>
</body>

</html>