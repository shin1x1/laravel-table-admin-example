<?php

return [
    'default' => 'mysql',

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => $_SERVER['DB1_HOST'],
            'database' => $_SERVER['DB1_NAME'],
            'username' => $_SERVER['DB1_USER'],
            'password' => $_SERVER['DB1_PASS'],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ],
    ],
];
