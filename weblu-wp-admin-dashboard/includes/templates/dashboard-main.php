<?php
// Szablon głównej strony dashboardu

// Zabezpieczenie przed bezpośrednim dostępem
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Funkcja do wyświetlania głównego dashboardu
function weblu_dashboard_main() {
    ?>
    <div class="weblu-dashboard">
        <h1 class="dashboard-title">Weblu WP Admin Dashboard</h1>
        <div class="dashboard-grid">
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
    // Tutaj można dodać logikę do ładowania poszczególnych modułów
    // Przykład:
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-edit-page.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-themes.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-domain.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-woocommerce.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-stats.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-marketing.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-billing.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-support.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-notifications.php';
    include_once WEBLU_PLUGIN_DIR . 'includes/admin/modules/module-marketplace.php';
}
?>