<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maro
 */

if ( ! is_active_sidebar( '' ) ) {
	return;
}
?>

<aside>
	<?php dynamic_sidebar( '' ); ?>
</aside>
