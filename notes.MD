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

### Webpack script
Add script to package.json to execute webpack.


## References
Webpack 5 Fundamentals, by How To Code.  https://www.youtube.com/playlist?list=PLB67cosR0_lPUXIK35J8M7EQUbUJQMA0Q

