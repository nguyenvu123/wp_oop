const _ = require('lodash');

var documents = [
    {
        source: 'ouragan_sources/twig/pages/home.twig',
        output: 'public/home.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/services.twig',
        output: 'public/services.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/media-event.twig',
        output: 'public/media-event.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/media-event-open.twig',
        output: 'public/media-event-open.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/about.twig',
        output: 'public/about.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/contact.twig',
        output: 'public/contact.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/career.twig',
        output: 'public/career.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/cms.twig',
        output: 'public/cms.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/partners.twig',
        output: 'public/partners.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/global-locations.twig',
        output: 'public/global-locations.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/products.twig',
        output: 'public/products.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    },
    {
        source: 'ouragan_sources/twig/pages/value.twig',
        output: 'public/value.html',

        /* Enable or disable automatic minification for normal mode or --dev mode. */
        minify: {
            prod: true,
            dev: false,
            options: {
                /* Override html-minifier options: https://www.npmjs.com/package/html-minifier */
            }
        },

        /* Enable or disable automatic prettyfication for normal mode or --dev mode. */
        /* Note: If both minify and prettify are enabled, the output file will be minified. */
        prettify: {
            prod: false,
            dev: true,
            options: {
                /* Override pretty options: https://www.npmjs.com/package/pretty */
            }
        },

        twig: {
            namespaces: {},

            variables: {
                // 'name': 'value'

                /* You cannot use the following variable(s) names :
                   settings
                */
            }
        },

        html_validation: {
            enable: true,
            options: {
                /* Override html-validation options: https://www.npmjs.com/package/html-validator */
                /* Options "format", "url" and "data" cannot be overridden. */
            }
        }
    }
];

module.exports = documents;
