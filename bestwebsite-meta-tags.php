<?php
/*
Plugin Name: Bestwebsite Meta Tags
Plugin URI: https://github.com/bestwebsite/bestwebsite-meta-tags/
Description: A super simple plugin to edit meta tags in all your pages, posts, categories, tags, custom post types and WooCommerce pages.
Author: bestwebsite
Author URI: https://bestwebsite.com/
Version: 1.0
Text Domain: bestwebsite-meta-tags
*/


// direct calls are not allowed
defined('ABSPATH') || die();



// define plugin file
if( !defined('bestwebsite_PLUGIN_FILE') ){
    define( 'bestwebsite_PLUGIN_FILE', plugin_basename( __FILE__ ) );
}



// define relative path to plugin directory
if( !defined('bestwebsite_PLUGIN_DIR') ){
    define( 'bestwebsite_PLUGIN_DIR',  dirname( plugin_basename( __FILE__ ) ) );
}



// define full path to plugin file
if( !defined('bestwebsite_PLUGIN_FULL_PATH') ){
    define( 'bestwebsite_PLUGIN_FULL_PATH',  __FILE__ );
}



// include core class
if ( ! class_exists( 'bestwebsite_Meta_Tags' ) ){
	require_once dirname( __FILE__ ) . '/includes/class-bestwebsite-meta-tags.php';
}



// main instance of the plugin
return bestwebsite_Meta_Tags::get_instance();
