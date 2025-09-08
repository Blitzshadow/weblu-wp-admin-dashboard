<?php
/**
 * Module: Notifications
 * This module handles the display of system notifications in the Weblu WP Admin Dashboard.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the notifications module.
 */
function weblu_render_notifications_module() {
    ?>
    <div class="weblu-module notifications">
        <h2><?php esc_html_e( 'System Notifications', 'weblu-wp-admin-dashboard' ); ?></h2>
        <div id="notifications-container">
            <!-- Notifications will be dynamically loaded here -->
        </div>
    </div>
    <?php
}

/**
 * Enqueue scripts for the notifications module.
 */
function weblu_enqueue_notifications_scripts() {
    wp_enqueue_script( 'weblu-notifications', plugins_url( 'js/notifications.js', __FILE__ ), array( 'jquery' ), null, true );
}

// Hook to render the notifications module in the dashboard.
add_action( 'weblu_dashboard_render', 'weblu_render_notifications_module' );

// Hook to enqueue the notifications scripts.
add_action( 'admin_enqueue_scripts', 'weblu_enqueue_notifications_scripts' );
?>