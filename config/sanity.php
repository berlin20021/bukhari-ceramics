<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Sanity Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for Sanity.io integration
    |
    */

    'project_id' => env('SANITY_PROJECT_ID'),
    'dataset' => env('SANITY_DATASET', 'production'),
    'token' => env('SANITY_TOKEN'),
    'api_version' => env('SANITY_API_VERSION', '2023-01-01'),
];
