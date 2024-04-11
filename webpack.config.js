const path = require('path');

module.exports = {
    mode: 'development',
    entry: {
        index: './src/js/index.js',
        jquery: './src/js/jquery.js'
    },
    // devServer: {
    //     static: './dist',
    // },
    output: {
        filename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
};
