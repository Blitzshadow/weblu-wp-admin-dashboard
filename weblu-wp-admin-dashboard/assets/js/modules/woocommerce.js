// JavaScript code for the WooCommerce module in the Weblu WP Admin Dashboard

document.addEventListener('DOMContentLoaded', function() {
    // Initialize WooCommerce module
    const woocommerceModule = {
        init: function() {
            this.bindEvents();
            this.loadData();
        },

        bindEvents: function() {
            // Bind click events for WooCommerce shortcuts
            document.querySelector('#woocommerce-products').addEventListener('click', this.openProducts.bind(this));
            document.querySelector('#woocommerce-orders').addEventListener('click', this.openOrders.bind(this));
            document.querySelector('#woocommerce-payments').addEventListener('click', this.openPayments.bind(this));
        },

        loadData: function() {
            // Load WooCommerce data (e.g., products, orders, payments)
            // This can be an AJAX call to fetch data from the server
            console.log('Loading WooCommerce data...');
        },

        openProducts: function() {
            // Logic to open the products page
            window.location.href = '/wp-admin/edit.php?post_type=product';
        },

        openOrders: function() {
            // Logic to open the orders page
            window.location.href = '/wp-admin/edit.php?post_type=shop_order';
        },

        openPayments: function() {
            // Logic to open the payments page
            window.location.href = '/wp-admin/admin.php?page=wc-admin&path=/analytics/payments';
        }
    };

    // Initialize the WooCommerce module
    woocommerceModule.init();
});