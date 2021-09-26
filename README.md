# User Interface for Laravel

> :construction: Under development - Don't use it in production!

## Install

This package conveys only default configuration and doesn't install any frontend related dependencies.
To help you keep up and running, this package provides instructions to install and configure your frontend dependencies.

1. Install TailwindCss, its plugins, postcss and autoprefixer.

```bash
$ npm i -D  \
    tailwindcss@latest \
    @tailwindcss/aspect-ratio \
    @tailwindcss/forms \
    @tailwindcss/typography \
    postcss-import@latest \
    postcss@latest \
    autoprefixer@latest
```

1. Configure your `webpack.mix.js` file

```js
mix
    
    // add @ui alias to be used on js files
    .webpackConfig({
        resolve: {
            alias: {
                '@ui': path.resolve(__dirname, 'vendor/lemaur/ui/resources/assets/js')
            }
        },
    })

    // configure postCss
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import')({
            path: ["vendor/lemaur/ui/resources/assets/css"],
        }),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
```

1. Configure your `tailwind.config.js` file.

```js
const tailwindPreset = require('./vendor/lemaur/ui/resources/assets/js/tailwindcss/tailwind.preset')

module.exports = {
    presets: [
        tailwindPreset,
    ],
    theme: {
        extend: {},
    }
}
```

1. Configure your `/resources/css/app.css` file.

```css
/**
 * Tailwindcss
 */
@import "tailwindcss/base";
@import "tailwindcss/components";
@import "tailwindcss/utilities";

/**
 * Defaults from UI library
 */
@import "default";
@import "focus";

/**
 * Your custom CSS files
 */
@import "homepage"; /* <- example */
@import "forms"; /* <- example */
```

1. Configure your `resoruces/js/app/js` file.

```js
/**
 * Import Alpine and its plugins 
 */
import Alpine from "alpinejs"
import intersect from "@alpinejs/intersect"
import persist from "@alpinejs/persist"
import trap from "@alpinejs/trap"

/**
 * Import ALpine custom plugins, components, etc from UI library
 */
import navigation from "@ui/alpinejs/navigation.js"

/**
 * Define Alpine Plugins
 */
Alpine.plugin(intersect)
Alpine.plugin(persist)
Alpine.plugin(trap)

/**
 * Define Alpine Components
 */
Alpine.data('navigation', navigation)

/**
 * Make Alpine available as global object
 */
// window.Alpine = Alpine

Alpine.start()
```
