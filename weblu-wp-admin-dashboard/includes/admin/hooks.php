<?php
// Hooki i filtry dla wtyczki Weblu WP Admin Dashboard

// Rejestracja hooków
function weblu_register_hooks() {
    // Przykład rejestracji hooka
    add_action('admin_menu', 'weblu_add_admin_menu');
    add_action('admin_enqueue_scripts', 'weblu_enqueue_scripts');
}

// Funkcja dodająca menu do panelu administracyjnego
function weblu_add_admin_menu() {
    add_menu_page(
        'Weblu Dashboard', // Tytuł strony
        'Weblu Dashboard', // Tytuł menu
        'manage_options', // Uprawnienia
        'weblu-dashboard', // Slug
        'weblu_render_dashboard', // Funkcja renderująca
        'dashicons-dashboard', // Ikona
        6 // Pozycja
    );
}

// Funkcja do ładowania skryptów i stylów
function weblu_enqueue_scripts() {
    wp_enqueue_style('weblu-admin-css', plugins_url('../assets/css/admin.css', __FILE__));
    wp_enqueue_script('weblu-admin-js', plugins_url('../assets/js/admin-dashboard.js', __FILE__), array('jquery'), null, true);
}

// Inicjalizacja hooków
add_action('init', 'weblu_register_hooks');
?>