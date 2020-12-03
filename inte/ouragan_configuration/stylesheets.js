const _ = require('lodash'),
    sass = require('node-sass'),
    argv = require('minimist')(process.argv.slice(2));

var global = [
    {
        /* Compiled final .css file destination, relative to root directory. */
        output: 'public/assets/css/main.css',

        //You can also pass an array of filepaths instead of a single output path :

        // output: [
        //     'public/assets/css/main.css',
        //     'public/assets/css/main2.css'
        // ],

        /* Main source file, relative to root directory. */
        source: 'ouragan_sources/scss/global/main.scss',

        /* Every asset (image or font) called with the url() statement from an imported node_modules/*.css stylesheet will be automatically base64 encoded according to this weight limit (in KB). */
        auto_base64_node_modules_assets: {
            enable: true,
            weight_limit: 5
        },

        autoprefixer: {
            enable: true,
            options: {
                /* Enable, disable or override Autoprefixer's options: https://github.com/postcss/autoprefixer */
            }
        },

        sass_options: {
            /* Override Node Sass's options: https://github.com/sass/node-sass/ */
            /* Options "file", "outFile" and "outputStyle" cannot be overridden.  */
            functions: {
                'is_dev_mode()': function () {
                    if (argv.dev) {
                        return sass.types.Boolean.TRUE;
                    } else {
                        return sass.types.Boolean.FALSE;
                    }
                }
            }
        },

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false
        },

        /* Enable or disable sourcemap generation for normal mode or --dev mode. */
        sourcemap: {
            prod: false,
            dev: true
        },

        postCSS: {
            flexbugsFixes: true, // https://www.npmjs.com/package/postcss-flexbugs-fixes
            pxTorem: {

                /* Enable or disable automatic conversion from px to rem units for normal mode or --dev mode. */
                dev: false,
                prod: true,

                /* Override postcss-pxtorem options: https://github.com/cuth/postcss-pxtorem */
                options: {
                    rootValue: 16,
                    propList: ['*'],
                    replace: true,
                    mediaQuery: false
                }
            },
        }
    },
    {
        source: 'ouragan_sources/scss/global/print.scss',
        output: 'public/assets/css/print.css',

        /* Only overriding what's necessary. */
        pxtorem: {
            prod: false
        },

        sourcemap: {
            dev: false
        }
    }
];

var layouts = [];

var pages = [];

var blocks = [];

var components = [];

var stylesheets = _.concat(global, layouts, pages, blocks, components);
module.exports = stylesheets;
