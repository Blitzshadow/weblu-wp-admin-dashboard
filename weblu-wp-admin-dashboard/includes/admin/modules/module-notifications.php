<?php
// Moduł powiadomień systemowych dla wtyczki Weblu WP Admin Dashboard

function weblu_render_notifications_module() {
    ?>
    <div class="weblu-module weblu-notifications">
        <h2 class="weblu-module-title"><?php esc_html_e('System Notifications', 'weblu-wp-admin-dashboard'); ?></h2>
        <div id="weblu-notifications-content">
            <!-- Dynamiczne powiadomienia będą ładowane tutaj -->
        </div>
    </div>
    <?php
}

// Funkcja do rejestracji modułu powiadomień
function weblu_register_notifications_module() {
    add_action('weblu_dashboard_render', 'weblu_render_notifications_module');
}

// Rejestracja modułu powiadomień
add_action('weblu_init', 'weblu_register_notifications_module');
?>