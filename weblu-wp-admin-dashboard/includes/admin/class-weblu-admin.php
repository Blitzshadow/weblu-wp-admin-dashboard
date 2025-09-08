<?php
/**
 * Class Weblu_Admin
 *
 * This class handles the admin dashboard logic for the Weblu WP Admin Dashboard plugin.
 */
class Weblu_Admin {

    /**
     * Constructor to initialize the admin dashboard.
     */
    public function __construct() {
        // Load necessary files and initialize hooks
        $this->load_dependencies();
        $this->initialize_hooks();
    }

    /**
     * Load required dependencies for the admin dashboard.
     */
    private function load_dependencies() {
        // Include necessary module files
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-edit-page.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-themes.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-domain.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-woocommerce.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-stats.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-marketing.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-billing.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-support.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-notifications.php';
        include_once plugin_dir_path( __FILE__ ) . 'modules/module-marketplace.php';
    }

    /**
     * Initialize hooks for the admin dashboard.
     */
    private function initialize_hooks() {
        add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    /**
     * Add admin menu for the dashboard.
     */
    public function add_admin_menu() {
        add_menu_page(
            'Weblu Dashboard',
            'Weblu Dashboard',
            'manage_options',
            'weblu-dashboard',
            array( $this, 'render_dashboard' ),
            'dashicons-dashboard',
            2
        );
    }

    /**
     * Render the dashboard page.
     */
    public function render_dashboard() {
        include_once plugin_dir_path( __FILE__ ) . '../templates/dashboard-main.php';
    }

    /**
     * Enqueue scripts and styles for the admin dashboard.
     */
    public function enqueue_scripts() {
        wp_enqueue_style( 'weblu-admin-style', plugin_dir_url( __FILE__ ) . '../../assets/css/admin.css' );
        wp_enqueue_script( 'weblu-admin-dashboard', plugin_dir_url( __FILE__ ) . '../../assets/js/admin-dashboard.js', array( 'jquery' ), null, true );
        wp_enqueue_script( 'chart-js', plugin_dir_url( __FILE__ ) . '../../assets/js/vendor/chart.min.js', array(), null, true );
    }
}

// Initialize the Weblu_Admin class
new Weblu_Admin();
?>