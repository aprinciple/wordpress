<?php
/*
Template Name: Письма благодарности
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<section class="letters">
	<div class="wrapper">
		<h1 class="page-title">Письма благодарности</h1>
		<p>Нам доверяют и доверие подтверждается письмами благодарности на официальных бланках наших уважаемых клиентов</p>
	</div>
</section>
<div class="letters-certificates">
  <?php get_template_part('template-parts/block-certificates'); ?>
</div>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>