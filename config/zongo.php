<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Zongo Configuration
    |--------------------------------------------------------------------------
    | You can define your custom configuration values here.
    |
    */

    'api_key' => env('ZONGO_API_KEY', 'default-key'),

    'endpoint' => env('ZONGO_ENDPOINT', 'https://api.zongo.com'),

    'timeout' => 30123,

    'features' => [
        'logging' => true,
        'cache' => false,
    ],
];
