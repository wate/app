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
            'username' => 'app_test',
            'password' => 'app_test_P455w0rd',
            'database' => 'app_test',
            //'encoding' => 'utf8mb4',
        ],
    ],
    'Error' => [
        'errorLevel' => E_ALL & ~E_USER_DEPRECATED,
    ]
];
