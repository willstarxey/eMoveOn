<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook'=> [
        'client_id' => env('FACEBOOK_APP_KEY'),
        'client_secret' => env('FACEBOOK_SECRET_KEY'),
        'redirect' => 'http://localhost:8000/login/facebook/callback',
        ],

    'twitter'=> [
        'client_id' => env('TWITTER_APP_KEY'),
        'client_secret' => env('TWITTER_SECRET_KEY'),
        'redirect' => 'http://localhost:8000/login/twitter/callback',
        ],

    'google'=> [
        'client_id' => env('GOOGLE_APP_KEY'),
        'client_secret' => env('GOOGLE_SECRET_KEY'),
        'redirect' => 'http://localhost:8000/login/google/callback',
        'maps' => [
            'api-key' => env('GOOGLE_MAPS_API_KEY'),
        ],
        ],

];
