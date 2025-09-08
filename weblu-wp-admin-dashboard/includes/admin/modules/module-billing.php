<?php
/**
 * Module Billing for Weblu WP Admin Dashboard
 * 
 * This module handles the billing and subscription management for the dashboard.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Billing Module
 */
function weblu_render_billing_module() {
    ?>
    <div class="weblu-module weblu-billing-module">
        <h2><?php esc_html_e( 'Billing & Subscription', 'weblu-wp-admin-dashboard' ); ?></h2>
        <div class="weblu-billing-content">
            <p><?php esc_html_e( 'Manage your subscription and billing details below.', 'weblu-wp-admin-dashboard' ); ?></p>
            <div class="weblu-billing-status">
                <h3><?php esc_html_e( 'Current Plan:', 'weblu-wp-admin-dashboard' ); ?></h3>
                <p id="current-plan"><?php echo esc_html( get_current_plan() ); ?></p>
            </div>
            <button id="upgrade-plan" class="weblu-button"><?php esc_html_e( 'Upgrade Plan', 'weblu-wp-admin-dashboard' ); ?></button>
            <div class="weblu-invoice-status">
                <h3><?php esc_html_e( 'Invoice Status:', 'weblu-wp-admin-dashboard' ); ?></h3>
                <p id="invoice-status"><?php echo esc_html( get_invoice_status() ); ?></p>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Get current plan (dummy function for example)
 */
function get_current_plan() {
    // This function should return the current plan of the user.
    return 'Basic Plan';
}

/**
 * Get invoice status (dummy function for example)
 */
function get_invoice_status() {
    // This function should return the current invoice status of the user.
    return 'Paid';
}

// Enqueue the module's JavaScript
add_action( 'admin_enqueue_scripts', 'weblu_enqueue_billing_scripts' );
function weblu_enqueue_billing_scripts() {
    wp_enqueue_script( 'weblu-billing-js', plugins_url( '../assets/js/modules/billing.js', __FILE__ ), array( 'jquery' ), null, true );
}
?>