// JavaScript code for the Domain module of the Weblu WP Admin Dashboard

document.addEventListener('DOMContentLoaded', function() {
    const domainForm = document.getElementById('domain-form');
    const domainInput = document.getElementById('domain-input');
    const sslCheckbox = document.getElementById('ssl-checkbox');
    const submitButton = document.getElementById('submit-button');
    const messageBox = document.getElementById('message-box');

    submitButton.addEventListener('click', function(event) {
        event.preventDefault();
        const domain = domainInput.value;
        const useSSL = sslCheckbox.checked;

        if (validateDomain(domain)) {
            // Simulate an API call to connect the domain
            connectDomain(domain, useSSL)
                .then(response => {
                    messageBox.textContent = response.message;
                    messageBox.classList.add('success');
                })
                .catch(error => {
                    messageBox.textContent = error.message;
                    messageBox.classList.add('error');
                });
        } else {
            messageBox.textContent = 'Please enter a valid domain.';
            messageBox.classList.add('error');
        }
    });

    function validateDomain(domain) {
        const domainPattern = /^(?!-)[A-Za-z0-9-]{1,63}(?<!-)(\.[A-Za-z]{2,})+$/;
        return domainPattern.test(domain);
    }

    function connectDomain(domain, useSSL) {
        return new Promise((resolve, reject) => {
            // Simulated API response
            setTimeout(() => {
                if (domain) {
                    resolve({ message: `Domain ${domain} connected successfully! SSL: ${useSSL}` });
                } else {
                    reject({ message: 'Failed to connect domain.' });
                }
            }, 1000);
        });
    }
});