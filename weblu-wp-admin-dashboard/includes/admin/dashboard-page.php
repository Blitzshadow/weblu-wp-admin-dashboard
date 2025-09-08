<?php
// Główna strona dashboardu dla wtyczki Weblu WP Admin Dashboard

// Funkcja do wyświetlania dashboardu
function weblu_render_dashboard_page() {
    ?>
    <div class="weblu-dashboard">
        <h1><?php esc_html_e('Weblu WP Admin Dashboard', 'weblu-wp-admin-dashboard'); ?></h1>
        <div class="weblu-dashboard-grid">
            <?php
            // Wczytaj moduły
            weblu_load_dashboard_modules();
            ?>
        </div>
    </div>
    <?php
}

// Funkcja do ładowania modułów dashboardu
function weblu_load_dashboard_modules() {
    // Lista modułów do załadowania
    $modules = [
        'edit-page',
        'themes',
        'domain',
        'woocommerce',
        'stats',
        'marketing',
        'billing',
        'support',
        'notifications',
        'marketplace',
    ];

    foreach ($modules as $module) {
        // Wczytaj odpowiedni moduł
        include_once WE_BLU_PLUGIN_DIR . "includes/admin/modules/module-{$module}.php";
    }
}

// Rejestracja strony dashboardu w menu administracyjnym
add_action('admin_menu', function() {
    add_menu_page(
        __('Weblu Dashboard', 'weblu-wp-admin-dashboard'),
        __('Weblu Dashboard', 'weblu-wp-admin-dashboard'),
        'manage_options',
        'weblu-dashboard',
        'weblu_render_dashboard_page',
        'dashicons-dashboard',
        2
    );
});
?>