# Webpack Lab
For experimenting with, and thereby better understanding, Webpack 5

## Scaffolding
```shell
git init .
npm init -y
npm i -D webpack webpack-cli
```

### Source Directory
Create a directory, which we will call `src/`, for all the source files.
All assets will be located within (or under) this directory.
```shell
mkdir src
```

### Entry Point
Create a JS file in the `src/` directory, which we will call `index.js`, to act as the Webpack entry point.
This file will specify the source files, allowing Webpack to generate its dependencies graph. 
At this point, it contains only a single line, just for proof of concept.
 
### Config file:

```js
const path = require('path');

module.exports = {
    mode: 'development',
    entry: './src/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
};
```

### NPM scripts for Webpack
Add scripts to package.json to execute webpack.  For example:
* `webpack`: Build the asset bundle
* `webpack --watch` : Rebuild asset bundle automatically whenever asset sources are modified 

```json
{
    "scripts": {
        "build": "webpack",
        "watch": "webpack --watch"
    }
}
```


## Development Server
ref: https://webpack.js.org/guides/development/  
This is a rudimentary web server for development.  By default, it listens on localhost port 8080.

It also injects code into the bundle.js file to open a websocket back to itself to permit hot-module replacement. 

Install the NPM package:
```shell
npm i -D webpack-dev-server
```

Configure the server in webpack config file:
```js
module.exports = {
    devServer: {
        static: './dist',
    },
};
```
* `static`: directory to serve files from (ie, "DocumentRoot")
 

Add scripts to package.json to execute webpack.  For example:
* `webpack serve`: Launch the server 
* `webpack serve --open` : Launch the server and open a browser tab to the index page


## References
Webpack 5 Fundamentals, by How To Code.  https://www.youtube.com/playlist?list=PLB67cosR0_lPUXIK35J8M7EQUbUJQMA0Q

