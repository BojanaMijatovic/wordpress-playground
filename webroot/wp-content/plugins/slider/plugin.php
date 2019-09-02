<?php
/**
 * Plugin Name: Custom Slider
 * Plugin URI: Wordpress/Plyground/webroot/wp-content/plugins/slider
 * Description: slider — is a Gutenberg plugin created via create-guten-block.
 * Author: Bojana
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
