<?php
/**
 * Module Domain
 * 
 * This module handles the domain connection and SSL configuration for the Weblu WP Admin Dashboard.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Domain Module
 */
function weblu_render_domain_module() {
    ?>
    <div class="weblu-module weblu-domain-module">
        <h2><?php esc_html_e( 'Podłącz Domenę', 'weblu-wp-admin-dashboard' ); ?></h2>
        <p><?php esc_html_e( 'Skonfiguruj swoją domenę oraz SSL.', 'weblu-wp-admin-dashboard' ); ?></p>
        
        <div class="weblu-domain-config">
            <label for="weblu-domain"><?php esc_html_e( 'Domena:', 'weblu-wp-admin-dashboard' ); ?></label>
            <input type="text" id="weblu-domain" name="weblu-domain" placeholder="<?php esc_attr_e( 'Wprowadź swoją domenę', 'weblu-wp-admin-dashboard' ); ?>" />
            
            <button id="weblu-connect-domain" class="button button-primary"><?php esc_html_e( 'Podłącz Domenę', 'weblu-wp-admin-dashboard' ); ?></button>
        </div>
        
        <div id="weblu-domain-status" class="weblu-domain-status"></div>
    </div>
    <script src="<?php echo esc_url( plugins_url( 'assets/js/modules/domain.js', dirname( __FILE__ ) ) ); ?>"></script>
    <?php
}

// Hook to add the domain module to the dashboard
add_action( 'weblu_dashboard_modules', 'weblu_render_domain_module' );
?>