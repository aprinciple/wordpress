<?php
if( !defined( 'ABSPATH')){ exit(); }

load_theme_textdomain( 'pntheme', get_template_directory() . '/lang' );

function my_template($page){
$pager = TEMPLATEPATH . "/".$page.".php";
    if(file_exists($pager)){
        include($pager);
    }
}

function init_premium_theme(){
	$script_name = '';
	if(isset($_SERVER['SCRIPT_NAME'])){
		$script_name = $_SERVER['SCRIPT_NAME'];
	}
	$allow_script_name = array('/wp-admin/index.php','/wp-login.php');

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if (is_plugin_inactive('premiumbox/premiumbox.php') and !is_admin() and !in_array($script_name, $allow_script_name)) {
		header('Content-Type: text/html; charset=utf-8');
		$text = trim(get_option('pn_update_plugin_text'));
		if(!$text){ $text = __('Dear users, right now our website is updating. Please come back later.','pntheme'); }
		?>
		<div style="border: 1px solid #ff0000; padding: 10px 15px; font: 13px Arial; width: 500px; border-radius: 3px; margin: 0 auto; text-align: center;">
			<?php echo apply_filters('comment_text', $text); ?>
		</div>	
		<?php
		exit;
	}

	if (is_plugin_inactive('premiumbox/premiumbox.php')) {
		return;
	}	
}

init_premium_theme();

my_template('includes/sites_func');
my_template('includes/breadcrumb');
my_template('includes/api');

my_template('change/color_scheme'); 
my_template('change/header');
my_template('change/home');
my_template('change/footer');

my_template('mail/index');


// 100bitcoins

// Wrapper function for css
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
  wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

// Wrapper function for js
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = true ) {
  wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Register and enqueue styles
 */
function theme_register_css() {
  enqueue_versioned_style('main', '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {
  enqueue_versioned_script('main', '/assets/js/main.min.js');
	wp_enqueue_script('coin-marquee', 'https://files.coinmarketcap.com/static/widget/coinMarquee.js');
}

add_action('wp_enqueue_scripts', 'theme_register_js');

add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);

add_action( 'after_setup_theme', 'theme_add_thumbnails' );
function theme_add_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size(650, 450, true);
  // add_image_size( 'post-project', 800, 865, true );
}

 /**
  * Setting the class name for pages
  */

add_filter( 'body_class','my_class_names' );
function my_class_names( $classes ) {

  // Pages
  if( is_front_page() ) {
    $classes[] = 'page p-home';
    return $classes;
  }

  if( is_page_template('templates/default.php') ) {
    $classes[] = 'page p-default';
    return $classes;
  }

  if( is_page_template('templates/faq.php') ) {
    $classes[] = 'page p-faq';
    return $classes;
  }

  if( is_page_template('templates/exchange.php') ) {
    $classes[] = 'page p-faq p-exchange';
    return $classes;
  }

  if( is_page_template('templates/referal.php') ) {
    $classes[] = 'page p-referral';
    return $classes;
  }

  if( is_page_template('templates/news.php') ) {
    $classes[] = 'page p-news';
    return $classes;
  }

  if( is_page_template('templates/contacts.php') ) {
    $classes[] = 'page p-contacts';
    return $classes;
  }

  if( is_page_template('templates/profile.php') ) {
    $classes[] = 'page p-profile';
    return $classes;
  }

  if( is_page_template('templates/login.php') ) {
    $classes[] = 'page p-login';
    return $classes;
  }

  if( is_page_template('templates/reviews.php') ) {
    $classes[] = 'page p-reviews';
    return $classes;
  }

  // Posts

  if ( get_post_type() === 'post-news' ) {
    $classes[] = 'page p-post';
    return $classes;
  }

  // Taxonomies
  if( is_tax() ) {
    $classes[] = 'page';
    return $classes;
  }

  return $classes;
}

/**
 * Register custom taxonomy
 */
add_action( 'init', 'taxonomy_news_cat' );
function taxonomy_news_cat(){

  register_taxonomy( 'news-cat', [ 'post-news' ], [ 
    'label'               => '',
    'labels'              => [
      'name'              => 'Категория',
      'singular_name'     => 'Категория',
      'search_items'      => 'Найти категорию',
      'all_items'         => 'Все категории',
      'view_item '        => 'Посмотреть категорию',
      'parent_item'       => 'Родитель категории',
      'parent_item_colon' => 'Родитель категории:',
      'edit_item'         => 'Редактировать категорию',
      'update_item'       => 'Обновить категорию',
      'add_new_item'      => 'Добавить новое категорию',
      'new_item_name'     => 'Новое имя категории',
      'menu_name'         => 'Категория',
    ],
    'description'           => '',
    'public'                => true,
    'hierarchical'          => true,
    'rewrite'               => true,
    // 'query_var'             => $taxonomy, // название параметра запроса
    'capabilities'          => array(),
    'meta_box_cb'           => null,
    'show_admin_column'     => false,
    'show_in_rest'          => null,
    'rest_base'             => null,
  ] );
}

/**
 * Register nav-menus of theme
 */
require get_template_directory() . '/inc/nav_menu.php';

/**
 * Form
 */
// require get_template_directory() . '/inc/form-request.php';

/**
 * Register custom post type
 */
require get_template_directory() . '/inc/post-type.php';

add_filter('show_admin_bar', '__return_false');

function theme_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'theme_excerpt_length' );