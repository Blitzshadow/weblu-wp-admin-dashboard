<?php
/**
 * Plugin Name: Weblu WP Admin Dashboard
 * Description: Nowoczesny, lekki i rozbudowany panel administracyjny dla klientów WPaaS.
 * Version: 1.0.0
 * Author: Twoje Imię
 * Author URI: https://twojastrona.pl
 * License: GPL2
 */

// Zapobiegaj bezpośredniemu dostępowi do pliku
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Definiowanie stałych
define( 'WEBLU_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WEBLU_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Ładowanie niezbędnych plików
require_once WEBLU_PLUGIN_DIR . 'includes/bootstrap.php';

// Inicjalizacja wtyczki
function weblu_init() {
    // Rejestracja menu w panelu administracyjnym
    add_menu_page(
        'Weblu Dashboard',
        'Weblu Dashboard',
        'manage_options',
        'weblu-dashboard',
        'weblu_render_dashboard',
        'dashicons-dashboard',
        2
    );
}
add_action( 'admin_menu', 'weblu_init' );

// Funkcja renderująca dashboard
function weblu_render_dashboard() {
    include_once WEBLU_PLUGIN_DIR . 'includes/templates/dashboard-main.php';
}
?>