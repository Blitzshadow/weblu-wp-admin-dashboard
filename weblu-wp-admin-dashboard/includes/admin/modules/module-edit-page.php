<?php
// module-edit-page.php

function weblu_render_edit_page_module() {
    ?>
    <div class="weblu-module weblu-edit-page">
        <h2><?php esc_html_e('Edit Page', 'weblu-wp-admin-dashboard'); ?></h2>
        <p><?php esc_html_e('Quick access to the block editor or your preferred page builder.', 'weblu-wp-admin-dashboard'); ?></p>
        <a href="<?php echo esc_url(admin_url('post.php?post=' . get_the_ID() . '&action=edit')); ?>" class="weblu-button weblu-edit-button">
            <?php esc_html_e('Edit Page', 'weblu-wp-admin-dashboard'); ?>
        </a>
    </div>
    <?php
}

// Enqueue the module's specific JavaScript and CSS
function weblu_enqueue_edit_page_module_assets() {
    wp_enqueue_script('weblu-edit-page-js', plugins_url('/assets/js/modules/edit-page.js', __FILE__), array('jquery'), null, true);
    wp_enqueue_style('weblu-edit-page-css', plugins_url('/assets/css/edit-page.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'weblu_enqueue_edit_page_module_assets');
?>