# Weblu WP Admin Dashboard Architecture Documentation

## Overview

The "Weblu WP Admin Dashboard" plugin is designed to replace the classic WordPress admin dashboard with a modern, lightweight, and feature-rich interface tailored for WPaaS clients. The architecture is modular, allowing for easy addition, modification, and removal of dashboard items.

## Architecture Components

### 1. Main Plugin File

- **File:** `weblu-wp-admin-dashboard.php`
- **Purpose:** Registers the plugin with WordPress, loads necessary files, and initializes the dashboard.

### 2. Asset Management

- **CSS and JS Files:**
  - **Location:** `assets/css/admin.css` and `assets/js/admin-dashboard.js`
  - **Purpose:** Contains the main styles and scripts for the admin dashboard.
  - **Vendor Libraries:** Includes external libraries such as Chart.js located in `assets/js/vendor/chart.min.js`.

### 3. Modular Structure

Each dashboard item is implemented as a separate module, allowing for scalability and maintainability. The modules are located in the `modules/` directory and include:

- **Edit Page Module:** 
  - **Files:** `modules/edit-page/edit-page.php`, `modules/edit-page/js/edit-page.js`, `modules/edit-page/css/edit-page.css`
  
- **Themes Module:** 
  - **Files:** `modules/themes/themes.php`, `modules/themes/js/themes.js`, `modules/themes/css/themes.css`
  
- **Domain Module:** 
  - **Files:** `modules/domain/domain.php`, `modules/domain/js/domain.js`
  
- **WooCommerce Module:** 
  - **Files:** `modules/woocommerce/woocommerce.php`, `modules/woocommerce/js/woocommerce.js`
  
- **Stats Module:** 
  - **Files:** `modules/stats/stats.php`, `modules/stats/js/stats.js`
  
- **Marketing Module:** 
  - **Files:** `modules/marketing/marketing.php`, `modules/marketing/js/marketing.js`
  
- **Billing Module:** 
  - **Files:** `modules/billing/billing.php`, `modules/billing/js/billing.js`
  
- **Support Module:** 
  - **Files:** `modules/support/support.php`, `modules/support/js/support.js`
  
- **Notifications Module:** 
  - **Files:** `modules/notifications/notifications.php`, `modules/notifications/js/notifications.js`
  
- **Marketplace Module:** 
  - **Files:** `modules/marketplace/marketplace.php`, `modules/marketplace/js/marketplace.js`

### 4. Template Structure

- **Main Dashboard Template:**
  - **File:** `includes/templates/dashboard-main.php`
  - **Purpose:** Generates the main dashboard layout.
  
- **Partial Templates:**
  - **Location:** `includes/templates/partials/`
  - **Files:** Contains reusable components like `module-card.php` and `grid-wrapper.php`.

### 5. REST API Integration

- **File:** `includes/rest/api-endpoints.php`
- **Purpose:** Defines REST API endpoints for the plugin, allowing for external interactions and data retrieval.

### 6. Hooks and Filters

- **File:** `includes/admin/hooks.php`
- **Purpose:** Defines hooks and filters to extend the functionality of the plugin, making it easier to integrate with other plugins and themes.

### 7. Testing

- **PHP Unit Tests:**
  - **File:** `tests/php/test-admin.php`
  
- **JavaScript Tests:**
  - **File:** `tests/js/test-stats.spec.js`

## Conclusion

The "Weblu WP Admin Dashboard" plugin is built with a focus on modularity, scalability, and modern design principles. Each component is designed to be easily extendable, ensuring that future enhancements can be integrated seamlessly. This architecture documentation serves as a guide for developers looking to understand and contribute to the project.