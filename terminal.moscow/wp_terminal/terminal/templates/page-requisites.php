<?php
/*
Template Name: Реквизиты
*/
?>
<?php get_template_part('template-parts/header-page'); ?>
<section class="requisites" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/requisites-bg.png);">
	<div class="wrapper">
		<div class="requisites-info">
			<h1 class="page-title">
      <?php the_field('lending_title') ?>
      </h1>
			<ul>
				<li><span>ИНН</span><?php the_field('lending_inn') ?></li>
				<li><span>КПП</span><?php the_field('lending_kpp') ?></li>
				<li><span>ОГРН</span><?php the_field('lending_ogrn') ?></li>
				<li><span>ОКПО</span><?php the_field('lending_okpo') ?></li>
				<li><span>ОКВЭД</span><?php the_field('lending_okved') ?></li>
				<li><span>ОКОГУ</span><?php the_field('lending_okogy') ?></li>
				<li><span>ОКАТО</span><?php the_field('lending_okato') ?></li>
				<li class="pad"><span>Генеральный директор</span><?php the_field('lending_name') ?></li>
				<li class="pad"><span>Юр. адрес</span><?php the_field('lending_address') ?></li>
				<li class="pad"><span>Почт. адрес</span><?php the_field('lending_mail_address') ?></li>
				<li class="pad"><span>Телефоны</span>
					<a href="tel:<?php the_field('lending_phone-1') ?>"><?php the_field('lending_phone-1') ?>
					<a href="tel:<?php the_field('lending_phone-2') ?>"><?php the_field('lending_phone-2') ?>
					</li>
				<li class="pad"><span>E-mail</span>
					<a href="mailto:<?php the_field('lending_email') ?>"><?php the_field('lending_email') ?></a>
					</li>
				<li class="pad"><span>Сайт</span>
					<a href="https://<?php the_field('lending_site') ?>"><?php the_field('lending_site') ?></a>
				</li>
				<li class="pad"><span>Банковские реквизиты:</span></li>
				<li><span>Банк</span><?php the_field('lending_req_bank') ?></li>
				<li><span>Номер расчетного счета (Рубль РФ)</span><?php the_field('lending_req_account') ?></li>
				<li><span>Номер корреспондентского счета</span><?php the_field('lending_req_corp') ?></li>
				<li><span>БИК</span><?php the_field('lending_req_bik') ?></li>
			</ul>
		</div>
	</div>
</section>
<?php get_template_part('template-parts/block-call-back'); ?>
<?php get_footer(); ?>