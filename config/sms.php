<?php

return [
    'driver' => env('SMS_DRIVER', 'log'),

    'drivers' => [

        'kavenegar' => [
            'from' => env('SMS_KAVENEGAR_FROM', ''),
            'apiKey' => env('SMS_KAVENEGAR_KEY'),
        ],

    ],
];
