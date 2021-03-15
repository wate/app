<?php
return [
    'App' => [
        'namespace' => 'App',
        'defaultLocale' => env('APP_DEFAULT_LOCALE', 'ja_JP'),
        'defaultTimezone' => env('APP_DEFAULT_TIMEZONE', 'Asia/Tokyo'),
    ],
    'Datasources' => [
        'test' => [
            'driver' => 'Cake\Database\Driver\Mysql',
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
        'errorLevel' => E_ALL & ~E_USER_DEPRECATED,
        // 'log' => true,
        // 'trace' => true,
    ],
    'Asset' => [
        // 'timestamp' => true,
        // 'cacheTime' => '+1 year'
    ],
];
