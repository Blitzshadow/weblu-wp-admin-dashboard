<?php
// Moduł marketingu dla wtyczki Weblu WP Admin Dashboard

function weblu_render_marketing_module() {
    ?>
    <div class="weblu-module marketing-module">
        <h2 class="weblu-module-title">Marketing i SEO</h2>
        <div class="weblu-module-content">
            <p>Uzyskaj szybki dostęp do ustawień SEO oraz integracji z mediami społecznościowymi.</p>
            <button class="weblu-button" id="weblu-seo-settings">Ustawienia SEO</button>
            <button class="weblu-button" id="weblu-social-media-integration">Integracja z mediami społecznościowymi</button>
        </div>
    </div>
    <?php
}

// Rejestracja modułu w dashboardzie
add_action('weblu_dashboard_render', 'weblu_render_marketing_module');
?>