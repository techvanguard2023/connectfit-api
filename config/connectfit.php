<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mobile App Versions
    |--------------------------------------------------------------------------
    |
    | Exposed by GET /api/v1/app-config. Installed apps older than the
    | minimum supported version must block usage and ask for an update;
    | apps older than the latest version may suggest one.
    |
    */

    'app' => [
        'min_supported_version' => env('APP_MIN_SUPPORTED_VERSION', '1.0.0'),
        'latest_version' => env('APP_LATEST_VERSION', '1.0.0'),
    ],

];
