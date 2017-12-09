<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Executable
    |--------------------------------------------------------------------------
    |
    | Specify how you run or access the `apidoc` tool on your machine.
    |
    */

    'executable' => 'apidoc',

    /*
    |--------------------------------------------------------------------------
    | API Types
    |--------------------------------------------------------------------------
    |
    | The `types` helps generating multiple documentations, by grouping them
    | under types names. You can add or remove any type. By default
    | `public` and `private` types are set.
    |
    | url: The url to access that generated API documentation.
    |
    | routes: The route file to read when generating this documentation.
    |         Every route file will have the following name format:
    |         `{endpoint-name}.v{version-number}.{documentation-type}.php`.
    |
    */

    'types' => [

        'public' => [
            'url' => 'public/docs/api',
            'routes' => [
                'public',
            ],
        ],

        'private' => [                    // todo: Restrict access for viewing internal API docs.
            'url' => 'docs/api',          // You can add new dns record to this endpoint if you'r on deploying for production.
            'routes' => [                 // And than you can add robot.txt or .htaccess or anything to restrict access for viewing internal API docs.
                'private',                // But for now i think exclude it from public path is one of better ways for production.
                'public',                 // .
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | HTML files
    |--------------------------------------------------------------------------
    |
    | Specify where to put the generated HTML files.
    |
    */

    'html_files' => ''
];
