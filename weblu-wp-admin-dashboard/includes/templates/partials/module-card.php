<div class="module-card">
    <div class="module-card-header">
        <h3 class="module-title"><?php echo esc_html($module_title); ?></h3>
    </div>
    <div class="module-card-body">
        <p class="module-description"><?php echo esc_html($module_description); ?></p>
        <button class="module-button" onclick="<?php echo esc_js($module_action); ?>">
            <?php echo esc_html($module_button_text); ?>
        </button>
    </div>
    <div class="module-card-footer">
        <span class="module-icon"><?php echo esc_html($module_icon); ?></span>
    </div>
</div>

<style>
    .module-card {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 16px;
        padding: 16px;
        transition: transform 0.2s;
    }

    .module-card:hover {
        transform: scale(1.05);
    }

    .module-card-header {
        margin-bottom: 12px;
    }

    .module-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .module-description {
        font-size: 1rem;
        color: #555;
    }

    .module-button {
        background-color: #0073aa;
        border: none;
        border-radius: 4px;
        color: #ffffff;
        cursor: pointer;
        padding: 10px 15px;
        text-align: center;
        transition: background-color 0.3s;
    }

    .module-button:hover {
        background-color: #005177;
    }

    .module-icon {
        font-size: 1.5rem;
        margin-top: 10px;
    }
</style>