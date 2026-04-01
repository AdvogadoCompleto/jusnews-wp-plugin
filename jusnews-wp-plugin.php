<?php
/**
 * Plugin Name: JUSNEWS WordPress Plugin
 * Version: 1.0.0
 * Plugin URI: http://github.com/AdvogadoCompleto/jusnews-wp-plugin/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Advogado Completo <jusnews@advogadocompleto.com>
 * Author URI: http://github.com/AdvogadoCompleto/
 * Requires at least: 6.9.4
 * Tested up to: 6.9.4
 *
 * Text Domain: jusnews-wordpress-plugin
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Advogado Completo
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-jusnews-wp-plugin.php';
require_once 'includes/class-jusnews-wp-plugin-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-jusnews-wp-plugin-admin-api.php';
require_once 'includes/lib/class-jusnews-wp-plugin-post-type.php';
require_once 'includes/lib/class-jusnews-wp-plugin-taxonomy.php';

/**
 * Returns the main instance of JUSNEWS_WordPress_Plugin to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object JUSNEWS_WordPress_Plugin
 */
function jusnews_wordpress_plugin() {
	$instance = JUSNEWS_WordPress_Plugin::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = JUSNEWS_WordPress_Plugin_Settings::instance( $instance );
	}

	return $instance;
}

jusnews_wordpress_plugin();
