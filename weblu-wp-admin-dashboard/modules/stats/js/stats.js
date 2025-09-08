document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('statsChart').getContext('2d');
    const statsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [], // To be filled with dynamic data
            datasets: [{
                label: 'Visits',
                data: [], // To be filled with dynamic data
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Function to fetch stats data
    function fetchStatsData() {
        fetch('/wp-json/weblu/v1/stats')
            .then(response => response.json())
            .then(data => {
                statsChart.data.labels = data.labels;
                statsChart.data.datasets[0].data = data.visits;
                statsChart.update();
            })
            .catch(error => console.error('Error fetching stats data:', error));
    }

    // Initial data fetch
    fetchStatsData();
});