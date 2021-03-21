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
    //    // Debug Kit Databse Setting
    //    'debug_kit' => [
    //        'className' => 'Cake\Database\Connection',
    //        'driver' => 'Cake\Database\Driver\Sqlite',
    //        'database' => TMP . 'debug_kit.sqlite',
    //        'encoding' => 'utf8',
    //        'cacheMetadata' => true,
    //        'quoteIdentifiers' => false,
    //    ],
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
   // 'Cache' => [
   //     'default' => [
   //         'className' => 'Cake\Cache\Engine\FileEngine',
   //         'path' => CACHE,
   //         'url' => env('CACHE_DEFAULT_URL', null),
   //     ],
   //     '_cake_core_' => [
   //         'className' => 'Cake\Cache\Engine\FileEngine',
   //         'prefix' => 'myapp_cake_core_',
   //         'path' => CACHE . 'persistent/',
   //         'serialize' => true,
   //         'duration' => '+1 years',
   //         'url' => env('CACHE_CAKECORE_URL', null),
   //     ],
   //     '_cake_model_' => [
   //         'className' => 'Cake\Cache\Engine\FileEngine',
   //         'prefix' => 'myapp_cake_model_',
   //         'path' => CACHE . 'models/',
   //         'serialize' => true,
   //         'duration' => '+1 years',
   //         'url' => env('CACHE_CAKEMODEL_URL', null),
   //     ],
   //     '_cake_routes_' => [
   //         'className' => 'Cake\Cache\Engine\FileEngine',
   //         'prefix' => 'myapp_cake_routes_',
   //         'path' => CACHE,
   //         'serialize' => true,
   //         'duration' => '+1 years',
   //         'url' => env('CACHE_CAKEROUTES_URL', null),
   //     ],
   // ],
   // 'Log' => [
   //     'debug' => [
   //         'className' => 'Cake\Log\Engine\FileLog',
   //         'path' => LOGS,
   //         'file' => 'debug',
   //         'url' => env('LOG_DEBUG_URL', null),
   //         'scopes' => false,
   //         'levels' => ['notice', 'info', 'debug'],
   //     ],
   //     'error' => [
   //         'className' => 'Cake\Log\Engine\FileLog',
   //         'path' => LOGS,
   //         'file' => 'error',
   //         'url' => env('LOG_ERROR_URL', null),
   //         'scopes' => false,
   //         'levels' => ['warning', 'error', 'critical', 'alert', 'emergency'],
   //     ],
   //     'queries' => [
   //         'className' => 'Cake\Log\Engine\FileLog',
   //         'path' => LOGS,
   //         'file' => 'queries',
   //         'url' => env('LOG_QUERIES_URL', null),
   //         'scopes' => ['queriesLog'],
   //     ],
   // ],
   // 'Session' => [
   //     'defaults' => 'php',
   //     'ini' => [
   //         'session.save_path' => CACHE . 'sessions/',
   //     ],
   // ],
   // 'DebugKit' => [
   //     'forceEnable' => true
   // ],
];
