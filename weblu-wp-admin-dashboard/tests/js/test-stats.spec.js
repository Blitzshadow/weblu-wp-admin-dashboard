// This file contains tests for the stats module of the Weblu WP Admin Dashboard plugin.
// It uses a testing framework like Jest or Mocha for JavaScript testing.

describe('Stats Module', () => {
    let statsModule;

    beforeEach(() => {
        // Load the stats module before each test
        statsModule = require('../../assets/js/modules/stats.js');
    });

    test('should initialize correctly', () => {
        expect(statsModule).toBeDefined();
    });

    test('should fetch data for charts', async () => {
        const data = await statsModule.fetchChartData();
        expect(data).toHaveProperty('visits');
        expect(data).toHaveProperty('sales');
        expect(data.visits).toBeInstanceOf(Array);
        expect(data.sales).toBeInstanceOf(Array);
    });

    test('should render charts correctly', () => {
        const chartContainer = document.createElement('div');
        chartContainer.id = 'chart-container';
        document.body.appendChild(chartContainer);

        statsModule.renderCharts(chartContainer);

        const charts = chartContainer.querySelectorAll('canvas');
        expect(charts.length).toBeGreaterThan(0);
    });

    afterEach(() => {
        // Clean up after each test
        document.body.innerHTML = '';
    });
});