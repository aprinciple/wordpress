<?php 
if( !defined( 'ABSPATH')){ exit(); }

/*

Template Name: Шаблон Exchangebox

*/
 
get_header();
 
$themechange = get_option('themechange');
?>

	<?php 
	if(is_front_page()){
	?>
	
		<?php
		$text = is_isset($themechange,'hometexttop');
		if($text){ 
		?>
		<div class="hometexttop">
			<div class="text">
				<?php echo apply_filters('the_content', $text); ?>
			</div>
		</div>	
		<?php 
		} 
		?>
	
	<?php
	} ?>
	
	<?php 
	if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();  ?>		

		<?php the_content(); ?>				
		
	<?php endwhile; ?>
    <?php endif; ?>			
	
	<div class="clear"></div>
	<?php 
	if(is_front_page()){
	?>
	
		<?php
		$title = pn_strip_input(is_isset($themechange,'hometitle'));
		$text = is_isset($themechange,'hometext');
		if($title or $text){ ?>
			<div class="hometext">
				<div class="hometext_ins">
					<div class="hometext_title">
						<div class="hometext_title_ins">
							<?php echo $title; ?>
						</div>
					</div>
						
					<?php echo apply_filters('the_content', $text); ?>
						<div class="clear"></div>
				</div>
			</div>
		<?php 
		}
		?>
		
	<?php	
	} ?>	
	
<?php get_footer();?>