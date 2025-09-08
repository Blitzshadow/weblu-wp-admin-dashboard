<?php
/**
 * Weblu WP Admin Dashboard Bootstrap File
 *
 * This file is responsible for initializing the plugin and loading necessary components.
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'WEBLU_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WEBLU_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load required files
require_once WEBLU_PLUGIN_DIR . 'admin/class-weblu-admin.php';
require_once WEBLU_PLUGIN_DIR . 'admin/hooks.php';
require_once WEBLU_PLUGIN_DIR . 'admin/enqueue.php';

// Initialize the plugin
function weblu_init() {
    $weblu_admin = new Weblu_Admin();
    $weblu_admin->init();
}
add_action( 'plugins_loaded', 'weblu_init' );