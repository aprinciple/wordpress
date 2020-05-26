<?php

function the_breadcrumb(){
 
	// получаем номер текущей страницы
	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
 
	$separator = '/'; //  »
 
	// если главная страница сайта
	if( is_front_page() ){
 
		if( $pageNum > 1 ) {
			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
		} else {
			echo 'Вы находитесь на главной странице';
		}
 
	} else { // не главная

		echo '<a href="' . site_url() . '">Главная</a>'. $separator .'<span class="active">';
 
		if( is_single() ) {
			
			echo the_title() .'</span>';
 
		} elseif ( is_page() ) {
 
			echo the_title() .'</span>';
 
		} elseif ( is_category() ) {
 
			echo single_cat_title() .'</span>';
 
		} elseif( is_tag() ) {
 
			echo single_tag_title() .'</span>';
 
		} elseif( is_tax() ) {

			echo single_term_title() .'</span>';

		} elseif ( is_404() ) {
 
			echo 'Ошибка 404</span>';
 
		}
 
		if ( $pageNum > 1 ) { // номер текущей страницы
			echo ' (' . $pageNum . '-я страница)';
		}
 
	}
 
}