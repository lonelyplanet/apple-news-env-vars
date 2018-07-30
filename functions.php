<?php

namespace LonelyPlanet\AppleNewsEnvVars;

function env($name, $default = false)
{
    return getenv($name) ?: (defined($name) ? constant($name) : $default);
}

function getCredentials()
{
    return [
        'api_key' => env('APPLE_NEWS_API_KEY'),
        'api_secret' => env('APPLE_NEWS_API_SECRET'),
        'api_channel' => env('APPLE_NEWS_API_CHANNEL'),
    ];
}

function mergeCredentials(array $data)
{
    return array_merge($data, getCredentials());
}
