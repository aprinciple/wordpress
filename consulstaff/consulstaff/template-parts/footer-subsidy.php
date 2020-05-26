<?php $frontpage_id = get_option( 'page_on_front' ); ?>
	<footer class="footer subsidy-footer">
		<div class="footer__container container subsidy-footer__wrapper">
			<div class="footer__item subsidy-footer__item">
				<a class="footer__logo" href="<?php echo home_url(); ?>">
					<img 
						class="footer__logo-image" 
						src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.svg" 
						alt="Logo of Consul Staff">
				</a>
				<a 
					class="footer__email" 
					href="mailto:<?php the_field('footer_mail', $frontpage_id); ?>">
					<?php the_field('footer_mail', $frontpage_id); ?>
				</a>
			</div>
			<div class="footer__item subsidy-footer__item">
        <div class="footer__social subsidy-footer__social">
          <?php get_template_part('template-parts/block-social') ?>
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