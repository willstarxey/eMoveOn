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
        'client_id' => '419213542185155',
        'client_secret' => 'ac8575a377b812b9176c5490f274ecdf',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
        ],

    'twitter'=> [
        'client_id' => 'a8MTet2HwT8TLL7xJ4XGHWjue',
        'client_secret' => 'inQsAFjEtXP8lifkXmfRsdyaRVADwjcsteqE4oevWMqUKUTa3O',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
        ],

    'google'=> [
        'client_id' => '576480384852-snr219j8e5s4qqrf7p5pdbuobdinhfpn.apps.googleusercontent.com',
        'client_secret' => 'jbnizpfXek7XQcjcxShk-B1G',
        'redirect' => 'http://localhost:8000/login/google/callback',
        ],

    'google' => [
        'maps' => [
            'api-key' => env('GOOGLE_MAPS_API_KEY'),
        ],
    ],

];
