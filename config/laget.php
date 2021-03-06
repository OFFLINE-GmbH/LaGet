<?php

return [
    /*
     * Application
     */
    'name' => env('APP_NAME', 'LaGet repository'),
    'shortname' => env('APP_SHORT_NAME', 'LaGet'),
    'description' => env('APP_DESCRIPTION', 'This is a NuGet repository server.'),
    # Storing links in a JSON string so they can be customized through the env file
    'links' => json_decode(env('APP_LINKS', '[{"href": "http://web.site", "title": "link 1"},{"href": "http://web.site", "title": "link 2"},{"href": "http://web.site", "title": "link 3"}]'), true),
    'display_links' => env('APP_DISPLAY_LINKS', false),
    /*
     * Packages
     */
    'hash_algorithm' => env('packages_hash_algorithm', 'SHA512'),
];
