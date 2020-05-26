<?php
/**
 * The template for displaying the footer of page-count
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maro
 */

?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/fixed-top.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/burger-menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/quiz.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/form.js"></script>
<script>
  jQuery(function ($) {
    if ($(window).width() > 992 && $(window).width() < 1199) {
      $('.confidence ul li a').removeClass('white_txt');
      $('.copyright').removeClass('white_txt');
      $('.confidence ul li a').addClass('black_txt');
      $('.copyright').addClass('black_txt');
    }
  });
</script>
<?php wp_footer(); ?>
</body>

</html>