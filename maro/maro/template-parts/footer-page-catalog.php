<?php
/**
 * The template for displaying the footer of page-catalog
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
<script>
  function darkImage(x){
    x.src = x.src.replace("light", "dark");
  }
  function lightImage(x){
    x.src = x.src.replace("dark", "light");
  }
</script>
<?php wp_footer(); ?>
</body>
</html>