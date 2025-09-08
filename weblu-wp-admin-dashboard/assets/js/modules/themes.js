// This file contains the JavaScript code for the Themes module of the Weblu WP Admin Dashboard plugin.

// Function to initialize the themes module
function initThemesModule() {
    // Event listener for theme selection
    document.querySelectorAll('.theme-selector').forEach(item => {
        item.addEventListener('click', event => {
            const selectedTheme = event.target.dataset.theme;
            applyTheme(selectedTheme);
        });
    });
}

// Function to apply the selected theme
function applyTheme(theme) {
    // AJAX request to apply the selected theme
    fetch(`/wp-admin/admin-ajax.php?action=apply_theme&theme=${theme}`, {
        method: 'POST',
        credentials: 'same-origin'
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Notify user of successful theme application
            alert('Theme applied successfully!');
            location.reload(); // Reload the page to reflect changes
        } else {
            // Notify user of an error
            alert('Error applying theme: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An unexpected error occurred.');
    });
}

// Initialize the themes module on document ready
document.addEventListener('DOMContentLoaded', initThemesModule);