<?php get_template_part('template-parts/header-about-us') ?>
<section class="promo-post">
	<div class="promo-post__container container">
		<div class="promo-post__item promo-post__item-text">
			<h1 class="promo-post__title"><?php the_field('promo_title'); ?></h1>
			<h3 class="promo-post__subtitle">
				<?php the_field('promo_subtitle'); ?>
			</h3>
			<?php the_field('promo_text'); ?>
		</div>
		<div class="promo-post__item promo-post__item-slider promo-post__slider">
			<div class="post-slider">
				<div class="post-slider__items">
					<?php 
						$counter = 1;
						while ($counter < 4):
							$slider_images = get_field('promo_slider_slides');
							$field_image = 'promo_slider_slide-' . $counter;
							$slider_image = $slider_images[$field_image];
						
							if ($slider_image): 
								echo '<div class="post-slider__item">';
									echo wp_get_attachment_image( $slider_image['id'], 'xl', false, array( 
										'class' => 'post-slider__image',
									) );
								echo '</div>';
							endif; 

							$counter++;
						endwhile;
					?>
				</div>
				<div class="post-slider__container container">
					<div class="post-slider__nav">
						<button class="post-slider__button post-slider__button--left">
							<svg class="post-slider__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1"
								viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
								<polygon
									points="476.21 223.11 57.426 223.11 91.819 188.71 70.606 167.5 0 238.11 70.606 308.71 91.819 287.5 57.426 253.11 476.21 253.11" />
							</svg>
						</button>
						<button class="post-slider__button post-slider__button--right">
							<svg class="post-slider__button-icon" enable-background="new 0 0 476.213 476.213" version="1.1"
								viewBox="0 0 476.21 476.21" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
								<polygon
									points="405.61 167.5 384.39 188.71 418.79 223.11 0 223.11 0 253.11 418.79 253.11 384.39 287.5 405.61 308.71 476.21 238.11" />
							</svg>
						</button>
						<div class="post-slider__pointer">
							<span class="post-slider__pointer-item">
								<i class="post-slider__pointer-num">0</i>
							</span>
							<span class="post-slider__pointer-item post-slider__pointer-item--amount">
								/<i class="post-slider__pointer-amount">0</i>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-us-info-block">
	<div class="about-us-info-block__container container">
		<figure class="about-us-info-block__item about-us-info-block__item-figure">
		<?php 
			$image = get_field('about_us_block-who-image');
			if( $image ) {
				echo wp_get_attachment_image( $image['id'], 'xl', false, array( 
					'class' => 'info-block__item-figure-image',
				) );
			}
		?>
			<figcaption class="about-us-info-block__item-figure-figcaption">
				<span class="about-us-info-block__item-figure-figcaption-text">
					<?php the_field('about_us_block-who-slogan'); ?>
				</span>
			</figcaption>
		</figure>
		<article class="about-us-info__item about-us-info-block__item-article">
			<h2 class="about-us-info-block__item-article-title">
				<?php the_field('about_us_block-who-title'); ?>
			</h2>
			<div class="about-us-info-block__item-article-wrapper">
				<?php the_field('about_us_block-who-text'); ?>
			</div>
		</article>
	</div>
</section>
<section class="about-us-how-organized">
	<div class="about-us-how-organized__container container">
		<h2 class="about-us-how-organized__title">
			<?php the_field('about_us_organization-title'); ?>
		</h2>
		<div class="about-us-how-organized__item">
			<h4 class="about-us-how-organized__item-title">
				<?php the_field('about_us_organization-block-1-title'); ?>
			</h4>
			<?php the_field('about_us_organization-block-1-text'); ?>
		</div>
		<div class="about-us-how-organized__item">
			<h4 class="about-us-how-organized__item-title">
				<?php the_field('about_us_organization-block-2-title'); ?>
			</h4>
			<?php the_field('about_us_organization-block-2-text'); ?>
		</div>
		<div class="about-us-how-organized__item">
			<h4 class="about-us-how-organized__item-title">
				<?php the_field('about_us_organization-block-3-title'); ?>
			</h4>
			<?php the_field('about_us_organization-block-3-text'); ?>
		</div>
		<div class="about-us-how-organized__item">
			<h4 class="about-us-how-organized__item-title">
				<?php the_field('about_us_organization-block-4-title'); ?>
			</h4>
			<?php the_field('about_us_organization-block-4-text'); ?>
		</div>
		<div class="about-us-how-organized__item">
			<h4 class="about-us-how-organized__item-title">
				<?php the_field('about_us_organization-block-5-title'); ?>
			</h4>
			<?php the_field('about_us_organization-block-5-text'); ?>
		</div>
		<div class="about-us-how-organized__item">
			<h4 class="about-us-how-organized__item-title">
				<?php the_field('about_us_organization-block-6-title'); ?>
			</h4>
			<?php the_field('about_us_organization-block-6-text'); ?>
		</div>
	</div>
