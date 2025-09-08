<?php
// WooCommerce Module for Weblu WP Admin Dashboard

// Function to render the WooCommerce module
function weblu_render_woocommerce_module() {
    ?>
    <div class="weblu-module weblu-woocommerce">
        <h2><?php esc_html_e('WooCommerce', 'weblu-wp-admin-dashboard'); ?></h2>
        <div class="weblu-module-content">
            <div class="weblu-card">
                <h3><?php esc_html_e('Products', 'weblu-wp-admin-dashboard'); ?></h3>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=product')); ?>" class="weblu-button">
                    <?php esc_html_e('Manage Products', 'weblu-wp-admin-dashboard'); ?>
                </a>
            </div>
            <div class="weblu-card">
                <h3><?php esc_html_e('Orders', 'weblu-wp-admin-dashboard'); ?></h3>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=shop_order')); ?>" class="weblu-button">
                    <?php esc_html_e('View Orders', 'weblu-wp-admin-dashboard'); ?>
                </a>
            </div>
            <div class="weblu-card">
                <h3><?php esc_html_e('Payments', 'weblu-wp-admin-dashboard'); ?></h3>
                <a href="<?php echo esc_url(admin_url('admin.php?page=wc-settings&tab=checkout')); ?>" class="weblu-button">
                    <?php esc_html_e('Payment Settings', 'weblu-wp-admin-dashboard'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

// Enqueue scripts for the WooCommerce module
function weblu_enqueue_woocommerce_scripts() {
    wp_enqueue_script('weblu-woocommerce-js', plugins_url('js/woocommerce.js', __FILE__), array('jquery'), null, true);
}

// Register the WooCommerce module
add_action('weblu_dashboard_modules', 'weblu_render_woocommerce_module');
add_action('admin_enqueue_scripts', 'weblu_enqueue_woocommerce_scripts');
?>