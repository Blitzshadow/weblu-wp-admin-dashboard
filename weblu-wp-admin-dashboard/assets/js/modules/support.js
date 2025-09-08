// support.js - JavaScript for the Support module of the Weblu WP Admin Dashboard

document.addEventListener('DOMContentLoaded', function() {
    const supportForm = document.getElementById('support-form');
    const faqSection = document.getElementById('faq-section');

    // Handle support form submission
    if (supportForm) {
        supportForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(supportForm);

            // Example AJAX request to submit the support form
            fetch('/wp-json/weblu/v1/support', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Your request has been submitted successfully!');
                    supportForm.reset();
                } else {
                    alert('There was an error submitting your request. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error submitting your request. Please try again.');
            });
        });
    }

    // Load FAQs dynamically (example)
    if (faqSection) {
        fetch('/wp-json/weblu/v1/faqs')
            .then(response => response.json())
            .then(faqs => {
                faqs.forEach(faq => {
                    const faqItem = document.createElement('div');
                    faqItem.classList.add('faq-item');
                    faqItem.innerHTML = `<h3>${faq.question}</h3><p>${faq.answer}</p>`;
                    faqSection.appendChild(faqItem);
                });
            })
            .catch(error => {
                console.error('Error loading FAQs:', error);
            });
    }
});