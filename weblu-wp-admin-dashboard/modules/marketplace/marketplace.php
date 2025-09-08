<?php
/**
 * Marketplace Module for Weblu WP Admin Dashboard
 * 
 * This module provides functionality for managing marketplace integrations and add-ons.
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Marketplace module
 */
function weblu_render_marketplace_module() {
    ?>
    <div class="weblu-module marketplace-module">
        <h2><?php esc_html_e( 'Marketplace', 'weblu-wp-admin-dashboard' ); ?></h2>
        <div class="marketplace-content">
            <p><?php esc_html_e( 'Explore available integrations and add-ons to enhance your website.', 'weblu-wp-admin-dashboard' ); ?></p>
            <div id="marketplace-items" class="grid">
                <!-- Marketplace items will be dynamically loaded here -->
            </div>
        </div>
    </div>
    <?php
}

/**
 * Enqueue scripts and styles for the Marketplace module
 */
function weblu_enqueue_marketplace_scripts() {
    wp_enqueue_script( 'weblu-marketplace-js', plugins_url( 'js/marketplace.js', __FILE__ ), array( 'jquery' ), null, true );
    wp_enqueue_style( 'weblu-marketplace-css', plugins_url( 'css/marketplace.css', __FILE__ ) );
}

// Hook to render the module in the dashboard
add_action( 'weblu_dashboard_render', 'weblu_render_marketplace_module' );

// Hook to enqueue scripts and styles
add_action( 'admin_enqueue_scripts', 'weblu_enqueue_marketplace_scripts' );
?>