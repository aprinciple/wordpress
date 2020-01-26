<?php 
  $frontpage_id = get_option( 'page_on_front' ); 
?>
<footer class="footer">
	<div class="wrapper">
		<div class="footer-row">
			<div class="footer-main">
				<div class="footer-logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.svg" alt="Терминал">
					</a>
				</div>
				<p>(ООО «Терминал») обеспечивает нефтепродуктами компании по всей<br>России и осуществляет поставки на экспорт.</p>
			</div>
			<div class="footer-info">
			<?php wp_nav_menu( ['theme_location' => 'footer-menu'] ); ?>
				<div class="footer-info__row">
					<div class="footer-col">
						<span class="footer-col__subtitle">Адрес</span>
						<?php the_field('footer_address', $frontpage_id); ?>
					</div>
					<div class="footer-col">
						<span class="footer-col__subtitle">Телефон</span>
						<p><a href="tel:<?php the_field('footer_phone', $frontpage_id); ?>"><?php the_field('footer_phone', $frontpage_id); ?></a></p>
					</div>
					<div class="footer-col">
						<span class="footer-col__subtitle">E-mail</span>
						<p><a href="mailto:<?php the_field('footer_email', $frontpage_id); ?>"><?php the_field('footer_email', $frontpage_id); ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end footer -->
<!-- modal-form -->
<div class="modal-overlay"></div>
<div class="modal" id="modal-form">
	<div class="close"></div>
	<div class="modal-content">
		<h3 class="modal-title">Заказать звонок!</h3>
		<?php echo do_shortcode( '[form_order]' ); ?>
	</div>
</div>
<div class="alert">
  <span class="alert__icon"></span>
  <div class="alert__message"></div>
  <button class="alert__close"></button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>