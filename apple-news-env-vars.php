<?php
/*
Plugin Name: Apple News Env Vars
Plugin Group: Licenses
Plugin URI: https://github.com/lonelyplanet/apple-news-env-vars
Author: Eric King
Author URI: http://webdeveric.com/
Description: Get Apple News API credentials from envioronment variables.
Version: 1.0.0
*/

namespace LonelyPlanet\AppleNewsEnvVars;

include __DIR__ . '/functions.php';

\add_filter('default_option_apple_news_settings', __NAMESPACE__ . '\getCredentials', 10, 0);
\add_filter('option_apple_news_settings', __NAMESPACE__ . '\mergeCredentials', 10, 1);
