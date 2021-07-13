<?php
if( !defined( 'ABSPATH')){ exit(); }

remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head','wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head','feed_links_extra', 3);
remove_action('wp_head','feed_links', 2);

remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles',10);

add_action( 'wp_ajax_sum_info', 'get_1c_sum_info' );
add_action( 'wp_ajax_nopriv_sum_info', 'get_1c_sum_info' );

function new_excerpt_length($length) {
	return 45;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter('comment_text', 'not_transform_quotes',100);
add_filter('the_title', 'not_transform_quotes',100);
add_filter('the_content', 'not_transform_quotes',100);
add_filter('the_excerpt', 'not_transform_quotes', 100);
function not_transform_quotes($content){
    return str_replace(array('&#171;','&#187;'),'"',$content);
}

if (function_exists('register_nav_menu')) {
	register_nav_menu('the_top_menu', __('Top menu for Guests','pntheme'));
	register_nav_menu('the_top_menu_user', __('Top menu for Users','pntheme'));
	register_nav_menu('the_bottom_menu', __('Bottom menu','pntheme'));
}
function no_menu(){}

function no_menu_standart(){
	wp_nav_menu(array(
		'sort_column' => 'menu_order',
		'container' => 'div',
		'container_class' => 'menu',
		'menu_class' => 'tmenu js_menu',
		'menu_id' => '',
		'depth' => '3',
		'fallback_cb' => 'no_menu',
		'theme_location' => 'the_top_menu'
	));	
}

register_sidebar(array(
    'name'=> __('Sidebar'),
	'id' => 'unique-sidebar-id',
	'before_title' => '<div class="widget_title"><div class="widget_titlevn">',
	'after_title' => '</div></div>',
	'before_widget' => '<div class="widget"><div class="widget_ins">',
	'after_widget' => '<div class="clear"></div></div></div>',
));

global $or_template_directory;
// add_theme_support('custom-background', array(
// 	'default-color'      => '#e4eae7',
// 	'default-image' => $or_template_directory . '/images/bg.png',
// 	'default-repeat' => '',
// ));

add_action('wp_enqueue_scripts', 'my_themeinit', 0);
function my_themeinit(){
global $or_template_directory, $premiumbox;

	$vers = $premiumbox->plugin_version;
    	$vers += 0.2;
	if($premiumbox->is_debug_mode()){
		$vers = current_time('timestamp');
	}
		
	wp_deregister_style('open-sans');

	// wp_enqueue_style('open-sans', is_ssl_url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic-ext,cyrillic"), false, $vers);

	wp_enqueue_style('theme style', $or_template_directory . "/style.css", false, $vers);
	wp_enqueue_script("jquery select", $or_template_directory . "/js/jquery-select.js", false, $vers);
	wp_enqueue_script("jquery checkbox", $or_template_directory . "/js/jquery-checkbox.js", false, $vers);
	wp_enqueue_script('jquery site js', $or_template_directory.'/js/site.js', false, $vers);

    // wp_enqueue_style("jquery ui css", $or_template_directory . "/js/jquery-ui-1.12.1.custom/jquery-ui.min.css", false, $vers);
    // wp_enqueue_script("jquery ui", $or_template_directory . "/js/jquery-ui-1.12.1.custom/jquery-ui.min.js", false, $vers);
	// wp_enqueue_script("jquery spincrement", $or_template_directory . "/js/jquery.spincrement.js", false, $vers);
	// wp_enqueue_script("defaultscipts", $or_template_directory . "/js/default.js", false, $vers);
	
	// wp_enqueue_script("def init", $or_template_directory . "/js/init.js", false, $vers);
	// wp_enqueue_script("def jq sticky", $or_template_directory . "/js/jquery.sticky.js", false, $vers);
	// wp_enqueue_script("def jq slick", $or_template_directory . "/js/slick.min.js", false, $vers);
	
	// wp_enqueue_script("def jq investment", $or_template_directory . "/js/scripts-investment.js", false, $vers);
	// wp_enqueue_script("def jq mask", $or_template_directory . "/js/jquery.mask.min.js", false, $vers);
	// wp_enqueue_script("def jq animate", $or_template_directory . "/js/jquery.animateNumber.js", false, $vers);
}

function get_theme_option($option_name, $array=''){
	if(!is_array($array)){ $array = array(); }
	$option_name = pn_string($option_name);
	
	$change = get_option($option_name);
	$now_change = array();
	foreach($array as $opt){
		$now_change[$opt] = ctv_ml(is_isset($change,$opt));	 
	}	
	
	return $now_change;
}

/* lang list */
function the_lang_list($wrap_class=''){
	$list = '';
	
	if(is_ml()){
		
		$list .= '<div class="'. $wrap_class .'">';
		
		$lang = get_locale();
		$langs = get_langs_ml();
		
		$list .= '
		<div class="langlist_div">
			<img src="/wp-content/themes/exchanger/images/lang.png" class="langicon" alt="">
			<div class="langlist_title"><span>'. get_lang_key($lang) .'</span></div>
			<div class="langlist_ul">
		';
			foreach($langs as $lan){
				$cl = '';
				if($lan == $lang){ $cl = '';}
				$list .= '
				<a href="'. lang_self_link($lan) .'" class="langlist_li '. $cl .'">
					<div class="langlist_liimg">
						<img src="'. get_lang_icon($lan) .'" alt="" />
					</div>
					'. get_title_forkey($lan) .'
				</a>';	
			}
		$list .= '
			</div>
		</div>';
		

		$list .= '</div>';	
	}
	
	echo $list;
}
/* end lang list */

function get_1c_sum_info() {
    global $wpdb;

    $result = $wpdb->get_results('select * from 1c_sum_info');

    wp_die(json_encode($result));
}

const INI_AMOUNT =
[
    "yandex_rub" => 33000000,
    "sberbank_rub" => 2330000000,
    "alpha_cash_rub" => 1440000000,
    "vtb_rub" => 32400000,
    "bitcoin" => 1300,
    "ethereum" => 78000,
    "ripple" => 7600000,
    "monero" => 32000,
    "litecoin" => 50000,
    "advance_cash_rub" => 3000000,
    "alpha_cash_usd" => 5700000,
    "TKC_cash" => 1080000000,
    "alpha_click" => 240000,
    "qiwi" => 988000000,
    "visa_master" => 101000000,
    "cash_ru_rub" => 102000000000,
    "cash_ru_usd" => 280000000,
    "cash_ru_eur" => 155000000,
    "advance_cash_usd" => 2800000,
    "perfect_money_usd" => 5800000,
    "exmo_usd" => 300000,
    "exmo_rub" => 2000000,
    "zcash" => 22420.15,
    "payeer_rub" => 124000000,
    "payeer_usd" => 1220000,
    "eos" => 784000,
    "banks_rub" => 0,
    "tether" => 101000000,
    "pc_rub" => 43000000,
    "psb_rub" => 78000000,
    "neo" => 44000,
    "xlm" => 48000000,
    "livecoin_usd" => 0,
    "western_union_usd" => 7800000,
    "zolotaya_korona_rub" => 148000000,
    "zolotaya_korona_usd" => 3200000,
    "cash_eur" => 45000000,
    "contact_rub" => 89000000,
    "contact_usd" => 1400000,
    "moneygram" => 2800000,
];

function get_exchange_banner_data($id1, $id2) {
    global $wpdb;

    $amount = $currency = '';

    $result = $wpdb->get_row(
        "SELECT IFNULL(sum(summ2), 0) as sum, (SELECT currency_code_title FROM pr_currency WHERE id = {$id2}) as currency_code
               FROM pr_bids
               WHERE vtype2 LIKE (SELECT currency_code_title FROM pr_currency WHERE id = {$id2}) AND `status` LIKE 'success'");

    if ($result) {

        $amount = $result->sum;

        switch ($id2) {
            case 6: $amount += INI_AMOUNT["yandex_rub"]; break;
            case 7: $amount += INI_AMOUNT["sberbank_rub"]; break;
            case 10: $amount += INI_AMOUNT["alpha_cash_rub"]; break;
            case 11: $amount += INI_AMOUNT["vtb_rub"]; break;
            case 12: $amount += INI_AMOUNT["bitcoin"]; break;
            case 13: $amount += INI_AMOUNT["ethereum"]; break;
            case 15: $amount += INI_AMOUNT["ripple"]; break;
            case 16: $amount += INI_AMOUNT["monero"]; break;
            case 17: $amount += INI_AMOUNT["litecoin"]; break;
            case 19: $amount += INI_AMOUNT["advance_cash_rub"]; break;
            case 20: $amount += INI_AMOUNT["alpha_cash_usd"]; break;
            case 21: $amount += INI_AMOUNT["TKC_cash"]; break;
            case 22: $amount += INI_AMOUNT["alpha_click"]; break;
            case 23: $amount += INI_AMOUNT["qiwi"]; break;
            case 24: $amount += INI_AMOUNT["visa_master"]; break;
            case 26: $amount += INI_AMOUNT["cash_ru_rub"]; break;
            case 27: $amount += INI_AMOUNT["cash_ru_usd"]; break;
            case 28: $amount += INI_AMOUNT["cash_ru_eur"]; break;
            case 29: $amount += INI_AMOUNT["advance_cash_usd"]; break;
            case 30: $amount += INI_AMOUNT["perfect_money_usd"]; break;
            case 32: $amount += INI_AMOUNT["exmo_usd"]; break;
            case 33: $amount += INI_AMOUNT["exmo_rub"]; break;
            case 35: $amount += INI_AMOUNT["zcash"]; break;
            case 36: $amount += INI_AMOUNT["payeer_rub"]; break;
            case 37: $amount += INI_AMOUNT["payeer_usd"]; break;
            case 38: $amount += INI_AMOUNT["eos"]; break;
            case 39: $amount += INI_AMOUNT["banks_rub"]; break;
            case 40: $amount += INI_AMOUNT["tether"]; break;
            case 41: $amount += INI_AMOUNT["pc_rub"]; break;
            case 42: $amount += INI_AMOUNT["psb_rub"]; break;
            case 44: $amount += INI_AMOUNT["neo"]; break;
            case 46: $amount += INI_AMOUNT["xlm"]; break;
            case 47: $amount += INI_AMOUNT["livecoin_usd"]; break;
            case 50: $amount += INI_AMOUNT["western_union_usd"]; break;
            case 51: $amount += INI_AMOUNT["zolotaya_korona_rub"]; break;
            case 52: $amount += INI_AMOUNT["zolotaya_korona_usd"]; break;
            case 53: $amount += INI_AMOUNT["cash_eur"]; break;
            case 55: $amount += INI_AMOUNT["contact_rub"]; break;
            case 56: $amount += INI_AMOUNT["contact_usd"]; break;
            case 57: $amount += INI_AMOUNT["moneygram"]; break;
//            case 35 :
//                $amount += 22420.15;
//                break;
//            case 21 :
//                $amount += 7354800;
//                break;
//            case 10 :
//                $amount += 15000000;
//                break;
//            case 22 :
//                $amount += 240000;
//                break;
//            case 11 :
//                $amount += 9000000;
//                break;
//            case 7 :
//                $amount += 20000000;
//                break;
//            case 20 :
//                $amount += 10000000;
//                break;
//            case 6 :
//                $amount += 3427700;
//                break;
//            case 23 :
//                $amount += 6000000;
//                break;
//            case 24 :
//                $amount += 2743000;
//                break;
//            case 12 :
//                $amount += 1300;
//                break;
//            case 13 :
//                $amount += 3000;
//                break;
//            case 17 :
//                $amount += 2500;
//                break;
//            case 15 :
//                $amount += 243427;
//                break;
//            case 26 :
//                $amount += 200000000;
//                break;
//            case 27 :
//                $amount += 3100000;
//                break;
//            case 19 :
//                $amount += 3000000;
//                break;
//            case 29 :
//                $amount += 500000;
//                break;
//            case 33 :
//                $amount += 2000000;
//                break;
//            case 32 :
//                $amount += 300000;
//                break;
//            case 30 :
//                $amount += 340000;
//                break;
        }

        switch ($id2) {
            case 12:
            case 13:
            case 17:
                $amount = number_format($amount, 4, '.', ' ');
                break;
            default:
                $amount = number_format(round($amount), 0, '', ' ');
        }

        $currency = $result->currency_code;
    }

    return ['amount' => $amount, 'currency' => $currency];
}
