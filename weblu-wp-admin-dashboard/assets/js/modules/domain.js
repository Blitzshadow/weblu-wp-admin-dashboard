// File: /weblu-wp-admin-dashboard/weblu-wp-admin-dashboard/assets/js/modules/domain.js

document.addEventListener('DOMContentLoaded', function() {
    const domainForm = document.getElementById('domain-form');
    const domainInput = document.getElementById('domain-input');
    const sslCheckbox = document.getElementById('ssl-checkbox');
    const submitButton = document.getElementById('submit-domain');

    submitButton.addEventListener('click', function(event) {
        event.preventDefault();
        const domainValue = domainInput.value;
        const sslEnabled = sslCheckbox.checked;

        if (validateDomain(domainValue)) {
            // Perform AJAX request to save domain and SSL settings
            saveDomainSettings(domainValue, sslEnabled);
        } else {
            alert('Please enter a valid domain.');
        }
    });

    function validateDomain(domain) {
        const domainPattern = /^(?!-)[A-Za-z0-9-]{1,63}(?<!-)(\.[A-Za-z]{2,})+$/;
        return domainPattern.test(domain);
    }

    function saveDomainSettings(domain, ssl) {
        // Example AJAX request (to be implemented)
        fetch('/wp-json/weblu/v1/domain', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': webluAdmin.nonce // Assuming nonce is localized
            },
            body: JSON.stringify({ domain: domain, ssl: ssl })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Domain settings saved successfully!');
            } else {
                alert('Error saving domain settings: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while saving domain settings.');
        });
    }
});