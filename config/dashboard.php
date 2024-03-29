<?php

return [
    /*
     * The dashboard supports these themes:
     *
     * - light: always use light mode
     * - dark: always use dark mode
     * - device: follow the OS preference for determining light or dark mode
     * - auto: use light mode when the sun is up, dark mode when the sun is down
     */
    'theme' => 'light',

    /*
     * When the dashboard uses the `auto` theme, these coordinates will be used
     * to determine whether the sun is up or down.
     */
    'auto_theme_location' => [
        'lat' => 51.260197,
        'lng' => 4.402771,
    ],

    /*
     * These scripts will be loaded when the dashboard is displayed.
     */
    'scripts' => [
        'alpinejs' => 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js',
    ],

    /*
     * These stylesheets will be loaded when the dashboard is displayed.
     */
    'stylesheets' => [
        'inter' => 'https://rsms.me/inter/inter.css'
    ],

    'tiles' => [
        // 'charts' => [
        //     'refresh_interval_in_seconds' => 300, // Default: 300 seconds (5 minutes)
        //     'scripts' => [
        //         'chart' => 'https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js',
        //         'chartisan' => 'https://unpkg.com/@chartisan/chartjs@2.1.*/dist/chartisan_chartjs.umd.js',
        //         'moment' => 'https://unpkg.com/moment@2.27.0/min/moment-with-locales.min.js',
        //     ],
        // ],

        'twitter' => [
                'configurations' => [
                    'default' => [
                        'consumer_key' => env('TWITTER_CONSUMER_KEY'),
                        'consumer_secret' => env('TWITTER_CONSUMER_SECRET'),
                        'access_token' => env('TWITTER_ACCESS_TOKEN'),
                        'access_token_secret' => env('TWITTER_ACCESS_TOKEN_SECRET'),
                        'listen_for' => [
                            // '@spatie_be', 'spatie_be'
                            // '@spatie_be', 'spatie_be', '@POTUS'
                            // '@spatie_be', '@POTUS', '@CCSJWave'
                            // 'POTUS', '@POTUS', '@CCSJWave'
                            'POTUS', '@POTUS'
                        ],
                    ],
                ],
                'refresh_interval_in_seconds' => 5,
            ],
          ],

          'time_weather' => [
              'open_weather_map_key' => env('OPEN_WEATHER_MAP_KEY'),
              'open_weather_map_city' => 'Chicago, IL',
              'units' => 'imperial', // 'metric' or 'imperial' (metric is default)
              'buienradar_latitude' => env('BUIENRADAR_LATITUDE'),
              'buienradar_longitude' => env('BUIENRADAR_LONGITUDE'),
          ],
];
