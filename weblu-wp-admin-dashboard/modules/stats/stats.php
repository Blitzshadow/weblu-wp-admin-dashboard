<?php
// Moduł statystyk dla wtyczki Weblu WP Admin Dashboard

// Funkcja do generowania HTML dla modułu statystyk
function weblu_render_stats_module() {
    ?>
    <div class="weblu-module weblu-stats-module">
        <h2 class="weblu-module-title"><?php esc_html_e('Statystyki strony', 'weblu-wp-admin-dashboard'); ?></h2>
        <canvas id="weblu-stats-chart" width="400" height="200"></canvas>
        <div class="weblu-stats-data">
            <p><?php esc_html_e('Odwiedziny:', 'weblu-wp-admin-dashboard'); ?> <span id="weblu-visits-count">0</span></p>
            <p><?php esc_html_e('Sprzedaż:', 'weblu-wp-admin-dashboard'); ?> <span id="weblu-sales-count">0</span></p>
            <p><?php esc_html_e('Leady:', 'weblu-wp-admin-dashboard'); ?> <span id="weblu-leads-count">0</span></p>
        </div>
    </div>
    <?php
}

// Funkcja do rejestracji skryptów i stylów dla modułu statystyk
function weblu_enqueue_stats_scripts() {
    wp_enqueue_script('chart-js', plugins_url('/assets/js/vendor/chart.min.js', __FILE__), array(), null, true);
    wp_enqueue_script('weblu-stats-js', plugins_url('/assets/js/modules/stats/stats.js', __FILE__), array('chart-js'), null, true);
}

// Hook do dodania modułu statystyk do dashboardu
add_action('weblu_dashboard_modules', 'weblu_render_stats_module');
add_action('admin_enqueue_scripts', 'weblu_enqueue_stats_scripts');
?>