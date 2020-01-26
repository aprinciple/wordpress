<?php $frontpage_id = get_option( 'page_on_front' ); ?>
	<footer class="footer">
		<div class="footer__container container">
			<div class="footer__item">
				<a class="footer__logo" href="<?php echo home_url(); ?>">
					<img class="footer__logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.svg" alt="Logo of Consul Staff">
				</a>
				<div class="footer__nav">
					<?php wp_nav_menu( ['theme_location' => 'footer-menu'] ); ?>
				</div>
			</div>
			<div class="footer__item">
				<a class="footer__email" href="mailto:<?php the_field('footer_mail', $frontpage_id); ?>"><?php the_field('footer_mail', $frontpage_id); ?></a>
				<p class="footer__slogan">
					<?php the_field('footer_slogan', $frontpage_id); ?>
				</p>
			</div>
			<div class="footer__item footer__item--bottom">
				<div class="footer__contacts">
					<div class="footer__contacts-item">
						<h6 class="footer__contacts-item-title"><?php the_field('footer_contacts_italia_title', $frontpage_id); ?></h6>
						<?php the_field('footer_contacts_italia_text', $frontpage_id); ?>
					</div>
					<div class="footer__contacts-item">
						<h6 class="footer__contacts-item-title"><?php the_field('footer_contacts_russia_title', $frontpage_id); ?></h6>
						<?php the_field('footer_contacts_russia_text', $frontpage_id); ?>
					</div>
					<div class="footer__contacts-item footer__social">
						<h6 class="footer__contacts-item-title">Social</h6>
						<a class="footer__contacts-item-link footer__social-item" href="<?php the_field('footer_social_facebook', $frontpage_id); ?>" target="_blank">Facebook</a>
						<a class="footer__contacts-item-link footer__social-item" href="<?php the_field('footer_social_instagram', $frontpage_id); ?>" target="_blank">Instagram</a>
						<a class="footer__contacts-item-link footer__social-item" href="<?php the_field('footer_social_facebook', $frontpage_id); ?>" target="_blank">Vkontatke</a>
					</div>
				</div>
				<p class="footer__copyright">
					Copyright © by ConsulStaff<br>
					All rights reserved
				</p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</body>
	</html>