const _ = require('lodash');

var global = [
    {
        /* Compiled final .js file destination, relative to root directory. */
        output: 'public/assets/js/main.js',

        //You can also pass an array of filepaths instead of a single output path :

        // output: [
        //     'public/assets/js/main.js',
        //     'public/assets/js/main2.js'
        // ],

        sources: {
            /* Source files, paths must be relative to root directory (where package.json and ouragan-configuration.js are located). */
            /* Most likely node_modules or includes stuffs */
            /* Order of inclusion will be respected */
            scripts: [
                'node_modules/jquery/dist/jquery.min.js',
                'node_modules/slick-carousel/slick/slick.min.js',
                'node_modules/waypoints/lib/jquery.waypoints.min.js',
                'node_modules/counterup2/dist/index.js',
                'node_modules/select2/dist/js/select2.min.js',
                'ouragan_sources/js/global/**/*.js'
            ],

            /* Include Modernizr tests builds at the beginning of the script if feature-detects is filled. */
            /* Features: https://modernizr.com/download */
            modernizr: {
                /* https://modernizr.com/download?video-videoloop */
                'feature-detects': [
                    // "test/video",
                    // "test/video/loop"
                ],
                /* Add classes in <html> tag ? */
                'add-classes-in-html-tag': false
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

        /* Include a "ouragan_random" variable in the script. Its value changes everytime you yarn run ouragan. */
        include_random_variable: false
    }
];

var layouts = [];

var pages = [];

var blocks = [];

var components = [];

var scripts = _.concat(global, layouts, pages, blocks, components);
module.exports = scripts;
