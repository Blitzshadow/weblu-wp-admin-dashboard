<?php
// Moduł wsparcia dla Weblu WP Admin Dashboard

// Funkcja do wyświetlania sekcji wsparcia
function weblu_support_module() {
    ?>
    <div class="weblu-module weblu-support-module">
        <h2><?php esc_html_e('Support and Help', 'weblu-wp-admin-dashboard'); ?></h2>
        <div class="weblu-support-content">
            <p><?php esc_html_e('If you have any questions or need assistance, please refer to the FAQ or contact our support team.', 'weblu-wp-admin-dashboard'); ?></p>
            <a href="<?php echo esc_url(admin_url('admin.php?page=weblu-support-faq')); ?>" class="button button-primary">
                <?php esc_html_e('FAQ', 'weblu-wp-admin-dashboard'); ?>
            </a>
            <a href="<?php echo esc_url('https://support.weblu.com'); ?>" class="button button-secondary" target="_blank">
                <?php esc_html_e('Contact Support', 'weblu-wp-admin-dashboard'); ?>
            </a>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="weblu-support-form">
                <input type="hidden" name="action" value="weblu_support_request">
                <label for="support_message"><?php esc_html_e('Your Message:', 'weblu-wp-admin-dashboard'); ?></label>
                <textarea name="support_message" id="support_message" rows="5" required></textarea>
                <button type="submit" class="button button-primary"><?php esc_html_e('Submit', 'weblu-wp-admin-dashboard'); ?></button>
            </form>
        </div>
    </div>
    <?php
}

// Rejestracja modułu wsparcia w dashboardzie
add_action('weblu_dashboard_modules', 'weblu_support_module');
?>