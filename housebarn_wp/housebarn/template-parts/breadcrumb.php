<?php 
function the_breadcrumb() {
  global $post;
  
  // получаем номер текущей страницы
  $pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  
  $separator = '<span class="breadcrumb__separator">&raquo;</span>';
  
  // если главная страница сайта
  if( is_front_page() ){
  
    if( $pageNum > 1 ) {
      echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
    } else {
      echo 'Вы находитесь на главной странице';
    }
  
  } else { // не главная
  
    echo '<a class="breadcrumb__link" href="' . site_url() . '">Главная</a>'. $separator;
  
    if( is_single() ) { // записи

      $links = array_map( function ( $category ) {
        return sprintf(
          '<a class="breadcrumb__link" href="%s">%s</a>', // Шаблон вывода ссылки
          esc_url( get_category_link( $category ) ), // Ссылка на рубрику
          esc_html( $category->name ) // Название рубрики
        );
      }, get_the_category() );
      
      echo implode( ', ', $links ); 
      echo $separator;
      echo '<span class="breadcrumb__item">'. get_the_title() .'</span>';
      // the_category(', '); echo $separator; the_title();
  
    } elseif ( is_page() ) { // страницы WordPress 

      global $post;
      // если у текущей страницы существует родительская
      if ( $post->post_parent ) {
      
        $parent_id  = $post->post_parent; // присвоим в переменную
        $breadcrumbs = array(); 
      
        while ( $parent_id ) {
          $page = get_page( $parent_id );
          $breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
          $parent_id = $page->post_parent;
        }
      
        echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;
      
      } 
      echo '<span class="breadcrumb__item">'. get_the_title() .'</span>';

    } elseif ( is_category() ) {

      echo '<span class="breadcrumb__item">'. get_queried_object()->name .'</span>';
  
    } elseif( is_tag() ) {
  
      single_tag_title();
  
    } elseif ( is_404() ) { // если страницы не существует
  
      echo 'Ошибка 404';
  
    }
  
    if ( $pageNum > 1 ) { // номер текущей страницы
      echo ' (' . $pageNum . '-я страница)';
    }
  
  } 
}
?>
<div class="breadcrumb">
  <div class="container breadcrumb__wrapper">
    <span class="breadcrumb__text">Вы здесь:</span>
    <?php the_breadcrumb(); ?>
  </div>
</div>