<?php 
	/*
	Plugin Name: Disto Function
	Description: Function and feature for Disto theme
	Plugin URI: https://themeforest.net/user/jellywp/portfolio
	Author: Jellywp
	Author URI: https://themeforest.net/user/jellywp
	Version: 1.1
	License: GPL2
	Text Domain: disto
	*/
	if ( ! defined( 'ABSPATH' ) ) exit;
	
	/* Load text domain */	
	load_plugin_textdomain( 'disto', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' ); 
	
	$jl_theme = wp_get_theme();
	if ( 'Disto' == $jl_theme->name){
	include 'cus-metabox.php';
	include 'post-like.php';
	include 'view-post-counter.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/comments.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/adswidget.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/popular.php';  
	require_once plugin_dir_path( __FILE__ ).'/widget/recent-large.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/about-us.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/category-widget.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/recent-small.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/slider-post.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/recent-main-list.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/recent-grid.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-main-right-list.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-carousel.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-main-post-below-2-grid.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/recent-small-number.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-list-medium.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-slider-tab.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-slider.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-small-grid.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-small-grid-overlay.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-grid5.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-grid6.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-2main-right-list.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-grid-right-list.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/recent-small-overlay.php';
	require_once plugin_dir_path( __FILE__ ).'/widget/home-newsticker.php';

	function disto_share_footer_link( $post_id ) {?>
	<ul class="jl_footer_social">
            <li><a href="http://www.facebook.com/share.php?u=<?php echo esc_url(get_permalink());?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://twitter.com/home?status=<?php echo esc_url(get_permalink());?>%20-%20<?php echo esc_url(get_permalink());?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink());?>" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink());?>&media=<?php if ( has_post_thumbnail()) {$thumbnail_pin_id = get_post_thumbnail_id(); if( !empty($thumbnail_pin_id) ){ $thumbnail_pin = wp_get_attachment_image_src( $thumbnail_pin_id , 'slider-normal' );} echo esc_attr($thumbnail_pin[0]);}?>" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
	<?php }

	function disto_single_share_link( $post_id ) {?>
		<div class="single_post_share_wrapper">
<div class="single_post_share_icons social_popup_close"><i class="fa fa-close"></i></div>
<ul class="single_post_share_icon_post">
    <li class="single_post_share_facebook"><a href="http://www.facebook.com/share.php?u=<?php echo esc_url(get_permalink());?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li class="single_post_share_twitter"><a href="http://twitter.com/home?status=<?php echo esc_url(get_permalink());?>%20-%20<?php echo get_the_title();?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li class="single_post_share_google_plus"><a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink());?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
    <li class="single_post_share_pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink());?>&media=<?php if ( has_post_thumbnail()) {$thumbnail_pin_id = get_post_thumbnail_id(); if( !empty($thumbnail_pin_id) ){ $thumbnail_pin = wp_get_attachment_image_src( $thumbnail_pin_id , 'slider-normal' );} echo esc_attr($thumbnail_pin[0]);}?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    <li class="single_post_share_linkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url(get_permalink());?>&title=<?php echo esc_url(get_permalink());?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
    <li class="single_post_share_ftumblr"><a href="http://www.tumblr.com/share/link?url=<?php echo esc_url(get_permalink());?>&name=<?php echo esc_url(get_permalink());?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
</ul>
</div>
	<?php }

	function hook_header() {
    	if (! is_404() ) { 			
			$thumbnail_id = get_post_thumbnail_id();
			if( !empty($thumbnail_id) ){
				$thumbnail = wp_get_attachment_image_src( $thumbnail_id , '1000x500' );?>
				<meta property="og:image" content="<?php echo esc_url($thumbnail[0])?>" />		
			<?php }		
		}
	}
	add_action('wp_head','hook_header');

	}



	//Woocommerce
if (!function_exists('disto_loop_columns')) {  
    function disto_loop_columns() {  
        return 3;
    }  
}  
add_filter('loop_shop_columns', 'disto_loop_columns'); 
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'disto_jellywp_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'disto_jellywp_theme_wrapper_end', 10);

function disto_jellywp_theme_wrapper_start() {
    echo '<div class="container main-content">';
}
function disto_jellywp_theme_wrapper_end() {
    echo '</div>';
}
add_theme_support( 'woocommerce' ); 

add_filter( 'woocommerce_show_page_title' , 'disto_woo_hide_page_title' );
function disto_woo_hide_page_title() {  
    return false;
}    
 ?>