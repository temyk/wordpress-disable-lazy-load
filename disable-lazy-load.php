<?php
/**
 * Plugin Name:       Disable WP Lazy Load
 * Description:       This plugin allows you to disable native Wordpress lazy loading
 * Version:           1.0.0
 * Author:            Webtemyk
 * Author URI:        https://github.com/temyk
 * License:          GPLv2
 * Text Domain:       disable-lazy-load
 * Domain Path:       /languages
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

function wdll_disable_lazy_loading( $default, $tag_name, $context ) {
	return false;
}

add_filter('wp_lazy_loading_enabled', 'wdll_disable_lazy_loading', 10, 3);