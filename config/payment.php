<?php

return [
    'default' => env('PAYMENT_GATEWAY', 'razorpay'), // razorpay | stripe

    'gateways' => [
        'razorpay' => [
            'key'    => env('RAZORPAY_KEY'),
            'secret' => env('RAZORPAY_SECRET'),
        ],
        'stripe' => [
            'key'    => env('STRIPE_KEY'),
            'secret' => env('STRIPE_SECRET'),
        ],
    ],
];
