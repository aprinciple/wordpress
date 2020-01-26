<?php
/*
Template Name: Наши партнеры
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<section class="partners">
	<div class="wrapper">
		<h2 class="page-title">Наши партнеры</h2>
		<div class="partners-row">
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-1.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-2.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-3.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-4.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-5.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-10.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-11.svg" alt="">
				</div>
			</div>
			<div class="partners-col">
				<div class="partners-col__wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-12.svg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<div class="letters-certificates">
  <?php get_template_part('template-parts/block-certificates'); ?>
</div>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>