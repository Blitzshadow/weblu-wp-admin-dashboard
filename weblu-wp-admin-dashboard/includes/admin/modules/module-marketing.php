<?php
// Marketing Module for Weblu WP Admin Dashboard

function weblu_render_marketing_module() {
    ?>
    <div class="weblu-module weblu-marketing-module">
        <h2 class="weblu-module-title"><?php esc_html_e('Marketing & SEO', 'weblu-wp-admin-dashboard'); ?></h2>
        <div class="weblu-module-content">
            <p><?php esc_html_e('Quick access to SEO settings and social media integrations.', 'weblu-wp-admin-dashboard'); ?></p>
            <button class="weblu-button weblu-seo-settings">
                <?php esc_html_e('SEO Settings', 'weblu-wp-admin-dashboard'); ?>
            </button>
            <button class="weblu-button weblu-social-media-integration">
                <?php esc_html_e('Social Media Integration', 'weblu-wp-admin-dashboard'); ?>
            </button>
        </div>
    </div>
    <?php
}

// Enqueue the marketing module scripts
function weblu_enqueue_marketing_scripts() {
    wp_enqueue_script('weblu-marketing-js', plugins_url('/assets/js/modules/marketing.js', __FILE__), array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'weblu_enqueue_marketing_scripts');

// Register the marketing module in the dashboard
function weblu_register_marketing_module() {
    add_action('weblu_dashboard_modules', 'weblu_render_marketing_module');
}
add_action('admin_init', 'weblu_register_marketing_module');
?>