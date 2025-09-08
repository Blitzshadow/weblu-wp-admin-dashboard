const path = require('path');

module.exports = {
    entry: {
        admin: './assets/js/admin-dashboard.js',
    },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'assets/js/dist'),
        publicPath: '/wp-content/plugins/weblu-wp-admin-dashboard/assets/js/dist/',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                    },
                },
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
        ],
    },
    resolve: {
        extensions: ['.js', '.css'],
    },
    devtool: 'source-map',
    mode: 'development',
};