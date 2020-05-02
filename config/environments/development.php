<?php
return [
    'debug' => true,
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'app_dev',
            'password' => 'app_dev_P455w0rd',
            'database' => 'app_dev',
            // 'encoding' => 'utf8mb4',
            // 'log' => false,
        ],
    ],
    'Error' => [
        // 'errorLevel' => E_ALL & ~E_USER_DEPRECATED,
        // 'log' => true,
        // 'trace' => true,
    ],
    'Asset' => [
        // 'timestamp' => true,
        // 'cacheTime' => '+1 year'
    ],
//    'Cache' => [
//        'default' => [
//            'className' => 'Cake\Cache\Engine\FileEngine',
//            'path' => CACHE,
//            'url' => env('CACHE_DEFAULT_URL', null),
//        ],
//
//        /**
//         * Configure the cache used for general framework caching.
//         * Translation cache files are stored with this configuration.
//         * Duration will be set to '+2 minutes' in bootstrap.php when debug = true
//         * If you set 'className' => 'Null' core cache will be disabled.
//         */
//        '_cake_core_' => [
//            'className' => 'Cake\Cache\Engine\FileEngine',
//            'prefix' => 'myapp_cake_core_',
//            'path' => CACHE . 'persistent/',
//            'serialize' => true,
//            'duration' => '+1 years',
//            'url' => env('CACHE_CAKECORE_URL', null),
//        ],
//
//        /**
//         * Configure the cache for model and datasource caches. This cache
//         * configuration is used to store schema descriptions, and table listings
//         * in connections.
//         * Duration will be set to '+2 minutes' in bootstrap.php when debug = true
//         */
//        '_cake_model_' => [
//            'className' => 'Cake\Cache\Engine\FileEngine',
//            'prefix' => 'myapp_cake_model_',
//            'path' => CACHE . 'models/',
//            'serialize' => true,
//            'duration' => '+1 years',
//            'url' => env('CACHE_CAKEMODEL_URL', null),
//        ],
//
//        /**
//         * Configure the cache for routes. The cached routes collection is built the
//         * first time the routes are processed via `config/routes.php`.
//         * Duration will be set to '+2 seconds' in bootstrap.php when debug = true
//         */
//        '_cake_routes_' => [
//            'className' => 'Cake\Cache\Engine\FileEngine',
//            'prefix' => 'myapp_cake_routes_',
//            'path' => CACHE,
//            'serialize' => true,
//            'duration' => '+1 years',
//            'url' => env('CACHE_CAKEROUTES_URL', null),
//        ],
//    ],
//    'Log' => [
//        'debug' => [
//            'className' => 'Cake\Log\Engine\FileLog',
//            'path' => LOGS,
//            'file' => 'debug',
//            'url' => env('LOG_DEBUG_URL', null),
//            'scopes' => false,
//            'levels' => ['notice', 'info', 'debug'],
//        ],
//        'error' => [
//            'className' => 'Cake\Log\Engine\FileLog',
//            'path' => LOGS,
//            'file' => 'error',
//            'url' => env('LOG_ERROR_URL', null),
//            'scopes' => false,
//            'levels' => ['warning', 'error', 'critical', 'alert', 'emergency'],
//        ],
//        // To enable this dedicated query log, you need set your datasource's log flag to true
//        'queries' => [
//            'className' => 'Cake\Log\Engine\FileLog',
//            'path' => LOGS,
//            'file' => 'queries',
//            'url' => env('LOG_QUERIES_URL', null),
//            'scopes' => ['queriesLog'],
//        ],
//    ],
];
