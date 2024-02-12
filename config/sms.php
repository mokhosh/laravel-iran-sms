<?php

return [
    'driver'            => env('SMS_DRIVER', 'log'),

    'drivers' => [

        'log' => [
            'from' => env('SMS_LOG_FROM', ''),
        ],

        'kavenegar' => [
            'from'   => env('SMS_KAVENEGAR_FROM', ''),
            'apiKey' => env('SMS_KAVENEGAR_KEY'),
        ],

    ],
];
