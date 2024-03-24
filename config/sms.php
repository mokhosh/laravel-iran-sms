<?php

return [
    'driver' => env('SMS_DRIVER', 'null'),

    'drivers' => [

        'kavenegar' => [
            'from' => env('SMS_KAVENEGAR_FROM', ''),
            'api_key' => env('SMS_KAVENEGAR_KEY'),
        ],

        'smsir' => [
            'from' => env('SMS_SMSIR_FROM', ''),
            'api_key' => env('SMS_SMSIR_KEY'),
        ],

    ],
];
