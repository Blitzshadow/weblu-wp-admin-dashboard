<?php
// Weblu WP Admin Dashboard - API Endpoints

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register REST API endpoints for the Weblu WP Admin Dashboard.
 */
function weblu_register_api_endpoints() {
    register_rest_route( 'weblu/v1', '/dashboard', array(
        'methods'  => 'GET',
        'callback' => 'weblu_get_dashboard_data',
        'permission_callback' => '__return_true',
    ));

    // Additional endpoints can be registered here
}

/**
 * Callback function to get dashboard data.
 *
 * @param WP_REST_Request $request
 * @return WP_REST_Response
 */
function weblu_get_dashboard_data( $request ) {
    // Fetch data for the dashboard
    $data = array(
        'modules' => array(
            'edit_page' => array(
                'title' => 'Edycja strony',
                'icon'  => 'dashicons-edit',
                'link'  => admin_url( 'post.php?post=1&action=edit' ),
            ),
            'themes' => array(
                'title' => 'Szablony i motywy',
                'icon'  => 'dashicons-admin-appearance',
                'link'  => admin_url( 'themes.php' ),
            ),
            'domain' => array(
                'title' => 'Podłącz domenę',
                'icon'  => 'dashicons-admin-site',
                'link'  => admin_url( 'options-general.php' ),
            ),
            'woocommerce' => array(
                'title' => 'Sklep internetowy',
                'icon'  => 'dashicons-cart',
                'link'  => admin_url( 'edit.php?post_type=product' ),
            ),
            'stats' => array(
                'title' => 'Statystyki strony',
                'icon'  => 'dashicons-chart-line',
                'link'  => admin_url( 'admin.php?page=weblu-dashboard&tab=stats' ),
            ),
            'marketing' => array(
                'title' => 'Marketing i SEO',
                'icon'  => 'dashicons-megaphone',
                'link'  => admin_url( 'admin.php?page=weblu-dashboard&tab=marketing' ),
            ),
            'billing' => array(
                'title' => 'Subskrypcja i płatności',
                'icon'  => 'dashicons-money',
                'link'  => admin_url( 'admin.php?page=weblu-dashboard&tab=billing' ),
            ),
            'support' => array(
                'title' => 'Support i pomoc',
                'icon'  => 'dashicons-sos',
                'link'  => admin_url( 'admin.php?page=weblu-dashboard&tab=support' ),
            ),
            'notifications' => array(
                'title' => 'Powiadomienia systemowe',
                'icon'  => 'dashicons-bell',
                'link'  => admin_url( 'admin.php?page=weblu-dashboard&tab=notifications' ),
            ),
            'marketplace' => array(
                'title' => 'Marketplace / dodatki',
                'icon'  => 'dashicons-store',
                'link'  => admin_url( 'admin.php?page=weblu-dashboard&tab=marketplace' ),
            ),
        ),
    );

    return new WP_REST_Response( $data, 200 );
}

// Hook to register the API endpoints
add_action( 'rest_api_init', 'weblu_register_api_endpoints' );
?>