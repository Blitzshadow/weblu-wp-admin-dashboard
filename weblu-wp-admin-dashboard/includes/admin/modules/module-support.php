<?php
/**
 * Module Support for Weblu WP Admin Dashboard
 *
 * This module provides support-related functionalities for the Weblu WP Admin Dashboard.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Support Module
 */
function weblu_render_support_module() {
    ?>
    <div class="weblu-module weblu-support-module">
        <h2><?php esc_html_e( 'Support & Help', 'weblu-wp-admin-dashboard' ); ?></h2>
        <div class="weblu-support-content">
            <p><?php esc_html_e( 'Need help? Check out our FAQ or contact support.', 'weblu-wp-admin-dashboard' ); ?></p>
            <a href="<?php echo esc_url( admin_url( 'admin.php?page=weblu-support-faq' ) ); ?>" class="button button-primary">
                <?php esc_html_e( 'FAQ', 'weblu-wp-admin-dashboard' ); ?>
            </a>
            <a href="<?php echo esc_url( admin_url( 'admin.php?page=weblu-support-contact' ) ); ?>" class="button button-secondary">
                <?php esc_html_e( 'Contact Support', 'weblu-wp-admin-dashboard' ); ?>
            </a>
        </div>
    </div>
    <?php
}

// Hook to add the support module to the dashboard
add_action( 'weblu_dashboard_modules', 'weblu_render_support_module' );
?>