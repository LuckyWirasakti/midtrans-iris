<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Iris Midtrans Payout
    |--------------------------------------------------------------------------
    |
    | This option controls the default payout connection that gets used while
    | using this iris library. This connection is used when another is
    | not explicitly specified when executing a given iris function.
    |
    */

    'url' => env('IRIS_BASE_URL', 'https://app.sandbox.midtrans.com/iris/api/v1/'),
    'auth' => [
        'creator' => [
            'username' => env('IRIS_CREATOR_USERNAME', ''),
            'password' => env('IRIS_CREATOR_PASSWORD', ''),
        ],
        'approver' => [
            'username' => env('IRIS_APPROVER_USERNAME', ''),
            'password' => env('IRIS_APPROVER_PASSWORD', ''),
        ]
    ]
];
