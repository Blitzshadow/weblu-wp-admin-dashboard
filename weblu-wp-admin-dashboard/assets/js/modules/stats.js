// stats.js - Module for displaying statistics using Chart.js

document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('statsChart').getContext('2d');

    // Sample data for the chart
    const data = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Visits',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: [65, 59, 80, 81, 56, 55, 40],
        }]
    };

    // Chart configuration
    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Create the chart
    const statsChart = new Chart(ctx, config);
});