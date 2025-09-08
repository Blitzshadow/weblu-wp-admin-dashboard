<?php
// Module: Stats
// This module displays interactive statistics for the dashboard using Chart.js.

function weblu_render_stats_module() {
    ?>
    <div class="weblu-module weblu-stats-module">
        <h2 class="weblu-module-title"><?php esc_html_e('Statistics', 'weblu-wp-admin-dashboard'); ?></h2>
        <canvas id="weblu-stats-chart" width="400" height="200"></canvas>
        <div class="weblu-module-footer">
            <button id="weblu-refresh-stats" class="button button-primary"><?php esc_html_e('Refresh Data', 'weblu-wp-admin-dashboard'); ?></button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('weblu-stats-chart').getContext('2d');
            const statsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [], // Labels will be populated dynamically
                    datasets: [{
                        label: '<?php esc_html_e('Visits', 'weblu-wp-admin-dashboard'); ?>',
                        data: [], // Data will be populated dynamically
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                });
            
            document.getElementById('weblu-refresh-stats').addEventListener('click', function() {
                // Fetch new data and update the chart
                fetch('<?php echo esc_url(rest_url('weblu/v1/stats')); ?>')
                    .then(response => response.json())
                    .then(data => {
                        statsChart.data.labels = data.labels;
                        statsChart.data.datasets[0].data = data.values;
                        statsChart.update();
                    });
            });
        });
    </script>
    <?php
}

// Hook to register the module in the dashboard
add_action('weblu_dashboard_render', 'weblu_render_stats_module');
?>