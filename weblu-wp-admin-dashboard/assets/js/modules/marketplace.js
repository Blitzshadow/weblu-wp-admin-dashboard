// This file contains the JavaScript code for the Marketplace module of the Weblu WP Admin Dashboard plugin.

document.addEventListener('DOMContentLoaded', function() {
    // Initialize the marketplace module
    initMarketplace();

    function initMarketplace() {
        // Fetch and display marketplace items
        fetchMarketplaceItems();
    }

    function fetchMarketplaceItems() {
        // Example AJAX request to fetch marketplace items
        fetch('/wp-json/weblu/v1/marketplace-items')
            .then(response => response.json())
            .then(data => {
                displayMarketplaceItems(data);
            })
            .catch(error => {
                console.error('Error fetching marketplace items:', error);
            });
    }

    function displayMarketplaceItems(items) {
        const marketplaceContainer = document.getElementById('marketplace-items');
        marketplaceContainer.innerHTML = '';

        items.forEach(item => {
            const itemCard = document.createElement('div');
            itemCard.className = 'marketplace-item-card';
            itemCard.innerHTML = `
                <h3>${item.title}</h3>
                <p>${item.description}</p>
                <button class="button" data-id="${item.id}">View Details</button>
            `;
            marketplaceContainer.appendChild(itemCard);
        });

        // Add event listeners for buttons
        const buttons = marketplaceContainer.querySelectorAll('.button');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-id');
                viewItemDetails(itemId);
            });
        });
    }

    function viewItemDetails(itemId) {
        // Logic to view item details
        console.log('Viewing details for item:', itemId);
        // You can implement a modal or redirect to a details page
    }
});