</section>
<section class="about-us-landmarks">
	<div class="landmarks">
		<div class="landmarks__container container">
			<h2 class="landmarks__title">
				<?php the_field('landmarks__title'); ?>
			</h2>
			<div class="landmarks__items">
				<div class="landmarks__item landmarks__item--check">
					<div class="landmarks__item-wrapper">
						<h5 class="landmarks__item-figcaption-title">check mark</h5>
						<p class="landmarks__item-figcaption-text"><?php the_field('landmarks__item-1'); ?></p>
					</div>
				</div>
				<div class="landmarks__item landmarks__item--empire">
					<div class="landmarks__item-wrapper">
						<h5 class="landmarks__item-figcaption-title">empire</h5>
						<p class="landmarks__item-figcaption-text"><?php the_field('landmarks__item-2'); ?></p>
					</div>
				</div>
				<div class="landmarks__item landmarks__item--sprout">
					<div class="landmarks__item-wrapper">
						<h5 class="landmarks__item-figcaption-title">sprout</h5>
						<p class="landmarks__item-figcaption-text"><?php the_field('landmarks__item-3'); ?></p>
					</div>
				</div>
				<div class="landmarks__item landmarks__item--dialogue">
					<div class="landmarks__item-wrapper">
						<h5 class="landmarks__item-figcaption-title">dialogue</h5>
						<p class="landmarks__item-figcaption-text"><?php the_field('landmarks__item-4'); ?></p>
					</div>
				</div>
				<div class="landmarks__item landmarks__item--torch">
					<div class="landmarks__item-wrapper">
						<h5 class="landmarks__item-figcaption-title">torch</h5>
						<p class="landmarks__item-figcaption-text"><?php the_field('landmarks__item-5'); ?></p>
					</div>
				</div>
				<div class="landmarks__item landmarks__item--bird-feather">
					<div class="landmarks__item-wrapper">
						<h5 class="landmarks__item-figcaption-title">bird feather</h5>
						<p class="landmarks__item-figcaption-text"><?php the_field('landmarks__item-6'); ?></p>
					</div>
				</div>
			</div>
			<div class="landmarks__logo"></div>
		</div>
	</div>
</section>
<div class="about-us-staff">
	<section class="staff">
		<div class="staff__container container">
			<h2 class="staff__title"><?php the_field('staff__title'); ?></h2>
			<div class="staff__items">
			<?php
				$args = array(
					'order'          => 'ASC',
					'post_type'      => 'post-staff',
				);
				$loop = new WP_Query( $args );
			?>
			<?php
				if( $loop->have_posts() ) {
					while( $loop->have_posts() ) {
						$loop->the_post();
						?>
						<div class="staff__item">
							<div class="staff__item-header">
								<?php 
								$image = get_field('staff_photo');
								if( !empty( $image ) ): ?>
										<img class="staff__item-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								<div class="staff__item-header-info">
									<?php the_field('staff_info'); ?>
								</div>
							</div>
							<div class="staff__item-footer">
								<h5 class="staff__item-name"><?php the_field('staff_name'); ?></h5>
								<div class="staff__item-status">
									<?php the_field('staff_position'); ?>
								</div>
								<a class="staff__item-social" href="<?php the_field('staff_linkedin'); ?>" target="_blank"></a>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				} 
			?>
			</div>
		</div>
	</section>
</div>
<section class="about-us-clients">
	<div class="clients">
		<div class="clients__container container">
			<div class="clients__item clients__info">
				<h2 class="clients__title"><?php the_field('our_clients_title'); ?></h2>
				<div class="clients__description">
				<?php the_field('our_clients_text'); ?>
				</div>
			</div>
			<div class="clients__item clients__logos">
				<?php 
					$counter = 1;
					while ($counter < 10):
						$slider_images = get_field('our_clients_logos');
						$field_image = 'our_clients_logo-' . $counter;
						$slider_image = $slider_images[$field_image];
					
						if ($slider_image): 
							echo '<div class="clients__logos-item">'; 
								echo '<img class="clients__logos-item-image" src="' . $slider_image['url'] . '" alt="' . $slider_image['alt'] . '">';
							echo '</div>';
						endif; 

						$counter++;
					endwhile;
				?>
			</div>
		</div>
	</div>
</section>
<section class="about-us-partners">
	<div class="clients">
		<div class="clients__container container">
			<div class="clients__item clients__info about-us-partners__info">
				<h2 class="clients__title"><?php the_field('our_partners_title'); ?></h2>
				<div class="clients__description">
				<?php the_field('our_partners_text'); ?>
				</div>
			</div>
			<div class="clients__item clients__logos">
				<?php 
					$counter = 1;
					while ($counter < 10):
						$slider_images = get_field('our_partners_logos');
						$field_image = 'our_partners_logo-' . $counter;
						$slider_image = $slider_images[$field_image];
					
						if ($slider_image): 
							echo '<div class="clients__logos-item">'; 
								echo '<img class="clients__logos-item-image" src="' . $slider_image['url'] . '" alt="' . $slider_image['alt'] . '">';
							echo '</div>';
						endif; 

						$counter++;
					endwhile;
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>