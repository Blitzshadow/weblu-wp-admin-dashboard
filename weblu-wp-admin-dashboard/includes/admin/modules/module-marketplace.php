<?php
/**
 * Module Marketplace for Weblu WP Admin Dashboard
 *
 * This module provides functionality for managing marketplace integrations and add-ons.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Marketplace module.
 */
function weblu_render_marketplace_module() {
    ?>
    <div class="weblu-module weblu-marketplace">
        <h2><?php esc_html_e( 'Marketplace', 'weblu-wp-admin-dashboard' ); ?></h2>
        <div class="weblu-module-content">
            <p><?php esc_html_e( 'Explore available integrations and add-ons to enhance your website.', 'weblu-wp-admin-dashboard' ); ?></p>
            <button id="weblu-marketplace-button" class="button button-primary">
                <?php esc_html_e( 'View Marketplace', 'weblu-wp-admin-dashboard' ); ?>
            </button>
        </div>
    </div>
    <?php
}

/**
 * Enqueue scripts for the Marketplace module.
 */
function weblu_enqueue_marketplace_scripts() {
    wp_enqueue_script( 'weblu-marketplace-js', plugins_url( 'assets/js/modules/marketplace.js', __FILE__ ), array( 'jquery' ), null, true );
}

// Hook to render the module in the dashboard.
add_action( 'weblu_dashboard_render', 'weblu_render_marketplace_module' );

// Hook to enqueue scripts for the module.
add_action( 'admin_enqueue_scripts', 'weblu_enqueue_marketplace_scripts' );
?>