<?php
/**
 * Module: Domain
 * This module handles domain connection and SSL configuration.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Domain module.
 */
function weblu_render_domain_module() {
    ?>
    <div class="weblu-module weblu-domain-module">
        <h2><?php esc_html_e( 'Connect Domain', 'weblu-wp-admin-dashboard' ); ?></h2>
        <form id="weblu-domain-form">
            <label for="domain"><?php esc_html_e( 'Domain Name:', 'weblu-wp-admin-dashboard' ); ?></label>
            <input type="text" id="domain" name="domain" required>
            <button type="submit" class="button button-primary"><?php esc_html_e( 'Connect Domain', 'weblu-wp-admin-dashboard' ); ?></button>
        </form>
        <div id="domain-status"></div>
    </div>
    <?php
}

/**
 * Enqueue scripts for the Domain module.
 */
function weblu_enqueue_domain_scripts() {
    wp_enqueue_script( 'weblu-domain-js', plugins_url( 'modules/domain/js/domain.js', __FILE__ ), array( 'jquery' ), null, true );
}
add_action( 'admin_enqueue_scripts', 'weblu_enqueue_domain_scripts' );

// Hook to render the module in the dashboard.
add_action( 'weblu_dashboard_render', 'weblu_render_domain_module' );
?>