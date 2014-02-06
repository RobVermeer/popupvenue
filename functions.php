<?php

/* Include map */
include_once("inc/_inc.php");

/*** THEME SUPPORT ***/

if ( ! isset( $content_width ) ) $content_width = 560;

/* Responsive images */
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

/* Remove BP edit user in backend */
remove_all_filters('edit_profile_url');

/* Post thumbnail support *
add_theme_support('post-thumbnails');
add_image_size('featured', 140, 106, true);

/* This theme uses wp_nav_menu() *
add_theme_support('nav_menus');
register_nav_menus( array(
	'header' => 'Header navigatie',
	'footer' => 'Footer navigatie',
) );

/* NO admin bar */
show_admin_bar( false );
add_filter('show_admin_bar', '__return_false');  

/* Add RSS links to <head> section */
add_theme_support( 'automatic-feed-links' );

/* Register all scripts */
function register_scripts() {
	/* jQuery via Google CDN */
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false, null, true);
	wp_enqueue_script('jquery');

	/* No l10n.js */
	wp_deregister_script( 'l10n' );

	/* Add functions javascript */
	$deps = array('jquery');

	wp_enqueue_script( 'functions-js', get_bloginfo('stylesheet_directory') . '/js/functions.js', $deps, null, true );
	
	
	if( ! is_admin() ) {
		add_filter( 'show_admin_bar', '__return_false' );
		remove_action('wp_head', '_admin_bar_bump_cb');
		wp_deregister_script('admin-bar');
		wp_deregister_style('admin-bar');
		remove_action('wp_head', 'bp_core_confirmation_js', 100);
	}
}
add_action('wp_enqueue_scripts', 'register_scripts');

/* Clean up the <head> */
function removeHeadLinks() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'index_rel_link' );
}
add_action('init', 'removeHeadLinks');

/* Remove head styles */
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'my_remove_recent_comments_style');

/*** END THEME SUPPORT ***/

?>