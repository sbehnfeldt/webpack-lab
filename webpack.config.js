const path = require('path');

module.exports = {
    mode: 'development',
    entry: {
        index: './src/js/index.js',
        jquery: './src/js/jquery.js',
        datatables: './src/js/dataTables.js'
    },
    devServer: {
        static: './dist/public',
    },
    devtool: 'inline-source-map',
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
};
