<?php

return [
    'path' => 'W:\WWW\module/app/Modules',
    'base_namespace' => 'App\Modules',
    'groupWithoutPrefix' => 'Pub',
    'groupMiddleware' => [
        'Pub' => [
            'web' => [
            ],
            'api' => [
                'auth:api',
            ],
        ],
        'ASD' => [
            'web' => [
                'auth',
            ],
            'api' => [
                'auth:api',
            ],
        ],
        'Houser' => [
            'web' => [
            ],
            'api' => [
                'auth:api',
            ],
        ],
    ],
    'modules' => [
        'Pub' => [
            'Flower',
        ],
        'ASD' => [
            'Flower',
        ],
        'Houser' => [
            'Flower',
        ],
    ],
];
