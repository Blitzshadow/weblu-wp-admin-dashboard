<?php
/**
 * Module: Edit Page
 * This module provides a button to edit the page using the block editor or page builder.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render the Edit Page module.
 */
function weblu_render_edit_page_module() {
    ?>
    <div class="weblu-module weblu-edit-page">
        <h2><?php esc_html_e( 'Edit Page', 'weblu-wp-admin-dashboard' ); ?></h2>
        <p><?php esc_html_e( 'Quick access to edit your page.', 'weblu-wp-admin-dashboard' ); ?></p>
        <a href="<?php echo esc_url( admin_url( 'post.php?post=' . get_the_ID() . '&action=edit' ) ); ?>" class="button button-primary">
            <?php esc_html_e( 'Edit Page', 'weblu-wp-admin-dashboard' ); ?>
        </a>
    </div>
    <?php
}

// Hook to register the module in the dashboard.
add_action( 'weblu_dashboard_modules', 'weblu_render_edit_page_module' );
?>