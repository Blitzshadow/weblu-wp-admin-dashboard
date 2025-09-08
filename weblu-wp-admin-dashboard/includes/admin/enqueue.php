<?php
// Enqueue scripts and styles for the Weblu WP Admin Dashboard
function weblu_enqueue_admin_assets() {
    // Enqueue main admin CSS
    wp_enqueue_style('weblu-admin-css', plugin_dir_url(__FILE__) . '../../assets/css/admin.css', array(), '1.0.0', 'all');

    // Enqueue Chart.js library
    wp_enqueue_script('chart-js', plugin_dir_url(__FILE__) . '../../assets/js/vendor/chart.min.js', array(), '2.9.4', true);

    // Enqueue main admin JavaScript
    wp_enqueue_script('weblu-admin-js', plugin_dir_url(__FILE__) . '../../assets/js/admin-dashboard.js', array('jquery', 'chart-js'), '1.0.0', true);

    // Enqueue module scripts
    $modules = array(
        'edit-page',
        'themes',
        'domain',
        'woocommerce',
        'stats',
        'marketing',
        'billing',
        'support',
        'notifications',
        'marketplace'
    );

    foreach ($modules as $module) {
        wp_enqueue_script("weblu-{$module}-js", plugin_dir_url(__FILE__) . "../../assets/js/modules/{$module}.js", array('jquery'), '1.0.0', true);
    }
}
add_action('admin_enqueue_scripts', 'weblu_enqueue_admin_assets');
?>