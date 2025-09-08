<?php
// module-themes.php

function weblu_render_themes_module() {
    ?>
    <div class="weblu-module weblu-themes-module">
        <h2><?php esc_html_e('Themes and Templates', 'weblu-wp-admin-dashboard'); ?></h2>
        <div class="weblu-module-content">
            <p><?php esc_html_e('Choose and customize your themes and templates.', 'weblu-wp-admin-dashboard'); ?></p>
            <button id="weblu-change-theme" class="weblu-button">
                <?php esc_html_e('Change Theme', 'weblu-wp-admin-dashboard'); ?>
            </button>
            <div id="weblu-theme-list" class="weblu-theme-list">
                <!-- Dynamic theme list will be populated here -->
            </div>
        </div>
    </div>
    <?php
}

// Enqueue the JavaScript for the themes module
function weblu_enqueue_themes_module_scripts() {
    wp_enqueue_script('weblu-themes-js', plugins_url('/assets/js/modules/themes.js', __FILE__), array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'weblu_enqueue_themes_module_scripts');
?>