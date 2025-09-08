// support.js - JavaScript for the Support module of the Weblu WP Admin Dashboard

document.addEventListener('DOMContentLoaded', function() {
    // Initialize support module functionalities
    initSupportModule();
});

function initSupportModule() {
    // Event listener for support form submission
    const supportForm = document.getElementById('support-form');
    if (supportForm) {
        supportForm.addEventListener('submit', function(event) {
            event.preventDefault();
            submitSupportRequest();
        });
    }

    // Load FAQ data
    loadFAQData();
}

function submitSupportRequest() {
    const formData = new FormData(document.getElementById('support-form'));
    
    fetch('/wp-json/weblu/v1/support', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Your support request has been submitted successfully!');
            document.getElementById('support-form').reset();
        } else {
            alert('There was an error submitting your request. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An unexpected error occurred. Please try again later.');
    });
}

function loadFAQData() {
    fetch('/wp-json/weblu/v1/faqs')
    .then(response => response.json())
    .then(data => {
        const faqContainer = document.getElementById('faq-container');
        if (faqContainer) {
            data.forEach(faq => {
                const faqItem = document.createElement('div');
                faqItem.classList.add('faq-item');
                faqItem.innerHTML = `<h3>${faq.question}</h3><p>${faq.answer}</p>`;
                faqContainer.appendChild(faqItem);
            });
        }
    })
    .catch(error => {
        console.error('Error loading FAQs:', error);
    });
}